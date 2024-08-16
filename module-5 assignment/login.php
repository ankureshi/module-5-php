<?php
require_once("ragister_navbar.php");
require_once("4-config.php");
if(isset($_POST["login"]))
{
    $email=$_POST["email"];
    $pass=base64_encode($_POST["password"]);
   $select= "select * from register where email='$email' and password='$pass'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $num_rows=mysqli_num_rows($exe);
    if($num_rows==1)
    {   
        $_SESSION["id"]=$fetch["id"];   
        $_SESSION["email"]=$fetch["email"];
        $_SESSION["fnm"]=$fetch["firstname"];

        echo "<script>
        alert('You are Logged In Successfully')
        </script>";

    }
    else 
    {

        echo "<script>
        alert('Your email and password are icorrect try again')
        window.location='login.php';
        </script>";
    }


}
?>

<!-- content here -->
 <div class="w-75 mx-auto mt-3 p-5 shadow">
 <h3 class="text-center">Login with Us</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />

<div class="row">
    <div class="col-md-5">
    <img src="https://tse3.mm.bing.net/th?id=OIP.EuHn2mNdaGr-QNb6HGt2DAHaEK&pid=Api&P=0&h=180" class="img-fluid w-100">
    </div>
    <div class="col-md-7">
    <!-- contact us form -->
<form method="post"         >


<div class="form-group mt-5">
<input type="text" name="email" placeholder="Enter email *" class="form-control" />
</div>  


<div class="form-group mt-3">
<input type="password" name="password" placeholder="Enter Password *" class="form-control" />
</div>  

<div class="form-group mt-2">
<input type="submit" name="login" value="SignIn" class="btn btn-dark text-white" />
<b><a href="">Forget Password ?</a></b>

</div>  
<div class="form-group mt-2">
<b>Don't have an account ?<a href="register.php">Create your account</a></b>
</div>

</form>
    </div>
</div>
 </div>