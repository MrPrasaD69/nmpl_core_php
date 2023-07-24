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
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Address *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="date form-control" placeholder="Select Date of Birth*" />
 
                                            <script type="text/javascript">
                                              $(".date").datepicker({
                                                format: "dd-mm-yyyy",
                                              });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Area*" />
                                        </div>                                        
                                        <div class="form-group">
                                            <select name="player_type" id="player_type" class="form-control player_type">
                                              <option value="0">Select Player Type</option>
                                              <option value="Batsman">Batsman</option>
                                              <option value="Bowler">Bowler</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="bastman_type_rd"  style="display:none" >
                                           <input type="radio" id="left_hand_rd" name="bastman_type" class="" value="LHBT" />&nbsp;<label>Left Hand</label>&nbsp;
                                           <input type="radio" id="right_hand_rd" name="bastman_type" class="" value="RHBT" />&nbsp;<label>Right Hand</label><br/>
                                        </div>
                                        <div class="form-group" id="bowler_type_div" style="display:none">
                                        <input type="radio" name="bowler_type" id="bowler_faster" value="Faster" />&nbsp;<label>Faster</label>&nbsp;
                                            <input type="radio" name="bowler_type" id="bowler_medium_faster" value="MediumFaster" />&nbsp;<label>Medium Faster</label>&nbsp;
                                            <input type="radio" name="bowler_type" id="bowler_spinner" value="Spinner" />&nbsp;<label>Spinner</label>&nbsp;
                                        </div>
                                        <div class="form-group" id="spin_type_div" style="display:none">
                                            <input type="radio" name="spin_type" id="spin_off" value="OffSpin" />&nbsp;<label>Off Spin</label>&nbsp;
                                            <input type="radio" name="spin_type" id="spin_leg" value="LegSpin" />&nbsp;<label>Leg Spin</label>&nbsp;
                                            <input type="radio" name="spin_type" id="spin_left_arm" value="LeftArmSpin" />&nbsp;<label>Left Arm Spinner</label>&nbsp;
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
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Mobile Number *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Your City *" value="" />
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter MCA Card Number*" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Choose Team</option>
                                                <option>Ambernath Avengers</option>
                                                <option>Belapur Blasters</option>
                                                <option>Kalyan Tuskers</option>
                                                <option>Koperkhairne Titans</option>
                                                <option>Mira Bhayandar Lions</option>
                                                <option>Sanpada Scorpians</option>
                                                <option>Thane Tigers</option>
                                                <option>Vashi Warriors</option>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <input type="checkbox" name="is_wicket_keeper" id="is_wicket_keeper" value="Y"/>&nbsp;<label>Is Wicket Keeper?</label>&nbsp;
                                            <input type="checkbox" name="played_division" id="played_division" value="Y"/>&nbsp;<label>Played in Division?</label><br/>
                                            <input type="text" style="display:none" class="form-control" name="division_name" id="division_name" placeholder="Enter Divison Name*" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            
                    </div>
                </div>
​
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    // alert("works");
                //Player Type Management
                    $("#player_type").on('change',function(){
                        var type=$(this).val();
                        console.log(type);
                        if(type=='Batsman'){
                            $("#bastman_type_rd").css("display",'block');
                        }
                        else if(type=='Bowler' || type==0){
                            $("#bastman_type_rd").css("display",'none');
                            $("#spin_type_div").css("display","none");
                            $("#bowler_spinner").prop('checked', false);
                            $("#spin_off").prop('checked', false);
                            $("#spin_leg").prop('checked', false);
                            $("#spin_left_arm").prop('checked', false);
                            $("#left_hand_rd").prop('checked', false);
                            $("#right_hand_rd").prop('checked', false);
                            
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

                //Player Type Management
                    
                //Division Management
                    $("#played_division").click(function(){
                        var isChecked = $("#played_division").is(":checked");
                        if(isChecked){
                            $("#division_name").css("display","block");
                        }
                        else{
                            $("#division_name").css("display","none");
                        }
                    })
                        
                        
                });
            </script>
    
  </body>
</html>