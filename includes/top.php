<?php 
session_start();

// connect databace
require_once 'dbconection.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width,initail-scale=1.0">
    <title>Newguru</title>
    <link rel="img1" href="css/img1.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="icon" href="Images/Logo3.png" type="image/icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #FFFFFF;
    }
    </style>
</head>

<body>
    <header>
        <img src="css/Logo.png" alt="logo" width="120" height="125" align="left">
        <center>
            <h1>Newguru</h1>
        </center>
<?php 
$none ='';
$block ="none";
$img='';
if(isset($_SESSION['user_id'])){
    $none ='none';
    $block ="";
    // get user info
$get_user_details= mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM users WHERE id = '". $_SESSION['id']."'"));
if($get_user_details['profile'] == ''){
    $img = 'css/user.png';
} else{
    $img = 'images/'.$get_user_details['profile'];
}
}
?>
        <a href="login.php" class="userBtn"><img src="css/user.png" alt="profile" style="width:42px;height:42px;display:<?=$none?>"></a>
        <a href="user_accunt.php" class="userBtn"><img src="<?=$img?>" alt="profile" style="width:42px;height:42px;display:<?=$block?>"></a>
    <a href="logout.php" class="logoutBtn"><b>LOGOUT</b></a>
    </header>
    <!--navigation-->
    <div class="topnav">
        <a  class="active" href="index.php">Home</a>
        <a href="courses1.php">Courses</a>
        <a href="courses.php">My courses</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="What do you want to learn?" name="search">
                <button type="submit"><i class="fa fa-search">Search</i></button>
            </form>
        </div>
    </div>