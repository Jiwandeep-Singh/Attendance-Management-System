<?php 

session_start();
$_SESSION["ID"];
include('connection.php');

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $att=$_POST['attendance'];
               $date = date('Ymd');
                //$query2="select distinct date from attt ";
                //$result=$link->query($query2);
                $sql = "select *from attt where date='$date'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
                echo $count;
                $b=false;
                if($count>0)
                {
                  echo "<div>
                         Attendance aready taken!
                         </div>";   
                }
                else
                {
                    $b=true;
                }
                if($b==true)
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
                        echo "<div>
                         Today Attendance taken successfully!
                         </div>";
                }

                //$date=date('y-m-d');
               // $query2="select distinct date from `22101` ";
               /* $query2="select distinct date from attt ";
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
                */
            
                
                    
                      
                }
            
            ?>
