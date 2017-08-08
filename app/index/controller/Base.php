<?php
namespace app\index\controller;
use think\Controller;
/**
* 
*/
class Base extends Controller
{
	protected $_global;
	protected $_tpl;

	protected $data;
	
	protected function _initialize()
	{
		// 全局变量准备
		$this->_global['user_token'] = $this->getUserToken();
		$this->_global['app_key'] = $this->getAppKey();
		$this->_global['jsapi_config'] = $this->getJsapiConfig();
		$this->_global['developer'] = config('developer');
		$this->_global['web_info'] = config('web_info');
		$this->_global['url'] = $this->getUrl();
		$this->_global['module'] = $this->getDispatch();
		
		$this->_global['oauth_info'] = $this->getOauthInfo();
		$this->_global['user_info'] = $this->getUserInfo();
		$this->data['_global'] = $this->_global;
		// 模板输出位置
		$this->_tpl = '/v1/';
		config([
			'dispatch_success_tmpl' => $this->_tpl . '/public/dispatch_jump',
			'dispatch_error_tmpl'=> $this->_tpl . '/public/dispatch_jump'
		]);

		if (!$this->_global['user_info']) {
			return $this->redirect('login/index');
		}
	}

	// 获取用户微信信息
	protected function getOauthInfo()
	{
		return ['openid'=>'testopenid','headimg'=>'','nickname'=>'阿敏','sex'=>2];
	}

	// 获取用户登录信息
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

	// 其他url信息
	protected function getDispatch()
	{

		return request()->dispatch()['module'];
	}

}