<?php
namespace app\api\controller;
use think\Controller;
/**
* 
*/
class Region extends Controller
{
	protected $_global;
	protected $db_city;

	protected $data;
	
	protected function _initialize()
	{
		$this->db_city = model('city');
	}


	public function index()
	{
		$limit = input('limit')?input('limit'):5;
		$offset = input('offset')?input('offset'):0;

		$rows = $this->db_city->limit($offset,$limit)->select();
		$total = $this->db_city->count();

		return json(['ret'=>0,'data'=>$rows,'total'=>$total]);
	}

	public function page()
	{
		$limit = input('limit')?input('limit'):5;
		$offset = input('offset')?input('offset'):0;

		$rows = $this->db_city->where('id>50')->limit($offset,$limit)->select();
		$total = $this->db_city->where('id>50')->count();

		return json(['ret'=>0,'data'=>$rows,'total'=>$total]);
	}

}