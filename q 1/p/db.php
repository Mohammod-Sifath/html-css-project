<?php 
function Createdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="labf1";

    $con=mysqli_connect($servername,$username,$password);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }

    $sql="CREATE DATABASE IF NOT EXISTS $dbname";
    if(mysqli_query($con,$sql)){
        $con=mysqli_connect($servername,$username,$password,$dbname);

        $sql="
            CREATE TABLE IF NOT EXISTS q1(
                id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(25) NOT NULL,
                age VARCHAR(25) NOT NULL,
                username VARCHAR(25) NOT NULL,
                password VARCHAR(25) NOT NULL
            );
        ";
        if(mysqli_query($con,$sql)){
            return $con;
        }
        else{
            echo "Cannot create table.";
        }
    }
    else{
        echo "Error while creating database".mysqli_error($con);
    }
}
?>