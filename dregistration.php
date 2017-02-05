<link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
  
  
 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <!-- jQuery -->
 

<style type="text/css">
    body {
    background-color: #eee;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}


</style>

<?php 


require_once("connection.php");
  
session_start();

$email = $_SESSION['email'];

$query = "SELECT f1 FROM dreg  WHERE email='{$email}'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['f1']==0)

{


?>
<div class="container">
            <form class="form-horizontal" method="POST" role="form" action="dreg_script.php" enctype="multipart/form-data">
                <h2>Complete Your Details</h2>
               
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="datepicker" name="dob" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="gender" value="male">Male
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-9">
                        <input type="number" id="mobile" name="mobile" class="form-control">
                    </div>
                    </div>

                     <div class="form-group">
                    <label for="degree" class="col-sm-3 control-label">Degree</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="degree">
                            
                                <option value="MBBS">MBBS</option>
                                <option value="BDS">BDS</option>
                                  <option value="B.Pharma">B.Pharma</option>
                                <option value="BPT">BPT</option>
                                 <option value="BOT">BOT</option>
                                <option value="B.Sc Nursuing">B.Sc Nursuing</option>
                                <option value="BHMS">BHMS</option>
                                <option value="BUMS">BUMS</option>

                        </select>
                    </div>
                    </div>
                 <!-- /.form-group -->
                <div class="form-group">
                    <label for="degree" class="col-sm-3 control-label">Speciality</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="specialist">
                            
                                <option value="obstetrician-gynecologist">obstetrician-gynecologist</option>
                                <option value="Physician">Physician</option>
                                <option value="Dermatologist">Dermatologist</option>
                                <option value="Cancer">Cancer</option>
                                  <option value="Child Specialist">Child Specialist</option>
                                <option value="Yoga">Yoga</option>
                                <option value="Meditation">Meditation</option>

                        </select>
                    </div>
                    </div>
                 <!-- /.form-group -->
                 <div class="form-group">
                    <label class="control-label col-sm-3">Hospital / Clinic</label>
                    <div class="col-sm-9">
                   <input class="form-control" type="text" id="uncknownRadio" name="hospital" value="">
                   </div>
                </div> 
               <div class="form-group">
                    <label class="control-label col-sm-3">Address</label>
                    <div class="col-sm-9">
                   <textarea class="form-control" rows="4" id="uncknownRadio" name="add" value=""></textarea>
                   </div>
                </div> 
                 

               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block" id="submit" name="submit" value="submit" >Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
         <script src="js/jquery-ui.min.js"></script>
          <script type="text/javascript">
         $(function() 
 {   $( "#datepicker" ).datepicker({
         changeMonth:true,
         changeYear:true,
         yearRange:"-100:+0",
         dateFormat:"dd MM yy" });
 });



     
 </script>

 <?php
  
if(isset($_REQUEST['submit']))
{
        
        
        error_reporting(0);
	require_once("connection.php");
		session_start();
		if (!isset($_SESSION['email']))
	header('location: index.php');
		
		$dob = $_POST['dob'];
		$dob = mysqli_real_escape_string($con,$dob);
		$dob = strip_tags($dob);
		
		$mobile = $_POST['mobile'];
		$mobile = mysqli_real_escape_string($con,$mobile);
		$mobile = strip_tags($mobile);
		
		$address = $_POST['add'];
		$address = mysqli_real_escape_string($con,$address);
		$address = strip_tags($address);
		
		
		$gender = $_POST['gender'];
		$gender = mysqli_real_escape_string($con,$gender);
		$gender = strip_tags($gender);
		

		$degree = $_POST['degree'];
		$degree = mysqli_real_escape_string($con,$degree);
		$degree = strip_tags($degree);

		$special = $_POST['specialist'];
		$special= mysqli_real_escape_string($con,$special);
		$special = strip_tags($special);

		$ctype = $_POST['hospital'];
		$ctype= mysqli_real_escape_string($con,$ctype);
		$ctype = strip_tags($ctype);
		$email=$_SESSION['email'];
        
$query = "UPDATE dreg SET dob='$dob', mobile='$mobile',address='$address',gender='$gender',speciality='$special',hospital='$ctype',degree='$degree' ,f1=1 WHERE email='$email'";
		echo $query;
$result = mysqli_query($con, $query);
if($result)
{
	echo "Update succesfully";
	header('location:dr_pro.php');
}
else{
	echo "failed";
}
   
           
            
        
        
    


?>
</center>
<?php } }

else{
  header('location: dr_pro.php');
}

 ?>