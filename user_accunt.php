<?php
// connect page top part (heder,top nav)
include "includes/top.php";
if(!isset($_SESSION['user_id']))
{
 header("location:login.php");
}
// get user info
$get_user_details= mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM users WHERE id = '". $_SESSION['id']."'"));
//uploadte profile
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    $img_explode = explode('.',$file_name);
    $img_ext = end($img_explode);
    if(in_array($img_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
       echo '<Script>alert("extension not allowed, please choose a JPEG or PNG file.")</Script>';
    }
    
    // if($file_size > 2097152){
    //    $errors[]='File size must be excately 2 MB';
    // }
    $time = time();
    $new_img_name = $time.$file_name;
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"images/".$new_img_name);
      $qry = mysqli_query($db,"UPDATE `users` SET `profile` = '$new_img_name' WHERE id = '". $_SESSION['id']."'");
      if($qry == true){
      
        echo'<script>alert("Success!");window.location.href="user_accunt.php"</script>';//;
      }
    //    echo "Success";
    }else{
        echo '<Script>alert("Error!")</Script>';
    }
}
// update user details
if(isset($_POST['update'])){
    $qry = mysqli_query($db,"UPDATE `users` SET `f_name`='".$_POST['f_name']."',`l_name`='".$_POST['l_name']."' WHERE id = '". $_SESSION['id']."'");
    if($qry == true){    
      echo'<script>alert("Success!");window.location.href="user_accunt.php"</script>';//;
    } else{
        echo'<script>alert("Error!");window.location.href="user_accunt.php</script>"';
    }
}
// change password
if(isset($_POST['changePwd'])){
    $qry = mysqli_query($db,"UPDATE `users` SET `password`='".md5($_POST['pwd'])."' WHERE id = '". $_SESSION['id']."'");
    if($qry == true){    
      echo'<script>alert("Success!");window.location.href="logout.php"</script>';//;
    } else{
        echo'<script>alert("Error!");window.location.href="user_accunt.php</script>"';
    }
}
if($get_user_details['profile'] == ''){
    $img = 'css/user.png';
} else{
    $img = 'images/'.$get_user_details['profile'];
}
?>
<div class="container">
    <div class="profile_page">
        <center>
            <img src="<?=$img?>" id="thumb" class="user" width="80" height="80" alt="">
            <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" onchange="preview()" required>
            <div class="input-group">
                <button type="submit" name="profileImg" class="btn-p">Change image</button>
            </div>
            </form>
        
          

        <form action="" method="post">
        <div class="input-group">
                <div class="input-group-icon">User_Reg_id:</div>
                <div class="input-group-area">

                    <input type="text" placeholder="RegID" value="<?=$get_user_details['user_id']?>" disabled>
                </div>

            </div>
            <div class="input-group">
                <div class="input-group-icon">First_Name:</div>
                <div class="input-group-area">

                    <input type="text" placeholder="First Name" name="f_name" value="<?=$get_user_details['f_name']?>" required>
                </div>

            </div>
            <div class="input-group">
                <div class="input-group-icon">Last_Name:</div>
                <div class="input-group-area">

                    <input type="text" placeholder="Last Name" name="l_name" value="<?=$get_user_details['l_name']?>" required>
                </div>

            </div>

            <div class="input-group">
                <div class="input-group-icon">Email_Id:</div>
                <div class="input-group-area">

                    <input type="email" placeholder="E-mail" value="<?=$get_user_details['email']?>" disabled>
                </div>
                <!-- <div class="input-group-icon"><img src="css/user.png" width="15" height="15"></div> -->
            </div>
            <div class="input-group">
                <button type="submit" name="update" class="btn">Update Your Details</button>
            </div>
            </form>
            <form action="" method="post">
            <div class="input-group">
                <div class="input-group-icon">New Password:</div>
                <div class="input-group-area">

                    <input type="password" placeholder="New password" name="pwd" value="" required>
                </div>
                <!-- <div class="input-group-icon"><img src="css/key.png" width="15" height="15" alt=""></div> -->
            </div>
            <div class="input-group">
                <button type="submit" name="changePwd" class="btn">Change Password</button>
            </div>
           
            <br>

        </form>
        <div class="input-group" style="text-decoration: none;margin-bottom:50px;">
                <a href="print.php" target="_blank" type="button" class="btn" >Print profile</a>
            </div>
        </center>
    </div>
</div>
<?php 
//connect  page footer
include 'includes/footer.php';
?>
<script>
   function preview() {
   thumb.src=URL.createObjectURL(event.target.files[0]);
}
</script>