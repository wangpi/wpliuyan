<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class HelloController extends Controller
{
    public function index(){
    	//查询所有的留言信息
    	$arr = DB::table('message')->paginate(3);
    	return view('index',['arr'=>$arr]);
    }
    //添加留言
    public function add(){
    	$content=$_REQUEST['content'];
    	$time=date('Y-m-d H:i:s');
    	$arr=DB::insert("insert into message(content,addtime) values('$content','$time')");
    	if($arr){
    		echo "<script>alert('添加成功');location.href='index'</script>";
    	}else{
    		echo "<script>alert('添加失败');location.href='index'</script>";
    	}
    }
    //删除留言
    public function del(){
    	$id=$_GET['id'];
    	$arr=DB::delete("delete from message where id='$id'");
    	if($arr){
    		echo "<script>alert('删除成功');location.href='index'</script>";
    	}else{
    		echo "<script>alert('删除失败');location.href='index'</script>";
    	}
    }
    //修改留言
    public function update(){
    	$id=$_GET['id'];	
        $arr=DB::table('message')->where(['id'=>$id])->get();
        return view('update',['arr'=>$arr]);                  
    }
    public function updata(){
    	$content=$_POST['content'];
    	$id=$_POST['id'];
    	$time=date('Y-m-d H:i:s');
    	$arr=DB::table('message')->where('id', $id)->update(['content' => $content,'addtime'=>$time]);
    	if($arr){
    		echo "<script>alert('修改成功');location.href='index'</script>";
    	}else{
    		echo "<script>alert('修改失败');location.href='index'</script>";
    	}
    }
}
