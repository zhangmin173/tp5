<?php
namespace app\index\controller;
use think\Controller;
/**
* 
*/
class Index extends Controller
{
	
	public function index()
	{
		dump(config());
		return 'Hello world';
	}
}