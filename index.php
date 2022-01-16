<?php 
  session_start();
  include_once "php/config.php";

include_once "header.php"; 
?>


<body>

<script>
    var active = document.querySelector(".navbtn-1");
    active.classList.add("active");
</script>
<?php
if(isset($_SESSION['unique_id'])){
  echo '<script src="javascript/profile-nav.js"></script>';
}
  ?>
</body>
</html>