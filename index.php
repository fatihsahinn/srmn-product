<?php
// my routing page 
	$request = $_SERVER['REQUEST_URI'];

	switch ($request) {
		case '/' :
			require __DIR__ . '/views/index.php';
			break;
		case '' :
			require __DIR__ . '/views/index.php';
			break;
		case '/stock' : // POST
			require __DIR__ . '/views/stocks.php';
			break;
		case '/stocks' : // GET
			require __DIR__ . '/views/stockGET.php';
			break;
		default:
			http_response_code(404);
			require __DIR__ . '/views/404.php';
			break;
	}