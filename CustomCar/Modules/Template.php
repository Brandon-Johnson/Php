<link rel="stylesheet" type="text/css" href="/CustomCar/css/template.css"/>

<?php
  session_start();
  if (isset($_SESSION['userId']))
  { 
  	echo "<div id=\"LogoutContainer\">";
  	echo "<a class=\"LogoutIcon\" href=\"/CustomCar/Logout.php\"></a>";
  	echo "</div>";

  }

?>
	<div id="mainBody">
	</div>
	

	<div id="headerBar">
		<div id="headerContent">
		</div>
	</div>

	<div id="navigationBar">
		<div id="navigationContent">

			<div class="navigationBox">
				<a class="navTabs" href="https://php-bdj.rhcloud.com/CustomCar/Home.php">Home</a>
			</div>

			<div class="navigationBox">
				<a class="navTabs" href="https://php-bdj.rhcloud.com/CustomCar/Store.php">Store</a>
			</div>

			<div class="navigationBox">
				<a class="navTabs" href="https://php-bdj.rhcloud.com/">CS 313 Home</a>
			</div>

		</div>
	</div>


	<div id="footerBar">
		<div id="footerContent">
			Created By: Brandon Johnson 2014
		</div>
	</div>	


