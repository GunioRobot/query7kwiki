<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Wiki extends Controller {

	
	public function action_view_page($page)
	{
		
		$single = ORM::factory('page')
				->where('title', '=', $page)
				->find();
				
		if($single->loaded())
		{
			$v = View::factory('single');
			$v->page = $page;
			$v->content = $single->content;
					}
		else
		{
			$v = View::factory('create');
			$v->page = $page;
		}
		
		$this->response->body($v);
		
	}
	
	public function action_edit_page($page)
	{
		$single = ORM::factory('page')
				->where('title', '=', $page)
				->find();
			
		if($single->loaded())
		{
			$content = $single->content;
		}
		else
		{
			$content = '';
		}
				
		$v = View::factory('edit');
		$v->page = $page;
		$v->content = $content;
		
		$this->response->body($v);
	}
	
	public function action_save_page($page)
	{
		$single = ORM::factory('page')
				->where('title', '=', $page)
				->find();
				
		$content = $this->request->post('content');
				
		if($single->loaded())
		{
			$single->content = $content;
			$single->save();
		}
		else
		{
			$new_single = new Model_Page();
			$new_single->title = $page;
			$new_single->content = $content;
			$new_single->save();
		}
		
		$this->request->redirect('http://127.0.0.1/query7kwiki/index.php/wiki/' . $page);
		
	}

} // End Welcome
