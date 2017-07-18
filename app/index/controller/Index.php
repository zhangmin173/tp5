<?php
namespace app\index\controller;
/**
* 
*/
class Index extends Base
{
	
	public function index()
	{
		throw new \think\exception\HttpException(404, '异常消息', null, []);
		$this->data['msg'] = 'hello';
		//dump($this->data);
		
		return $this->fetch('',$this->data);
	}

	public function test()
	{
		$this->success('哈哈',$this->_global['url']['jump_url']);
	}
}