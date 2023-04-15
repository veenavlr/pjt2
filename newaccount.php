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
  <?php  echo "<p>To create a new account ,Please enter your email address </p>"; ?>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <label for="email">Enter your email:</label>
        <input type="email_newaccount" id="email" name="email">
        <input type="submit" name="submit">

</form>

<?php
 if(isset($_POST['submit']))
 {
    if(isset($_POST['email']))

    {    $email= $_POST['email'];


       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
       {
        echo'<br>';
        echo "<div>Invalid email format</div>";
        }
        else{
           
            $_SESSION['email']=$_POST['email'];

             $_SESSION['email_type'] = "new_account";
             header("Location: send_email.php");
            exit();
             
        }
 }
} 
?>
</div>
</body>
<?php include'footer.php';?>
