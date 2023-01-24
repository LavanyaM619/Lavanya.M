<?php 
session_start();
require_once 'dbconection.php';
// get user info
$get_user_details= mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM users WHERE id = '". $_SESSION['id']."'"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW GURU</title>
    <style>
    .bodyPart{
        width: 60%;
        margin-left:auto;
        margin-right:auto;
        border:3px solid black;
        border-radius: 10px;
    }
    .logo{
        margin-top: 15px;
    }
    @media print{
        .bodyPart{
            width: 100%;
        }
    }
    table {
  width: 60%;
}
    </style>
</head>
<body>
    <div class="bodyPart">
        <center>
            <img src="css/Logo.png" class="logo" alt="" width="100">
            <h1>NEW GURO</h1>
            <h3>User Profile</h3>
        </center>
        <center>
            <table>
                <tr>
                    <td>Profile :</td>
                    <td><img src="images/<?=$get_user_details['profile']?>" class="logo" alt="" width="80"></td>
                </tr>
                <tr>
                    <td>Reg.ID :</td>
                    <td><?=$get_user_details['user_id']?></td>
                </tr>
                <tr>
                    <td>First Name :</td>
                    <td><?=$get_user_details['f_name']?></td>
                </tr>
                <tr>
                    <td>Last Name :</td>
                    <td><?=$get_user_details['l_name']?></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><?=$get_user_details['email']?></td>
                </tr>
                <tr>
                    <td>Register Date :</td>
                    <td><?=$get_user_details['create_at']?></td>
                </tr>
            </table>
        </center>
    </div>
</body>
<script>
   window.print();
</script>
</html>