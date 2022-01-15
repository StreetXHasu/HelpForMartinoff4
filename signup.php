<?php 
  session_start();
  include_once "php/config.php";
  if(isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>

<?php include_once "header.php"; ?>
<body>

<section class="centered-form">
  <div class="wrapper">
    <section class="form signup">
      <header>Регистрация</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Име</label>
            <input type="text" name="fname" placeholder="Собствено име" required>
          </div>
          <div class="field input">
            <label>Фамилия</label>
            <input type="text" name="lname" placeholder="Фамилно име" required>
          </div>
        </div>
        <div class="field input">
          <label>Имейл адрес</label>
          <input type="text" name="email" placeholder="Въведи имейл" required>
        </div>
        <div class="field input">
          <label>Парола</label>
          <input type="password" name="password" placeholder="Въведи парола" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field checkbox">
        <div style="display:flex;">
        <input style="display: block; margin: auto 0;" type="checkbox" id="vehicle1" name="vehicle1" value="Da">
        <label style="margin: auto 0;" for="vehicle1">Имате ли 18 години?</label><br>
        </div>
        </div>
        <div class="field image">
          <label>Избери снимка</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Направи акаунт">
        </div>
      </form>
      <div class="link">Вече си регистриран? <a href="login.php">Влез сега.</a></div>
    </section>
  </div>
</section>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  

</body>
</html>
