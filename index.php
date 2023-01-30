<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>

<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
margin: 0;
padding: 0;
outline: none;
box-sizing: border-box;
}
body{
display: flex;
justify-content: center;
min-height: 100vh;
direction: rtl;
}
.wrapper{
width: 400px;
height: 620px;
margin-top: 6px;
background: #fff;
padding: 20px;
box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.wrapper .input-data{
height: 40px;
width: 100%;
position: relative;
}
.wrapper .input-data input{
height: 100%;
width: 100%;
border: none;
font-size: 17px;
border-bottom: 2px solid silver;

}
.input-data input:focus ~ label,
.input-data input:valid ~ label{
transform: translateY(-20px);
font-size: 17px;
color: rgb(241,169,48);
}
.wrapper .input-data label{
position: absolute;
bottom: 10px;
right: 0;
pointer-events: none;
transition: all 0.3s ease;

}
.input-data .underline{
position: absolute;
height: 2px;
width: 100%;
bottom: 0;
}
.input-data .underline:before{
position: absolute;
content: "";
height: 100%;
width: 100%;
background: rgb(241,169,48);;
transform: scaleX(0);
transform-origin: center;
transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before{
transform: scaleX(1);
}
 </style>
</head>
<body dir="rtl">

    <div class="wrapper" style=" direction: rtl;">
      <p class="pb-4 pt-1 text-center h1">تسجيل الدخول</p>
      <img src="a.jpg" class="rounded mx-auto d-block border-radius" alt="" height="170px" width="170px">
      <br>
      <form action="" method="post">
      <div class="input-data">
         <input type="text" name="user" required>
         <div class="underline"></div>
         <label style="font-size: 14px;">اسم المستخدم :</label>
      </div>
      <br><br>
      <div class="input-data">
        <input type="text" name="pass" required>
        <div class="underline"></div>
        <label style="font-size: 14px;" >كلمة المرور :</label>
     </div>
<br><br>
          <!-- نسيت كلمة المرور -->
     <div class="d-flex justify-content-around">
      <div>
          <!-- Remember me -->
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
              <label class="custom-control-label" for="defaultLoginFormRemember">نسيت كلمة المرور</label>
          </div>
      </div>
      <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
      </div>
  </div>
<br>
  <!-- Sign in button -->
 <div class="row justify-content-center">
  <button class="btn btn-warning mr-4 col-4" name="login" type="submit"> تسجيل الدخول</button>
</div>
 </form>
 <?php 

if(isset($_POST['login']))
{
  $user=$_POST['user'];
  $pass=$_POST['pass'];

if($user == 'admin' && $pass=='123'){
  header("Location:home.php");
}
else{
  $user='';
  $pass='';
  echo"<p class='text-warning text-center mt-2'>اسم المستخدم او كلمة المرور غير صحيحة</p>";
}
}
?>
   </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js'></script><script  src="./script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/toolkit.min.js"></script>
<script src="bootstrap.bundle.min.js" ></script>  

</body>
</html>
