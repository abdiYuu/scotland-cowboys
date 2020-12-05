<!DOCTYPE php>
<html>
<head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
	html,body{
	height:100%;
	margin:0;
    }
.menu{
  	overflow: hidden; <!-- this makes the list turn horizontal and gets rid of the points-->
}
  div {
      display block;
}
.menu{
  	display: inline; <!-- displays everything within the line for the locations,gift cards, rewards and about us section.-->
}
li a{ 
	color:black;
  	padding: 20px 22px;
	text-decoration:none;
	font-family:cambria;
}
.menu:hover {
	background-color:grey; <!-- hovering background color-->
}
h1 {
	font-family:arial-black;
    font-size:40px;
}

.centered {
 	position:absolute;
    top:300px;
	width:100%;
	right:0%;
	text-align:center;
    color:white;
    font-family:algerian;
    font-size:40px;
}
footer {
  text-align:left;
  padding: 3px;
  
}

.email{
	margin:50px;
	max-width:5000px;
	color:black;
	font-size:6vw;
	font-family:cambria;
	margin-top: 250px;
	border:2px solid black;
}
.submit{
	background-color:black;
	padding: 3px 3px;
	border:none;
	cursor: pointer;
	width:25%;
	color: white;
}

.submissionfield { 
	width: 500px; 
	height: 30px; 
	border: 1px solid #999999; 
	padding: 5px; 

	}
.names{
	color:black;
	font-family:cambria;
	margin-left:20px;
	font-size:8px;
   }
    
   .center {
  margin: auto;
  width: 60%;
  border: 3px solid black;
  padding: 10px;
}

</style>
</head>

<body>
<a href="index.html" ><img src="images/logo.PNG" align="left" width="60px" height="60px" /></a>

<h1>Scotland Cowboys</h1>
	<ul>
		<strong>
		<li class="menu"><a href="locations.html">Location</a></li>
		<li class="menu"><a href="giftcards.html">Gift cards</a></li>
		<li class="menu"><a href="rewards.html">Rewards</a></li>
		<li class="menu"><a href="aboutus.html">About us</a></li>
		</strong>
   </ul>

<div class=center>
<h1>Thank you!</h1>

Your inquiry has been submitted, we will contact you via email at 
<?php echo $_POST["formemail"]; ?>.<div class=""></div><br><br>

</div>

<footer>
	<ul>
		<strong>
		<li class="menu"><a href="contact.html">Contact us</a></li>
		<a href="https://www.facebook.com/"><img src="images/facebook.png" align="right" width="30" height="30" style="margin-left:5px;"></a>
		<a href="https://twitter.com/login/"><img src="images/twitter.png" width="30" align="right" height="30"></a>
		</strong>
		<p><strong class="names">Scotland Cowboys: Alejandro Campos, Marck Gumboc, Josh Senek, Nikhil Gaur, Abdi Yusuf</strong></p>
	</ul>
</footer>


</body>
</html>