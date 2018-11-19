<?php
//Search members
function getMembers(){
    
}
function getData(){
    require("./team-activities/dbconnect.php");
    global $all, $all_ab, $all_speakers;
    $db = get_db();
    $gd = NULL;
   
if(isset($_GET['members']))
 {
     switch($_GET['members']){
        case 'allMembers':
           $stmt = $db->prepare('SELECT first_name, last_name, email, phone, abbr FROM member m JOIN major ma ON m.major_id = ma.id');
           $stmt->execute();
           $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
           break;
        case 'advb':
        $stmt = $db->prepare('SELECT position,first_name, last_name, username, exp_date FROM member m JOIN ab_member am ON m.id = am.member_id');
        $stmt->execute();
        $all_ab = $stmt->fetchAll(PDO::FETCH_ASSOC);
        break;
     }
}
//search speakers
 if(isset($_GET['speakers']))
 {
     switch($_GET['speakers']){
        case 'allSpeakers':
           $stmt = $db->prepare('SELECT full_name, title, email, phone FROM speaker');
           $stmt->execute();
           $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
           break;
        case 'advb':
        $stmt = $db->prepare('SELECT position,first_name, last_name, username, exp_date FROM member m JOIN ab_member am ON m.id = am.member_id');
        $stmt->execute();
        $all_speakers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        break;
     }
}


//Search Ab members
     if(isset($_GET['advb'])&& $_GET['advb']!== '')
 {
    $last_name = $_GET['advb'];
    $stmt = $db->prepare('SELECT position, first_name, last_name, username, exp_date FROM member m JOIN ab_member am ON m.id = am.member_id WHERE last_name = :abm_last_name');
    $stmt->bindValue(':advb', $last_name, PDO::PARAM_STR);
    $stmt->execute();
    $ab_member = $stmt->fetchAll();
  }

    else if(isset($_GET['see_all_abm']))
{
    $stmt = $db->prepare('SELECT position,first_name, last_name, username, exp_date FROM member m JOIN ab_member am ON m.id = am.member_id');
    $stmt->execute();
    $all_ab = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//Search speakers

    else if(isset($_GET['allSpeakers']))
    {
        $stmt = $db->prepare('SELECT * FROM speaker');
        $stmt->execute();
        $all_speakers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $gd;
}
    ?>