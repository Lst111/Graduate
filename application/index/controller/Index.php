<?php
namespace app\index\controller;
use think\Db;//使用 use 导入类Db，这个Db类是TP官方封装好的类
use think\Controller;

class Index extends Controller//一个典型的控制器类
{
    public function index()
    {
        header('Access-Control-Allow-Origin:*');

        /*  $data1 = ['username'=>'cc','password'=>'1234','type'=>'xuesheng','createtime'=>'2018-04-30 09:46:58','status'=>'0'];
          Db::table('users')->insert($data1);*/
//      $name = Db::table('users')->where('id',1)->find();
//       dump($name);die;//打印出来
//        return $this -> fetch();
     return"chengg";

    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'helloaaa,' . $name;
    }
}
