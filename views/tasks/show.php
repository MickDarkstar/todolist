<div class="container">
	<h3>Valt uppdrag:</h3>
		<div class="panel panel-default">
			<div class="panel-body">
				<p><?php echo $task->todo; ?></p>
				<p><?php echo $task->content; ?></p>
				<a class="btn btn-default" href='?controller=tasks&action=updateform&id=<?php echo $task->id; ?>'>Ändra</a>
				<a class="btn btn-default" href='?controller=tasks&action=delete&id=<?php echo $task->id; ?>'>Ta bort</a>
			</div>
		</div>
</div>
