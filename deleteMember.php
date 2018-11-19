<?php
require("../team-activities/dbconnect.php");
$db = get_db();


if(isset($_GET['nameId'])){
    $id = $_GET['nameId'];
    $someQuery = $db->prepare("DELETE FROM member m WHERE m.id = :id");
    $someQuery->bindValue(":id", $id, PDO::PARAM_INT);
    $someQuery->execute();
    header('location: ./memberListView.php?membersRadio=allMembers');
    die();
}

if(isset($_GET['boardId'])){
    $id = $_GET['boardId'];
    $someQuery = $db->prepare('DELETE FROM ab_member b WHERE b.id = :boardId');
    $someQuery->bindValue(":boardId", $id, PDO::PARAM_INT);
    $someQuery->execute();
     header('location: ./memberListView.php?membersRadio=boardMembers');
}
    
if(isset($_GET['speakerId'])){
    $id = $_GET['speakerId'];
    $someQuery = $db->prepare('DELETE FROM speaker s WHERE s.id = :speakerId');
    $someQuery->bindValue(":speakerId", $id, PDO::PARAM_INT);
    $someQuery->execute();
     header('location: ./memberListView.php?speakers=allSpeakers');
}
?>