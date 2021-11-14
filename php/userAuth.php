<?php

$l_username = $l_password = $l_mno = $s_username = $s_password = $s_mno = "";
$l_error_username = $l_error_password = $l_error_mno = "";
$s_error_username = $s_error_password = $s_error_mno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $l_username = test_input($_POST["l_username"]);
    $l_password =  test_input($_POST["l_password"]);
    $l_mno =  test_input($_POST["l_rno"]);
    $s_username =  test_input($_POST["s_password"]);
    $s_password =  test_input($_POST["s_username"]);
    $s_mno =  test_input($_POST["s_rno"]);

    $l_error_username = validateData($l_username);
    $l_error_password = validateData($l_password);
    $l_error_mno = validateData($l_mno);
    $s_error_username = validateData($s_username);
    $s_error_password = validateData($s_password);
    $s_error_mno = validateData($s_mno);

    if(($l_username != "" && $l_password != "" && $l_mno != "")){
        header("Location: ../pages/dashboard.php");
    }
    else if(($s_username != "" && $s_password != "" && $s_mno != "")){
        header("Location: ../pages/dashboard.php");
    }
    else{
        echo "Error";
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateData($data){

    $error = "";

    if(empty($data)){
        $error = "Please fill this field";
    }else{
        $error = "";
    }

    return $error;
}

?>