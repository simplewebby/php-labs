<?php
/*Part 1
$names = 'Jonh| Jerry| Ann |Sanji |Wen| Paul| Louise| Peter';

$names = explode('|', $names);

unset($names[0]);
$names[]='Willie';
$names[]='Daniel';
$names[4]= 'Andre';
$names[0]='Alisha';


$anotherNames = array('Lisa', 'Bob', 'Kate', 'Geo','Trio');
$names = array_merge($names, $anotherNames);
//$names = array_merge_recursive($names, $anotherNames);

for ($i=0; $i<count($names); $i++) {
  print $names[i];
}
foreach (array_reverse($names) as $value) {
print $value."\n";
*/
//Part 2

//$student = array('Name' => , 'ID' => , 'Address' => , 'Major' => , 'Email'=> , 'Phone'=> );

if (isset($_POST['action'])) {
  $action =  $_POST['action'];
} else {
  $action =  'start';
}
switch ($action) {
  case 'start':
      $message = 'Enter some data and click on the Submit button.';
      break;
  case 'process_data':


      $name = $_POST['name'];
      $id = $_POST['id'];
      $address = $_POST['address'];
      $major = $_POST['major'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message1 = $_POST['message1'];

$student = array($name, $id, $address, $major, $email, $phone);
      // Remove spaces
      $name = trim($name);
      $email = trim($email);
      if (empty($name)) {
          $message = 'You must enter a name.';
          break;
      }

      $name = strtolower($name);
      $name = ucwords($name);

      $i = strpos($name, ' ');
      if ($i === false) {
          $first_name = $name;
      } else {
          $first_name = substr($name, 0, $i);
      }
      //validate id
      if (empty($id)) {
          $message = 'You must enter an ID.';
          break;
      }

      //validate address
      if (empty($address)) {
          $message = 'You must enter an address.';
          break;
      }
      //validate major
      if (empty($major)) {
          $message = 'You must enter your major.';
          break;
      }

      // validate email
      if (empty($email)) {
          $message = 'You must enter an email address.';
          break;
      } else if(strpos($email, '@') === false) {
          $message = 'The email address must contain an @ sign.';
          break;
      } else if(strpos($email, '.') === false) {
          $message = 'The email address must contain a dot character.';
          break;
      }
      // remove common formatting characters from the phone number
      $phone = str_replace('-', '', $phone);
      $phone = str_replace('(', '', $phone);
      $phone = str_replace(')', '', $phone);
      $phone = str_replace(' ', '', $phone);
      // validate the phone number
      if (strlen($phone) < 7) {
          $message = 'The phone number must contain at least seven digits.';
          break;
      }
      // format the phone number
      if (strlen($phone) == 7) {
          $part1 = substr($phone, 0, 3);
          $part2 = substr($phone, 3);
          $phone = $part1 . '-' . $part2;
      } else {
          $part1 = substr($phone, 0, 3);
          $part2 = substr($phone, 3, 3);
          $part3 = substr($phone, 6);
          $phone = $part1 . '-' . $part2 . '-' . $part3;
      }
ksort($student);
$student = implode('|', $student);
$message1 =$student;


  $message =
         "Hello $first_name,\n\n" .
          "Thank you for entering this data:\n\n" .
          "Name: $name\n" .
          "ID: $id \n".
          "Address: $address\n".
          "Major:  $major\n".
          "Email: $email\n" .
          "Phone: $phone\n";
      break;
}
include 'index.php';
?>
