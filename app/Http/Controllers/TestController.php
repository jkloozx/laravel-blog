<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\http\model\User;

class TestController extends Controller
{
    public function index() {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:Origin,X-Requested-With,Content-Type,Accept');
        if (isset($_GET['username']) && isset($_GET['password'])){
            $name = User::where(['user_name' => $_GET['username'],'user_pass' => sha1($_GET['password'])])->get();
            echo $name;
        }else{
            $info = array('info' => 'error');
            echo json_encode($info);
        }
    }
}
