<?php session_start(); ?>
<?php include 'header.php';?>


<div class="logout">
    <a href="logout.php">Logout</a>
</div>

<div class="container_desc">
  <?php  echo "<p>To retrieve your lost password ,Please enter your email address </p>"; ?>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <label for="email">Enter your email:</label>
        <input type="email_lostpassword" id="email" name="email">
        <input type="submit" name="submit">

</form>
<?php
echo'<div>';
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
 
             $_SESSION['email_type'] = "lost_password";
             header("Location: send_email.php");
            exit();
             
        }
 }
} echo'</div>';
?>
</div></body>
<?php include'footer.php';?>
