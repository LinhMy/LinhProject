<!DOCTYPE html>
<html>
<title>Ẩm thực và cuộc sống</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
<?php $url_image ="http://localhost/LinhProject/images/" ?>
<!-- Danh muc -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:20%;min-width:200px" id="mySidebar">
  <a href="http://localhost/LinhProject/home" onclick="w3_close()"
  class="w3-bar-item w3-button">Home</a>
    <?php foreach ($category as $item){?>
     <a href="" onclick="w3_close()" class="w3-bar-item w3-button"><?=$item->name_category?></a>
    <?php } ?>
</nav>
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16"><a href="<?php $base_url?>/LinhProject/login">Login</a></div>
    <div class="w3-center w3-padding-16" style="color:red">FOOD</div>
  </div>
</div>
  <!-- hien thi bai viet-->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <label name ="title"><h3><?php echo $dtpost['title'] ?></h3></label>
    <img src="<?php echo $url_image.$dtpost['image'] ?>" alt="<?php echo $dtpost['image']?> " style="width:50%">
    <h5><?php echo $dtpost['content'] ?></h5>
  </div>
   
   <!-- Footer -->
  <?php include "footer.php" ?>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>