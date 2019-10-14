<?php
namespace BJ\Controller;
use BJ\Controller\BaseController;

class TaskList extends BaseController {
	
	public $model;
	public $view;

	private $limit = 3;
	
	function __construct()
	{
		parent::__construct();
		//$this->view = new View();
	}

	function index($page = 1)
	{	
		$this->smarty->assign('active_page',$page);

		$pages = $this->query("select count(*)/$this->limit as cnt from tasks");
		$this->smarty->assign('pages',$pages[0]['cnt']);
		$this->get_page($page);
	}

	public function get_page($index){
		$offset = ($index-1)*$this->limit;
		$res = $this->query("select * from tasks limit :limit offset :offset",array(":offset"=>$offset,":limit"=>$this->limit));
		$this->smarty->assign('title',"Задачи");
		$this->smarty->assign('items',$res);
		$this->smarty->display('TaskList.tpl');
	}
}