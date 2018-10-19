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
				<a href="purchasing"><img src="img/kitkat.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Kitkat</center></label></div>
			</div>
			
			<div class="choc">
				<a href="#"><img src="img/crackle.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>Dairy Milk Crackle</center></label></div>
			</div>

			<div class="choc">
				<a href="#"><img src="img/bubbly.jpg" style="height: 250px; margin-top: 20px; margin-left: 45px;"></a>
				<div class="label"  style="margin-top: 40px;"><label><center>Dairy Milk Bubbly</center></label></div>
			</div>

			<div class="choc">
				<a href="#"><img src="img/5star.jpg" style="height: 250px;"></a>
				<div class="label"><label><center>5 Star</center></label></div>
			</div>
			</div>

@endsection