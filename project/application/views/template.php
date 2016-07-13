<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/custom.css') ;?>">
  <meta charset="UTF-8">
  <title>Donation | Website</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
  
  <div class="container">
    <div class="col-md-5">
      <?php $this->load->view($contenido); ?>
    </div>
  </div>
 
</body>
</html>