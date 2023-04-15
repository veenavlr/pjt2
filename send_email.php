<?php session_start(); ?>
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
  form{
    display: flex;
    align-items: center;
    border:none;
    height:30%;
    font-size:20px;
    flex-direction:row;
  
  }
  input{
    flex-grow:2;
  }
  
  
</style>
<div class="logout">
    <a href="logout.php">Logout</a>
</div>
    <div class="container_desc">
<?php 
 $email_type=$_SESSION['email_type'];
 
 
 switch($email_type)
 { 
     case 'new_account':
            
           echo '<h3>Congratulations !</h3><br>';
            echo '<p>';
            echo 'A new link for account creation has been send to your mail<br>';
            echo '<br>your email id  '.$_SESSION['email'];
            echo '</p>';
        break;
        case 'lost_password':
            
            echo '<h3>Congratulations !</h3><br>';
            echo '<p>';
            echo 'A new link to recover your lost pasword has been send to your mail<br>';
            echo '<br>your email id  '.$_SESSION['email'];
            echo '</p>';
             break;
        }
        ?>
        </div>
    </body>
    <?php include'footer.php';?>
