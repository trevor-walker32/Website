<html>
    <head>
        <meta http-equiv="refresh" content="3">
    </head>
        <body>
        
            <?php

            //this is where the messages from the server will go.
            
            //connect to the localhost database
            $link = mysqli_connect('localhost','root','','ChatRoom');
            if(!$link){
                die('couldnt connect: '.mysqli_error());
            }

            $query= "SELECT * FROM Messages";
            if($result = mysqli_query($link, $query)){
                while($row = mysqli_fetch_row($result)){
                    echo $row['3'].' says: '.$row['1'].'</br>';
                }
                mysqli_free_result($result);
            }
            //close connection
            mysqli_close($link);


            ?>
        </body>
    </html>