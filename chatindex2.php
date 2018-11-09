<html>
<head>
    <title> Chat Room Login </title>
</head>
    <link rel="stylesheet" type="text/css" href="chatindex2.css">
    <?php
    session_start();
    ?>

    <body>
        <div class="loginbox">
            <img src="avatar.png" class="avatar">
            <h1>Create Username Here</h1>
                <form action="chatroom.php" method="POST" autocomplete="off">
                    <p> Username </p>
                    <input type="text" name="username" placeholder="letters and numbers only">
                    <p> Email </p>
                    <input type="text" name="email" placeholder="enter a valid email address">
                    <input type="submit" name="Enter"/>
                </form>
        </div>
    </body>
</html>