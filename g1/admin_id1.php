<?php 

session_start();
$_SESSION["ID"];
$_SESSION["name"];
$n=$_SESSION["name"];
$_SESSION["P"];
include('connection.php');

$idd=$_SESSION["ID"];
 $sql = "select *from admin_login where id = '$idd' ";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 0){  
          
            }
    else{  
            
                        
            if($_SERVER['REQUEST_METHOD']=='POST' )
            {
                $tid=$_POST['TID'];
               $password=$_POST['password'];
                $name=$_POST['uname'];
                $number=$_POST['number'];
                               
                //echo "$form1"
                
                               $sql = "select *from `admin_login` where id='$tid'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
                
                
                
                if($count>0)
                {
                    $_SESSION["P"]=5;
                     header("Location: http://localhost/g1/admin_id.php");
 
                }
                else
                {
                
            
                
        
                       
                            $query="INSERT INTO `admin_login`(`id`, `password`, `name`, `phone_no`) VALUES($tid,'$password','$name','$number')";
                                
                    if(mysqli_query($link, $query)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
 
                          $_SESSION["P"]=6;
                     header("Location: http://localhost/g1/admin_id.php");                            
                        
                       
                    
                                       
            }
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
