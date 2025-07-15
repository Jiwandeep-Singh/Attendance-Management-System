<?php
session_start();
 $_SESSION["ID"];
$_SESSION["P"];
$_SESSION["name"];
$n=$_SESSION["name"];
include('connection.php');
$message='';
 $idd=$_SESSION["ID"];
 $sql = "select *from admin_login where id = '$idd' ";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 0){  
          
            }
    else{  
            
?>

<!DOCTYPE html>

<html lang="en">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>MAIN PAGE</title>
         <style>
            
           
               .heading
                {
               
              font-family:Stencil;
                    
                    background-color:#00416D;
                    position:relative;
                    left:0;
                    top:-14px; 
                    width:100%;
                    height: 90px;
                    color:white;
                    font-size:40px;
                    padding-left:12px; 
                    padding-top: 20px;

                }
             .head1
             {
                 position:relative;
                    left:0;
                    top:-30px; 

             }
             
             .bg {
  /* The image used */
  /*background-image: url("pencil.jpg"); */

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


            .logo
            {
                width:45px;
                height:45px;
            }
                    .data
                {
           
                    background-color:#FCDAB7;
                }

                 .career
                {

                    background-color:#D9ECF2;
                }

                h2{

                font-family:inherit;


                }
                .head{
                    margin:20px;
                    position:relative;
                    top:-30px;
                    font-family:serif;
                    font-size:23px;
                    color:#133B5C;
                }

                .body1
                {
                 font-family:ReithSans;
                }
               #next
                {
                position: relative;
                    width:90px;
                   left: 0px;
                   background-color: #00416D;
                }
                #previous
                {
                position: relative;
                   left: 10px;
                    background-color: #00416D;
                  
                }
                .footer {
                  position: relative;
                  left: 0;
                  bottom: 0;
                  width: 100%;
                  background-color: #00416D;
                  height:50px;
                  color: white;
                  text-align: center;
                }
              .bold_text {
                            font-weight: bold;
                         }
             .signin {
                 position: absolute;
                
                left: 43%;
                    
             }
             
              #iderror
             {
                 visibility: hidden;
            
             }
             
             #success
             {
                 visibility: hidden;
            
             }
                   
             
                          

        </style>
        <?php
            
            if($_SESSION["P"]==5)
            { 
            
                $message='ID aready taken!';
 ?>
        <style type="text/css">
            #iderror {
                visibility:visible;
            }
        </style>
    <?php
            }
        ?>
        
        
        <?php
            
            if($_SESSION["P"]==6)
            { 
            $message='ID created successfully';

 ?>
        <style type="text/css">
            #success {
                visibility:visible;
            }
        </style>
    <?php
            }
        ?>

        <script>
function validateForm() {
    
}
        </script>

    </head> 
    <body class="bg" >
    
        <p class="heading"><image class="logo" src="logo.jpg"></image>  PUBLIC SCHOOL </p>
             
      
      <div class="head1">  
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/g1/admin_page.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Create 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/g1/id.php">Teacher's id</a>
          <a class="dropdown-item" href="http://localhost/g1/sid.php">Student's id</a>
            <a class="dropdown-item" href="http://localhost/g1/admin_id.php">Admin's id</a>
           
        </div>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Delete 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/g1/delete_tid.php">Teacher's id</a>
          <a class="dropdown-item" href="http://localhost/g1/delete_sid.php">Student's id</a>
             <a class="dropdown-item" href="http://localhost/g1/delete_aid.php">Admin's id</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Update
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/g1/update_tid.php">Teacher's id</a>
          <a class="dropdown-item" href="http://localhost/g1/update_sid.php">Student's id</a>
            <a class="dropdown-item" href="http://localhost/g1/update_aid.php">Admin's id</a>
             <a class="nav-link" href="http://localhost/g1/incharge.php">Class Incharge </a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Display
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/g1/display_tid.php">Teacher's id</a>
          <a class="dropdown-item" href="http://localhost/g1/display_sid.php">Student's id</a>
            <a class="dropdown-item" href="http://localhost/g1/display_aid.php">Admin's id</a>
        </div>
        </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Attendance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/g1/aclasswise.php">Class</a>
          <a class="dropdown-item" href="http://localhost/g1/attendance_check.php">student</a>
           
        </div>
        </li>
    </ul>
   <form class="form-inline my-2 my-lg-0">
      <?php
        echo "<h6>  $n &nbsp </h6> ";
    
       ?>
        
    </form>
    
     
   <a href= "http://localhost/g1/index.php"> <input class="btn btn-primary" type="submit" name="Logout" value="Logout"></a>

  </div>
</nav>
        
        </div>

        
        
        
        <br> <br>
    <div class="container">
        <form class="needs-validation" name="myform"  method="post"   action="admin_id1.php" novalidate >
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Admin ID</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="101" name="TID" required>
      <div class="valid-tooltip"  >
        
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Passworrd</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="abc"  name="password" required>
      <div class="valid-tooltip">
        
      </div>
    </div>
   
  </div>
  <div class="form-row">
       <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Name</label>
      <div class="input-group">
        <div class="input-group-prepend">
         
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" name="uname" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Name must be filled!
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip03">Phone Number</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="98XXXXXXXXX" name="number" required>
      <div class="invalid-tooltip">
        Please provide a valid phone number.
      </div>
    </div>
    
  </div>
            
  <button class="btn btn-primary" type="submit"  name="insert">Submit </button>
            
</form>
        <br>
        
        <?php
            

            
                       
                      echo "<div class='alert alert-danger' role='alert' id='iderror'  > $message </div>";
        
             
            echo "<div class='alert alert-success' role='alert' id='success'> $message   </div>";
                     
    }
        ?>
                      
                                            
        <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
          
         
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script
        </div>
            </div>
        
            <!-- Content here -->
            
             
    
    </body>




</html> 