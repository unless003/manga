<!DOCTYPE html>
<html>
<head>
	<title>Manga</title>
	<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style1.css')); ?>">

</head>
<header>
	<div class="navbar">
  <a href="<?php echo e(asset('index')); ?>">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">List
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="<?php echo e(asset('Action')); ?>">  Action    </a>
      <a href="#">  Adventure </a>
      <a href="#">  Comic     </a>
    </div>
  </div> 
</header>
<body>

  <div class="row">
  <figure>
  	<FIGCAPTION>ONE PIECE</FIGCAPTION>
  	<div class="column"><img src="picture/pic1.png"   alt="OnePiece" height="200" width="200"   >
    
  </div>
  <a href="chapter1 "> chap 1</a><br>
  <a href="chapter2 "> chap 2</a><br>
  <a href="chapter3 "> chap 3</a><br>
  <a href="chapter4 "> chap 4</a><br>
  <a href="chapter5 "> chap 5</a><br>

  </figure>
  <figure>
  	<FIGCAPTION>NARUTO</FIGCAPTION>
  	<div class="column">
  		<a href="<?php echo e(asset('truyen')); ?>">
    <img src="picture/pic2.jpeg"   alt="Naruto" height="200" width="200"   ></a>
  </div>
  <a href="<?php echo e(asset('chap1Naruto')); ?>"> chap 1</a><br>
  <a href="<?php echo e(asset('chap2Naruto')); ?> "> chap 2</a><br>
  <a href="chapter3 "> chap 3</a><br>
  <a href="chapter4 "> chap 4</a><br>
  <a href="chapter5 "> chap 5</a><br>
	
  </figure>

<figure>
	<figcaption>FATE/GRAND ORDER: EPIC OF REMNANT - SHIMOSA</figcaption>
  	<div class="column">
  		<a href="">
    <img src="https://3.bp.blogspot.com/-DRjR4mawe6E/XIfRd0XLoxI/AAAAAAAAdM8/_-OZEmug4t4DrwWz9I9fW8PAcJx9QntHACHMYCw/fategrand-order-epic-of-remnant-shimosa"   alt="Naruto" height="200" width="200"   ></a>
  </div>
  <a href=""> chap 1</a><br>
  <a href=" "> chap 2</a><br>
  <a href="chapter3 "> chap 3</a><br>
  <a href="chapter4 "> chap 4</a><br>
  <a href="chapter5 "> chap 5</a><br>
	
  </figure>
</body>
</html><?php /**PATH C:\xampp\htdocs\Demo\resources\views/pages/index.blade.php ENDPATH**/ ?>