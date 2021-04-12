<?php
require_once("db.php");
require_once("component.php");


$con=Createdb();
 
if(isset($_POST['create'])){
    createData();
}
function createData(){
    $name=textboxValue("name");
    $age=textboxValue("age");
    $username=textboxValue("username");
    $password=textboxValue("password");

    if($name && $age && $username && $password){
        $sql = "INSERT INTO q1 (name,age,username,password) VALUES ('$name','$age','$username','$password')";

        if(mysqli_query($GLOBALS['con'],$sql)){
            echo "Record Successfully Inserted";
        }
        else{
            echo "Error";
        }
    }else{
        echo "Provide Data Please!!!";
    } 
}

function textboxValue($value){
    $textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;    }
}

function getData(){
    $sql="SELECT * FROM q1";
    $result=mysqli_query($GLOBALS['con'],$sql);


    if(mysqli_num_rows($result)>0){
        return $result;
        }
    }


?>
