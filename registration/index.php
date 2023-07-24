<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration - NMPLT20</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous"></script>
    <!-- <script type='text/javascript' src="js_files/AjaxFormPlugin.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js_files/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="js_files/sweetalert2.min.css">
    <script src="js_files/form.js"></script>
   <style>
        .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 0px;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 10%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-bottom: 10%;
    width: 70%;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: 500;
    padding: 3%;
    margin-top: 0px;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

#division_name{
    margin-top: 20px;
}
#mca_card {
        color: transparent;
      }

      input[type='file']::after {
        content: 'Select MCA Card Image';
        color: #8a93a2;
        margin-right: 30px;
      }
    </style>
    
  </head>
  <body>
    <?php 
    include('ajax.php');
    ?>
    
            <div class="container-fluid register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://cdn-fhboh.nitrocdn.com/QtFEhSnBTmzQZazaSjhmUmWPeMQcAFOX/assets/images/optimized/rev-3fdb3d8/wp-content/uploads/2022/02/NMPL_Final-Logo.png" alt="logo"/>
                        <h2>Welcome</h2>
                        <!--<h3>Register Here!</h3>-->
                        <p>You are just a click away to get selected!</p>
                        <h4>For more details</h4>
                        <a href="tel:919004567894"><input type="submit" name="" value="90045 67894"/></a><br/><br/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                                <h3 class="register-heading">Register Here!</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <form name="register_form" id="register_form" action="ajax.php" method="POST" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name *" required  />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email_id" id="email_id" class="form-control" placeholder="Your Email *" value=""  required  />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address" id="address" class="form-control" placeholder="Your Address *" value=""  required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dob" id="dob" class="date form-control" placeholder="Select Date of Birth*"  required />
    
                                                <script type="text/javascript">
                                                $(".date").datepicker({
                                                    format: "yyyy-mm-dd",
                                                });
                                                </script>
                                            </div>
                                            <!-- <div class="form-group">
                                            <input type="text" name="area_name" id="area_name" class="form-control" placeholder="Enter Your Area*"  required />
                                            </div>                                         -->
                                            <div class="form-group">
                                                <select name="player_type_select" id="player_type_select" class="form-control"  >
                                                    <option value="">Select Player Type</option>
                                                    <option value="Wicketkeeper">Wicketkeeper</option>
                                                    <option value="Wicket/Batsman">Wicketkeeper / Batsman</option>
                                                    <option value="LH Batsman">Left Hand Batsman</option>
                                                    <option value="RH Batsman">Right Hand Batsman</option>
                                                    <option value="Fast Bowler">Fast Bowler</option>
                                                    <option value="RH Fast Bowler">Right Hand Fast Bowler</option>
                                                    <option value="LH Fast Bowler">Left Hand Fast Bowler</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="spinner_type_select" id="spinner_type_select" class="form-control" >
                                                    <option value="">Spinner Type</option>
                                                    <option value="Off Spinner">Off Spinner</option>
                                                    <option value="Leg Spinner">Leg Spinner</option>
                                                    <option value="Left Arm Spinner">Left Arm Spinner</option>
                                                </select>
                                            </div>

                                            <!-- <div class="form-group" id="batsman_type_rd"  style="display:none" >
                                                <input type="radio" id="left_hand_rd"  name="player_type_rd" class="" value="Left Hand"  />&nbsp;<label>Left Hand</label>&nbsp;
                                                <input type="radio" id="right_hand_rd" name="player_type_rd" class="" value="Right Hand"  />&nbsp;<label>Right Hand</label><br/>
                                            </div>
                                            <div class="form-group" id="bowler_type_div" style="display:none">
                                                <input type="radio" name="player_type_rd" id="bowler_faster" value="Faster"  />&nbsp;<label>Faster</label>&nbsp;
                                                <input type="radio" name="player_type_rd" id="bowler_medium_faster" value="MediumFaster"  />&nbsp;<label>Medium Faster</label>&nbsp;
                                                <input type="radio" name="player_type_rd" id="bowler_spinner" value="Spinner"  />&nbsp;<label>Spinner</label>&nbsp;
                                            </div>
                                            <div class="form-group" id="spin_type_div" style="display:none">
                                                <input type="radio" name="player_type_rd" id="spin_off" value="OffSpin"  />&nbsp;<label>Off Spin</label>&nbsp;
                                                <input type="radio" name="player_type_rd" id="spin_leg" value="LegSpin"  />&nbsp;<label>Leg Spin</label>&nbsp;
                                                <input type="radio" name="player_type_rd" id="spin_left_arm" value="LeftArmSpin"  />&nbsp;<label>Left Arm Spinner</label>&nbsp;
                                            </div> -->

                                            <!--<div class="form-group">-->
                                            <!--    <div class="maxl">-->
                                            <!--        <label class="radio inline"> -->
                                            <!--            <input type="radio" name="gender" value="male" checked>-->
                                            <!--            <span> Male </span> -->
                                            <!--        </label>-->
                                            <!--        <label class="radio inline"> -->
                                            <!--            <input type="radio" name="gender" value="female">-->
                                            <!--            <span>Female </span> -->
                                            <!--        </label>-->
                                            <!--    </div>-->
                                            <!--</div>-->

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name *" value="" required  />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="mobile_no" id="mobile_no" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Mobile Number *" value=""  pattern="[1-9]{1}[0-9]{9}" required />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="city" id="city" class="form-control"  placeholder="Your City *" value="" required  />
                                                </div>
                                                <div class="form-group">
                                                <input type="file" name="mca_card" id="mca_card" class="form-control" placeholder="Enter MCA Card Number*" required />
                                                </div>
                                                <!-- <div class="form-group">
                                                    <select class="form-control" name="team_menu" id="team_menu" required  >
                                                        <option value="" >Choose Team</option>
                                                        <?php /*
                                                        $teams="SELECT * FROM tbl_teams";
                                                        $result=mysqli_query($con,$teams);
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['team_name']."</option>";
                                                        }  */
                                                        ?>
                                                    </select>
                                                </div> -->
                                                <div class="form-group" >
                                                    <!-- <input type="checkbox" name="is_wicket_keeper" id="is_wicket_keeper" value="Y" />&nbsp;<label>Is Wicket Keeper?</label>&nbsp; -->
                                                    <input type="checkbox" name="lastYearPlayed" id="lastYearPlayed" value="Y" />&nbsp;<label>Last Year Played in a Team?</label><br/>
                                                    <select class="form-control" name="team_menu" id="team_menu" style="display:none" >
                                                        <option value="" >Choose Team</option>
                                                        <?php 
                                                        $teams="SELECT * FROM tbl_teams";
                                                        $result=mysqli_query($con,$teams);
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['team_name']."</option>";
                                                        }  
                                                        ?>
                                                    </select>
                                                </div>
                                            <input type="submit" id="submit_btn" class="btnRegister"  value="Register"/>
                                        </div>
                                    </form>
                                </div>
                            
                    </div>
                </div>
