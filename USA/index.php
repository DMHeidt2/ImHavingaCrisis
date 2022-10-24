<?PHP
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" crossorigin as="font" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" crossorigin as="font" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="../assets/css/variables.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
      <style>
         .navbar {
          position: fixed;
          top: 0;
          left: -100%;
          width: calc(100% - 70px);
          bottom: 0;
          transition: 0.3s;
          z-index: 9997;
        }
        .navbar ul {
          position: absolute;
          inset: 0;
          padding: 10px 0;
          margin: 0;
          background: rgba(var(--color-secondary-rgb), 0.9);
          overflow-y: auto;
          transition: 0.3s;
          z-index: 9998;
        }
        .navbar a, .navbar a:focus {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 12px 20px;
          font-size: 16px;
          font-weight: 500;
          color: rgba(var(--color-white-rgb), 0.9);
          white-space: nowrap;
          transition: 0.3s;
        }
        .navbar a i, .navbar a:focus i {
          font-size: 12px;
          line-height: 0;
          margin-left: 5px;
        }
        .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
          color: var(--color-white);
        }
        .navbar .dropdown ul, .navbar .dropdown .dropdown ul {
          position: static;
          display: none;
          padding: 10px 0;
          margin: 10px 20px;
          transition: all 0.5s ease-in-out;
          border: 1px solid rgba(var(--color-secondary-light-rgb), 0.3);
        }
        .navbar .dropdown > .dropdown-active, .navbar .dropdown .dropdown > .dropdown-active {
          display: block;
        }
        .mobile-nav-toggle {
          display: block !important;
          color: var(--color-white);
          font-size: 28px;
          cursor: pointer;
          line-height: 0;
          transition: 0.5s;
          position: fixed;
          top: 20px;
          z-index: 9999;
          right: 20px;
        }
        .mobile-nav-toggle.bi-x {
          color: var(--color-white);
        }
        .mobile-nav-active {
          overflow: hidden;
          z-index: 9995;
          position: relative;
        }
        .mobile-nav-active .navbar {
          left: 0;
        }
        .mobile-nav-active .navbar:before {
          content: "";
          position: fixed;
          inset: 0;
          background: rgba(var(--color-secondary-rgb), 0.8);
          z-index: 9996;
        }
        .cta .container {
          padding: 20px 10px 20px 10px;
        }
        .cta {
          padding: 0;
          margin-top: 20px;
          padding-bottom: 20px;
          margin-right: 0px;
          margin-left: 0px;
          z-index: 1;
        }
        .cta .alone{
          font-size: 1.5rem;
        }
        .cta .img img {
          position: relative;
          z-index: 3;
          border-radius: 15px;
          width: 150px;
        }
        .cta .content h3{
        font-size: 1.5rem;
        font-weight: 600;
        }
        .cta .emerg-call{
          font-size: 1rem;
        }
        .cta .content p {
          color: var(--color-secondary);
          font-weight: 500;
          font-size: 18px;
        }
        </style>
    <script>
      function includeHTML() {
        var z, i, elmnt, file, xhttp;
        /*loop through a collection of all HTML elements:*/
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
          elmnt = z[i];
          /*search for elements with a certain atrribute:*/
          file = elmnt.getAttribute("include-html");
          if (file) {
            /*make an HTTP request using the attribute value as the file name:*/
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4) {
                if (this.status == 200) {elmnt.innerHTML = this.responseText;}
                if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
                /*remove the attribute, and call this function once more:*/
                elmnt.removeAttribute("include-html");
                includeHTML();
              }
            }      
            xhttp.open("GET", file, true);
            xhttp.send();
            /*exit the function:*/
            return;
          }
        }
      };
      function toggleDarkMode() { 
        const container = document.getElementById('simulateDarkMode');
        const buttonDarkMode = document.getElementById('toggleDarkMode');
        const dataTheme = container.getAttribute('data-theme');
        if(dataTheme === 'dark') {
          container.setAttribute('data-theme', 'light');
          buttonDarkMode.innerHTML = 'DARK MODE';
        } else {
          container.setAttribute('data-theme', 'dark');
          buttonDarkMode.innerHTML = 'LIGHT MODE';
        }
      }
    </script>    
    <style>
      .mobile-nav-toggle {
        display: block !important;
        position: fixed;
        top: 10px;
        right: 10px;
      }
    </style> 
  </head>
