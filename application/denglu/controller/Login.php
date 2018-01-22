<?php
namespace app\denglu\controller;

use think\Controller;

class Login extends Controller
{
	public function login()
	{
		// print_r(cookie());
  //       print_r($_COOKIE);
		// if($_COOKIE['username']!='')
  //       {
  //           session('username',$_COOKIE['username']);
  //       }
       if (cookie('username') != '') {
            session('username', cookie('username'));
        }

		if(session('username')=='')
		{
			return $this->fetch('login/login');
		}else{
			return $this->redirect('index/welcome');
		}
		//return $this->fetch();
	}
	public function do_login()
	{
		$data=input('post.ischacks');
		$username=input('post.username');
		$password=md5(md5(input('post.password')).'Login');
		// $a=md5(md5('111').'Login');
		// echo $a;exit;
		$info=db('users')->where('idcate="'.$username.'"')->find();
		if($info)
		{
			if($info['password']==$password)
			{
				//登录成功
				//return $this->success('login succ');
				session('username',$username);//保存session
				if(isset($data))//判断ischecks是否选中
				{
					cookie('username',$username,864000);//设置cookie
				}
				$dates=[
				'msg'=>'登录成功',
				'status'=>1
			];
			return json($dates);
			}else{
				//密码错误
				//return $this->error('password error');
				$dates=[
				'msg'=>'密码错误',
				'status'=>2
			];
			return json($dates);
			}
			
		}else{
			//用户名错误
			//return $this->error('username error');
			$dates=[
				'msg'=>'用户名错误',
				'status'=>3
			];
			return json($dates);
		}
	}
}