<?php
namespace app\index\controller;
/**
* 
*/
class Index extends Home
{
	
	public function index()
	{
		//dump(request());
		$this->data['msg'] = 'hello';
		// dump(cache('name'));
		// cache('name', 'zhangmin','user_name');
		// cache('name',NULL);
		dump($this->data);
		
		return $this->fetch($this->_tpl.'index/index',$this->data);
	}

	public function test()
	{
		dump($this->data);
		
		//$this->success('成功',$this->_global['url']['jump_url'],['data'=>'123']);
	}
}