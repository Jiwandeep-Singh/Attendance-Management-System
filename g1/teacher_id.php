<?php 

session_start();
$_SESSION["ID"];
$_SESSION["P"];
include('connection.php');
                        
            if($_SERVER['REQUEST_METHOD']=='POST' )
            {
                $tid=$_POST['TID'];
               $password=$_POST['password'];
                $name=$_POST['uname'];
                $number=$_POST['number'];
                $incharge=$_POST['incharge'];
                $section=$_POST['section'];
                
                //echo "$form1"
                
                               $sql = "select *from `teacher_login` where id='$tid'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
                
                
                
                if($count>0)
                {
                    $_SESSION["P"]=1;
                     header("Location: http://localhost/g1/id.php");
 
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
 
                          $_SESSION["P"]=2;
                     header("Location: http://localhost/g1/id.php");                            
                        
                       
                    
                                       
            }
            }
        
 /*if (isset($_POST["insert"]))
 {
     echo "hello";
 } else
 {
     echo "bye";
 } */
            ?>
