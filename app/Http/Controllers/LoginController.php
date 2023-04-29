<?php
namespace App\Http\Controllers;
use App\Models\LoginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request){
         $username = $request->username;
        $user=LoginModel::getUser($username);
        if(!empty($user)){
            session(['user_id'=>$user->user_id]);
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('/');
        }
    }
}
?>
