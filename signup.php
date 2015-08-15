<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Register now</title>
  <?php include 'topHead.php'; ?>
  <link rel="icon" href="img/logo-square.png" media="screen">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="css/main.css" media="screen">
</head>

<body>
  <?php include "navbar.php"; ?>
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <div class="container">
    <?php
    if (isset($_GET["alert"])) {
      $err = $_GET["alert"];
      echo "<div class='alert alert-danger alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
      echo "<span aria-hidden='true'>&times;</span>";
      echo "</button>";
      echo "$err";
      echo "</div>";
    }
     ?>
    <form action="register.php" method="post">
      <h2>Section 1: Personal Details
        <label class="label label-danger">Required</label>
      </h2>
      <div class="form-group">
        <label for="Name">Name</label>
        <input class="form-control" type="text" placeholder="Your Name" name="name" id="name">
      </div>
      <div class="form-group">
        <label for="Name">Email ID</label>
        <input class="form-control" type="email" placeholder="Email" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="Name">Password</label>
        <input class="form-control" type="password" placeholder="Password" name="password">
      </div>
      <div class="form-group">
        <label for="Name">Address</label>
        <input class="form-control" type="text" placeholder="Address" name="address">
      </div>
      <div class="form-group">
        <label for="Name">City</label>
        <input class="form-control" type="text" placeholder="City" name="city">
      </div>
      <div class="form-group">
        <label for="Name">State</label>
        <input class="form-control" type="text" placeholder="State" name="state">
      </div>
      <div class="form-group">
        <label for="Name">Country</label>
        <input class="form-control" type="text" placeholder="Country" name="country">
      </div>
      <div class="form-group">
        <label for="Name">Zip Code</label>
        <input class="form-control" type="number" placeholder="Zip Code" name="zipCode">
      </div>
      <div class="form-group">
        <label for="Name">Mobile</label>
        <input class="form-control" type="number" placeholder="Mobile" name="mobile">
      </div>
      <div class="form-group">
        <label for="Name">Date of Birth</label>
        <input class="form-control" type="date" placeholder="Date of Birth" name="dob">
      </div>
      <div class="form-group">
        <label for="Name">Marital Status</label>
        <input class="form-control" type="text" placeholder="Marital Status" name="marital">
      </div>
      <hr>
      <h2>Section 2: Where do you work?</h2>
      <div class="form-group">
        <label for="Name">Industry</label>
        <input class="form-control" type="text" placeholder="Industry" name="industry">
      </div>
      <div class="form-group">
        <label for="Name">Profession</label>
        <input class="form-control" type="text" placeholder="Profession" name="profession">
      </div>
      <div class="form-group">
        <label for="Name">Organisation Name</label>
        <input class="form-control" type="text" placeholder="Organisation Name" name="orgName">
      </div>
      <div class="form-group">
        <label for="Name">Designation</label>
        <input class="form-control" type="text" placeholder="Designation" name="designation">
      </div>
      <div class="form-group">
        <label for="Name">City</label>
        <input class="form-control" type="text" placeholder="City" name="work_city">
      </div>
      <div class="form-group">
        <label for="Name">State</label>
        <input class="form-control" type="text" placeholder="State" name="work_state">
      </div>
      <div class="form-group">
        <label for="Name">Country</label>
        <input class="form-control" type="text" placeholder="Country" name="work_country">
      </div>
      <div class="form-group">
        <label for="Name">Zip Code</label>
        <input class="form-control" type="number" placeholder="Zip Code" name="work_zipCode">
      </div>
      <div class="form-group">
        <label for="Name">Address</label>
        <input class="form-control" type="text" placeholder="Address" name="work_address">
      </div>
      <hr>
      <h2>Section 3: Nostalgic Section</h2>
      <div class="form-group">
        <label for="Name">Roll Number</label>
        <input class="form-control" type="number" placeholder="Roll Number" name="rollNum">
      </div>
      <div class="form-group">
        <label for="Name">Join Year</label>
        <input class="form-control" type="number" placeholder="Join Year" name="joinYear">
      </div>
      <div class="form-group">
        <label for="Name">Degree</label>
        <input class="form-control" type="text" placeholder="Degree" name="degree">
      </div>
      <div class="form-group">
        <label for="Name">Department</label>
        <input class="form-control" type="text" placeholder="Department" name="department">
      </div>
      <div class="form-group">
        <label for="Name">Hall</label>
        <input class="form-control" type="text" placeholder="Hall" name="hall">
      </div>
      <div class="form-group">
        <label for="Name">Year of Graduating</label>
        <input class="form-control" type="number" placeholder="Year of Graduating" name="graduatingYear">
      </div>
      <div class="form-group">
        <label for="accompanyingNo">Accompaniments</label>
        <input class="form-control" type="number" placeholder="No. of people accompanying you to the meet" name="accompanyingNo">
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block" name="button">SUBMIT</button>
    </form>
  </div>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript">
    function parseURLParams(url) {
      var queryStart = url.indexOf("?") + 1,
        queryEnd = url.indexOf("#") + 1 || url.length + 1,
        query = url.slice(queryStart, queryEnd - 1),
        pairs = query.replace(/\+/g, " ").split("&"),
        parms = {},
        i, n, v, nv;

      if (query === url || query === "") {
        return;
      }

      for (i = 0; i < pairs.length; i++) {
        nv = pairs[i].split("=");
        n = decodeURIComponent(nv[0]);
        v = decodeURIComponent(nv[1]);

        if (!parms.hasOwnProperty(n)) {
          parms[n] = [];
        }

        parms[n].push(nv.length === 2 ? v : null);
      }
      return parms;
    }
    var url = window.location.href;
    var result = parseURLParams(url);
    $(document).ready(function() {
      $("#name").val(result.name);
      $("#email").val(result.email);
      var EXCLUDED_FIELDS = ['industry', 'profession', 'work_state' ,'work_city',
                              'work_country', 'work_zipCode', 'work_address',
                              'rollNum', 'joinYear', 'accompanyingNo'];
      $("input").each(function () {
        if (EXCLUDED_FIELDS.indexOf($(this).attr('name')) < 0) {
          $(this).attr('required', 'required');
          var labelElement = $(this).parent('div').children('label').first();
          labelElement.html(labelElement.html() + ' *');
        }
      });
    });
  </script>
</body>

</html>
