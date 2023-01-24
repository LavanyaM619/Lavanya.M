<?php

include "includes/top.php";
if(isset($_SESSION['user_id']))
{
 header("location:index.php");
}

$email = $pwd='';
if(isset($_POST['login_now'])){
  

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$emailCacke = mysqli_query($db,"SELECT * FROM users WHERE email = '". $email."'");
$count = mysqli_num_rows($emailCacke);
if($count == 1){
   
    $password = md5($pwd);
   
    $getUserDetails = mysqli_fetch_assoc($emailCacke);
   
    if( $password == $getUserDetails['password']){
        $_SESSION['user_id']= $getUserDetails['user_id'];
        $_SESSION['f_name']= $getUserDetails['f_name'];
        $_SESSION['id']= $getUserDetails['id'];
      echo'<script>alert("GURU Success!");window.location.href="index.php";</script>';
    }else{
        echo '<Script>alert("Login Failed! Password warning!")</Script>';
    }

} else{
    echo '<Script>alert("Login Failed! Email address Not registered!")</Script>';
}


}
?>
   <div class="container">
    <div class="login_page">
   

        <center>
            <img src="css/user.png" class="user" width="80" height="80" alt="">
            <h3>LogIn</h3>

            <form action="" method="post">
                <div class="input-group">
                    <div class="input-group-area">
                        <input type="email" placeholder="E-mail" name="email" value="<?=$email?>" required>
                    </div>
                    <div class="input-group-icon"><img src="css/user.png" width="15" height="15" ></div>
                </div>
                <div class="input-group">
                    <div class="input-group-area">
                        <input type="password" placeholder="password" name="pwd" <?=$pwd?> required>
                    </div>
                    <div class="input-group-icon"><img src="css/key.png" width="15" height="15" alt=""></div>
                </div>
                <div class="input-group">
                        <button  type="submit" name="login_now" class="btn" >Login Now</button>                    
                </div>
                <div class="signup">
                    <span>Don`t Have An Accoutn </span><a href="signup1.php" > SignUp?</a>
                </div>
                <br>

            </form>
        </center>
		<br>
		<br>
		<br>
		<br>
     </div>
    </div>

<?php 

include 'includes/footer.php';
?>