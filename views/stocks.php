<?php
session_start();
require_once('db/db_connection.php');

	$prdct_name = htmlspecialchars(trim($_POST["product_name"]));
	$prdct_stock = htmlspecialchars(trim($_POST["product_stock"]));
	
	$date = date('Y-m-d H:i:s');

	try {
		$add_data = $baglanti->prepare("INSERT INTO stocks(name, stock, created_date) VALUES(?, ?, ?)");
		$add_data->bindParam(1, $prdct_name, PDO::PARAM_STR);
		$add_data->bindParam(2, $prdct_stock, PDO::PARAM_INT);
		$add_data->bindParam(3, $date, PDO::PARAM_STR);
		$result_data = $add_data->execute();
		if($add_data)
		{
			$code = 0;
			$msg="success";
		}
		else
		{
			$code = 1;
			$msg="error";
		}
		$result_array = array(
			'product_id', $baglanti->lastInsertId(),
			'name', $prdct_name,
			'stock', $prdct_stock,
			'created_date', $date
		);

		$array = array(
			'code' => $code,
			'msg' => $msg,
			'data' => $result_array
		);
	}
	catch(Exception $e)
	{
		$code = 1;
		$data = false;
		$array = array(
			'code' => $code,
			'msg' => $e->getMessage(),
			'data' => $result_array
		);
	}

	$_SESSION['array_output'] = json_encode($array);
	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>