<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" a href="CSS/bootstrap.css"/> -->
    <title>Login Form</title>

<style>
<html>
<style>


input[type=submit] {
    background-color: #8bd6ae;
   
border-radius:0.12em;
font-family:'Roboto',sans-serif;
 font-weight:300;
    border: none;
    color: white;
    padding: 20px 36px;
    text-decoration: none;
    margin: 5px 4px;
transition: all 0.2s;
 box-sizing: border-box;
    cursor: pointer;  
}
input[type=button] {
    background-color:#0568f2;
    background: -webkit-linear-gradient(to bottom,#daf7f6, );
  background: linear-gradient(to bottom, #daf7f6,);
border-radius:0.12em;
font-family:'Roboto',sans-serif;
 font-weight:300;
    border: none;
    color: white;
    padding: 20px 36px;
    text-decoration: none;
    margin: 5px 4px;
transition: all 0.2s;
 box-sizing: border-box;
    cursor: pointer;  
}
.bg {
  /* The image used */
  background-image: url("3.jpg");

  /* Full height */
  height: 50%; 
  
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* .container {
  position: absolute;
  right: 700px;
  bottom: 100px;
  margin: 20px;
  max-width: 300px;
  padding: 10px;
  /* background-color: white; */
} */
   
body {

  /* background: #daf7f6; */
  background: -webkit-linear-gradient(to bottom,#daf7f6 );
  background: linear-gradient(to bottom, #daf7f6);
  
}

input[type=text]
    {
     font-size:.8em;
     height:35px;
     width:250px;
    }

input[type=password]
    {
     font-size:.8em;
     height:35px;
     width:250px;
    }

</style>
</style>

</head>
<!-- <div > -->
<body >
<div class="bg"></div>
 <center>
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <!-- <div class="card-title">
                            <h1 class="bg-success text-white text-center py-3"> Login Page</h1>
                        </div> -->
                        <!-- <div class="card-body"> -->
 
                            <form action="logincheck.php" name="employeeForm" method="post" onsubmit="return validate(this)">
                            
                               <!-- <input type="text" class="form-control mb-2" placeholder=" Employee id " name="id">    -->
                               <h1 > Login Page</h1>
                               
                                <input type="text" class="form-control mb-2" placeholder=" User_name " name="username"><br><br><br>
                                <input type="password" class="form-control mb-2" placeholder=" User password " name="password"><br><br>

                                
                                <button  name="submit" style="background-color:#94ff99; padding: 10px 30px;">Submit</button>
                                <br>
                                   </form>
 
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
       
<script language=Javascript>

function validate(employeeForm) {


if(employeeForm.username.value === ""){

alert ("name field must contain characters");

return false;

}
if(employeeForm.username.value.length < 2){

alert ("username field must contain atleast 2 characters");

return false;

}
if(employeeForm.password.value === ""){

alert ("pasword field must contain characters");

return false;

}
if(employeeForm.password.value.length < 6){

alert ("pasword field must contain atleast 6 characters");

return false;

}

return true;

}
</script>
</center>
</div>
</body>
</html>