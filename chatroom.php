
<?php
session_start();

$_SESSION['username']=$_POST['username'];
if (!preg_match("/^[a-zA-Z@.0-9-_ ]*$/", $_SESSION['username'])) {
    echo "<script>
        window.setTimeout(function() {
            window.location.href = 'chatindex2.php';
        }, 1000);
        </script>"; //fix this so that it would work online
    session_destroy();
    exit();   
}

$_SESSION['email']=$_POST['email'];
$email= $_SESSION['email'];
if (!preg_match("/^[a-zA-Z@.0-9-_ ]*$/", $email)) {
    echo "<script>
        window.setTimeout(function() {
            window.location.href = 'chatindex2.php';
        }, 1000);
        </script>"; //fix this so that it would work online
    session_destroy();
    exit();      
}
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sleep(1);
} else {
    echo "<script>
        window.setTimeout(function() {
            window.location.href = 'chatindex2.php';
        }, 1000);
        </script>"; //fix this so that it would work online
    session_destroy();
    exit();
  }

$_SESSION['strikes']=0;

?>

<html>
    <head>
        <title> Trevor's Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    </head>

    <FRAMESET cols="200,*">
        <FRAME src="sidebar.php">
        <FRAMESET rows="*,200">
            <FRAME src="messages.php">
            <FRAME src="newmessage.php">
        </FRAMESET>
    </FRAMESET>

            
</html>