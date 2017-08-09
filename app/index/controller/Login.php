<?php
namespace app\index\controller;
/**
* 
*/
class Login extends Base
{
	protected $db_user;

	protected function base()
	{
		$this->db_user = model('user');
	}

	public function index()
	{
		//dump($this->data);exit;
		return $this->fetch($this->_tpl.'login/index',$this->data);
	}

	public function register()
	{
		if (input('mobile') == '1234') {
			return $this->success('登录成功',null,$this->data);
		}
		return $this->error('失败',null,$this->data);	
	}
}