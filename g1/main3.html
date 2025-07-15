<?php
session_start();
 $_SESSION["ID"];
include('connection.php');

 
?>

<!DOCTYPE html>

<html lang="en">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
             
                          

        </style>

    </head> 
    <body class="bg" >
    
        <p class="heading"><image class="logo" src="logo.jpg"></image>  PUBLIC SCHOOL</p>
    
        
        <div class="container">
            <!-- Content here -->
            <form method="POST">
            <table class="table table-striped">
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Attendence</th>
                </tr>
                <?php 
               // while($data)
                //foreach ($data 
                include('connection2.php');
                     while($data=$result1->fetch_assoc())
                        {
                        //echo $data["id"];
                        
                ?>
                <tr>
                <td> <?php echo $data["id"]; ?> </td>
                <td><?php echo $data["name"]; ?> </td>
                <td>Present<input type="radio" name="attendance[<?php echo $data['id']; ?>]" value="present">&nbsp;  Absent<input   type="radio" name="attandance[<?php echo $data['id']; ?>]" value="absent"> </td>
                </tr>
                <?php 
                     }
                ?>
               
            </table>
                <input type="submit" value="attendance">
                </form>
             
            <?php 
            if($_SERVER['REQUEST_METHOD']== 'POST')
            {
                $att=$_POST['attendance'];
               $date = date('Y-m-d');
                //$date=date('y-m-d');
               // $query2="select distinct date from `22101` ";
                $query2="select distinct date from attt ";
                $result=$link->query($query2);
                $b=false;
                if($result->num_rows>0)
                {
                    while($check=$result->fetch_assoc())
                 {
                     if($date==$check['date'])
                     {
                         $b=true;
                         echo "<div>
                         Today Attendance already taken!
                         </div>";
                     }
                     $b=true;
                 }
                }
            }
                if(!$b)
                {
                    
                    foreach($att as $key => $value)
                    {
                        if($value=="present")
                        {
                            //query="insert into 22101(id,date,attendance) values($key,$date,'present')";
                            $query="insert into attt(id,date,attendance) values($key,$date,'present')";
                            $insertResult=$link->query($query);
                        }
                        else{
                            $query="insert into attt(id,date,attendance) values($key,$date,'absent')";
                            //query="insert into 22101(id,date,attendance) values($key,$date,'absent')";
                            $insertResult=$link->query($query);
                            
                        }
                    }
                     if($insertResult)
                     {
                          echo "<div>
                         Today Attendance taken successfully
                         </div>";
                     } 
                }
            
            ?>
        </div>
    </body>




</html> 