<body class="mx-auto" id="simulateDarkMode" data-theme="light" style="background-color: black ;">
<main>
  <div class="container-fluid container-main mx-auto mb-0 pb-0">    
    <div id="USA" style="background-color: var(--background);">
      <div class="container">
        <div class="row header-mobile" >
          <div class="col col-2 ml-1 my-auto">
            <a href="../"><img src="../assets/img/logo-sm-1.png" width="40px" class="img-dark" alt="logo">
            </a>
          </div>
          <div class="col col-2 header-sm-font my-auto text-center w-50">ImHavingaCrisis.org</div>
          <div class="col col-2"><div class="col col-xs-2">   
            <label class="switch float-right mr-1 pb-1 my-auto ">
              <i class="bi bi-brightness-high-fill dark-mode-icon" style="color:var(--yellow);"></i>
              <div>
                <input type="checkbox" onclick="toggleDarkMode()"/>
                <span class="slider"></span>
              </div>
              <i class="bi bi-brightness-alt-high-fill  dark-mode-icon"></i>
            </label>
          </div>
          <div class="col col-2">
             <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../#intro-top">Home</a></li>
          <li><a class="nav-link" href="../CAN">Canadian Helplines</a></li>
          <li><a class="nav-link" href="../USA">United States Helplines</a></li>
          <li><a class="nav-link scrollto active" href="../download">Download QR Code</a></li>
          <li><a class="nav-link scrollto" href="../#about">About</a></li>          
          <li><a class="nav-link scrollto" href="../#contact">Contact</a></li>
          <li>
              <a href="../index.html#contact"><img style="max-height: 30px;" src="../assets/img/support_button.png" alt="Support Button"></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center w-100  myheader">
            <span class="page-title">United States 24/7 Crisis Helplines</span>
            <div style="font-size:small; font-weight: 600; line-height: .5; color: var(--color-secondary-dark);">You are not alone</div>
          </div>
        </div>
        <div class="row myheader">
          <ul class="nav nav-pills nav-tabs nav-pills-sub nav-tabs-sub nav-fill justify-content-center w-100" id="pills-tab" role="tablist">
          <li class="nav-item myheader">
            <a class="nav-link  nav-link-sub active" id="home-tab" data-toggle="pill" href="#us-national" role="tab" aria-controls="home" aria-selected="true">National</a>
          </li>
          <!-- State region tab
          <li class="nav-item myheader">
            <a class="nav-link nav-link-sub" id="profile-tab" data-toggle="pill" href="#us-region" role="tab" aria-controls="profile" aria-selected="false">State/Region</a>
          </li>
          -->
          <li class="nav-item myheader">
            <a class="nav-link nav-link-sub" id="contact-tab" data-toggle="pill" href="#us-spanish" role="tab" aria-controls="contact" aria-selected="false">Espanol</a>
          </li>
          </ul>
        </div>
        <div class="row sticky-top">
          <div class="col-md-2 "></div>
          <div class="col-md-8">
            <div class="call-wrapper p-2 d-flex mx-auto shadow-call">
                <p class="ml-3 my-auto "><a href="tel:988">
                  <button 
                  type="button" 
                  class="btn btn-call">
                  <i class="bi bi-telephone-fill"></i>
                  </button></a>
                </p>
                <div class="ml-3 w-100">
                  <div class="calltitle">
                  988 Suicide & <br>Crisis Lifeline<a class="collapsed float-right " type="button" data-toggle="collapse" data-target="#collapsesticky1"  aria-expanded="false" aria-controls="collapse1"><i id="toggleId" class="bi bi-caret-left float-right helpline-icon mr-3"></i></a>
                  </div>
                  <p id="collapsesticky1" class="collapse helpline-more" aria-labelledby="headingsticky0ne" data-parent="#myGroup">        
                    <a href="tel:988"><i class="bi bi-telephone"></i>&nbsp;&nbsp;988</a><br>
                    <a href="https://988lifeline.org/chat/"><i class="bi bi-chat"></i>&nbsp;&nbsp;CHAT</a><br>
                    <a href="https://988lifeline.org/" target="_blank"><i class="bi bi-box-arrow-up-right"></i>&nbsp;&nbsp;www.988lifeline.org/</a><br>
                    The Lifeline provides 24/7, free and confidential support for people in distress, prevention and crisis resources for you or your loved ones, and best practices for professionals in the United States.                  
                  </p>          
                </div>         
                <div>                  
              </div>
          </div>         
      </div>
      <div class="col-md-2"></div>
  </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="us-national" role="tabpanel" aria-labelledby="us-national-tab">
            <div include-html="../assets/html/us-helplines.html"></div>
          </div>
          <div class="tab-pane fade " id="us-region" role="tabpanel" aria-labelledby="us-region-tab">
            <div include-html="../assets/html/us-helplines-region.html"></div>
          </div>
          <div class="tab-pane fade show" id="us-spanish" role="tabpanel" aria-labelledby="us-spanish-tab">
            <div include-html="../assets/html/us-helplines-es.html"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col text-center"><img src="../assets/img/QR-home.png" class="img-dark">
            <h5>Share or <a href="../index.html">Download QR <i class="bi bi-arrow-right-square-fill"></i></a></h5></div>
          </div>
        </div>
      </div>      
    <?php $country='USA'; include '../assets/html/app-content.php';?>
</div>
</div>
</main> 
<div id="preloader"></div>
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
  includeHTML()
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<script src="../assets/js/main.js"></script>
</body>
</html>