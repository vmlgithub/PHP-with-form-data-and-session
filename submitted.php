<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>

    <style>
    body{
        text-align: center;   
    }    
    .container{
        font-family: Comic Sans MS, Comic Sans, cursive;
        display: inline-block;
        margin-top: 50px;
    }
    p{
        margin-left: -150px;
    }
    li{
        text-align: left;
        list-style-type: none;
        white-space:pre;
    }  
        
    </style>    
</head>
<body>
    <div class="container">
    <u><p>Submitted Information</u>
    <ul><li>Name:<?php echo "                        ".$_POST['firstname']; ?></li>
        <li>Dojo Location: <?php echo "          ".$_POST['location']; ?></li>
        <li>Favorite Language: <?php echo "   ".$_POST['language']; ?></li>
        <li>Comment: <?php echo "                 ".$_POST['comment']; ?></li>
    </ul>
    <a href="http://localhost:8888/louie/php-2-assignment-1-survey-form-final.php"><button >Go Back</button></a>
    </div>   
</body>
</html>
