<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$event_name = mysqli_real_escape_string($link, $_POST['Name of Event']);
$event_location = mysqli_real_escape_string($link, $_POST['Location of Event']);
$event_time = mysqli_real_escape_string($link, $_POST['Time of Event']);
$event_difficulty = mysqli_real_escape_string($link,$_POST['Difficulty of event'])

// attempt insert query execution
$sql = "INSERT INTO event (event_name, event_location, event_time, event_difficulty) VALUES ('$event_name', '$event_location', '$event_time', '$event_difficulty')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
