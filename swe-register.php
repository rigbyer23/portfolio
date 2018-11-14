
<!DOCTYPE html>
<html>
    <head>
    <title>SWE</title>
       <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex p-2" style="background-color: rgb(90, 82, 119);">
                      <div class="mr-auto p-2"><h1 style="font-family: 'Pacifico', cursive; color: white;">BYUI-SWE</h1></div>
                    <div class="p-2" style ="height: 300px;"><img class="img-responsive" style="object-fit: cover; height:95%; width:100%;" src="./swe-image.jpg"></div>
                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex">
                <div class="form-group">
                <form action="swe-create.php" method="post">
                <h3>Create your account</h3>
                First Name:<input type="text" class="form-control" name="firstName">
                Last Name:<input type="text" class="form-control" name="lastName">
                Email:<input type="text" class="form-control" name="email">
                Phone Number:<input type="text" class="form-control" name="phone">
                Postion:<input type="text" class="form-control" name="position">
                *Major Id:<input type="text" class="form-control" name="major_id">
                Expected graduation year:<input type="text" class="form-control" name="exp_date">
                Username:<input type="text" class="form-control" name="username">
                Password:<input type="password" class="form-control" name="password">
                <input type="submit" value="Create Account">
                </form>

                <p>* 1 - Computer Information Technology<br>
                    2 - Web Design and Development<br>
                     3 - Software Engineering<br>
                    4 Computer Science</p>
            
        </div>
    </body>     
</html>

