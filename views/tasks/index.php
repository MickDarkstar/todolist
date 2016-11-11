<div class="container">
	<div class="panel-group">
	<h3>Här är en lista på alla uppdrag:</h3>
	<a class="btn btn-default" href='?controller=pages&action=create'>Lägg till nytt uppdrag</a>
	</div>

	<div class="container">
		<div class="row">
		<?php foreach($tasks as $task) { ?>
			<div class="col-sm-5">
				<div class="panel panel-primary">
					<div class="panel-body">
						<h4>Att göra: <?php echo $task->todo; ?></h4>
						<a class="btn btn-default" href='?controller=tasks&action=show&id=<?php echo $task->id; ?>'>Visa mer</a>
						<a class="btn btn-default" href='?controller=tasks&action=updateform&id=<?php echo $task->id; ?>'>Ändra</a>
						<a class="btn btn-default" href='?controller=tasks&action=delete&id=<?php echo $task->id; ?>'>Ta bort</a>
					</div>
				</div>
			</div>
		<?php } 
		?>
		</div>
	</div>
</div>
