<?php
namespace App\Http\Controllers;
use App\Models\DashboardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller{
    public function __construct()
    {

    }
    public function index(){
         $user_id = session('user_id');
        if($user_id == ''){
            return redirect()->route('/');
        }
        $questions = DashboardModel::getQuestions();
        return view('dashboard',['questions'=>$questions]);
    }
    function getNextQuestion(Request $request){
        $questions = json_decode($request->questions);
          $next_index = $request->next_index;
        if($request->requestType != 'first')
            $this->saveAnswer($request);

           if(count($questions)  == $next_index)
           {
               $result=$this->showResult();
                return view('result',['result'=>$result]);

           }
           else{
               $question_id =  $questions[$next_index]->question_id;
               $question_name = $questions[$next_index]->question;
               $question_options = DashboardModel::getQuestionsOptions($question_id);
               $next_index = $next_index+1;
               return view('question',['question_name'=>$question_name,'question_options'=>$question_options,
                   'next_index'=>$next_index]);
           }

    }
    function saveAnswer(Request  $request){
            $user_id = session('user_id');
            $question_id = $request->question_id;
            $option_id = $request->answer;
            $requestType = $request->requestType;
            $is_skip = 0;
            if($requestType == 'skip')
                $is_skip = 1;
        $is_correct = 0;
        if($request->requestType == 'next'){
            $checkAnswer=DashboardModel::checkAnswer($question_id,$option_id);
            if(!empty($checkAnswer)){
                $is_correct = 1;
            }
        }

        $insertDataArray = [
            'question_id'=>$question_id,
            'option_id' => $option_id,
            'user_id'=> $user_id,
            'is_skiped' => $is_skip,
            'is_correct' => $is_correct,
        ];
        DashboardModel::saveAnswer($insertDataArray);

    }

    public function showResult(){
         $user_id = session('user_id');
         $where = " WHERE user_id = ".$user_id." AND is_correct =1";
         $correctAns = DashboardModel::countResult($where);
        $where = " WHERE user_id = ".$user_id." AND is_correct =0 AND is_skiped = 0";
        $inCorrectAns = DashboardModel::countResult($where);
        $where = " WHERE user_id = ".$user_id." AND  is_skiped = 1";
        $skipped = DashboardModel::countResult($where);
        $result = [
            'correct'=>$correctAns[0]->result,
            'inCorrect'=>$inCorrectAns[0]->result,
            'skiped' =>$skipped[0]->result,
            ];
        return $result;


    }
    public function  logout(Request $request){
        $request->session()->forget('user_id');
        return redirect()->route('/');
    }
}
?>
