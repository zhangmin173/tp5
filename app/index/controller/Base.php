<?php
namespace app\index\controller;
use think\Controller;
/**
* 
*/
class Base extends Controller
{
	protected $_global;
	protected $jsapi_config;

	protected $data;
	
	protected function _initialize()
	{
		$this->_global['user_token'] = $this->getUserToken();
		$this->_global['app_key'] = $this->getAppKey();

		$this->_global['jsapi_config'] = $this->getJsapiConfig();
		$this->_global['developer'] = config('developer');
		$this->_global['web_info'] = config('web_info');
		$this->_global['url'] = $this->getUrl();

		$this->_global['user_info'] = $this->getUserInfo();

		$this->data['_global'] = $this->_global;
	}

	// 获取登录的用户信息
	protected function getUserInfo()
	{
		return [];
	}

	// 用户登录之后创建user_token
	protected function getUserToken()
	{
		return '123456';
	}

	// 用户登录之后创建app_key
	protected function getAppKey()
	{
		return '123456';
	}

	// 创建微信jssdk使用的config信息
	protected function getJsapiConfig()
	{
		return [];
	}

	// 其他url信息
	protected function getUrl()
	{
		$url['domain'] = request()->domain();
		$url['jump_url'] = request()->server('HTTP_REFERER');

		return $url;
	}

}