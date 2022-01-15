<?php 
  session_start();
  include_once "php/config.php";

include_once "header.php"; 
?>


<body>
<div class="landing">
<div class="btns">
<button class="home_buttons"><a href="missions.php">Започни мисия</a></button>
<button class="home_buttons"><a href="request.php">Направи мисии</a></button>
<button class="home_buttons"><a href="missions.php">За проекта</a></button>
<button class="home_buttons"><a href="missions.php">За нас</a></button>
</div>
<div class="main__img">

<img src="img_main/ms4-logo2.svg" alt="">
</div>
<div class="important_text">
<p>Бъди герой, дори да нямаш супер сили!</p>
</div>
</div>

<a href="users.php" class="scrolltotop sm-scroll bg-main"><i class="fas fa-envelope"></i></a>
<?php
if(isset($_SESSION['unique_id'])){
  echo '<script src="javascript/profile-nav.js"></script>';
  }
  ?>
  <script>
    var active = document.querySelector(".navbtn-1");
    active.classList.add("active");
</script>
</body>
</html>