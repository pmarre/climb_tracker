<?php 

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "pwdpwd";
        $db = "climb_tracker";


        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: ". $conn->error);
        return $conn;
    }

    function CloseCon($conn) {
        $conn -> close();
    }
?>