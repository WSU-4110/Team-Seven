<?php

    session_start();
    include "util/db_connect.php";


    $sql = "SELECT username FROM user_pass";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc())
    {
        if($row["username"] == $_POST["NewUsername"])//checks if user input matches a corresponding username and password in the database
        {

			$_SESSION["user_id"] =  $row["username"];
            header("Location: index.php");//sends user to homepage in the event of an invalid username (already taken)
            exit;
        }
    }


    $new_username = $_POST["NewUsername"];
    $new_password = $_POST["NewPassword"];


    $sql = "INSERT INTO user_pass (username, password) VALUES ('$new_username', '$new_password')";
    $result = $mysqli->query($sql);
	
	$image = imagecreatefrompng("../profile_pics/default_pic.png");
	if(rename($image, '../profile_pics/' . $new_username . '.jpeg'))
		$statusMsg = $new_username." uploaded successfully.";
	else
		$statusMsg = "Sorry, there was an error uploading your file.";
			
    header("Location: index.php");


?>
