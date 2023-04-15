<?php
session_start();
$role= $_SESSION['role'];
?>
<?php include 'header.php';?>
<style>

body{
    margin: 0;
          
}
.logout{ 

    text-align:right;
    font-size: 25px; 
    padding-top: 65px;
    padding-right:55px;
    display:block;
}
.container_desc
{
    
    background-color:antiquewhite;  
    align-self:center;
    padding:75px 75px;
    margin:20px 350px;
    justify-self: center;

}

</style>

<body>
<div class="logout">
    <a href="logout.php">Logout</a>
</div>
<div class=container_desc>
    <?php 
    switch($role)
    { 
        case 'Admin':
               
              echo '<h1>Hello  '.$role.'</h1>';
              echo '<h3>Here are Your options</h3><br>';
              echo '<p>';
               echo '<h3><a href="isntworking.php">My computer is not working</a></h3><br>';
               echo '<h3><a href="newaccount.php">Create  a new account</a></h3>'; 
               echo '</p>';
               
        break;
        case 'Manager':
               
            echo '<h1>Hello  '.$role.'</h1>';
            echo '<h3>Here are Your options</h3><br>';
            echo '<p>';
             echo '<h3><a href="isntworking.php">My computer is not working</a></h3><br>';
             echo '<h3><a href="lostpassword.php">Create  a new account</a></h3>'; 
             echo '</p>';
             
      break;
      case 'CEO':
               
        echo '<h1>Hello   '.$role.'</h1>';
        echo '<h3>Here are Your options</h3><br>';
        echo '<p>';
         echo '<h3><a href="isntworking.php">My computer is not working</a></h3><br>';
         echo '<h3><a href="needhelp.php">Need Help!</a></h3>'; 
         echo '</p>';
         
  break;
    } 
 ?>
  
</div>

    </body>
    <?php include'footer.php';?>
