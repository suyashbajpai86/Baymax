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
<div class="container">
            <form class="form-horizontal" method="POST" role="form" action="creg_script.php">
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
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="uncknownRadio" name="gender" value="unknown">Unknown
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
                                <option value="MBS">MBS</option>


                        </select>
                    </div>
                    </div>
                 <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Speciality</label>
                    <div class="col-sm-9">
                   <input class="form-control" type="text" id="uncknownRadio" name="special" value="">
                   </div>
                </div> <!-- /.form-group -->
                 <div class="form-group">
                    <label class="control-label col-sm-3">Consultant type</label>
                    <div class="col-sm-9">
                   <input class="form-control" type="text" id="uncknownRadio" name="ctype" value="">
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