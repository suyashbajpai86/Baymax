
<link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
  
  
 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <!-- jQuery -->
 
<div class="container">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <!-- @ Start login box wrapper -->
                <div class="blmd-wrapp">
                    <div class="blmd-color-conatiner ripple-effect-All"></div>
                    <div class="blmd-header-wrapp ">
                        <div class="blmd-switches">
                             <button class="btn btn-circle btn-lg btn-blmd ripple-effect btn-success blmd-switch-button">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                 </svg>
                              </button>
                        </div> 
                        
                    </div> 
                    <div class="blmd-continer">
                        <!-- @ Login form container -->
                        <form method="POST" action="login_script.php" class="clearfix" id="login-form">
                            <h1>Login Page</h1>
                            <div class="col-md-12">
                                
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="username" autocomplete="off" id="username" class="form-control">
                                        <label class="blmd-label">Email or Username</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="password" name="password" autocomplete="off" id="password" class="form-control">
                                        <label class="blmd-label">Password</label>
                                    </div>

                                </div>
                                 <?php if(isset($_GET['m3'])){ 
                              echo " <div class='alert alert-warning'> <center>". $_GET['m3'] . "</center> </div>";
                                      }?>
                            </div>
                            <br>
                            <div class="col-sm-12 text-center">
                                <button type="submit" name= "submit" value="submit" class="btn btn-blmd ripple-effect btn-success btn-lg btn-block">Login</button>
                            </div>
                            <br/>
                        </form>
                        <!-- @ Login form container -->
                        <form method="POST" action="signup_script.php" name="Validatedform"  class="clearfix form-hidden Validatedform" id="Register-form">
                            <h1>Register Page</h1>
                            <div class="col-md-12">
                                
                                 <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="name" autocomplete="off" id="text" class="form-control" required>
                                        <label class="blmd-label">Full Name.</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="ermail" autocomplete="off" onkeyup="ajaxdemo()" id="email" class="form-control" data-validation="email" required>
                                        <label class="blmd-label">Email or Username</label>
                                        <span id='spn' style="color:red"></span>
                                    </div>
                                    <?php if(isset($_GET['m1'])){ echo $_GET['m1']; }?>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="password" name="password_confirmation" autocomplete="off" id="password" class="form-control" data-validation="length" data-validation-length="min8" required>
                                        <label class="blmd-label">Password</label>
                                    </div>
                                    <?php if(isset($_GET['m2'])){ echo $_GET['m2']; } ?>
                                </div>
                                 <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="password" name="password" autocomplete="off" id="password1"  class="form-control" data-validation="confirmation" data-validation-confirm="password_confirmation" required>
                                        <label class="blmd-label">Repeat Password</label>
                                    </div>
                                </div>
                                 <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="city"  id="searchTextField" class="form-control" autocomplete="on">
                                        <label class="blmd-label">City</label>
                                    </div>
                                </div>
                                <label class="blmd-label" style="color:white">Profession</label>
                                 <div class="input-group blmd-form">

                                <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="pro" id="exampleRadios1" value="doctor" checked>
    Doctor
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="pro" id="exampleRadios2" value="client">
    Client
  </label>
</div>
</div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" name="submit" onsubmit="validate()" class="btn btn-blmd ripple-effect btn-warning btn-lg btn-block">Register</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
               
        </div>
         
 
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
   

<script type="text/javascript" src="js/login.js"></script>
<!-- Bootstrap Toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!--  Jquery Validation -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
   $.validate({
    modules : 'security'
  });
</script>
  
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKr_qvBWxpyXxOocTK7ZNwjcVD9tKuoIg&libraries=places"></script>
<script type="text/javascript">
   function initialize() {


 var options = {
  types: ['(cities)']
 // componentRestrictions: {country: "us"}
 };

 var input = document.getElementById('searchTextField');
 var autocomplete = new google.maps.places.Autocomplete(input, options);
};
google.maps.event.addDomListener(window, 'load', initialize);

   
function ajaxdemo()
{
    var n=document.getElementById('email').value;
    var xhr=new XMLHttpRequest();
    xhr.open("GET","Ajaxdemo1.php?name1="+n);
    xhr.send(null);
    xhr.onreadystatechange=function()
    {
         if(xhr.readyState==4&&xhr.status==200)
         {
            document.getElementById('spn').innerHTML=xhr.responseText;
         }
         
    };


}


 
</script>