<?php

// connect page top part (heder,top nav)
include "includes/top.php";
if(!isset($_SESSION['user_id']))
{
 header("location:login.php");
}
if(isset($_POST['submit'])){
    $sqlText= "INSERT INTO `contect_us`( `f_name`, `l_name`, `msg`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['subject']."')";
    $query = mysqli_query($db,$sqlText);
    if($query == true){
        echo '<Script>alert("Successful.");window.location.href="contact.php"</Script>';
    } else{
        echo '<Script>alert("Failed! Please try again!")</Script>';
    }
}
?>
<style>
    
 body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<center>
<h1 class="mb-5">Contact For Any Query</h1>

</center>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="css/c.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
       
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
</div>

<?php 
//connect  page footer
include 'includes/footer.php';
?>