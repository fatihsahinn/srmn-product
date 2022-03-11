<?php
require_once('db/db_connection.php');

	try {
		$getir = $baglanti->prepare("SELECT * FROM stocks");
		$getirdim = $getir->execute();
		$results = $getir->fetchAll(PDO::FETCH_ASSOC);
		
		if($getirdim)
		{
			$array = array(
				'code' => 0,
				'msg' => 'success',
				'data' => json_encode($results, JSON_PRETTY_PRINT)
			);
		}
		else
		{
			$array = array(
				'code' => 1,
				'msg' => 'error',
				'data' => "NULL"
			);
		}
	}
	catch(Exception $e)
	{
		$array = array(
			'code' => 1,
			'msg' => 'error',
			'data' => $e->getMessage()
		);
	}
	header('Content-type: text/plain');
	print_r($array);

?>