<?PHP
$region1="";
$break="";
$regionqr =""; 
if (empty($_GET)){
          }
          else {
            $region1 = $_GET['region'];
            $break = '<br>';
          }
?>
<script type="text/javascript">
    if(screen.width <= 720) 
    {
        location.href = "frame.php"; // redirection
    }
    
</script>
<!DOCTYPE html>
<html>
  <head>
    <title>Are you having a Crisis - <?php echo $region1?> 24/7 Crisis Helplines</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="description" content="<?php echo $region1?> 24/7 Crisis Helplines for anyone. Choose from numerous <?php echo $region1?> Crisis Helplines. Lines include <?php echo $region1?> helplines and for Vets police LGBTQ+ and more.">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Are you having a Crisis - <?php echo $region1?> 24/7 Crisis Helplines - Many to Choose From">
    <meta itemprop="description" content="<?php echo $region1?> 24/7 Crisis Helplines for anyone. Choose from numerous <?php echo $region1?> Crisis Helplines. Lines include <?php echo $region1?> helplines and for Vets police LGBTQ+ and more.">
    <meta itemprop="image" content="https://imhavingacrisis.org/assets/images/coverphoto.png">
    <!--  Essential META Tags -->
    <meta property="og:title" content="Are you having a Crisis - <?php echo $region1?> 24/7 Crisis Helplines">
    <meta property="og:description" content="<?php echo $region1?> 24/7 Crisis Helplines for anyone. Choose from numerous <?php echo $region1?> Crisis Helplines. Lines include <?php echo $region1?> helplines and for Vets police LGBTQ+ and more.">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://imhavingacrisis.org/assets/images/coverphoto.png">
    <meta property="og:url" content="https://imhavingacrisis.org">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Are you having a Crisis - <?php echo $region1?> 24/7 Crisis Helplines">
    <meta name="twitter:description" content="<?php echo $region1?> 24/7 Crisis Helplines for anyone. Choose from numerous <?php echo $region1?> Crisis Helplines. Lines include <?php echo $region1?> helplines and for Vets police LGBTQ+ and more.">
    <meta name="twitter:image" content="https://imhavingacrisis.org/assets/images/coverphoto.png">
    <meta property="og:site_name" content="Are you having a Crisis - <?php echo $region1?> 24/7 Crisis Helplines">
    <meta name="twitter:image:alt" content="24/7 Crisis Helplines for immediate confidential one-on-one assistance">
    <meta property="fb:app_id" content="your_app_id" />
    <meta name="twitter:site" content="@website-username">
    <!--icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
          <!-- Vendor CSS Files -->
          <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="../assets/css/variables.css" rel="stylesheet">
    <style>
      .country-frame{
        overflow-y:hidden;
        height:100%;
        width:100%;
        position:absolute;
        top:0px;
        bottom:0px;
        max-width:425px;
      }
    </style>
  </head>
  <body style="background-color: black;">
  <div class="d-flex flex-row">
  <div class="mx-auto text-center d-none d-lg-block flex-fill" style="height:900px;"><br><br><h1 style="color:white;">Scan QR Now<br>Access dozens of Crisis Helplines<br>Find someone to talk too.<br>You are not alone!</h1><br><img src="../assets/img/QR/qr-code-can-bw-lg.png" width="500px" alt=""></div>
  <div class=" mx-auto d-none d-lg-block flex-fill" >
    <iframe src="frame.php" class="country-frame" style="background-color: white;"></iframe>
  </div>
  <div class="mx-auto text-center d-none d-lg-block flex-fill" style="height:900px;"></div>
  <div class="d-lg-none"><?php include 'frame.php'?>
  </body>