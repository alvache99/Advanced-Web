<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
      #fPara{
          font-size: 15px;
          margin-top: 15px;
      }  
      
      .loginBar{
          height: 40px;
          background-color: #E9FAE3;
          border-bottom: 2px solid black;
          
      }
      .btn{
        
          padding: 5px;       
          height: 30px;
          width: 100px;
      }
      .buttons{
          padding: 5px;
          text-align: center;
      }
      .navbar{
          background-color: #DEE8D5;
          border-bottom: 2px solid black; bv
      }
      .nav-link{
          text-decoration-color: black;
      }
      .featuringSec{
          height: 350px;
          background-image: url(../Images/featureingImage.jpg);
      }
      .signupBtn{
          height: 60px;
      }
      .mainView{
          
        
         
          padding: 30px;
      }
      .footer{
          background-color:#080F0F;
          height: 300px;
          
      }
      .paraFoot{
          margin-left: 23px;
          margin-top: 80px;
          color: white;
          
      }
      .rForm{
          width: 500px;
      }
      .footerBelow{
          background-color: black;
          height: 50px;
          margin:0;  
      }
      .footerTNC{
         margin-top: 20px;
          color: white;
      }

      
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>


<div class="container-fluid loginBar">
    <div class="row">
       
        <div class="col-sm-8 text-right">
            <p id="fPara">Drag n Co provides essential services to fulfil everyone with owning their dream devices</p>
        </div> 
       <div class="col-sm-4 ">
           <div class="float-right buttons">
                <a href='LoginPage.php' class='btn btn-primary buttonLR'>Login</a>
               <a href='RegistrationPage.php' class='btn btn-primary buttonLR'>Signup</a>
           </div> 
        </div> 
    </div>
</div>
    
    
<nav class="navbar navbar-expand-sm">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img border="0" alt="logoImage" src="../Images/logoDrag.png" width="100" height="50"></a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" style="color: black" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: black" href="#">About</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" style="color: black" href="#" id="navbardrop" data-toggle="dropdown">
        MyAccount
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" style="color: black" href="#">Details</a>
        <a class="dropdown-item" style="color: black" href="#">Settings</a>
      </div>
    </li>
     <li class="nav-item">
      <a class="nav-link" style="color: black" href="#">Trolley</a>
    </li>
       <li class="nav-item">
      <a class="nav-link" style="color: black" href="#">Contact</a>
    </li>
      
  </ul>
</nav>
    
    
<div class="container-fluid  featuringSec d-flex align-items-center justify-content-center">
    <div class="featContent">
        <div class="row d-flex justify-content-center align-items-center">
            <h1>Login to shop now!</h1>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <a href='LoginPage.php' class='btn btn-primary btn-lg signupBtn'>Login</a>
        </div>
    </div>
</div>

    <div class="container-fluid d-flex justify-content-center align-items-center"><h1 class="MVP">Most Viewed Products</h1></div>
    <div class="container-fluid mainView">    
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-success">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container-fluid mainView">    
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
      </div>
    </div>
     <div class="col-sm-3"> 
      <div class="panel panel-success">
        <div class="panel-heading">Item Name</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
      </div>
    </div>
  </div>
</div><br><br>





<div class="container-fluid footer">
  <div class="row">
    <div class="col-sm-6">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="#">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="#">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="#">Rate</a>
          </li>
        </ul>
    </div>  
    <div class="col-sm-6 mr-auto">
        <div class="container rForm">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1" style="color:white">Enter your email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
  </div>
  <div class="row">
      <p class="paraFoot">Jockers St, <br>345 Londer Lane,Victoria,<br> Australia</p>
  </div>
</div>
<div class="container-fluid footerBelow">
    <div class="row">
        <div class="col-sm-6">
        <p class="footerTNC">© Drag n Co TNC applied</p>
        </div>
        <div class="col-sm-6 d-flex justify-content-right align-items-right">
            <ul class="nav ml-auto">
              <li class="nav-item">
                <a class="nav-link"  href="#"><img border="0" alt="logoImage" src="../Images/insta.jfif" width="25" height="25"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#"><img border="0" alt="logoImage" src="../Images/linklor.png" width="25" height="25"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#"><img border="0" alt="logoImage" src="../Images/download.png" width="25" height="25"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#"><img border="0" alt="logoImage" src="../Images/FDA.png" width="25" height="25"></a>
              </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>

