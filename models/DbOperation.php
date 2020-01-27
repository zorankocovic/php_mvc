<?php include("ConnectionModel.php"); 


	class DbOperation
	{
		function dbSelect($columnsName)
		{
			$objConnection = new Connection();
			// object declaretion for using Connection class. Connection class is in ConnectionModel.php file
			$objConnection->dbConnection();
			$con = $objConnection->con;
			//$sql = "SELECT DISTINCT ".$columnsName." FROM ".$tablesName." WHERE ".$conditions;
			$result = mysqli_query($con, $columnsName)or die (mysqli_error($con));
			
			//var_dump($sql);
			//var_dump($result);
			$objConnection->dbCloseConnection();
			//var_dump($result);
			return $result;
		}
		

	}
	
?>