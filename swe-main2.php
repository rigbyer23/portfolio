<?php
$all;
$all_ab;
$all_speakers;
require("./swe-queryCode.php");
$gd = getData();

require("./swe-insertCode.php");
//insert member
if(isset($_POST['addMember']))
{
    $idta = insertData();
    window.alert("You have added a new member!");
}
?>

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
                    <div class="p-2"><img class="img-responsive" style="object-fit: cover; height:40%; width:100%;" src="./swe-image.jpg"></div>
                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex">
                <div class="col-lg-3 p-2 h-95 d-inline-block d-inline-flex p-2" style="width: 300px; background-color: rgba(168,168,168)">
                <!-- //accordian -->
                    <div id="accordion" role="tablist" style="width: 100%;">
                    <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Members
                        </a>
                     </h5>
                </div>
                
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body">
                        <form action ="swe-main2.php" method="GET">
                            <div class="form-check">
                                <ul>
                                    <li><input class="form-check-input" name="members" value="allMembers" type="radio">
                                    All Members
                                    </li>
                                    <li> <input class="form-check-input" name="members" value="advb" type="radio">
                                    Advisory Board
                                    </li>
                                    <li> <input class="form-check-input" name="members" value="cs" type="radio">
                                    Computer Science (CS)
                                    </li>
                                    <li> <input class="form-check-input" name="members" value="se" type="radio">
                                    Software Engineering(SE)
                                    </li>
                                    <li> <input class="form-check-input" name="members" value="defaultCheck1" type="radio">
                                    Computer Information Technology(CIT)
                                    </li>
                                </ul>
                                <input type="submit" value="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="accordion" role="tablist" style="width: 100%;">
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                     <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Speakers
                        </a>
                     </h5>
                    </div>

                     <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                         <form action ="swe-main2.php" method="GET">
                            <div class="form-check">
                                <ul>
                                    <li><input class="form-check-input" name="speakers" value="allSpeakers" type="radio">
                                    All Speakers
                                    </li>
                                    <li> <input class="form-check-input" name="speakers" value="previous" type="radio">
                                    Previous
                                    </li>
                                    <li> <input class="form-check-input" name="speakers" value="potential" type="radio">
                                    Potential
                                    </li>
                                </ul>
                                <input type="submit" value="Search">
                            </div>
                         </form>
                        </div>
                    </div>
                </div>

            <div id="accordion" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Calendar
                        </a>
                    </h5>
                    </div>

                     <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            <form action ="swe-main2.php" method="GET">
                                <div class="form-check">
                                    <ul>
                                        <li><input class="form-check-input" value="" id="defaultCheck1" type="radio">
                                        All Events
                                        </li>
                                        <li> <input class="form-check-input" value="" id="defaultCheck1" type="radio">
                                        Upcoming Events
                                        </li>
                                        <li> <input class="form-check-input" value="" id="defaultCheck1" type="radio">
                                        Past Events
                                        </li>
                                        <li> <input class="form-check-input" value="" id="defaultCheck1" type="radio">
                                        Tasks
                                        </li>
                                    </ul> 
                                    <input type="submit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
            <div class="col-lg-9 d-inline-flex p-2">
            <form action="./swe-insertCode.php" method="post">
                <table class="table">
                    <?php
                            foreach ($all as $row){
                            
                                echo '<tr><td>'.$row['first_name'].'</td><td> '.$row['last_name'].'</td><td> '.$row['email']. '</td><td>' .$row['phone']. '</td><td>'. $row['name'].'</td></tr>';
                            }
                             foreach ($all_ab as $row){
                            
                                echo '<tr><td>'.$row['position']. '</td><td>'. $row['first_name'].'</td><td> '.$row['last_name'].'</td><td>'.$row['username']. '</td><td>'.$row['exp_date']. '</td></tr>' ;
                            }
                             if(isset($_GET['members'])){
                                 echo '<tr><td><input type="text" name="firstNcol"></td><td><input type="text" name="secNcol"></td><td><input type="text" name="emailCol"></td><td><input type="text" name="phoneCol"></td><td><input type="text" name="majorCol"></td></tr><input type="submit" value="addMember">';

                             }
                            
                        ?> 
                 </table>
            </form>

            <form action="./swe-insertSpeaker.php" >
             <table class="table">
             <?php
             foreach ($all_speakers as $row){
                            
                                echo  '<tr><td>'.$row['full_name']. '</td><td>'. $row['title'].'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td></tr>';
                            }
                            if(isset($_GET['speakers'])){
                                 echo '<tr><td><input type="text" name="fullNcol"></td><td><input type="text" name="titleCol"></td><td><input type="text" name="emailCols"></td><td><input type="text" name="phoneCols"></td><td><input type="text" </tr><input type="submit" value="addSpeaker">';
                            }       
             ?>
             </table>                
            </form>
        </div>        
</html>