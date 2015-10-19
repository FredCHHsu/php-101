<?php
/**
* 
*/
class Message
{
	public $messages;
	public $returns;
	
	function __construct($dbp)
	{
		$sql = "SELECT * FROM messages WHERE ( is_deleted = 0  AND parent_id IS NULL )";
		$query = $dbp->query($sql);
		$this->messages = $query->fetchAll();

		$sql2 = "SELECT * FROM messages WHERE ( is_deleted = 0  AND parent_id IS NOT NULL )";
		$query2 = $dbp->query($sql2);
		$this->returns = $query2->fetchAll();
	}

	// public function all()
	// {
	// 	return $messages;
	// }

	// public function returns($id)
	// {
	// 	return $returns;
	// }

	// public function __call($method, $parameters)
	// {
	// 	if (method_exists($this, $method)) return $this->$method;
	// 	else {
	// 		$this->service->$method($parameters);
	// 	}
	// }
}