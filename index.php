<!DOCTYPE html>
          <html lang="en">
          <head>
            <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


     <meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
     body, html {
       height: 100%;
       margin: 0;
     }

     .bg {
       /* The image used */
       background-image: url("bg.png");

       /* Full height */
       height: 100%; 
       width: 100%;

       /* Center and scale the image nicely */
       background-position: center;
       background-repeat: no-repeat;
       background-size: cover;
     }


/menu/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #156;
}
</style>
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">AsK Me Anything</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Subject<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">C</a></li>
            <li><a href="#">Java</a></li>
            <li><a href="#">Python</a></li>
          </ul>
        </li>
        <li><a href="#">About Us</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       
      </ul>
    </div>
  </div>
</nav>
  


            
     <body style="margin-top: -8px">
     <div class="bg">
       <br>
       
           

           <div class="container">
           <div class="row">
            <div class="col-sm-4">
            <div class="panel panel-danger ">
            <div class="panel-heading"> <h4>Log In Form</h4></div>
            <div class="panel-body">
              <form>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
              </div>
              <div>
             <button type="submit" class="btn btn-default">Submit</button>
             </div>
            </form>
            </div>
          </div>
         </body>
       </html>