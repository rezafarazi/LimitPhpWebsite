<?php


if($show==true)
{
            $dbname="databasename";
            $address = "127.0.0.1";
            $user="databasename";
            $password = "L06S*kX6J}LW";



            $DBH = new PDO("mysql:host=$address;dbname=$dbname", $user, $password);


            $date = date('m/d/Y h:i:s a', time());
            
            
            $ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);


            $current_file_name = basename($_SERVER['PHP_SELF']);

            $DBH->query("INSERT INTO `logs`(`date`, `page`,`ip`) VALUES ('$date','$current_file_name','$ip')");

}

?>
