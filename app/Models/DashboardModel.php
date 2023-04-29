<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class DashboardModel extends Model {
    public static function getQuestions(){
        return $query = DB::table('questions')
            ->select('*')
            ->orderby('question_id')
            ->get();
    }

    public  static  function  getQuestionsOptions($question_id){
        return $query = DB::table('question_options')
            ->select('*')
            ->where('question_id',$question_id)
            ->orderby('question_option_id')
            ->get();
    }

    public static function checkAnswer($question_id,$option_id){
        return $query = DB::table('question_options')
            ->select('question_option_id')
            ->where('is_correct',1)
            ->where('question_id',$question_id)
            ->where('question_option_id',$option_id)
            ->first();
    }

    public static function saveAnswer($data){
        DB::table('users_questions_options')->insert($data);
    }

    public  static function countResult($where){
        $query = "SELECT COUNT(user_questions_option_id) as result FROM  users_questions_options $where";
        return DB::select($query);
    }
}
?>
