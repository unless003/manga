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
	<H2><strong>Thể Loại : </strong> Action </H2>
<div class="row">
  <figure>
  	<div class="column"><img src="picture/pic1.png"   alt="OnePiece" height="200" width="200"   >
    
  </div>
  <a href="chapter1 "> chap 1</a><br>
  <a href="chapter2 "> chap 2</a><br>
  <a href="chapter3 "> chap 3</a><br>
  <a href="chapter4 "> chap 4</a><br>
  <a href="chapter5 "> chap 5</a><br>

  </figure>
  <figure>
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

</body>
</html><?php /**PATH C:\xampp\htdocs\Demo\resources\views/pages/Action.blade.php ENDPATH**/ ?>