<?php
namespace app\yanzheng\controller;

use think\Controller;
/**
* 
1、用户名不可有非法字符；
2、手机号
3、邮箱
4、验证真实姓名
5、整数
6、仅中文
7、身份证
8、ip地址
9、正常url
*/
class Zhengze extends Controller
{
	
	public function ceshiz()
	{
		//手机号
		// $str="13345678901";
		// $szz="/^1[3-8]{1}\d{9}$/";
		// echo preg_match($szz,$str);
		//邮箱
		$str="849081767@qq.com";
		$szz="/^1[3-8]{1}\d{9}$/";
		echo preg_match($szz,$str);


	}
}