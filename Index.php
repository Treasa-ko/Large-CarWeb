<!DOCTYPE html>
<?php
include('db_large.php');
?>
<html>
<head>

	<title>MCCF</title>
	<script src="jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="css/all.min.css">
	
	<style type="text/css">
	body{
		margin: 0px;
		padding: 0px;
		background:#202833;
	}
	h1{
		text-align: center;
		color:#66FCF1;

	}
	textarea{
		font-size: 17px;
	}
	 

	.top a{
		background: #202833;
		text-decoration: none;
		padding: 6px;
		font-size: 17px;
		border: 1px solid #46A29F;
		color: white;
		border-radius: 5px;
		cursor: pointer;
	}
	.top a:hover{
		color:black ;
		outline: none;
		background:#66FCF1;
	}
	hr{
		border: 1px solid grey;
	}
	.navi{
		margin-top: 70px;
	}
	.navi a{
		color: white;
		text-decoration: none;
		padding: 10px;
		margin: 50px;
		font-size: 25px;
	}
	.navi a:hover{
		border: 1px solid #46A29F;
		color:black;
		background:#66FCF1;
		border-radius: 20px;
	}
	.home{
		display: flex;
		justify-content:center;
		margin-bottom: 80px;
	}
	.para{
		width: 50%;
		margin-right: 90px;
		margin-top: 50px;

	}
	.para button{
		outline: none;
		border: none;
		background:#202833;
		color:#dce2e2;
		font-size: 15px;
		letter-spacing: 3px;
		position: absolute;
		margin: 0px 80px 0px 80px;
	}
	.para button:hover{
		color:#5ee7df ;
	}

	.image{
		width:30%;
		margin-top: 100px;
		box-shadow: 10px 10px 20px #46A29F, -10px -10px 20px #202833; 
		height: 350px;
		border-radius: 10px;
		border: 3px solid #5ee7df;

	}
	.home p{
		color:#5ee7df;
		text-indent: 50px;
		text-align: justify;
		letter-spacing: 2px;
		line-height: 30px;
		font-size: 20px;
	}
	.form{
		width: 25%;
		margin: 20px; 	
	}
	.form input{
		border: 2px solid black;
		margin:15px;
		width: 85%;
		height: 30px;
		border-radius: 3px;
		outline: 2px solid #66FCF1 ;
	}
	.form textarea{
		border: 2px solid black;
		margin:15px;
		width: 85%;
		height: 55px;
		border-radius: 3px;
		outline: 2px solid #66FCF1 ;
	}
	.save{
		
		/*margin: 10px 10px 10px 90px;*/
		float: left;
		margin: 10px 30px 10px 150px;
		background:#66FCF1;
		color: black;
		outline: none;
		padding: 8px;
		font-size: 15px;
		border-radius: 6px;
	}
	.cancel{
		float: right;
		margin: 10px 150px 10px 20px;
		background:#66FCF1;
		color: black;
		outline: none;
		padding: 8px;
		font-size: 15px;
		border-radius: 6px;
	}
	.save:hover,.cancel:hover{
		background: #202833;
		color: #66FCF1;
	}
	.rule{
		display: flex;
		justify-content:center;
	}
	.rule div{
		width: 40%;
		margin: 0px 40px 20px 40px;
	}
	.mem{
		display: flex;
		justify-content:center;
	
	}
	.mem div{
		width: 20%;
		margin: 15px;
	}
	.mem h3{
		text-align: center;
		color: #5ee7df;
	}
	.mem p{
		color:#dce2e2;
		text-indent: 50px;
		text-align: justify;
		letter-spacing: 1px;
		line-height: 25px;
		font-size: 18px;
	}
	.link{
		text-align: center;
	}
	.link a{
		margin: 15px;
		font-size: 18px;
		cursor: pointer;
	}
	.activity{
		display: flex;
		justify-content:center;
		width: 70%;
		align-items:center;
		margin: auto;
		background: #202833;
		box-shadow: 10px 10px 20px #5ee7df , -5px -5px 10px #dce2e2;
	}
	.activity>div{
		width: 100%;
	}
	.activity>div>div{
		display: flex;
		justify-content:center;
		width: 100%;
	}
	.activity>div>div>div{
		width: 30%;
		margin: 15px;

	}
	.pact{
		color:#5ee7df;
		text-indent: 50px;
		text-align: center;
		letter-spacing: 2px;
		font-size: 20px;
	}
	.framecontact
	{
		display: flex;
		justify-content:center;

	}
	.contact{
	display: flex;
	justify-content:center;
	background:#5ee7df ;
	margin-bottom: 30px;
	}
	.contact>div{

		width: 30%;
		padding: 20px 20px 10px 50px;
		margin: 5px;
	}
	pre{
		font-size: 15px;
	}
	.meetus{
		display: flex;
		justify-content:center;
	}
	.mapp{
		width: 50%;
		}

	.formmap{
		width: 30%;
		}
		.meetus div{
			margin: 30px;
		}
		.question input{
			width: 40%;
			height: 25px;
			outline: 2px solid black ;
			border: 1px solid #dce2e2;
			font-size: 16px;	
		}
		.question textarea{
			width: 58%;
			height: 130px;
			margin-left: 100px;
			margin-right:100px;
			outline: 1px solid black ;
			border: 1px solid #dce2e2;
			font-size: 16px;

		}
		/*.newhr {
  				border-top: 1px solid #5ee7df;
  				opacity: 0.2;
  			}*/
  		.upload
  		{
  			background: #202833;
  			color: white;
  			border-radius: 4px;
  			border:2px solid #5ee7df;
  			margin-left: 170px;
  			margin-top: 25px;
  			padding: 5px;
  			margin-bottom: 10px;
  			letter-spacing: 2px;
  			font-size: 15px;
  		}
  		.upload:hover
  		{
  			color:#202833 ;
			outline: none;
			border: 2px solid black;
			background:#66FCF1;
			cursor: pointer;
  		}
  	
  		.logo{
  			height: 130px;
  			width: 20%;
  			margin: auto;
  			margin-bottom: 100px;
  		}
  		.footer a{
  			color: #5ee7df;

  		}
  		.footer{
  		
  			height: 100px; 
  		}
  		.social{
 			/*background: #dce2e2;*/
  			position: absolute;
  			margin-left: 500px;
  			margin-right: 500px;
  			width: 50%;


  		}
  		.social a{
  			margin: 30px;
  		}
  		.lhr{

  				border-top: 1px solid red;
  				opacity: 0.2;
  		}
  		.design{
  			height: 35px;
  			background: #dce2e2;
  		}
  		.me{
  			color: #544444;
  			text-align: center;

  		}
  		.large{
  			width: 200px;
  			height: 80px;
  			margin-left: 40px;
  			margin-bottom: 45px;
  		}

  		

	

	



	</style>

