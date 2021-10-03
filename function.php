 <?php
 
 function check_login($con){

    if(isset($_SESSION['UserID'])){
        
        $id=$_SESSION['UserID'];
        
        $query="select * from users where UserID = '$id' limit 1";
        
        $result=mysqli_query($con,$query);

        if($result && mysqli_num_rows($result) > 0){

            $user_data=mysqli_fetch_assoc($result);
            return $user_data;

        }
    }

    //redirect to login
    echo "<script>window.location.href='index.php';</script>";
    exit();
 }

 function projectIdGenarate(){
    $id=4000+rand(0,999);
    return $id;
 }

 function IdGenarate(){
    $id=1000+rand(0,999);
    return $id;
 }
 
 function profIdGenarate(){
    $id=2000+rand(0,999);
    return $id;
 }
 
 function LinkIdGenarate(){
    $id=3000+rand(0,999);
    return $id;
 }

 function msgIdGenarate(){
   $id=6000+rand(0,999);
   return $id;
}
 
 function uidExists($con,$username,$email){
    $sql="SELECT * FROM users WHERE UserName = ? OR Email = ?";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location:../login.php?error=stmtfailed");
      exit();
    }
    
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
      return $row;
    }
    else{
       $result=false;
       return $result;
    }

    mysqli_stmt_close($stmt);
 }

 function profileDataGet($con,$id){
   $sql="SELECT * FROM users WHERE UserID = ?";
   $stmt=mysqli_stmt_init($con);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location:../login.php?error=stmtfailed");
     exit();
   }
   
   mysqli_stmt_bind_param($stmt,"i",$id);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);

   if($row=mysqli_fetch_assoc($resultData)){
     return $row;
   }
   else{
      $result=false;
      return $result;
   }

   mysqli_stmt_close($stmt); 
 }

 function profPicandBioGet($con,$id){
   $sql="SELECT * FROM profile WHERE UserID = ?";
   $stmt=mysqli_stmt_init($con);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location:../login.php?error=stmtfailed");
     exit();
   }
   
   mysqli_stmt_bind_param($stmt,"i",$id);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);

   if($row=mysqli_fetch_assoc($resultData)){
     return $row;
   }
   else{
      $result=false;
      return $result;
   }

   mysqli_stmt_close($stmt);
 }

 function linkzget($con,$id){
   $sql="SELECT * FROM userlinks WHERE UserID = ?";
   $stmt=mysqli_stmt_init($con);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location:../login.php?error=stmtfailed");
     exit();
   }
   
   mysqli_stmt_bind_param($stmt,"i",$id);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);
   return $resultData;
   // if($row=mysqli_fetch_assoc($resultData)){
   //   return $row;
   // }
   // else{
   //    $result=false;
   //    return $result;
   // }

   //mysqli_stmt_close($stmt);
 }


 function loginUser($con,$user,$pass){
   $userExists=uidExists($con,$user,$user);

   if($userExists==false){
      echo "<script>window.location.href='login.php?user-dont-exists';</script>";
      exit();
   }
   $pwd=$userExists["Password"];
   $Check_pwd=md5($pass);

   if($Check_pwd==$pwd){
      session_start();
      $_SESSION["UserID"]=$userExists["UserID"];
      echo "<script>window.location.href='index.php';</script>";
   }
   else{
      echo "<script>window.location.href='login.php?Pass-word-mismatch';</script>";
   }

 }

 function allProjectGet($con,$type){
   $sql="SELECT * FROM project WHERE Type = ?";
   $stmt=mysqli_stmt_init($con);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location:../login.php?error=stmtfailed");
      exit();
   }
   
   mysqli_stmt_bind_param($stmt,"s",$type);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);
   return $resultData;

 }

 function projectGet($con,$id){
   $sql="SELECT * FROM project WHERE ProjectID = ?";
   $stmt=mysqli_stmt_init($con);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location:../login.php?error=stmtfailed");
      exit();
   }
   
   mysqli_stmt_bind_param($stmt,"i",$id);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);
   if($row=mysqli_fetch_assoc($resultData)){
      return $row;
   }

 }

 function myprojectGet($con,$id){
   $sql="SELECT * FROM project WHERE UserID = ?";
   $stmt=mysqli_stmt_init($con);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location:../login.php?error=stmtfailed");
      exit();
   }
   
   mysqli_stmt_bind_param($stmt,"i",$id);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);
   return $resultData;

 }