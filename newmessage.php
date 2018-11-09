<?php 
session_start();

if(ISSET($_POST['message']))
{
$con=mysqli_connect("127.0.0.1","root", "", "ChatRoom");
// Check connection
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}


function get_client_ip() {
  $ipaddress = '';
  if (isset($_SERVER['HTTP_CLIENT_IP']))
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
  else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_X_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
  else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_FORWARDED'];
  else if(isset($_SERVER['REMOTE_ADDR']))
      $ipaddress = $_SERVER['REMOTE_ADDR'];
  else
      $ipaddress = 'UNKNOWN';
  return $ipaddress;
}

$ip = get_client_ip();//gets the ip as soon as the user clicks submit

$search1 = "SELECT ip_address FROM BannedUsers WHERE ip_address='$ip'";//makes the search to the banned users db
$bquery1 = mysqli_query($con, $search1);//executes the sql query
$check1 = mysqli_num_rows($bquery1);//is there a matching banned ip?
if ($check1>0){
  echo 'nope, u are banned sorry<br>';//outputs message to banned user


  exit();//exits so they can't type in chat
  session_destroy();
}

//use real escape string to prevent injection attacks on database
//you need to use this after you create the connection by the way
$message = mysqli_real_escape_string( $con, $_POST['message']);
$username = mysqli_real_escape_string( $con, $_SESSION['username']);
$email = mysqli_real_escape_string( $con, $_SESSION['email']);

$search2 = "SELECT email FROM BannedUsers WHERE email='$email'";//makes the search to the banned users db
$bquery2 = mysqli_query($con, $search2);//executes the sql query
$check2 = mysqli_num_rows($bquery2);//is there a matching banned ip?
if ($check2>0){
  echo 'nope, u are banned sorry<br>';//outputs message to banned user


  exit();//exits so they can't type in chat
  session_destroy();
}

//list of banned words here
$badWords = array("fuck","shit","bitch","pussy","ass","asshole","cunt","motherfucker","retard","fucking");

$matches = array();//make an array of matches
$matchFound = preg_match_all(
                "/\b(" . implode($badWords,"|") . ")\b/i", 
                $message, 
                $matches
              );

if ($matchFound) {//did you find a bad word?
  $words = array_unique($matches[0]);
  foreach($words as $word) {//find which bad word was used
    echo "<li>" . 'you can not use the word: '. $word . "</li>";
  }
  echo "</ul>";
  //increment the number of times the user violates profanity rules
  $_SESSION['strikes']=$_SESSION['strikes']+1;

  if($_SESSION['strikes'] == 1){//to compensate for mistakes
    $message = 'I can not submit this message because of the profanity in it';
    echo "you will be banned next time you violate the chat room agreement.";
  }

  else if($_SESSION['strikes'] >= 2){//this wasnt a mistake from this user
    echo 'You are banned from my chat room </br>';

    //add this user and it's ip address into the database of banned users
    $banquery = "INSERT INTO BannedUsers (email, reason_for_ban, ip_address)
    VALUES ('$email', '$message', '$ip')";

    $banresult = mysqli_query($con, $banquery);
    
    exit();
    session_destroy();
    $message = $username . ' violated the chat agreement and was banned';
    
  }
}

$sql = "INSERT INTO Messages (message, username)
VALUES ('$message','$username')";

$result = mysqli_query($con, $sql);

mysqli_close($con);
}

echo '<html>';
echo '<head></head><body>';
echo '<form action="newmessage.php" method="POST">';
echo '<textarea name="message" cols="40" rows="5" maxlength= "100"></textarea>';
echo '<input type="submit" name="Send"/>';
echo '</form>';
echo '</body></html>';

?>