<?php
$name = $_POST['names'];
$number = $_POST['contact'];
$mailid = $_POST['mailid'];
$message = $_POST['msg'];

$conn=new mysqli('localhost', 'root', '', 'test');
// if($conn->connect_error){
//     echo 'The error is:'. $conn->connect_error;
// }
// else{
//     echo 'connected successfully!';
// }
// $var1 = 'CREATE TABLE Portfolio (P_Name varchar(30), Contact_number varchar (10), Mail_ID varchar(40), Message_received varchar(100))';
// $query = $conn->query($var1);
// if($query == true){
//     echo 'table created successfully!';
// }
// else{
//     echo 'table not created!';
// }

$var2 = "INSERT INTO Portfolio (P_Name, Contact_number, Mail_ID, Message_received) VALUES('$name', '$number', '$mailid', '$message')";
$query = $conn->query($var2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="./portfoliostyling.css">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Kenia|Lobster|Courgette|Sriracha|Tourney|Monoton|Racing Sans One">
    <style>
        .firstdiv{
        display:flex;
        flex-direction:row;
        align-items:center;
        flex-wrap:wrap;
        justify-content:space-evenly;
        width:100%;
        height:500px;
        font-family:Courgette;
        color:rgb(54, 24, 24);
        }
        nav{
            height:45px;
            background-color:rgb(165, 126, 126);
            width:100%;
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            align-items:center;
            letter-spacing:2px;
            font-family: Courgette;
            color: rgb(233, 228, 228);
        }
        nav a{
            text-decoration-line:none;
        }
    </style>
</head>
<body>
<nav id='nav'>
   <div style='padding:0px 20px; cursor:pointer;'>SHARMILA GUNASEKARAN</div>
   <div><a href='portfolionw.php'>Home</a></div>
</nav>
    <div class='firstdiv'>
    <img src='images/girlweb.png' alt='Girlweb' height='500px' width='500px'>
    <h1>Great <?php echo $name?>! Your message has been received. <br/>Expect a response shortly.</h1>
    <div>
</body>
</html>