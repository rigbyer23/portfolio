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
                <div class="col-lg-3 p-2 h-95 d-inline-block d-inline-flex p-2" style="width: 300px; background-color: rgba(168,168,168)">
                
            <form action ="swe-auth.php" method ="post">
                 <div class="form-group">
                 <h3 style="color:white;">Sign In</h3>
                   <br/>
                    Username<input type="text" class="form-control" name="username">
                    <br/>
                    Password<input type="password" class="form-control" name="password">
                    <br/>
                    <input type="submit" class ="btn btn-light" value="Sign In">
                </div>
            </form>
        </div>
    </body>     
</html>