 <?php
 
    function insertData(){
        $idta = NULL;
    $fname = $_POST['firstNcol'];
    $lname = $_POST['secNcol'];
    $email = $_POST['emailCol'];
    $phone = $_POST['phoneCol'];
    $major = $_POST['majorCol'];

    $someQuery = $db->prepare('INSERT INTO member(first_name, last_name, email, phone, major_id) VALUES
        (:fname, :lname, :email, :major)');

    $someQuery->bindValue(":fname", $fname);
    $someQuery->bindValue(":lname", $lname);
    $someQuery->bindValue(":email", $email);
    $someQuery->bindValue(":phone", $phone);
    $someQuery->bindValue(":major", $major);

    $someQuery->execute();

    return $idta;
    }
    header("location: ./swe-main2.php");
    ?>