</head>
<body>	
<!-- <pre style="color:#dce2e2;font-size: 18px"> -->
	<div class="large">     
<img src="Large2.png" width=100%>
	</div>	
<!-- </pre>	 -->
	
		<h1 id="home">Large</h1>

	

	
	


<!-- ....................................Navi......................................... -->
	<div class="navi">
		<a href="#home">Home</a>
		<a href="#history">History</a>
		<a href="#about">About Us</a>
		<a href="#mem">Member Card</a>
		<a href="#con" class="co">Contact Us</a>
	</div>
<!-- 	..........................Home............................... -->
		<div class="home">

			<div class="para" id="history">
				<h2 style="color:#dce2e2"><ins><i>Our Brief</i></ins></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

					<button onclick="show()" id="aa">Continue Reading.....</button>

				<p id="original" style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
					<button onclick="hide()" id="hh" style="display:none">See Less.....</button>
			</div>
			<div class="image">
				<img src="board.jpeg" width=100% height="350px" style="opacity:0.9">
			</div>
		</div>

		<!-- .........................About Us.............................. -->
		<h2 align="center" style="color:#dce2e2" id="about"><ins><i>About Us</i></ins></h2>
		<div class="mem">
			<div id="ceo">
				<img src="ceo.jpeg" border="3px" width=100% style="opacity:0.9">
				<h3><strong>Founder of Large</strong></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. 
				</p>
			</div>

			<div id="man">
				<img src="man.jpeg" border="3px"  width=100% style="opacity:0.9">
				<h3><strong>Manager</strong></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</p>
			</div>

			<div style="display:none" id="leader">
				<img src="member.png" border="3px"  width=100% height="310px" style="opacity:0.9">
				<h3><strong>Team Leader</strong></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</p>
			</div>

			<div style="display:none" id="moder">
				<img src="girl.png" border="3px" width=100% height="310px" style="opacity:0.9">
				<h3><strong>Moderator</strong></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat
				</p>
			</div>

		</div>
		<div class="link" style="margin-bottom:75px">
		<a id="tit" style="color:#5ee7df">1</a> <a id="hnint" style="color:#5ee7df">2</a> <a onclick="three()" id="thone" style="color:grey">3</a> <a onclick="four()" id="lay" style="color:grey">4</a> 
		<a onclick="back()" style="display:none;color:#46A29F;letter-spacing:2px" id="bac">
		<strong><ins>Back</ins></strong></a>
		</div>
	<!-- 		..............................Our Activity............................ -->
