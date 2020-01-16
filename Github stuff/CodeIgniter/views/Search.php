<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->library('session');

?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<?php
	//Create the menu as needed
	if(empty($_SESSION['username']))
	{
		//login
		print "<a href='http://raptor.kent.ac.uk/proj/co539c/microblog/jo343/ci/index.php/Message/index'>Login</a>";
		print "<br>";
	}
	else{

		$username = $_SESSION['username'];

		//Logout
		print "<a href='http://raptor.kent.ac.uk/proj/co539c/microblog/jo343/ci/index.php/User/logout'>Logout</a>";
		print "&nbsp;&nbsp;&nbsp;";

		//Messages
		print "<a href='http://raptor.kent.ac.uk/proj/co539c/microblog/jo343/ci/index.php/User/view/$username'>Messages</a>";
		print "&nbsp;&nbsp;&nbsp;";
	
		//Feed
		print "<a href='http://raptor.kent.ac.uk/proj/co539c/microblog/jo343/ci/index.php/User/feed/$username'>Feed</a>";		
		print "&nbsp;&nbsp;&nbsp;";

		//Post
		print "<a href='http://raptor.kent.ac.uk/proj/co539c/microblog/jo343/ci/index.php/Message/index'>Post</a>";		
		print "&nbsp;&nbsp;&nbsp;";

		//Search
		print "<a href='http://raptor.kent.ac.uk/proj/co539c/microblog/jo343/ci/index.php/Search/index'>Search</a>";		
		print "<br>";
	}

?>

<!-- Create the form for the text searching using the GET method -->
<form action="doSearch" method="get">
	Search : <input type="text" name="search" placeholder="Enter Search" class="input_box">
<input type="submit" value="Submit" class="submit">
</form>


</body>
</html>