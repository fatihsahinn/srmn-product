<?php
require_once('db/db_connection.php');

	try {
		$getir = $baglanti->prepare("SELECT * FROM stocks");
		$getirdim = $getir->execute();
		$results = $getir->fetchAll(PDO::FETCH_ASSOC);
		
		if($getirdim)
		{
			$code = 0;
			$msg = "success";
			$array = array(
				'code' => $code,
				'msg' => $msg,
				'data' => json_encode($results, JSON_PRETTY_PRINT)
			);
		}
		else
		{
			$code = 1;
			$msg = "error";
			$array = array(
				'code' => $code,
				'msg' => $msg,
				'data' => "NULL"
			);
		}
	}
	catch(Exception $e)
	{
		$code = 1;
		$msg = "error";
		$array = array(
			'code' => $code,
			'msg' => $msg,
			'data' => $e->getMessage()
		);
	}
	header('Content-type: text/plain');
	print_r($array);

?>