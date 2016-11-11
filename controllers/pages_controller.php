<?php
  class PagesController {
    public function home() {
      $first_name = 'Micke';
      $last_name  = 'Fehrm';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
	public function success() {
      require_once('views/pages/success.php');
    }
    public function create() {
      require_once('views/tasks/create.php');
    }

  }
?>