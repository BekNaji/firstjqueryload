<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	<!-- basit css kodlarimiz burada -->
	<style type="text/css">
		.data{
			display: none;
		}
		.load{
			text-align: center;
		}
	</style>
	<!-- jquey cagirma linki burada -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- jquery ile yapilan basit kodlar -->
	<script>
	//jquery hazir hale getiriyoruz
	$(document).ready(function(e){
		
		//sayfa yuklenince sunlari yapsin
	  	$(window).on("load",function(){
	  		//class adi load olani display hide yap
	  		$(".load").css("display","none");

	  		//class adi data olani display show yap
	  		$(".data").css("display","block");

	  		
	  	}); 

	});
	</script>
</head>
<body>

	<!-- burada biz sayfa yuklenene kadar buradaki gif resmi show olacaktir
	sayfa yuklendikten sonra ise resim hide olacaktir -->
<div class="load">
	<img src="images/load.gif">
</div>

<!-- Bu alanda yuklenecek datalar olacaktir -->
<div class="data">
<h1>Anasyfa</h1>
<?php 
// Burada dongu calisiyor sayfayi acilmasini bir az uzatacagiz!
for ($i=0; $i <100000 ; $i++) { 
	echo $i."<hr>";
}?>
<!-- data bitisi -->
</div>

</body>
</html>
