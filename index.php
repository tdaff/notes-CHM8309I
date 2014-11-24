<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="CHM8309I Winter 2014" />
  <meta name="author" content="Thomas D Daff" />

  <title>CHM8309I Resources</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" type="text/css" />
  <!-- Custom styles for this template -->
  <!-- <link href="custom.css" rel="stylesheet" type="text/css" /> -->
</head>

<?php 

ob_start();

if (!isset($_SESSION)) {
    session_start();
}

if(isset($_REQUEST['student_id'])) {
    $student_id = strip_tags(trim($_REQUEST['student_id']));
} else {
    $student_id = "";
}

$valid_ids = array("woolab", "tdaff");

if (!isset($_SESSION['student_id'])) {
    if (!empty($student_id) AND in_array($student_id, $valid_ids)) {
        $_SESSION['student_id'] = $student_id;
    }
}

?>

<body>
  <!-- Wrap all page content here -->

  <div id="wrap">
    <!-- Begin page content -->

    <div class="container">
      <div class="page-header">
        <h1>CHM8309I Resources</h1>
      </div>

      <p class="lead">This page will be updated with course notes, downloads and links with relevant information throughout the course. All work is copyrighted by Tom Daff and must not be distributed without permission.</p>

<?php

if (isset($_SESSION['student_id'])) {
    include('content.html');
} else {
    include('login.html');
} 

?>
    </div>
  </div>

  <div id="footer">
    <div class="container">
      <p class="text-muted credit">CHM8309I course materials are copyright Tom Daff and <a href="http://titan.chem.uottawa.ca">The Woo Lab</a>. All rights reserved.</p>
    </div>
  </div>
</body>
</html>

