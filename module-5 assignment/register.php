<?php
require_once("ragister_navbar.php");
require_once("4-config.php");
?>          
<!-- content here -->
<div class="w-50 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Register Here</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />

<!--register data-->

<form method="post" action="register_data.php">
    <div class="row">
        <div class="form-group mt-2 col-md-6">
            <input type="text" name="fnm" placeholder="Enter first Name" class="form-control"/>
        </div>
        <div class="form-group mt-2 col-md-6">
            <input type="text" name="lnm" placeholder="Enter last Name" class="form-control"/>
        </div>
        </div>

        <div class="form-group mt-2 col-md-6">
            <input type="text" name="email" placeholder="Enter Email" class="form-control"/>
        </div>

        <div class="row">    
        <div class="form-group mt-2 col-md-6">
        <input type="password" name="password" placeholder="Enter Password *" class="form-control" />
        </div>   

        <div class="form-group mt-2 col-md-6">
        <input type="password" name="confirmed-password" placeholder="Enter Confirmed Password *" class="form-control" />
        </div>   
        </div>

        <div class="form-group mt-2">
        <input type="text" name="phone" placeholder="Enter Phone *" class="form-control" />
        </div>  

        <div class="form-group mt-2">
        <textarea  name="address" placeholder="Enter address *" class="form-control"></textarea>
        </div>  

        <div class="form-group mt-2">
        <select name="country"  placeholder="Select country *" class="form-control">
            <option value="">Select country</option>
            <?php
            //fetch country//
            $url="https://country.io/names.json";
            $data=file_get_contents($url,true);
            $country=json_decode($data,true);
            foreach($country as $country2)
            {
             ?>
             <option value="<?php echo $country2;?>"><?php echo $country2;?></option>
             <?php
            }
            ?>
        </select>
        </div>

        <div class="form-group-mt-2">
        <input type="submit" name="reg-data" value="Register" class="btn btn-dark btn btn-center text-white" />
        </div>
        </form>
        </div>