<h2 align="center" style="color:#dce2e2;margin-bottom:30px"><ins><i>Activity of Large</i></ins></h2>
<p class="pact"> <i class="fas fa-arrow-circle-down" style="font-size:30px"></i>You can check out here what we are carring on of our club. </p> 
<div class="activity">
	<div>
	<h3 align="center" style="color:#5ee7df;letter-spacing:2px">Gallery</h3>
		<div>
			<div><iframe width=100%  style="border:1px solid grey" height="315" src="https://www.youtube.com/embed/bHWgc5MPnPA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			<div><iframe width=100% style="border:1px solid grey" height="315" src="https://www.youtube.com/embed/FpLNFPzttX8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			<div><iframe width=100% style="border:1px solid grey" height="315" src="https://www.youtube.com/embed/gUUS3_bz-rw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
		</div>
		<div>
			<div><iframe width=100% style="border:1px solid grey" height="315" src="https://www.youtube.com/embed/ALtGqSdt-4w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			<div><iframe width=100% style="border:1px solid grey" height="315" src="https://www.youtube.com/embed/LWQzlyEsEdo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			<div><iframe width=100% style="border:1px solid grey" height="315" src="https://www.youtube.com/embed/FLMN-c30Z08" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
		</div>
	</div>
</div>
		<!-- ...........................Our Rules and Regulations....................... -->
		<h2 align="center" style="color:#dce2e2;margin-top:75px" id="mem"><ins><i>Our Rules and Regulations</i></ins></h2>
	<div class="rule">
			<div>
			<h3 style="color:red;letter-spacing:2px;word-spacing:3px">How to Be a Member...</h3>
				<p style="text-align:justify;color:#5ee7df;letter-spacing: 2px;line-height: 30px;font-size: 20px;text-indent:50px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="top">
					<a onclick="sign()" id="sign">Sign Up Here!</a>
				</div>
				</p>
			</div>

	
			<div class="form" id="mform" style="background:#202833;display:none">
			<form method="POST" class="memform">

			<fieldset style="border:2px solid black">
				<legend style="color:#66FCF1"><h3>Member Registration</h3></legend>
				<input type="text" name="Name" placeholder="Enter YourName"  style="font-size:16px" class="one" autocomplete="off" required> <br>
				<input type="text" name="Email" placeholder="Enter YourEmail" required style="font-size:16px"  class="one" autocomplete="off" ><br>
				<input type="number" name="Phno" placeholder="Enter YourPhno" required style="font-size:16px" class="one" autocomplete="off"><br>
				<textarea placeholder="Enter YourAddress" name="Address" class="one" autocomplete="off" required></textarea>
				<button onclick="save()" class="save">Save</button> <button onclick="cancel()" class="cancel" type="reset">Cancel</button>
			</fieldset>

		</form>
		</div>	
	</div>
	<?php
		if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Phno']) && isset($_POST['Address']))
		{
			$Name=$_POST['Name'];
			$Email=$_POST['Email'];
			$Phno=$_POST['Phno'];
			$Address=$_POST['Address'];

			$sql="INSERT INTO member(name,email,phno,address) VALUES ('$Name','$Email','$Phno','$Address')";
			mysqli_query($connect,$sql);
		}
	?>

<!-- 	 -->

