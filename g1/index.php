<?php
session_start();
$message='';
  $_SESSION["ID"]= " ";
  $_SESSION["name"]=" ";
 $_SESSION["incharge"]= " ";
$_SESSION["section"]= " ";
?>
<!DOCTYPE html>

<html lang="en">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>LOGIN PAGE</title>
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
             
             .bg {
  /* The image used */
  background-image: url("pencil.jpg");

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

             #id1
             {
                 
                 visibility: hidden;
             }

              #passworderror
             {
                 
                 visibility: hidden;
                 
             }
                     </style>

            

        <script>
function validateForm() {
  let x = document.forms["myForm"]["uid"].value;
    let y = document.forms["myForm"]["upassword"].value;
  if (x == "") {
       document.getElementById("iderror").style.visibility = "visible";
      document.getElementById("iderror").innerHTML = "ID must be filled out";
    return false;
  } 
    if (y == "") {
       document.getElementById("passworderror").style.visibility = "visible";
      document.getElementById("passworderror").innerHTML = "Password must be filled out";
    return false;
  }
    
}
</script>
    </head> 
    <body class="bg" >
    
        <p class="heading"><image class="logo" src="logo.jpg"></image>  PUBLIC SCHOOL</p>
       <form class="bold_text" name="myForm"  onsubmit="return validateForm()"  action = authentication.php  method="post">
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label" >ID</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" name="uid">
        <div class="alert alert-danger" role="alert" id="iderror"  >
    </div>
       
  
      </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3" name="upassword">
        <div class="alert alert-danger" role="alert" id="passworderror"  >
    </div>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-5">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Admin
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Staff
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
          <label class="form-check-label" for="gridRadios3">
            Student
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
   
    
  </div>
  <div class="form-group row">
    <div class="col-sm-5" >
        <div class="signin">
      <button type="submit" class="btn btn-primary" name='id1' >Sign in</button></div>
        
        
    </div>
      
      
      
    
  </div>
</form> 
 
    </body>




</html> 