<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("66.96.162.92", "coderspath", "Bottommos231!", "demo");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$event_name = mysqli_real_escape_string($link, $_POST['event_name']);
$event_host = mysqli_real_escape_string($link, $_POST['event_host']);
$event_address = mysqli_real_escape_string($link, $_POST['event_address']);
$event_time = $_POST['event_time'];
$event_date = $_POST['event'];
$event_difficulty = $_POST['event_difficulty'];
$event_description = mysqli_real_escape_string($link, $_POST['event_description']);
$event_url = mysqli_real_escape_string($link, $_POST['event_url']);
$event_phone = mysqli_real_escape_string($link, $_POST['event_phone']);


// attempt insert query execution
$sql = "INSERT INTO Event (EventName, Host, EventAddress, EventDate, EventDate, EventTime, EventEmail, EventURL, PhoneNumber, ExperienceLevel, EventID) VALUES ('$event_name', '$event_host', '$event_address', '$event_date', '$event_time', '$event_email', '$event_url', '$event_phone', '$event_difficulty')";
if (mysqli_query($link, $sql)){
    header('Location: http://www.coderspath.net/signin');
} else {
    echo "ERROR: Could not execute querry " . mysqli_error($link);
    header('Location: http://www.coderspath.net/');
}

// close connection
mysqli_close($link);
?>


<?php
$link = mysqli_connect("66.96.162.92", "coderspath", "Bottommos231!", "demo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$user_first_name = mysqli_real_escape_string($link, $_POST['first_name']);
$user_last_name = mysqli_real_escape_string($link, $_POST['last_name']);
$user_address = mysqli_real_escape_string($link, $_POST['user_address']);
$user_level = $_POST['user_level'];
$user_email = mysqli_real_escape_string($link, $_POST['user_email'])
$user_description = mysqli_real_escape_string($link, $_POST['user_description']);
$user_hashed = password_hash(mysqli_real_escape_string($link, $_POST['user_password']), PASSWORD_DEFAULT);

$sql = "INSERT INTO User (First, Last, Address, Experience, Email, HashedPass, Description) VALUES ('$first_name', '$last_name', '$user_address', '$user_level', '$user_email', '$user_hashed', '$user_description')";
if (mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header('Location: http://www.coderspath.net/signin');
} else {
    echo "ERROR: Could not execute querry " . mysqli_error($link);
    header('Location: http://www.coderspath.net/');
}

mysqli_close($link);
?>