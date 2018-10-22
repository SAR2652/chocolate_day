@extends('layouts.theme')
@section('content')
<link href="css/welcome.css" rel="stylesheet">
<style>
.mySlides {display:none;}
</style>
<h1 class="breadcrumb-header">Welcome to Chocolate Day at VESIT</h1>
<div class="slideshow-container">
 						<img class="mySlides" src="img/home2.jpg" style="width:1200px; height:350px;">
  						<img class="mySlides" src="img/home1.jpg" style="width:1200px; height:350px;">
  						<img class="mySlides" src="img/home3.jpg" style="width:1200px; height:350px;">
  			
  							<a class="prev" onclick="plusDivs(-1)"><img src="img/arrow-left.png"></a>
  							<a class="next" onclick="plusDivs(1)"><img src="img/arrow-right.png" style="float: right;"></a>
							  <!--<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  								<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>-->
</div>
<br>	

			<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
			</div>

			<script>
				var slideIndex = 1;
        		showDivs(slideIndex);

				function plusDivs(n) {
				showDivs(slideIndex += n);
				}

				function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				if (n > x.length) {slideIndex = 1}
				if (n < 1) {slideIndex = x.length}
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				}
				
				x[slideIndex-1].style.display = "block"; 
			}
			</script>
			<div class="container1" style="margin-left: 50px;" id="chocolates">
			<div class="choc"><a href="{{route('purchasing', ['c_id' => '1'])}}">
				<img src="img/silk_oreo(1).jpg" style="height: 250px;">
				<div class="label">
					<center>Silk Oreo<br>
							Love</center></div>
					</a>
			</div>
			
			<div class="choc"><a href="{{route('purchasing', ['c_id' => '2'])}}">
				<img src="img/bournville(1).jpg" style="height: 250px;">
				<div class="label">
					<center>Bournville<br>Special Dedication</center></div></a>
			</div>

			<div class="choc"><a href="{{route('purchasing', ['c_id' => '3'])}}">
				<img src="img/crackle(1).jpg" style="height: 250px;">
				<div class="label"  style="margin-top: 40px;">
					<center>Dairy Milk Crackle<br>Best Friend</center></div></a>
			</div>

			<div class="choc"><a href="{{route('purchasing', ['c_id' => '4'])}}">
				<img src="img/kitkat(1).jpg" style="height: 250px;">
				<div class="label">
					<center>Kitkat<br>Tharki</center></div></a>
			</div>

			<div class="choc"><a href="{{route('purchasing', ['c_id' => '5'])}}">
				<img src="img/dairy_milk(1).jpg" style="height: 250px;">
				<div class="label">
					<center>Dairy Milk<br>Friendship</center></div></a>
			</div>

			<div class="choc"><a href="{{route('purchasing', ['c_id' => '6'])}}">
				<img src="img/shots(1).jpg" style="height: 250px;">
				<div class="label">
					<center>Shots<br>Hate</center></div></a>
			</div>

			<div class="choc"><a href="{{route('purchasing', ['c_id' => '7'])}}">
				<img src="img/fruit-and-nut(1).jpg" style="height: 250px;">
				<div class="label">
					<center>Fruit And Nut<br>
						Crush</center></div></a>
			</div>

			<div class="choc"><a href="{{route('purchasing', ['c_id' => '8'])}}">
				<img src="img/munch(1).jpg" style="height: 250px;"></a>
				<div class="label">
					<center>Munch<br>
						Friendzone</center></div></a>
			</div>

			<div class="choc"><a href="{{route('purchasing', ['c_id' => '9'])}}">
				<img src="img/temptation(1).jpg" style="height: 250px;">
				<div class="label">
					<center>Temptation<br>
						Best BE</center></div></a>
			</div>



			</div>

@endsection