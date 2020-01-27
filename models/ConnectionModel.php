<?php
	
	class Connection
	{
		
		var $con;
		
		function dbConnection()
		{
			$serverName = "localhost";
			$userName = "root";
			$password = "";
			$con = mysqli_connect($serverName, $userName, $password);
			
			if (!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }
			
			mysqli_select_db($con, "mvc");
			$this->con=$con;
		}
		
		function dbCloseConnection()
		{	 
			mysqli_close($this->con);
		}
		
	}
	
?>