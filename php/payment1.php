<head> 
   <link rel="stylesheet" href="../css/Payment.css">
</head>
<body>
<h3 class="PaySize">Payment</h3>
<div class="row">
  <div class="col-75">
    <div class="container">
        <form  name="myForm" method="POST" action = "../php/payment.php" target=""  onsubmit="return validateForm()" >
        <br>
    
        <div class="row">
          <div class="col-50">
            <h3>Billing Details</h3>
            <label> First Name </label>
            <input type="text" name="fname" pattern="[a-zA-Z]+" placeholder="eg-kugan">
            <label> Last Name </label>
            <input type="text" name="lname" pattern="[a-zA-Z]+" placeholder="eg-Kumar">
            <label> Bill Number</label>
            <input type="text" name="billnum" pattern="[A-Z]{1}.[0-9]{5}" placeholder="eg-G158565">
            <label> Mobile Number</label>
            <input type="text" name="mobnum" pattern="[0-9]{10}" placeholder="eg-0xxxxxxxxx" required>
			      <label> Email Address </label>
            <input type="text" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-z]{2,5}" placeholder="eg-kumar@gmail.com" required>

            <div class="row">
              <div class="col-50">
                <input type="checkbox" name="sendreceipt"> Send the Receipt to the Mail Address
              </div>
             </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label>Accepted Cards</label>
            <div class="payimage">
              <img src="../images/pay.png" height="35">
            </div>

            <label> Name on Card </label>
            <input type="text" name="cardname" placeholder="eg-Kumar">
            <label> Credit card number </label>
            <input type="text" name="cardnumber" pattern="[0-9]{16}" placeholder="1111-2222-3333-4444">
            <label>Exp Month</label>
            <select name="expmonth" class="expmonth" >
              <option value="" disabled selected hidden> - Select Exp Month -</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="Septemper">Septemper</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>
            <div class="row">
              <div class="col-50">
                <label>Exp Year</label>
                <input type="text" name="expyear" pattern="[0-9]{4}" placeholder="xxxx">
              </div>
              <div class="col-50" >
                <label>CVV</label>
                <input type="text" name="cvv" pattern="[0-9]{3,4}" placeholder="xxx">
              </div>
            </div>
          </div>
      </div>
      </div>
      <input  type="submit" id="btn" name="btn" value="Pay" class="submit">
      </form>
    </div>
	<br>
	<br>
</div>

<br>





   <br>
        
      






 

