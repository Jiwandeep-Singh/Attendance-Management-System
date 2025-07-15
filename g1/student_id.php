<?php 

session_start();
//$_SESSION["ID"];
include('connection.php');

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $tid=$_POST['SID'];
               $password=$_POST['password'];
                $name=$_POST['uname'];
                $number=$_POST['number'];
                $class=$_POST['clas'];
                $section=$_POST['section'];
                               $sql = "select *from `student_login` where id='$tid'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
                
                
                
                if($count>0)
                {
                 $_SESSION["P"]=3;
                     header("Location: http://localhost/g1/sid.php");                            

                }
                else
                {
                
            
                
        
                       // $query="INSERT INTO `teacher_login`(`id`, `password`, `name`, `phone_no`) VALUES($tid,'$password','$name','$number')";
                            $query="INSERT INTO `student_login`(`id`, `password`, `name`, `phone_no`, `class`, `section`) VALUES($tid,'$password','$name','$number','$class','$section')";
                                //mysqli_query($link,$query);
                    if(mysqli_query($link, $query)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
 
                           $_SESSION["P"]=4;
                     header("Location: http://localhost/g1/sid.php");                            
                            
                        
                       
                    
                                       
            }
            }
                            
            ?>
