<?php
  class Task {
    // publika för att kunna komma åt attributen genom t.ex $task->todo
    public $id;
    public $todo;
    public $content;

    public function __construct($id, $todo, $content) {
      $this->id      = $id;
      $this->todo  	 = $todo;
      $this->content = $content;
    }

    public static function all() {
      $list = [];
	  // från connection.php
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM tasks');

      // skapar en lista med alla Task objekt från databas resultatet
      foreach($req->fetchAll() as $task) {
		  //skapar ny task för varje resultat från db.
        $list[] = new Task($task['id'], $task['todo'], $task['content']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
	  //Förbereder fråga
      $req = $db->prepare('SELECT * FROM tasks WHERE id = :id');
      // sätter önskat id från $id och utför
      $req->execute(array('id' => $id));
      $task = $req->fetch();

      return new Task($task['id'], $task['todo'], $task['content']);
    }
	public static function create($todo,$content){
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO tasks(todo, content)VALUES(:todo,:content)');
      $req->bindParam(':todo', $todo, PDO::PARAM_STR);
	  $req->bindParam(':content', $content, PDO::PARAM_STR);
	  $req->execute();
	}
	public static function update($id,$todo,$content){
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE tasks SET todo=:todo, content=:content WHERE :id=id');
	  $req->bindParam(':id', $id, PDO::PARAM_INT);
	  $req->bindParam(':todo', $todo, PDO::PARAM_STR);
	  $req->bindParam(':content', $content, PDO::PARAM_STR);
	  $req->execute();
	}
    public static function delete($id) {
      $db = Db::getInstance();
      $id = intval($id);
	  //Förbereder fråga
      $req = $db->prepare('DELETE FROM tasks WHERE id = :id');
      // sätter önskat id från $id och utför
      $req->execute(array('id' => $id));
    }
  }
?>