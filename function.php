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
    header("Location : login.php");
    die;
 }

 function IdGenarate(){
    $id=1000+rand(0,100);
    return $id;
 }
