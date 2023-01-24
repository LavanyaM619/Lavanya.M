<?php

include "includes/top.php";


$f_name=$l_name=$email=$pwd ='';
if(isset($_POST['register'])){

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
 
    $pass = md5($pwd);
  
    $prefix = 'guru';
    $checkUserCount = mysqli_fetch_assoc(mysqli_query($db,"SELECT count(`user_id`) AS totalUser FROM users"));
    $inc = (int) $checkUserCount['totalUser']+1;
    $user_id = $prefix.$inc+1000 ;
  
    $checkUserEmail = mysqli_query($db,"SELECT * FROM users WHERE email = '". $email."'");
    if(mysqli_num_rows($checkUserEmail) > 0){
        echo '<Script>alert("Email already exists!")</Script>';
    } else{
        $sqlText= "INSERT INTO `users`( `user_id`, `f_name`, `l_name`, `email`, `password`) VALUES (' $user_id','$f_name','$l_name','$email','$pass')";
        $query = mysqli_query($db,$sqlText);
        if($query == true){
            echo '<Script>alert("User registration Successful. Please login and continue.");window.location.href="login.php"</Script>';
        } else{
            echo '<Script>alert("User registration Failed! Please try again!")</Script>';
        }
    }
   
}

?>
<div class="container">
    <div class="signup_page">
        <center>
            <img src="css/user.png" class="user" width="80" height="80" alt="">
            <h3>Create Account</h3>

            <form action="" method="post">
                <div class="input-group">
                    <div class="input-group-icon">First_Name:</div>
                    <div class="input-group-area">

                        <input type="text" placeholder="First Name" name="f_name" value="<?=$f_name?>" required>
                    </div>

                </div>
                <div class="input-group">
                    <div class="input-group-icon">Last_Name:</div>
                    <div class="input-group-area">

                        <input type="text" placeholder="Last Name" name="l_name" value="<?=$l_name?>" required>
                    </div>

                </div>

                <div class="input-group">
                    <div class="input-group-icon">Email_Id:</div>
                    <div class="input-group-area">

                        <input type="email" placeholder="E-mail" name="email" value="<?=$email?>" required>
                    </div>
              
                </div>
                <div class="input-group">
                    <div class="input-group-icon">Password:</div>
                    <div class="input-group-area">

                        <input type="password" placeholder="password" name="pwd" value="<?=$pwd?>" required>
                    </div>
                  
                </div>
                <div class="input-group">
                    <button type="submit" name="register" class="btn">Register Now</button>
                </div>
                <div class="signup">
                    <span>Have An Accoutn </span><a href="login.php"> Login ?</a>
                </div>
                <br>

            </form>
        </center>
    </div>
</div>
<?php 

include 'includes/footer.php';
?>
		