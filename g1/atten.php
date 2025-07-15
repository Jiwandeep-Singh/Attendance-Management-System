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
                $tid= $_SESSION["ID"];
                        $sql = "select  * from teacher_login where id = $tid ";  
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                        $i=$row["class_incharge"];
                        $s=$row["class_section"];
                         if($i=='2' and $s=='A')
                         {
                             $table='class2A';
                         }
                            elseif($i=='3' and $s=='A')
                        {
                             $table='class3A';
                        }
                        elseif($i=='4' and $s=='A')
                        {
                        
                             $table='class4A';
                        }


                        elseif($i=='5' and $s=='A')
                        {
                             $table='class5A';
                        }
                        elseif($i=='6' and $s=='A')
                        {
                             $table='class6A';
                        }
                        elseif($i=='7' and $s=='A')
                        {
                             $table='class7A';
                        }
                        elseif($i=='8' and $s=='A')
                        {
                             $table='class8A';
                        }
                            elseif($i=='9' and $s=='A')
                        {
                             $table='class9A';
                        }

                        elseif($i=='10' and $s=='A')
                        {
                            $table='class10a';
                        }
                        
                if (isset($_POST["insert"]))
                {
                $sql = "select *from $table where date='$date'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
                echo $count;
                $b=false;
                if($count>0)
                {
                    $_SESSION["P"]=1;
                      header("Location: http://localhost/g1/main.php");
                    exit();
                 /* echo "<div>
                         Attendance aready taken!
                         </div>"; 
                         */
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
                            $query="insert into $table(id,date,attendance) values($key,$date,'present')";
                            $insertResult=$link->query($query);
                        }
                        else{
                            $query="insert into $table(id,date,attendance) values($key,$date,'absent')";
                            //query="insert into 22101(id,date,attendance) values($key,$date,'absent')";
                            $insertResult=$link->query($query);
                            
                        }
                       
                    }
                    
                    $_SESSION["P"]=2;
                      header("Location: http://localhost/g1/main.php");
                    exit();

                        /*echo "<div>
                         Today Attendance taken successfully!
                         </div>";
                         */
                }

                           
                
                    
                      
                }
                
                if (isset($_POST["update"]))
                {
                   $sql = "select *from $table where date='$date'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
              
                $b=false;
                if($count == 0)
                {
                    $_SESSION["P"]= 3; //please take  attendance error
                      header("Location: http://localhost/g1/main.php");
                    exit();
                 /* echo "<div>
                         Attendance aready taken!
                         </div>"; 
                         */
                }
                    
 
                 else
                {
                   foreach($att as $key => $value)
                    {
                        if($value=="present")
                        {
                            //query="insert into 22101(id,date,attendance) values($key,$date,'present')";
                            //$query="insert into $table(id,date,attendance) values($key,$date,'present')";
                           $query="UPDATE $table SET `attendance`='present' WHERE id = $key"; 
                            $insertResult=$link->query($query);
                        }
                        else{
                            //$query="insert into $table(id,date,attendance) values($key,$date,'absent')";
                            //query="insert into 22101(id,date,attendance) values($key,$date,'absent')";
                           $query= "UPDATE $table SET `attendance`='absent' WHERE id= $key"; 
                            $insertResult=$link->query($query);
                            
                            
                        }
                
                
                
                }
                  
                     $_SESSION["P"]= 4; //please take  attendance error
                      header("Location: http://localhost/g1/main.php");
                    exit();

                }
            }
                
            }
            
            
            ?>
