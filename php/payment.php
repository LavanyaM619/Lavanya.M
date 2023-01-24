<?php
include_once '../dbconection.php';
?>

<?php



$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$bill_num = $_POST["billnum"];
$mob_num = $_POST["mobnum"];
$email_address = $_POST["email"];

$card_name = $_POST["cardname"];
$card_number = $_POST["cardnumber"];
$exp_month = $_POST["expmonth"];
$exp_year = $_POST["expyear"];
$cvv = $_POST["cvv"];




$sql = "INSERT INTO payment(email_address,first_name,last_name,bill_number,mobile_number,card_name,card_number,exp_month,exp_year,cvv) VALUES('$email_address','$f_name','$l_name','$bill_num','$mob_num','$card_name','$card_number','$exp_month','$exp_year','$cvv')";


if(mysqli_query($db,$sql)){
    echo "<script> alert ('Records inserted sucessfully!') </script>";
    header("Location:paymentSucess.html");
}
else{
     echo "<script> alert ('Error in insert Records') </script>";
}

mysqli_close($db);

?>

