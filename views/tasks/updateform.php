<div class="container">
	<h2>Uppdatera uppdrag:</h2>
	<form action="?controller=tasks&action=set&id=<?php echo $task->id; ?>" method="post">
	<div class="form-group">
		<label for="todo">Att göra</label>
		<input class="form-control" type="text" name="todo" value="<?php echo $task->todo; ?>">
		<span class="help-block">Vad är det som skall göras?...</span>
	</div>
	<div class="form-group">
		<label for="content">När</label>
		<input class="form-control" type="text" name="content" value="<?php echo $task->content; ?>">
		<span class="help-block">Detaljer som: var, när...</span>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Spara</button>
	</div>
	</form>
</div>

