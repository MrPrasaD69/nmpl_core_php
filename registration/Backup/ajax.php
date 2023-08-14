<?php
$servername="localhost";
$username="";
$password="";
$database="";
$con=mysqli_connect($servername,$username,$password,$database);
//echo $con ? "<script>console.log('Connected')</script>" :"<script>console.log('Failed to Connect')</script>";

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email_id']) && isset($_POST['mobile_no']) && isset($_POST['address']) && isset($_POST['city'])  ){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email_id'];
    $mobile=$_POST['mobile_no'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $team=$_POST['team_menu'];
    $dob=$_POST['dob'];
    $player_type_select=$_POST['player_type_select'];
    $spinner_select=$_POST['spinner_type_select'];
    
    // echo "Player Type=".$player_type_select." and Spinner Type=". $spinner_select;
    // exit;
    
    $isPlayedTeam= (!empty($_POST['lastYearPlayed'])) ? 'Y' :'N';
    // $isPlayedTeam= $_POST['lastYearPlayed'] ==true ? 'Y' : 'N';
    // echo $isPlayedTeam;
    // exit;

    $team_name=$_POST['team_menu'];
    
    $filename=$_FILES['mca_card']['name'];
    $ogfile=time().$_FILES['mca_card']['name'];
    // $temp = explode(".", $_FILES["mca_card"]["name"]);
    $newfile=round(microtime(true)) .$filename ;
    
    $tempname=$_FILES['mca_card']['tmp_name'];
    $folder="images/".$newfile;
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    // Get image file extension
    $file_extension = pathinfo($_FILES["mca_card"]["name"], PATHINFO_EXTENSION);
    // echo $filename;
    // exit;
    $added=time();
    $updated=time();
    $uploadOk=1;
    $t="SELECT * FROM tbl_player WHERE mobile_no='$mobile' or email_id='$email' ";
    $r=mysqli_query($con,$t);
    $n=mysqli_num_rows($r);

    if($n==1 || $n>1){
        http_response_code(400);
        echo "duplicate";
    }
    else{
        if(!empty($_FILES['mca_card']['name'])){
            //check filesize
            if($_FILES["mca_card"]["size"] > 5000000){
                http_response_code(402);
                echo"file size exceeded";
                $uploadOk=0;
            }
            if(!in_array($file_extension,$allowed_image_extension)){
                http_response_code(401);
                echo "Only JPG/JPEG/PNG files allowed";
                $uploadOk=0;
            }
            else if($uploadOk==1){
                if(move_uploaded_file($tempname,$folder)){
                    if($spinner_select=='' && $player_type_select=='' ){
                        http_response_code(403);
                        echo"spinner_select empty";
                    }else if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
                        http_response_code(404) ;
                        echo "Invalid email format";
                        }
                    else{
                        $sql="INSERT INTO tbl_player(first_name,last_name,email_id,mobile_no,city,address,date_of_birth,player_type,spin_type,mca_card,is_played_team,team_name,added_on,updated_on)values('$fname','$lname','$email','$mobile','$city','$address','$dob','$player_type_select','$spinner_select','$ogfile','$isPlayedTeam','$team_name','$added',$updated)";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            http_response_code(200);
                            echo"inserted";
                        }
                        else{
                            http_response_code(406);
                            echo "not inserted";
                        }
                    }
                }
                else{
                    http_response_code(406);
                    echo"not moved image";
                }
            }
            
        }
        else{
            echo"file empty";
        }  
        
    }
}



// if(isset($_POST['first_name'],$_POST['player_type_select'])){
//     $fname=$_POST['first_name'];
//     $lname=$_POST['last_name'];
//     $email=$_POST['email_id'];
//     $mobile=$_POST['mobile_no'];
//     $address=$_POST['address'];
//     $city=$_POST['city'];
//     $team=$_POST['team_menu'];
//     $dob=$_POST['dob'];
//     // $mca=$_POST['mca'];
//     $player_type_select=$_POST['player_type_select'];
//     $spinner_select=$_POST['spinner_select'];
//     $isPlayedTeam=$_POST['isPlayedTeam'];
//     $team_name=$_POST['team_name'];

//     $filename=$_FILES['mca']['name'];
//     $tempname=$_FILES['mca']['tmp_name'];
//     $folder="images/mca_card/".$filename;
    

//     echo $fname;
//     exit;  
//     $added=time();
//     $updated=time();
//     $spin_type="";
//     $speed_type="";
//     // echo $lname,$fname,$email,$mobile,$address,$city,$team;

//     $t="SELECT * FROM tbl_player WHERE mobile_no='$mobile' or email_id='$email' ";
//     $r=mysqli_query($con,$t);
//     $n=mysqli_num_rows($r);
//     if($n==1 || $n>1){
//         http_response_code(400);
//         echo "duplicate";
//     }
//     else{
//         $sql="INSERT INTO tbl_player(first_name,last_name,email_id,mobile_no,city,address,date_of_birth,player_type,spin_type,mca_card,is_played_team,team_name,added_on,updated_on)values('$fname','$lname','$email','$mobile','$city','$address','$dob','$player_type_select','$spinner_select','$mca','$isPlayedTeam','$team_name','$added',$updated)";
               
//         $result=mysqli_query($con,$sql);
//         if($result){
//             http_response_code(200);
//             echo"inserted";
//         }
//         else{
//             http_response_code(406);
//             echo "not inserted";
//         }
//     }

    
// }

?>