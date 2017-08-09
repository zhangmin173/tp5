<?php
namespace app\index\controller;
/**
* 
*/
class Home extends Base
{
	// 权限控制
	protected function base()
	{
		//dump($this->data);exit;
		if (!$this->_global['user_info']) {
			return $this->redirect('login/index');
		}

		$this->before();
	}

	// 前置操作
	protected function before()
	{
		
	}

}