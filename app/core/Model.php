<?php

class Model
{
    public function db()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "";
        $port ="3306";

        return $con = mysqli_connect($host,$user,$pass,$db,$port);
    }
}