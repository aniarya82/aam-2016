<?php
 session_start();
 if ($_SESSION["email"] != "") {
   header('Location: ./signin.php?err=');
   exit();
 }
 ?>

<html>

<head>
  <title>13th Annual Alumni Meet &middot; Logged in!</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container-fluid">
    <div class="jumbotron">
      <div class="container">
        <div class="container-fluid">
          <div align="center">
            <h2>You are logged in!</h2>
          </div>
          <p>
            We will be showing you important information regarding the meet here. Check back in a few days to find out more about the Alumni Meet.
          </p>
          <!-- <div class="">
            <div class="col-md-6">
              <button class="btn btn-primary btn-block btn-lg" type="button" name="payment" onclick="payment()">Payment Details</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-primary btn-block btn-lg" type="button" name="travel">Travel & Accomodation Details</button>
            </div>
          </div> -->
          <div class="container" id="payment">
            <div class="panel panel-default">
              <div class="panel-heading">
                Payment Details
              </div>
              <div class="panel-body">
                Every visiting alumnus of the batch of 1966, 1976, 1991 is to pay INR 5000. This includes your accomodation, fooding and conveyance charge at Kharagpur. If there is any other person accompanying you an additional payment of INR 2500 per head will have
                to be made.
                <br> Payment methods:-
                <ul class="list-group">
                  <li class="list-group-item">
                    <strong>1. Demand Draft</strong>
                    <br> You can pay by sending a cheque or demand draft (DD) if favour of "Annual Alumni Meet" payable at Kharagpur on the address:
                    <br> Students' Alumni Cell
                    <br> Office of Alumni Affairs and International Relations
                    <br> Indian Institute of Technology Kharagpur
                    <br> Kharagpur - 721302
                    <br> West Bengal (INDIA)
                  </li>
                  <li class="list-group-item">
                    <strong>2. NEFT</strong>
                    <br> You can also transfer the payment through Internet Banking and email us the receipt.
                    <br> Account Details
                    <br> Bank Name: Syndicate Bank
                    <br> Branch: IIT Kharagpur, SRIC
                    <br> IFSC Code: SYNB0009556
                    <br> A/C No.: 95562200012031
                    <br> Account Name: Annual Alumni Meet
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
  function payment() {
    document.getElementById('payment').style.display = "inline";
  }
</script>

</html>
