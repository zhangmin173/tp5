<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
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
		$this->_tpl = $this->getV();
		config([
			'dispatch_success_tmpl' => $this->_tpl . 'public/dispatch_jump',
			'dispatch_error_tmpl'=> $this->_tpl . 'public/dispatch_jump'
		]);

		// 是否授权
		if (is_null($this->_global['oauth_info'])) {
			return $this->redirect('weixin/index');
		}

		$this->base();

	}

	// 基础操作
	protected function base()
	{
		
	}

	// 获取用户微信信息
	protected function getOauthInfo()
	{
		return ['openid'=>'testopenid','headimg'=>'','nickname'=>'阿敏','sex'=>2];
	}

	// 获取用户登录信息
	protected function getUserInfo()
	{
		return session('user_info');
	}
	protected function setUserInfo($user_info)
	{
		session('user_info',$user_info);
	}

	// 用户登录之后创建user_token
	protected function getUserToken()
	{
		return '123456';
	}
	protected function setUserToken($token)
	{
		cookie('token',$token);
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
		$url['domain'] = request()->domain().request()->root();
		$url['jump_url'] = request()->server('HTTP_REFERER');
		$url['front_url'] = $url['domain'].'/public/'.$this->getDispatch()[0].$this->getV();
		$url['public_url'] = $url['domain'].'/public/';

		return $url;
	}

	// 模块、控制器、方法信息
	protected function getDispatch()
	{

		return request()->dispatch()['module'];
	}

	// 版本信息
	protected function getV() {
		return '/v1/';
	}

}