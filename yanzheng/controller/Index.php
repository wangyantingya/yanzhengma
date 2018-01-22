<?php
namespace app\yanzheng\controller;

use think\Controller;

/**
* 
*/
class Index extends Controller
{
	
	public function index()
	{
		return $this->fetch();
	}
	public function do_code()
	{
		$code=input('post.yanzheng');
		if(captcha_check($code))
		{
			$result=[
					'msg'=>'验证码正确',
					'status'=>1,
				];
				return json($result);
		}else{
            $result=[
					'msg'=>'验证码错误',
					'status'=>0,
				];
        }
		return json($result);
		//return $this->fetch();
	}
}