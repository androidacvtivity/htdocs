<!DOCTYPE html>
<html lang="en-ca">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./mycss.css" type="text/css">
    <title>HOME (page 1/5)</title>
<!--
This is an HTML page with four major subdivisions: header, nav, main, footer.
The navigation subdivision is the focus of this example.
The site, including the nav menu, would be styled using CSS in the external stylesheet.
-->
</head>
<body id="aboutus">  <!-- id indicates page; is used by menu CSS to indicate active page.  No JS needed. -->

<div class="outer">
    <header>
        <figure>
            <img src="image\images.jpg" alt="MyCompany Logo" width="888" height="146" align="center">
            <h1>My Home Maintenance Co.</h1>
            <figcaption>
                <p>No home repair job in the Valley area is too big for us.</p>
            </figcaption>
        </figure>
    </header>
	
	<tr>
	<td>
	<!--BEGIN mynav.php INCLUDE-->
   <?php include "./mynav.php"; ?>
   </td>
   </tr>
	
	<!--END mynav.ph INCLUDE-->
    <main>
        <div>
<?php

$foo = include 'echo_text_2.php';

echo $foo; // prints 'PHP'
?>
<br>

		</div>  <!-- Use whatever tags are appropriate for content. -->
    </main>
    <footer>
        <div></div>  <!-- Use whatever tags are appropriate for content. -->
    </footer>
</div>

</body>
</html>