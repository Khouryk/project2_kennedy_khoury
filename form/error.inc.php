<style type="text/css">

 * {
  margin: 0;
  padding: 0;
  border: 0;
 }


/*nav bar css */
 nav {
  font-size: 20px;
  font-family: Montserrat;
  text-align: center;
  margin: 60px;

 }

 a {
  text-decoration: none;
  color:#73806A;
	font-weight: bold;
 }

 li {
  display: inline-block;
  padding: 20px;
 }


 nav a:hover {
  color: #ABBAA4;
  transition: .5s;
 }

 body{
  background: #E7EAE5;
 }
 .container {
	Max-width:900px;
	Margin:0 auto;
	Text-align: center;
  Padding: 20px;
  Max-width: 500px;
  Color: white;
  Font-family: Karla, sans-serif;
  Margin: 0 auto;
  Text-align: left;
}

</style>


<header>
	<nav>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="about.html">ABOUT</a></li>
			<li><a href="videos.html">VIDEOS</a></li>
			<li><a href="graphics.html">GRAPHICS</a></li>
			<li><a href="contact.html">CONTACT</a></li>
		</ul>
	</nav>
</header>




<div class="container">
 	<h1>Missing fields</h1>
 	<p>Sorry, you have not completed all of the required fields.</p>
 	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
