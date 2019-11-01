<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>科學少女</title>
</head>
<body>
	<div class="phototitle">
		<font color ="#FFF0F5"><h1 align="center">精彩劇照與花絮</h1></font>
	</div>
	
	<div id="carousel" class="carousel slide" data-ride="carousel">
	<!-- 照片數 -->
		<ul class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
			<li data-target="#carousel" data-slide-to="4"></li>
			<li data-target="#carousel" data-slide-to="5"></li>
			<li data-target="#carousel" data-slide-to="6"></li>
			<li data-target="#carousel" data-slide-to="7"></li>
			<li data-target="#carousel" data-slide-to="8"></li>
			<li data-target="#carousel" data-slide-to="9"></li>		
		</ul>
	<!-- 幻燈片 -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="image/pic0.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic1.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic2.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic3.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic4.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic5.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic6.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic7.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic8.jpg">
			</div>
			<div class="carousel-item">
				<img src="image/pic9.jpg">
			</div>


		</div>
	<!-- 左右切換-->
		<a class="carousel-control-prev" href="#carousel" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#carousel" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>


	<!-- 照片藝廊 -->
	<div class="responsive">
		<div class="img">
			<a class= "slide-0">
			<img src="image/pic0.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">精彩劇照1</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-1">
			<img src="image/pic1.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">精彩劇照2</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-2">
			<img src="image/pic2.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">精彩劇照3</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-3">
			<img src="image/pic3.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">精彩劇照4</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-4">
			<img src="image/pic4.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">精彩劇照5</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-5">
			<img src="image/pic5.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">精彩劇照6</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-6">
			<img src="image/pic6.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">幕後花絮1</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-7">
			<img src="image/pic7.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">幕後花絮2</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-8">
			<img src="image/pic8.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">幕後花絮3</div>
		</div>
	</div>
	<div class="responsive">
		<div class="img">
			<a class= "slide-9">
			<img src="image/pic9.jpg" alt="圖片描述" width="300" height="200">
			</a>
			<div class="desc">幕後花絮4</div>
		</div>
	</div>

	



	<script>
		$(function(){
		// 循环轮播到某个特定的帧 
		$(".slide-0").click(function(){
			$("#carousel").carousel(0);
		});
		$(".slide-1").click(function(){
			$("#carousel").carousel(1);
		});
		$(".slide-2").click(function(){
			$("#carousel").carousel(2);
		});
		$(".slide-3").click(function(){
			$("#carousel").carousel(3);
		});	
		$(".slide-4").click(function(){
			$("#carousel").carousel(4);
		});
		$(".slide-5").click(function(){
			$("#carousel").carousel(5);
		});
		$(".slide-6").click(function(){
			$("#carousel").carousel(6);
		});
		$(".slide-7").click(function(){
			$("#carousel").carousel(7);
		});	
		$(".slide-8").click(function(){
			$("#carousel").carousel(8);
		});
		$(".slide-9").click(function(){
			$("#carousel").carousel(9);
		});

	});

	</script>

</body>
</html>