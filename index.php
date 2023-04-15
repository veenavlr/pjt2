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
.container
{
    background-color:antiquewhite;  
    align-self:center;
    padding:75px 75px;
    margin:20px 350px;
    justify-self: center;

}
h1
{
    text-align:center;
    display:block;
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
.dropdown_1,.dropdown_2{
    height: 30%;
    font-size:20px;
}
    </style> 

 
 
    <div class="logout">
    <a href="logout.php">Logout</a>
</div>
  
    <div class="container">
        <h1>WELCOME TO YOUR IT SUPPORT SYSTEM </h1>
        <div class="login-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <div class="dropdown_1">
        <select name="title" id="title">
        <option value="">--- Please select title ---</option>
             <option value="Mr" >Mr.</option>
             <option value="Mrs">Mrs.</option>
              <option value="Ms">Ms.</option>
        </select>
         </div>

        <input type="text" placeholder="firstname"  name="Fname">
        <input type="text" placeholder="lastname"  name="Lname">


      <div class="dropdown_2">
        <select name="role" id="role">
        <option value="">--- select a role ---</option>
            <option value="Admin" >Admin</option>
            <option value="Manager">Manager</option>
             <option value="CEO">CEO</option>
        </select>
         </div>

      <button type="submit" name="submit">Submit</button>
      <br><br>
      
    </form>
    
<?php

$Fname = $Lname = $role = $title= " ";
$titleerr=$Fnameerr=$Lnameerr=$roleerr= " ";
$formcomplete=" ";


//form validation
if ($_SERVER['REQUEST_METHOD']==='POST')
{ 
    $formcomplete=false;

 if(isset($_POST['submit']))
 {
    $formcomplete=true;
    if(empty($_POST['title']))
    {
         $titleerr="title is missing";
         echo $titleerr."<br>";
         $formcomplete=false;

            
    }
    else {
        $title=htmlspecialchars($_POST['title'],ENT_QUOTES);
    }

    if(empty($_POST['Fname']))
    {
        $Fnameerr="Firstname is missing";
        echo $Fnameerr."<br><br>";
        $formcomplete=false;

    }
    else {
        $Fname=htmlspecialchars($_POST['Fname'],ENT_QUOTES);
    }

    if(empty($_POST['Lname']))
    {
        $Lnameerr="Lastname is missing";
        echo $Lnameerr."<br><br>";
        $formcomplete=false;

    }
    else {
         $Lname=htmlspecialchars($_POST['Lname'],ENT_QUOTES);
    }

    if(empty($_POST['role']))
    {
         $roleerr="role is missing";
         echo $roleerr."<br><br>";
         $formcomplete=false;


    }
    else {
         $role=htmlspecialchars($_POST['role'],ENT_QUOTES);
    }

    if($formcomplete)
    {
         $_SESSION['title']=$_POST['title'];
         $_SESSION['Fname']=$_POST['Fname'];
         $_SESSION['Lname']=$_POST['Lname'];
         $_SESSION['role']=$_POST['role'];
         header("Location: problem.php");

    }
    
    } }
?>


</div>
</div>  

<?php include'footer.php';?>
 
 







