<?php 
  session_start();
  include_once "php/config.php";
  include_once "php/protocol.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php?page_url=". $redirect_link_var );
  }
?>
<?php include_once "header.php"; 
?>

<body>
<section class="centered-form_request">
  <div class="wrapper_request">
    <section class="form request">
      <header>
      <div>
      <h1>Заяви</h1>
      </div>
     </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          
        <div class="field img drag-area">
          <div class="div-for_img">+</div> 
      
          </div>
          
        <div class="input-div req-div">
          
      <div id="first-row" class="flex">
        <div class="field input"> 
          <textarea name="title" placeholder="Заглавие..." required></textarea>
        </div>
        <div class="field input"> 
  <select id="cars" name="cars">
    <option value="volvo">Тип мисия:</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
        </div>
        </div>
        <div class="field input"> 
          <textarea class="desc-text"  name="description" placeholder="Описание..." required></textarea>
        </div>
        </div>
        </div>
          <input class="input-request" type="file" hidden multiple>
          <div class="deadline">
            <div>Срок на мисията</div>
            
          </div>
        <div class="field button">

          <input type="submit" name="submit" value="Влез в акаунта">
        </div>
      </form>
    
    </section>
  </div>
  </section>

    
    <script>
    var active = document.querySelector(".navbtn-3");
    active.classList.add("active");
</script>
<script src="javascript/request-img1.js"></script>
<?php
if(isset($_SESSION['unique_id'])){
  echo '<script src="javascript/profile-nav.js"></script>';
  }
  ?>
</body>