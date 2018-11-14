  <?php

  function insertSpeaker(){
    $sp =NULL;

   $fullName = $_POST['fullNcol'];
    $title = $_POST['titleCol'];
    $spEmail = $_POST['emailCol'];
    $spPhone = $_POST['phoneCol'];


    $someQuery = $db->prepare('INSERT INTO speaker (full_name, title, email, phone) VALUES
        (:fullName, title, spEmail, spPhone)');

    $someQuery->bindValue(":fullName", $fullName);
    $someQuery->bindValue(":title", $title);
    $someQuery->bindValue(":spEmail", $spEmail);
    $someQuery->bindValue(":spPhone", $spPhone);

    $someQuery->execute();

    return $sp;
  }

    ?>