<?php
require ('data.php');
require ('connection.php');
$showall = isset($_POST['showall']);
$id = filter_input(INPUT_POST, 'id');
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$age = filter_input(INPUT_POST, 'age');
$state = filter_input(INPUT_POST, 'state');

//detemine action

if($fname ){
  $action = 'A';
}
elseif($lname){
  $action = 'last';
}
elseif($showall){
  $action = 'B';
}
elseif($state){
  $action = 'C';
}
elseif($id){
  $action = 'I';
}
elseif($age){
  $action = 'AGE';

}
else{
  $action = 'D';

}

switch ($action) {
    case 'A':
        $result = get_names( $fname);
        include ('display.php');
        break;
    case 'last':
        $result=get_last($lname);
        include ('display.php');
        break;

    case 'B':
        $result=get_all();
        include ('display.php');
        break;
    case 'C':
        $result=get_state($state);
        include ('display.php');
        break;
    case 'I':
        $result=get_id($id);
        include ('display.php');
        break;
    case 'AGE':
        $result=get_age($age);
        include ('display.php');
        break;
    case 'D':
        include ('home.html');
        break;

}



?>
