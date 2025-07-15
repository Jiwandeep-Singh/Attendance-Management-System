
<?php
include('connection.php');
session_start();

$ID = $_POST['uid'];  
    $password = $_POST['upassword'];  
    $radioVal = $_POST["gridRadios"];
      
        //to prevent from mysqli injection  
        $ID = stripcslashes($ID);  
        $password = stripcslashes($password);  
        $ID = mysqli_real_escape_string($link, $ID);  
        $password = mysqli_real_escape_string($link, $password); 


     if($radioVal == "option2")
{
    $sql = "select *from teacher_login where id = '$ID' and password = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> teacher Login successful </center></h1>"; 
            $_SESSION["ID"]= $_POST['uid'];
            $_SESSION["name"]= $row['name'];
            $_SESSION["incharge"]= $row["class_incharge"];
            $_SESSION["section"]= $row["class_section"];
            
             $pop=0;
            $_SESSION["P"]=$pop;
            
            
           
            header("Location: http://localhost/g1/main.php");
            exit();
        
        }
         else{ 
              echo "<script> alert('Invalid ID or Password') </script>";
             
            header( "refresh:1;url=http://localhost/g1/index.php" );
             // header("Location: http://localhost/g1/index.php");
           // echo "<h1> Login failed. Invalid user id or password.</h1>";  
        }     
}
else if ($radioVal == "option1")
{
    $sql = "select *from admin_login where id = '$ID' and password = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           // echo "<h1><center>admin Login successful </center></h1>";
            $_SESSION["ID"]= $_POST['uid'];
            $pop=0;
             $_SESSION["name"]= $row['name'];
            $_SESSION["P"]=$pop;
            $_SESSION["msg"]=1;
             header("Location: http://localhost/g1/admin_page.php");
            exit();

            }
    else{  
            
        echo "<script> alert('Invalid ID or Password') </script>";
             
            header( "refresh:1;url=http://localhost/g1/index.php" );
        
                    exit();
    }     
}
else if ($radioVal == "option3")
{
    $sql = "select *from student_login where id = '$ID' and password = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION["ID"]= $_POST['uid'];
            $_SESSION["name"]= $row['name'];
             $pop=0;
            $_SESSION["P"]=$pop;
                      header("Location: http://localhost/g1/student_page.php");
            exit();

        }
    else{  
        
        echo "<script> alert('Invalid ID or Password') </script>";
             
            header( "refresh:1;url=http://localhost/g1/index.php" );
       
        }     
}
          
        

?>