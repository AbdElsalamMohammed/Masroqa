<?php
	function browse_by_category($category)
	{
		$con=mysqli_connect("localhost","root","08467474");
		mysqli_select_db($con,"pro");
		// Check connection
		if ($con->connect_error) {
   	    die("Connection failed: " . $con->connect_error);
		} 
		$sql = "SELECT photo , DESC_ , category , formlink FROM items where category='$category'";
		$result=mysqli_query($con,$sql) ;
		
		while ($row=mysqli_fetch_array($result))
		{
		 echo $row["photo"] . " <br />" ."description: ". $row["DESC_"] ." <br />". "category: " .  $row["category"] ." <br />". "claim: " .  $row["formlink"] ."<br />" ;
     	 echo "<br />";
		}
		
		
	}
	browse_by_category("phone"); //function call
?>