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
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
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
    </style>
    
  </head>
  <body>
    <?php 
    include('ajax.php');
    ?>
    
            <div class="container-fluid register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h2>Welcome</h2>
                        <!--<h3>Register Here!</h3>-->
                        <p>You are just a click away to get selected!</p>
                        <h4>For more details</h4>
                        <input type="submit" name="" value="90045 67894"/><br/><br/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                                <h3 class="register-heading">Register Here!</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <form name="register_form" id="register_form" enctype="multipart/form-data" >
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
                                            <div class="form-group">
                                            <input type="text" name="area_name" id="area_name" class="form-control" placeholder="Enter Your Area*"  required />
                                            </div>                                        
                                            <div class="form-group">
                                                <select name="player_type" id="player_type" class="form-control player_type"  required >
                                                <option value="0">Select Player Type</option>
                                                <option value="Batsman">Batsman</option>
                                                <option value="Bowler">Bowler</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="batsman_type_rd"  style="display:none" >
                                                <input type="radio" id="left_hand_rd"  name="player_type_rd" class="" value="LHBT"  />&nbsp;<label>Left Hand</label>&nbsp;
                                                <input type="radio" id="right_hand_rd" name="player_type_rd" class="" value="RHBT"  />&nbsp;<label>Right Hand</label><br/>
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
                                            </div>

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
                                                <input type="text" name="mca_card" id="mca_card" class="form-control" placeholder="Enter MCA Card Number*"  required />
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name="team_menu" id="team_menu" required  >
                                                        <option class="hidden"  selected >Choose Team</option>
                                                        <option  selected >Ambernath Avengers</option>
                                                        <option  selected >Belapur Blasters</option>
                                                        <?php /*
                                                        $teams="SELECT * FROM tbl_teams";
                                                        $result=mysqli_query($con,$teams);
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['team_name']."</option>";
                                                        } */
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group" >
                                                    <input type="checkbox" name="is_wicket_keeper" id="is_wicket_keeper" value="Y" />&nbsp;<label>Is Wicket Keeper?</label>&nbsp;
                                                    <input type="checkbox" name="played_division" id="played_division" value="Y" />&nbsp;<label>Played in a Division?</label><br/>
                                                    <input type="text" style="display:none" class="form-control" name="division_name" id="division_name" placeholder="Enter Divison Name*" />
                                                </div>
                                            <input type="button" id="submit_btn" class="btnRegister"  value="Register"/>
                                        </div>
                                    </form>
                                </div>
                            
                    </div>
                </div>
