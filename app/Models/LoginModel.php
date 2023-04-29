<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class LoginModel extends Model {
    public static function getUser($username){
        return $query = DB::table('users')
            ->select('username','user_id')
            ->where('username',$username)
            ->first();
    }
}
?>