​
            </div>

            <script>
                $(document).ready(function(){
                    var fl = $('#register_form');
                    var bl = $('#submit_btn');                    

                    bl.click(function(e)
                    {
                        var firstname=$('#first_name').val();
                        var lastname=$('#last_name').val();
                        var email=$('#email_id').val();
                        var mobile=$('#mobile_no').val();
                        var address=$('#address').val();
                        var city=$("#city").val();
                        var player_type_select=$("#player_type_select").val();
                        var dob=$("#dob").val();
                        var spinner_type_select=$("#spinner_type_select").val();
                        // alert(spinner_type_select);
                        
                        if(firstname=='' || !isNaN(firstname) || lastname=='' || !isNaN(lastname) || email=='' || address=='' || city=='' || !isNaN(city) )
                        {
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill All Correct Details !',
                            });
                            return false;
                        }
                        else{
                                fl.ajaxForm({
                                beforeSend: function()
                                {
                                    
                                    bl.attr('disabled', 'disabled');
                                },
                                success: function(e){
                                    // alert("in success");
                                    console.log(e);
                                    Swal.fire({
                                    title:'Thank You!',
                                    text:'Player Registered Successfully!',
                                    icon:'success',
                                    }).then(function(){
                                        window.location.href="index.php";
                                    });
                                },
                                error: function(xhr, status, error){
                                    // alert("in error");
                                    bl.removeAttr('disabled');
                                    if(xhr.status==400){
                                        Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Email or Phone Details Already Exists!',
                                        });
                                    }
                                    else if(xhr.status==404){
                                        Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Email Invalid!',
                                        }); 
                                    }
                                    else if(xhr.status==403){
                                        Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Please Select Player Type or Spinner Type!',
                                        }); 
                                    }
                                    else if(xhr.status==402){
                                        Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Images Less than 2MB Allowed Only!',
                                        }); 
                                    }
                                    else if(xhr.status==401){
                                        Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Only JPG, JPEG and PNG Files are Allowed!',
                                        }); 
                                    }
                                    else if(xhr.status==406){
                                        Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Failed to submit Details!',
                                        });
                                    }
                                    else{
                                        Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'There has been a System Error!',
                                        });
                                    }
                                }
                            });
                        }
                    });
                    

                    //Played in team previously here
                    $("#lastYearPlayed").click(function(){
                        if($("#lastYearPlayed").is(":checked")){
                            $("#team_menu").css("display","block");
                            $("#team_menu").attr("required",true);
                        }
                        else{
                            $("#team_menu").css("display","none");
                            $("#team_menu").val('');
                            $("#team_menu").attr("required",false);
                            
                        }
                    })
                    
                        
                });
                
                
                
                
               

            </script>
    
  </body>
</html>