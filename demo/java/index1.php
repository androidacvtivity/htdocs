<!DOCTYPE html>
<html>
<head>
  <script src="YourScript.js"></script>
  
  
  <link href="./stylecss.css" rel="stylesheet" type="text/css" media="screen" />
  <style>
  	body {font-family: "Lato", sans-serif;}
		.sidenav {height: 100%;width: 200px;position: fixed;z-index: 1;top: 0;left: 0;background-color: #464850;overflow-x: hidden;padding-top: 20px;}
		.sidenav a {padding: 6px 8px 6px 16px;text-decoration: none;font-size: 25px;color: #818181;display: block;}
		.sidenav a:hover {color: #f1f1f1;}
		.main {margin-left: 200px; /* Same as the width of the sidenav */font-size: 20px; /* Increased text to enable scrolling */padding: 0px 10px;}
		@media screen and (max-height: 450px) {
  		.sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}}
  </style>
</head>
  
<body>
	<div class="sidenav">
      <button onclick="Link1()" class="buttonActivMenu"><h3>Link 1</h3></a></button>
  	  <button onclick="Link2()" class="buttonMenuWithUndercategory"><h3>link2</h3></a></button>
	  <button onclick="Link2.1()" class="buttonSecondMenu">link2.1</a></button>
	  <button onclick="Link2.2()" class="buttonLastSecondMenu">link2.2</a></button>
	  <button onclick="Back_to_main()" class="buttonActivMenu"><h3>Back to main</h3></a></button>
	</div>

	<div class="main">
      <?php

$foo = include 'echo_text_3.php';

echo $foo; // prints 'PHP'
?>
	  
</div>
</body>
</html>

