<?php
  class TasksController {
    public function index() {
      // lagra all tasks i variabel $tasks
      $tasks = Task::all();
      require_once('views/tasks/index.php');
    }

    public function show() {
      // url i form av ?controller=tasks&action=show&id=x
      // utan id routas man om till error page
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // task baserat på id
      $task = Task::find($_GET['id']);
      require_once('views/tasks/show.php');
    }
	
    public function create() {
      if (!isset($_POST['todo']))
        return call('pages', 'error');
	
	  $todo = $_POST['todo'];
	  $content = $_POST['content'];

      $task = Task::create($todo,$content);
		  return call('pages', 'success');
    }
	
	public function updateform() {
	  if (!isset($_GET['id']))
        return call('pages', 'error');
	
	  $task = Task::find($_GET['id']);
      require_once('views/tasks/updateform.php');
    }
	
	public function set() {
	  $id = $_GET['id'];
	  $todo = $_POST['todo'];
	  $content = $_POST['content'];

	  $task = Task::update($id,$todo,$content);
		return call('pages', 'success');
    }
	
	public function delete() {
	  if (!isset($_GET['id']))
        return call('pages', 'error');

      $task = Task::delete($_GET['id']);
	  $tasks = Task::all();
      require_once('views/tasks/index.php');
    }
	
  }
?>