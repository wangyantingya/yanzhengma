<?php
namespace app\denglu\controller;

use think\Controller;

use app\denglu\controller\Common;

class Index extends Common
{
	public function index()
	{
		return $this->fetch();
	}
	public function welcome()
	{
		$this->assign('sessions',session('username'));
		return $this->fetch();
	}
}