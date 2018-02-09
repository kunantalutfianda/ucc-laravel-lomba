<!DOCTYPE html>
<html>
  <head>
    <title>Registrasi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
} </style>

  </head>
  <body>
    

    <div class="jumbotron">
  <h1 class="display-4">WELCOME</h1>
  <p class="lead">Silahkan registrasi untuk membuat akun Determined-plaster</p>
  <hr class="my-4">
  <p>Register Here</p>
  <p class="lead">
    <form action="/register" method="post">

  <div class="form-group">
    <label for="exampleInputnama">Username Anda</label>
    <input name="username" type="text" class="form-control" id="nama" placeholder="Inputkan Nama Anda">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail">Email Anda</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Inputkan Email Anda">
  </div>
    
  <div class="form-group">
    <label for="exampleInputpass">Password</label>
    <input name="password" type="password" class="form-control" id="password"  placeholder="Inputkan Password Anda">
  </div>

  <div class="form-group">
    <label for="exampleInputpass">Konfirmasi Password</label>
    <input name="confirm_password" type="password" class="form-control" id="confirm_password"  placeholder="Konfirmasi Password Anda">
  </div>

  {{csrf_field()}}

    <button id="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
  </p>
</div>
    
    <!--<h1>
      Silahkan registrasi untuk membuat akun Determined-plaster</h1>
    <input id="nama" placeholder="username" type="text"><br>
    <input id="password" placeholder="password" type="password"><br>
    <input id="confirm_password" placeholder="confirm password" type="password"><br>-->
   <!--
    <button id="submit">
      Submit</button> -->
   <script> 
     
     var buttonDOM= document.getElementById("submit");
     var namaDOM = document.getElementById("nama");
     var emailDOM = document.getElementById("email");
     var passwordDOM = document.getElementById("password");
     var confirmpasswordDOM = document.getElementById("confirm_password");
    
     
     buttonDOM.addEventListener('click', function(){
       var nama = namaDOM.value;
       var email = emailDOM.value;
       var password = passwordDOM.value; 
       var confirm_password = confirmpasswordDOM.value; 
       if (nama == "" || email == "" || password == "" || confirm_password == "" ){
         alert("Anda belum mengisikan data");
         return;
       }
       
       if(password != confirm_password){
         alert("password dan konfirmasi password tidak cocok");
         return;
       } 
      // alert('sukses');
     }); 
  
   /* function validasi(){
    var nama = prompt("Siapa namamu?");
     if( nama == "empi"){
       console.log("Selamat Datang My Inventor");
       return;
     }
     
     if( nama == "aria"){
       console.log("Selamat Datang Aria");
       return;
     }
                   
     if( nama == "deni"){
         console.log("Selamat Datang Deni");
         return;
     }
       
       console.log("Anda siapa ya?");
    }
    
                   
    validasi(); */
        
    
    </script>
   
  </body>
</html>
