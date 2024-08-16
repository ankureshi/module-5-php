<?php
require_once("ragister_navbar.php");
require_once("4-config.php");
if(isset($_POST["reg-data"]))
{
    date_default_timezone_set("Asia/Calcutta");         
    $fnm=$_POST["fnm"];
    $lnm=$_POST["lnm"];
    $em=$_POST["email"];            
    $pwd=base64_encode($_POST["password"]);
    $cpwd=base64_encode($_POST["confirmed-password"]);
    $phone=$_POST["phone"]; 
    $add=$_POST["address"];
    $country=$_POST["country"];
    $reg_date=date("d/m/Y H:i:s a");

    // insert data write a sql query

    if($pwd==$cpwd)
    {

       $query="insert into register(firstname,lastname,email,password,phone,address,country,added_date_time)
        values('$fnm','$lnm','$em','$pwd','$phone','$add','$country','$reg_date')";  
        $exe=mysqli_query($con,$query);


        echo "<script>          
        alert('Thanks for Create your account with us')
        window.location='login.php';                
        </script>"; 
    }
    else
    {
         echo "<script>
        alert('Your password and confirmed password does not matched try again')
        window.location='register.php';
        </script>"; 
    }
           
}

?>