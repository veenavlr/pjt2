<?php
session_start();
?>
<?php include 'header.php';?>
<style>
body{
    margin: 0;
          
  }
  .login{ 
  
    text-align:right;
    font-size: 25px; 
    padding-top: 65px;
    padding-right:55px;
    display:block;
  }
  h1
  {
    color:red;
margin:auto;
width:800px;
text-align:center;
    
  }
  
  
</style>
<div class="login">
    <a href="index.php">Login</a>
</div>
<?php
echo '<h1><p> You  Logged Out! </P></h1>';
session_unset();
session_destroy();
exit();
?>
</body>
<?php include'footer.php';?>
