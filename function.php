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
      $query="SELECT * from users where UserID = ?";
      $query2="SELECT * FROM profile WHERE UserID = ?";
      $query3="SELECT * FROM userlinks WHERE UserID = ?";

      $stmt=mysqli_stmt_init($con);
      $stmt2=mysqli_stmt_init($con);
      $stmt3=mysqli_stmt_init($con);

      if(!mysqli_stmt_prepare($stmt,$query) && !mysqli_stmt_prepare($stmt2,$query2) && !mysqli_stmt_prepare($stmt3,$query3)){
         header("location:../profile.php?error=stmtfailed");
         exit();
       }
      
       mysqli_stmt_bind_param($stmt,"i",$id);
       mysqli_stmt_bind_param($stmt2,"i",$id);
       mysqli_stmt_bind_param($stmt3,"i",$id);
       
       mysqli_stmt_execute($stmt);
       mysqli_stmt_execute($stmt2);
       mysqli_stmt_execute($stmt3);

       $resultData1=mysqli_stmt_get_result($stmt);
       $resultData2=mysqli_stmt_get_result($stmt2);
       $resultData3=mysqli_stmt_get_result($stmt3);

       $users=mysqli_fetch_assoc($resultData1);
       $profils=mysqli_fetch_assoc($resultData2);
       $linkss=mysqli_fetch_assoc($resultData3);
       mysqli_stmt_close($stmt);
       
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


