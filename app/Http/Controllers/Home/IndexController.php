<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;
use App\Http\Model\Article;
use App\Http\Controllers\Auth\AuthController;


class IndexController extends Controller{
    public function index(){
//        echo 'hello world 路由名称为' . route('IndexController');
//        $opt = array(
//            'parent' => 'app',
//            'child'=>'debug',
//        );
//        $param = 'app.log';
////        echo '<br>'.$opt['parent'].'.'.$opt['child'] . '=' . config($opt['parent'] . $opt['child']);
//        echo '<br>' . $param .'='. config($param);
//        DB::connection()->getPdo();
////        $links = DB::table('blog_links')-> where('link_order','>=',1)->get();
//        $article = Article::where('art_id',3)->get();
//        $art = Article::find(2);
//        $art->art_editor = 'jkloozx';
//        $art->update();
//        session(['name' => 'jkloozx']);
////        return view('welcome',['name' => "<script>alert('Hello World')</script>"]);
//        return view('welcome',['name' => "<i>Hello World</i>"]);
//        dd($article,$art);
        return view('Home.index');
    }

    public function login() {
        echo 'Hello World';
    }
}
