<!DOCTYPE html>
<html class="no-js" lang="en" > 

<head>    
    <link rel="shortcut icon" href="{{ asset ('img/logo1.jpg') }}"> 
    
  <title>Login Kritik dan Saran</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset ('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/login.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset ('js/jquery.min.js') }}"></script>   
   
  </head>
    <body>
 <script type="text/javascript" src="/md5.js"></script>
   <div class="container" id="login-block">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
             
            <div class="login-box clearfix animated flipInY">
            <div class="login-logo">
                  <!-- <a href="#">--><img class="img-responsive" src="{{ asset ('img/logo.jpg') }}" width="150" height="150" alt="College Logo" /></a>
                </div> 
                <hr />
                <div class="login-form">
              <form id="form_id" name="login" action="proses_login.php" method="post">
                <!--<img class="img-responsive" src="{{ asset ('img/user.png') }}" width="50" height="50">--><input type="text" name="username" placeholder="Username" class="input-field" autofocus required/><!--</a>-->
                <!--<img class="img-responsive" src="{{ asset ('img/key.png') }}" width="50" height="50">--><input type="password" name="password" placeholder="Password" class="input-field" required/><!--</a>-->
                <input id="form_submit" type="submit" class="btn btn-login" value="Login" />  
              </form> 
            
                </div>                
            </div>
          </div>
      </div>
      </div>
     
        <!-- End Login box -->
      <!-- <footer class="container">
        <p id="footer-text">Copyright &copy; UKK 2017 Koperasi Simpan Pinjam | Distributed by <a href="https://iternama.blogspot.com/" target="_blank" rel="noopener noreferrer">iTernama</a></p>
      </footer> -->

        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> 
        <script src="{{ asset ('js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset ('js/placeholder-shim.min.js') }}"></script>        
        <script src="{{ asset ('js/custom.js') }}"></script>
    </body>
</html>
