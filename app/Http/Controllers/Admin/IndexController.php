<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\http\model\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once 'resources/org/code/code.class.php';

class indexController extends CommonController{
    public function index() {
        return view('Admin.index');
    }
    public function login() {
        if ($input = Input::all()){
            $code = new \Code();
            if (strtoupper($input['code']) != $code -> get()){
                return back() -> with('msg','验证码错误');
            }
            $user = User::first();
            if ($user->user_name == $input['username'] && Crypt::decrypt($user->user_pass) == $input['password']){
                session(['user' => $user]);
                return redirect('admin/index');
            }else{
                return back() -> with('msg','用户名或密码错误');
            }

        }else{
            return view('Admin.login');
        }
    }
    public function crypt() {
        $user = User::first();
        echo Crypt::decrypt($user->user_pass);


    }
    public function check() {

    }
    public function changePass() {
        return view('admin.pass');
    }
    public function info() {
        return view('admin.info');
    }
    public function add() {
        return view('admin.add');
    }
    public function img() {
        return view('admin.img');
    }
    public function list() {
        return view('admin.list');
    }
    public function tab() {
        return view('admin.list');
    }
    public function pass() {
        return view('admin.list');
    }
    public function element() {
        return view('admin.list');
    }
    public function code() {
        $code = new \Code();
        $code -> make();
    }
    public function getCode() {
        $code = new \Code();
        echo $code -> get();
    }

    public function __construct() {
        $this -> middleware('auth',['except' => ['login']]);
    }
}
