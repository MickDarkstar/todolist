<?php
	function call($controller, $action) {
	// require fil som matchar controller namnet
		require_once('controllers/' . $controller . '_controller.php');

		// skapa ny instans av den just begärda controllern
		switch($controller) {
			case 'pages':
				$controller = new PagesController();
			break;
			case 'tasks':
				require_once('models/task.php');
				$controller = new TasksController();
			break;
		}

		// anropa action
		$controller->{ $action }();
  }

  // lista med tillåtna routes
  $controllers = array('pages' => ['home', 'error', 'create', 'success'],
                       'tasks' => ['index', 'show', 'create', 'delete', 'updateform','set']);

  // kolla att både controller och action är tillåten, iannat fall error page
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('pages', 'error');
		}
	} else {
		call('pages', 'error');
	}
?>