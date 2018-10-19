@extends('layouts.theme')
@section('content')
<link href="css/welcome.css" rel="stylesheet">
<h1 class="breadcrumb-header">Welcome to Chocolate Day at VESIT</h1>
<div class="slideshow-container">
					  <div class="mySlides fade">
					    <div class="numbertext">1 / 3</div>
					    <img src="img/home1.jpg" style="width:1200px; height: 350px;">
					  </div>

					  <div class="mySlides fade">
					    <div class="numbertext">2 / 3</div>
					    <img src="img/home1.jpg" style="width:1200px; height: 350px;">
					  </div>

					  <div class="mySlides fade">
					    <div class="numbertext">3 / 3</div>
					    <img src="img/home1.jpg" style="width:1200px; height: 350px;">
					  </div>
					    
  							<a class="prev" onclick="plusSlides(-1)"><img src="img/arrow-left.png"></a>
  							<a class="next" onclick="plusSlides(1)"><img src="img/arrow-right.png" style="float: right;"></a>
			</div>
			<br>	



			<div style="text-align:center">
					  <span class="dot" onclick="currentSlide(1)"></span> 
					  <span class="dot" onclick="currentSlide(2)"></span> 
					  <span class="dot" onclick="currentSlide(3)"></span> 
			</div>

			<script type="text/javascript">
				var slideIndex = 0;
        		showSlides();

		        function plusSlides(n) {
		          showSlides(slideIndex += n);
		        }

		        function currentSlide(n) {
		          showSlides(slideIndex = n);
		        }

		        function showSlides() {
		            var i;
		            var slides = document.getElementsByClassName("mySlides");
		            var dots = document.getElementsByClassName("dot");
		            for (i = 0; i < slides.length; i++) {
		               slides[i].style.display = "none";  
		            }
		            slideIndex++;
		            if (slideIndex > slides.length) {slideIndex = 1}    
		            for (i = 0; i < dots.length; i++) {
		                dots[i].className = dots[i].className.replace(" active", "");
		            }
		            slides[slideIndex-1].style.display = "block";  
		            dots[slideIndex-1].className += " active";
		            setTimeout(showSlides, 4000);
				}
			</script>
			<div class="container1" style="margin-left: 50px;">
			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '1'])}}"><img src="img/silk_oreo(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Silk Oreo<br>Love</center></div>
			</div>
			
			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '2'])}}"><img src="img/bournville(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Bournville<br>Special Dedication</center></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '3'])}}"><img src="img/crackle(1).jpg" style="height: 250px;"></a>
				<div class="label"  style="margin-top: 40px;"><center>Dairy Milk Crackle<br>Best Friend</center></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '4'])}}"><img src="img/kitkat(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Kitkat<br>Tharki</center></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '5'])}}"><img src="img/dairy_milk(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Dairy Milk<br>Friendship</center></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '6'])}}"><img src="img/shots(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Shots<br>Hate</center></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '7'])}}"><img src="img/fruit-and-nut(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Fruit And Nut<br>Crush</center></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '8'])}}"><img src="img/munch(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Munch<br>Friendzone</center></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '9'])}}"><img src="img/temptation(1).jpg" style="height: 250px;"></a>
				<div class="label"><center>Temptation<br>Best BE</center></div>
			</div>



			</div>

@endsection