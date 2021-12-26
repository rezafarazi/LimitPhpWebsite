<?php

    $dbname1="databasename";
            $address1 = "127.0.0.1";
            $user1="databasename";
            $password1 = "L06S*kX6J}LW";
        $ips = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);


    $show=true;

	$conn = new mysqli($address1, $user1, $password1, $dbname1);

	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM logs";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{

	    while($row = $result->fetch_assoc()) 
	    {
		
    		if($row['ip']==$ips)
    		{
    			header("location:https://www.google.com/");
    			$show=false;
    			break;
    		}

	    }
	}
	$conn->close();




?>
