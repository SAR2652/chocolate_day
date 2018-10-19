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
				<a href="{{route('purchasing', ['c_id' => '1'])}}">><img src="img/silk_oreo.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Silk Oreo</center></label></div>
			</div>
			
			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '2'])}}">><img src="img/bournville.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Bournville</center></label></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '3'])}}"><img src="img/crackle.jpg" style="height: 250px; margin-top: 20px; margin-left: 45px;"></a>
				<div class="label"  style="margin-top: 40px;"><label><center>Dairy Milk Bubbly</center></label></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '4'])}}"><img src="img/kitkat.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Kitkat</center></label></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '5'])}}"><img src="img/dairy_milk.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Dairy Milk</center></label></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '6'])}}"><img src="img/shots.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Shots</center></label></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '7'])}}"><img src="img/fruit-and-nut.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Fruit And Nut</center></label></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '8'])}}"><img src="img/munch.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Munch</center></label></div>
			</div>

			<div class="choc">
				<a href="{{route('purchasing', ['c_id' => '9'])}}"><img src="img/temptation.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Temptation</center></label></div>
			</div>



			</div>

@endsection