<?php
session_start();
require("./membersModol.php");
if (isset($_GET['membersRadio'])){
$type = $_GET['membersRadio'];
$members = getMembers($type);
}
if (isset($_GET['speakers'])){
$type = $_GET['speakers'];
$members = getMembers($type);
}

//insert member
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
                <p style="font-weight:bold; font-size:14px;">
               <?php
                if(isset($_SESSION['username'])){
                echo 'Welcome ';
                echo $_SESSION['username'];
                }
                else{
                    header('location: ./swe-register.php');
                }
                ?>
                </p>
            <br>
            <div class="row d-flex">
                <div class="col-lg-3 p-2 h-95 d-inline-block d-inline-flex p-2" style="width: 300px; background-color: rgba(168,168,168)">
                <!-- //accordian -->
                    <div id="accordion" role="tablist" style="width: 100%;">
                    <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Members
                        </a>
                     </h5>
                </div>
                
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body">
                        <form action ="memberListView.php" method="GET">
                            <div class="form-check">
                                <ul>
                                    <li><input class="form-check-input" name="membersRadio" value="allMembers" type="radio">
                                    All Members
                                    </li>
                                    <li> <input class="form-check-input" name="membersRadio" value="boardMembers" type="radio">
                                    Advisory Board
                                    </li>
                                    <li> <input class="form-check-input" name="membersRadio" value="cs" type="radio">
                                    Computer Science (CS)
                                    </li>
                                    <li> <input class="form-check-input" name="membersRadio" value="se" type="radio">
                                    Software Engineering(SE)
                                    </li>
                                    <li> <input class="form-check-input" name="membersRadio" value="defaultCheck1" type="radio">
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
                         <form action ="memberListView.php" method="GET">
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
                            <form action ="memberListView.php" method="GET">
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
            
            <div class="col-lg-9 d-inline-flex p-2 flex-column">
            <form class="p-2" action="./deleteMember.php" method="post">
                <table class="table">
                    <?php
                            foreach ($members as $member){
                                $id = $member['id'];
                                $firstName = $member["first_name"];
                                $lastName =$member["last_name"];
                                $email = $member["email"];
                                $phone =$member["phone"];
                                $major =$member["abbr"];
                            
                                if($type == 'allMembers'){
                                echo "<tr><td>$id</td><td> $firstName </td><td>$lastName</td><td> $email</td><td>$phone</td><td>$major</td><td><a class ='btn btn-outline-danger'  href='./deleteMember.php?nameId=$id'>Delete</a></td></tr>";
                                }
                                
                                else if ($type == 'boardMembers'){
                                $id = $member['id'];
                                $position = $member["position"];
                                $grad =$member["exp_date"];
                            
                                echo "<tr><td>$id</td><td> $position </td><td>$firstName</td><td> $lastName</td><td>$phone</td><td>$email</td><td>$grad</td><td><a class ='btn btn-outline-danger'  href='./deleteMember.php?boardId=$id'>Delete</a></td></tr>";
                                }
                                    
                              
                                
                                else{
                                    $id = $member['id'];
                                    $fullName = $member['full_name'];
                                    $title = $member['title'];
                                    
                                     echo  "<tr><td>$id</td><td>$fullName</td><td>$title</td><td>$phone</td><td>$email</td><td><a class ='btn btn-outline-danger'  href='./deleteMember.php?speakerId=$id'>Delete</a></td></tr>";
                                }
                            }    
                            ?>
                            </table>
                            </form>

                <form class="p-2" action="./insertMember.php" method ="post" style ="flex-direction:column;"> 
                     <table class="table">
                            <?php
                                if($type == 'allMembers'){
                                 echo '<tr><td><input placeholder="First Name" style="width:127px;" type="text" name="firstNcol"></td><td><input style="width:127px;" placeholder="Last Name" type="text" name="secNcol"></td><td><input style="width:127px;" type="text" placeholder="Email" name="emailCol"></td><td><input style="width:127px;" type="text" name="phoneCol" placeholder="Phone"></td><td><input style="width:127px;" type="text"placeholder="Major ID" name="majorCol"></td></tr><tr><td><input style="width:127px;" type="submit" name="addButton" value="addMember"></td></tr>';
                             }

                               
                            //  else if ($type == 'boardMembers'){
                            //      echo '<tr><td><input placeholder="Position" style="width:127px;" type="text" name="position"></td><td><input style="width:127px;" placeholder="First Name" type="text" name="fName"></td><td><input placeholder="Last Name" style="width:127px;" type="text" name="lastName"></td><td><input placeholder="Email" style="width:127px;" type="text" name="email"></td><td><input placeholder="Phone" style="width:127px;" type="text" name="phone"></td><td><input style="width:127px;" placeholder="Exp Grad Year" type="text" name="exp_date"></td></tr><tr><td><input style="width:127px;" type="submit" name="addButton" value="addBoard"></td></tr>';

                            //  }

                             

                               if (isset($_GET['speakers'])){
                                 echo '<tr><td><input placeholder="Full Name" style="width:127px;" type="text" name="fullNcol"></td><td><input placeholder="Job Title"style="width:127px;" type="text" name="titleCol"></td><td><input placeholder="Phone" style="width:127px;" type="text" name="phoneCol"><td><input placeholder="Email" style="width:127px;" type="text" name="emailCol"></td></td></tr><tr><td><input style="width:127px;" type="submit" name="addButton" value="addSpeaker"></td></tr>';
                            }      
                        ?> 
                 </table>
            </form> 
        </div>        
</html>