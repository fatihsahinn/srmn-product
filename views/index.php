<?php 
session_start();
?>
<html lang="tr">
<head>
	<title>Fatih Şahin Project</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="stock">
				<div class="form-group">
					<label for="Product-Name">Ürün Adı</label>
					<input type="text" class="form-control" id="Product-Name" name="product_name" placeholder="Lütfen ürün adını giriniz">
				</div>
				<div class="form-group">
					<label for="Product-Stock">Ürün Stoğu</label>
					<input type="text" class="form-control" id="Product-Stock" name="product_stock" placeholder="Ürün stok adetini giriniz">
				</div>
				<button type="submit" class="btn btn-primary">Ürünü Ekle</button>
				<input type="reset" id="clear-form" class="btn btn-primary"></input>
			</form>
<!-- -->
			<?php
				// array boş değilse gelen mesajı al ekrana yazdır.
				// $_SESSION['array_output'] içinde json olarak gelen array mevcuttur.
				// bu array'ın içindekiler session yardımıyla alınıp gösterilip geri temizlenir -> session_destroy() ile.
				if(!empty($_SESSION['array_output']))
				{
					$jsonArray = json_decode($_SESSION['array_output'],true);
					echo '<div class="alert alert-primary" role="alert"> '. $_SESSION['array_output'] .' </div>';
				}
				session_destroy(); // sessionu sil
			?>
<!-- -->
		</div>
	</div>
</div>

</body>
</html>