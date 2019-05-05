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

       /* Center and scale the image nicely */
       background-position: center;
       background-repeat: no-repeat;
       background-size: cover;
     }
     </style>
     </head>
            
            <body>
               <div class="bg">
                <br>
                <br>
                <br>
                 <br>
                 <br>
                 <br>
              
              
                 <div class="container">
                    <div class="col-sm-4">
              <div class="panel panel-danger ">
            <div class="panel-heading"> <h4>Registration Form</h4></div>
            <div class="panel-body">

              <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="n" id="name" placeholder="Enter Name">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
               <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                <div class="form-group">
                <label for="file">Upload Your Image:</label>
                <input type="file" class="form-control" name="img">
                 </div>
                  <div>
             <button type="submit" class="btn btn-default">Submit</button>
             </div>
            
            </form>
            </div>
          </div>
         </div>
       </body>
       </html>