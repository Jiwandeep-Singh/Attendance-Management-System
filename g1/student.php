<?php 

session_start();
//$_SESSION["ID"];
include('connection.php');

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $tid=$_POST['TID'];
               $password=$_POST['password'];
                $name=$_POST['uname'];
                $number=$_POST['number'];
                $incharge=$_POST['incharge'];
                $section=$_POST['section'];
                               $sql = "select *from `teacher_login` where id='$tid'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
                
                
                
                if($count>0)
                {
                  echo "<div>
                         ID aready taken!
                         </div>";   
                }
                else
                {
                
            
                
        
                       // $query="INSERT INTO `teacher_login`(`id`, `password`, `name`, `phone_no`) VALUES($tid,'$password','$name','$number')";
                            $query="INSERT INTO `teacher_login`(`id`, `password`, `name`, `phone_no`, `class_incharge`, `class_section`) VALUES($tid,'$password','$name','$number','$incharge','$section')";
                                //mysqli_query($link,$query);
                    if(mysqli_query($link, $query)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
 
                            echo "<div>
                            ID created successfully
                         </div>";
                            
                        
                       
                    
                                       
            }
            }
                            
            ?>