​
            </div>

            <script>
                $(document).ready(function(){
                    // alert("works");
                   
                    // $("#is_wicket_keeper").click(function(){
                    //   var a=$("#is_wicket_keeper").is('checked');
                    //   alert("checked");
                    // })
                    
                    //test function for live validation
                    // liveTest=()=>{
                    //     $("#mobile_no").on('change',function(){
                    //         var num=$("#mobile_no").val();
                    //         if(num.length<10){
                    //             alert("less than 10");
                    //         }
                    //         else{
                    //             alert("good");
                    //         }
                    //     })
                    // };
                    // liveTest();

                    playerManagement();

                    function playerManagement(){
                        //Player Type Management starts here
                    $("#player_type").on('change',function(){
                        var type=$(this).val();
                        console.log(type);
                        if(type=='Batsman'){
                            $("#batsman_type_rd").css("display",'block');
                            $("input[name='player_type_rd']").attr("required","true");
                        }
                        else if(type=='Bowler' || type==0){
                            $("#batsman_type_rd").css("display",'none');
                            $("#spin_type_div").css("display","none");
                            $("#bowler_spinner").prop('checked', false);
                            $("#spin_off").prop('checked', false);
                            $("#spin_leg").prop('checked', false);
                            $("#spin_left_arm").prop('checked', false);
                            $("#left_hand_rd").prop('checked', false);
                            $("#right_hand_rd").prop('checked', false);
                            // $("input[name='batsman_type']").attr("required","false");
                            
                        }
                        if(type=='Bowler'){
                            $("#bowler_type_div").css("display","block");
                        }
                        else if(type=='Batsman' || type==0){
                            $("#bowler_type_div").css("display","none");
                            $("#spin_type_div").css("display","none");
                            $("#bowler_spinner").prop('checked', false);
                            $("#spin_off").prop('checked', false);
                            $("#spin_leg").prop('checked', false);
                            $("#spin_left_arm").prop('checked', false);
                            // $("input[name='batsman_type']").attr("required","false");
                        }
                        
                    });

                    //show spinner div
                    var spinner=$("#bowler_spinner").val();
                    $("#bowler_spinner").click(function(){
                        console.log(spinner);
                        $("#spin_type_div").css("display","block");
                        
                    });

                    
                    //hide spinner div
                    $("#bowler_medium_faster").click(function(){
                        $("#spin_type_div").css("display","none");
                    });
                    $("#bowler_faster").click(function(){
                        $("#spin_type_div").css("display","none");
                    });
                    // $("#bowler_fast").click(function(){
                    //     $("#spin_type_div").css("display","none");
                    // });
                //Player Type Management ends here
                    }
                
                    

                //Division Management starts here
                    $("#played_division").click(function(){
                        var isChecked = $("#played_division").is(":checked");
                        if(isChecked){
                            $("#division_name").css("display","block");
                            $("input[name='division_name']").attr("required","true");
                        }
                        else{
                            $("#division_name").css("display","none");
                            $("#division_name").val('');
                        }
                    })                        
                    //Division Management ends here

                    

                    

                    //Form Submission Here
                    $("#submit_btn").click(function(e){
                        // console.log(formData);
                        
                        e.preventDefault();
                        var firstname=$("#first_name").val();
                        var lastname=$("#last_name").val();
                        var email=$("#email_id").val();
                        var mobile=$("#mobile_no").val();
                        var address=$("#address").val();
                        var area=$('#area_name').val();
                        var mca=$("#mca_card").val();
                        var city=$("#city").val();
                        var team=$("#team_menu").val();
                        var dob=$('#dob').val();
                        var player_type=$('#player_type').val();
                        var type_rd=$("input[name='player_type_rd']:checked").val();

                        var checkWicket=$("#is_wicket_keeper").is(':checked');                        
                        var is_wicket_keeper=checkWicket ? 'Y' : 'N';
                        var checkPlayed=$("#played_division").is(":checked");
                        var is_played_division=checkPlayed ? 'Y' : 'N';
                        var division_name=$("#division_name").val();
                        
                        // alert(is_played_division);
                        
                        //console.log(formData);
                        // Swal.fire('Any fool can use a computer')
                        // var newmobile=parseInt(mobile);
                        // if(mobile.length < 10   ){
                        //     alert("less than 10");
                        // }
                        // else{
                        //     alert("good");
                        // }

                        if(firstname==='' || !isNaN(firstname) || lastname==='' || !isNaN(lastname) || email==='' || mobile==='' || mobile.length <10 || isNaN(mobile) || address==='' || !isNaN(address) || area==='' || !isNaN(area) || mca==='' || city==='' || !isNaN(city) || team==='' || dob==='' ){
                            
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill All Correct Details !',
                            })
                        }
                        else{
                            Swal.fire(
                                {
                                title:'Thank You!',
                                text:'Player Registered Successfully!',
                                icon:'success',
                                }).then(function(){
                                    window.location.href="index.php";
                                });

                            //     $.ajax({

                            //     url:'ajax.php',
                            //     method:'POST',
                            //     data:{
                            //         fname:firstname,
                            //         lname:lastname,
                            //         email:email,
                            //         mobile:mobile,
                            //         address:address,
                            //         city:city,
                            //         team:team,
                            //         dob:dob,
                            //         area:area,
                            //         mca:mca,
                            //         player_type:player_type,
                            //         type_rd:type_rd,
                            //         is_wicket_keeper:is_wicket_keeper,
                            //         is_played_division:is_played_division,
                            //         division_name:division_name,
                            //         },
                            //         success:function(e){
                            //         console.log(e);
                            //         Swal.fire(
                            //         {
                            //         title:'Thank You!',
                            //         text:'Player Registered Successfully!',
                            //         icon:'success',
                            //         }).then(function(){
                            //             window.location.href="index.php";
                            //         });

                            //         //When No reload
                            //         // $("#first_name").val('');
                            //         // $("#last_name").val('');
                            //         // $("#email_id").val('');
                            //         // $("#mobile_no").val('');
                            //         // $("#address").val('');
                            //         // $('#area_name').val('');
                            //         // $("#mca_card").val('');
                            //         // $("#city").val('');
                            //         // $("#team_menu").val('');
                            //         // $('#dob').val('');
                            //         // $('#player_type').val('');
                            //         // $("input[name='player_type_rd']").attr('checked','false');
                            //         // $("input[name='is_wicket_keeper']").prop('checked','false');
                            //         // $("input[name='played_division']").prop('checked','false');   
                            //         }
                            // });
                        }

                        
                        
                        
                       
                    });
                        
                });
                
                
                
                
               

            </script>
    
  </body>
</html>