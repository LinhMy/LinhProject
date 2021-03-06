<!DOCTYPE html>
<html>
<title>Ẩm thực và cuộc sống</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Roboto Slab', serif;}
.w3-bar-block .w3-bar-item {padding:15px}
</style>
<body  style=" background-color: #efefef">

<!-- Sidebar (hidden by default) onclick="w3_close()"-->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:block ;z-index:2;width:10%;min-width:250px;  background-color: #FFFAFA" id="mySidebar">
  <a href="<?php $base_url ?>/LinhProject/home" onclick="w3_close()"
  class="w3-bar-item w3-button"><h5>Trang chủ</h5></a>
  <a href="<?php $base_url ?>/LinhProject/listuser"  class="w3-bar-item w3-button" style="background: #CD8162"><h5>Quản lý người dùng</h5></a>
  <a href="<?php $base_url ?>/LinhProject/category"  class="w3-bar-item w3-button"><h5>Quản lý danh mục</h5></a>
  <a href="<?php $base_url ?>/LinhProject/postlist"  class="w3-bar-item w3-button"><h5>Quản lý bài viết</h5></a>
  <a href="#<?php $base_url ?>/LinhProject/postting" class="w3-bar-item w3-button"><h5>Thêm bài viết</h5></a>
</nav>
<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1400px;margin:auto; background:url('<?php $base_url ?>/LinhProject/images/food.jpg');">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()"></div>
    <div class="w3-right w3-padding-16"><a href="<?php $base_url ?>/LinhProject/admin/logout" style="color:#FFFFE0">Logout</a>
    </div>
    <div class="w3-center w3-padding-16" style="color:#FFFFE0"><h1>FOOD</h1></div>
  </div>
</div>
  
<div class="w3-main " style="max-width:1200px;margin-top:100px; margin-left: 310px ; ">
        <div>
            <h3> Sửa thông tin người dùng: </h3>
            <form name='register' action='' method='POST' style=" margin-right:  770px  ">
              <div style=" margin-left: 20px; margin-top:20px">      
               
               Tên đăng nhập: <br /><input type="text" name="username"  value="<?php echo $user->username ?>"><br />
               Họ tên: <br /><input type="text" name="fullname"  value="<?=$user->fullname ?>">
               <br /><div class="error" id="name_error"><?php echo form_error('fullname')?></div>
               Mật khẩu: <br /> <input type="text" name="password"value="<?=$user->password ?>" >
              <br />
               Thành phố: <br /> <input type="text" name="city"value="<?=$user->city ?>"  >
               <br />
               Số điện thoại:  <br /><input type="text" name="phone"  value="<?=$user->phone ?>" >   
               <br />
               <input type="submit" value ="Sửa thành viên" id ="submitbt" style="margin-left: 50px; margin-bottom: 20px">
           </form> 
        </div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";

}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
