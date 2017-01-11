<?php

class QueryBuilder
{
	
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$stmt = $this->pdo->prepare("select * from {$table}");
		$stmt-> execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectByid($table, $id)
	{
		$stmt = $this->pdo->prepare("
			select * from {$table} 
			where ". join(array_keys($id)) ." = ". join($id)
		);
		$stmt-> execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public function insert($table, $paramenters){
		
		$sql = sprintf(

			'insert into %s (%s) values (%s)',
			$table, 
			implode(',',array_keys($paramenters)),
			':' .implode(', :' , array_keys($paramenters))
		);
		try{
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute($paramenters);	
		}catch(PDOException $ex){
			die("WhoOOps something went wrong");
		}
		
	}

	public function update($table, $id , $paramenters){

		$sql = sprintf(

			'update %s set %s where %s = %s',
			$table,
			implode(','	, $paramenters),
			implode(',', array_keys($id)),
			implode(',', $id)
		);
		try{
			$stmt = $this->pdo->prepare($sql);
			return $stmt->execute();
		}catch(PDOException $ex){
			//die("WhoOOps something went wrong");
			die($ex->getMessage());
		}

	}
}