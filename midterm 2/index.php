<?php
  // Start Session
  session_start();
  // test if session array is empty if it is empty create the array
  if (empty($_SESSION['students'])) {
    $_SESSION["students"] = array();
    }
  $action = filter_input(INPUT_POST, 'action');



  //there are two action values "add" or "display"
  // if any of the variables are empty set action to add
  // else set session array to an id and the id to an array of fname,
  // lname and state and set action to display
  if(!isset($_POST['id']) && !isset($_POST['fname'])&& !isset($_POST['lname'])&& !isset($_POST['state'])){
  $action = 'add';
  }else{
  $_SESSION['students']['info'][] = array('id'=>$_POST['id'],'fname'=>$_POST['fname'],'lname' => $_POST['lname'], 'state' => $_POST['state']);
  $action = 'display';
  }
  // switch statement
  // determine what to do if action is add or display
    switch ($action) {
    case 'add':
    $newId = $_POST['newId'];
    array_push($_SESSION['students'][],$newId);
    include("displayNames.php");
    break;
    case 'display':
    include("displayNames.php");
    break;
    }

  ?>