<!-- .....................................Contact Us............................ -->
	<h2 align="center" id="con" class="conta" style="color:#dce2e2;margin-top:40px"><ins><i>Contact Us</i></ins></h2>
	<div class="framecontact">
		<div></div>
		<div><div class="contact">
		<div>
		<pre><i class="fas fa-2x fa-address-book"></i><b>	No.45, Adam Street, <br><br>	Alexandria, USA.</b></pre></div>

		<div><pre><i class="fas fa-2x fa-phone-square-alt"></i><b>	+126880463217 <br><br><i class="fas fa-2x fa-envelope-open"></i>	largeOffice@gmail.com</b></pre></div>
		
		<div><i class="fas fa-3x fa-map-marker-alt" style="color:red"></i></div>
	</div></div>
		<div></div>
	</div>
	
	<div class="meetus">
		<div class="mapp">
			
			<iframe style="border:3px solid #dce2e2;border-radius: 3px 10px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49740.12080038484!2d-77.12584296781952!3d38.81510827318787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64d3e93a4abf1%3A0xd7f52686dbc1012c!2sAlexandria%2C%20VA%2C%20USA!5e0!3m2!1sen!2smm!4v1600686706172!5m2!1sen!2smm" width=100% height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="formmap">
		<h2 align="center" style="color:#dce2e2;margin-top:10px">Have Some Questions?</h2>
			<form method="POST" class="question"style="border:3px solid #5ee7df;border-radius:10px 3px;padding:10px">

				<h3 align="center" style="color:#5ee7df">
					Name:  
					<input type="text" name="name" style=" margin-left:10px" autocomplete="off" required>
				</h3>

				<h3 align="center" style="color:#5ee7df">
					Email:  
					<input type="email" name="email" style="margin-left:9px" autocomplete="off" required>
				</h3> <!-- <hr class="newhr"> -->

				<h3 align="center" style="color:#5ee7df">
					Title: 
					<input type="text" name="title" style="margin-left:18px" autocomplete="off" required>
				</h3>

			 <textarea name="description" placeholder="Enter Your Description" autocomplete="off" required></textarea> <br>

			 <button onclick="upload()" class="upload">Upload</button> 	

			</form>
		</div>
	</div>
	<?php
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['description']))
		{
			$Name=$_POST['name'];
			$Email=$_POST['email'];
			$Title=$_POST['title'];
			$Description=$_POST['description'];

			$sql="INSERT INTO complain(name,email,title,description) VALUES ('$Name','$Email','$Title','$Description')";
			mysqli_query($connect,$sql);
		}
	?>


	 <!-- ......................................Footer.................................... -->
	<hr class="lhr">
<div class="logo">
		<img src="Logo.png" width=100%>
	</div>
<div class="footer">
	<div class="social">
		<a href="#"><span class="fab fa-2x fa-facebook-f"></span></a>
		<a href="#"><span class="fab fa-2x fa-twitter"></span></a>
		<a href="#"><span class="fab fa-2x fa-instagram"></span></a>
		<a href="#"><span class="fab fa-2x fa-youtube"></span></a>
	</div>	
</div>
<div class="design">
	<h3 class="me"> Designed n Encoded  By // Treasa Ko</h3>
</div>


		<!-- ...............................Script..................................... -->
		<script type="text/javascript">
		function show(){
		document.getElementById('original').style.display="block";
		document.getElementById('aa').style.display="none";
		document.getElementById('hh').style.display="block";

		}
		function hide(){
			document.getElementById('original').style.display="none";
			document.getElementById('hh').style.display="none";
			document.getElementById('aa').style.display="block";
		}
		function sign(){
			document.getElementById('mform').style.display="block";
			document.getElementById('sign').style.display="none";
		}
		function three(){
			document.getElementById('leader').style.display="block";
			document.getElementById('ceo').style.display="none";
			document.getElementById('moder').style.display="none";
			document.getElementById('man').style.display="none";
			document.getElementById('tit').style.color="grey";
			document.getElementById('hnint').style.color="grey";
			document.getElementById('lay').style.color="grey";
			document.getElementById('thone').style.color="#5ee7df";

		}
		function four(){
			document.getElementById('moder').style.display="block";
			document.getElementById('ceo').style.display="none";
			document.getElementById('man').style.display="none";
			document.getElementById('leader').style.display="none";
			document.getElementById('bac').style.display="block";
			document.getElementById('tit').style.color="grey";
			document.getElementById('hnint').style.color="grey";
			document.getElementById('thone').style.color="grey";
			document.getElementById('lay').style.color="#5ee7df";
		}
		function back(){
			document.getElementById('ceo').style.display="block";
			document.getElementById('man').style.display="block";
			document.getElementById('moder').style.display="none";
			document.getElementById('leader').style.display="none";
			document.getElementById('bac').style.display="none";
			document.getElementById('thone').style.color="grey";
			document.getElementById('lay').style.color="grey";
			document.getElementById('tit').style.color="#5ee7df";
			document.getElementById('hnint').style.color="#5ee7df";
		}
		function cancel(){
			document.getElementById('mform').style.display="block";
		}
		// function save()
		// {
		// 	if($('.one').val(null))
		// 	{
		// 		alert("Please Fill All");
		// 	}
		// 	else
		// 	{
		// 		alert("Thank You");
		// 	}
		// }
		function save()
		{
			alert("Thank You For Joining Us")
		}
		function upload()
		{
			alert("Thanks, we will contact you soon!")
		}

		// $('.co').click(function()
		// {
		// 	$('.conta').appendTo('.framecontact');
		// });

</script>
</body>
</html>