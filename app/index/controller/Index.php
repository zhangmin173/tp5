<?php
namespace app\index\controller;
/**
* 
*/
class Index extends Base
{
	
	public function index()
	{
		//dump(request());
		$this->data['msg'] = 'hello';
		dump($this->data);
		
		return $this->fetch($this->_tpl.'index/index',$this->data);
	}

	public function test()
	{
		$this->success('成功',$this->_global['url']['jump_url'],['data'=>'123']);
	}
}