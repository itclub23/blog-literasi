<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>

  <div class="container">
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <h1>NOTWelcome to CodeIgniter!</h1>

    <div id="body">
      <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

      <p>If you would like to edit this page you'll find it located at:</p>
      <code>application/views/welcome_message.php</code>

      <p>The corresponding controller for this page is found at:</p>
      <code>application/controllers/Welcome.php</code>

      <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

    <div class="alert alert-primary" role="alert">
      A simple primary alert—check it out!
    </div>
    <div class="alert alert-secondary" role="alert">
      A simple secondary alert—check it out!
    </div>
  </div>

  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>

</body>
</html>