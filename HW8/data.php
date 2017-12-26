<?php
require ('connection.php');
function get_names($fname){
  global $pdo;
  $sql = 'SELECT * FROM people WHERE firstName=?';
    $stmt = $pdo-> prepare($sql);
    $stmt->execute([$fname]);
    $result = $stmt->fetchAll();
    $stmt ->closeCursor();
    return $result;

  }
  function get_last($lname){
    global $pdo;
    $sql = 'SELECT * FROM people WHERE lastName=?';
      $stmt = $pdo-> prepare($sql);
      $stmt->execute([$lname]);
      $result = $stmt->fetchAll();
      $stmt ->closeCursor();
      return $result;

    }
function get_all(){
  global $pdo;
  $sql = 'SELECT * FROM people';
  $stmt = $pdo-> prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  $stmt ->closeCursor();
  return $result;
}
function get_state($state){
  global $pdo;
  $sql = 'SELECT * FROM people WHERE state=?';
    $stmt = $pdo-> prepare($sql);
    $stmt->execute([$state]);
    $result = $stmt->fetchAll();
    $stmt ->closeCursor();
    return $result;

  }
  function get_id($id){
    global $pdo;
    $sql = 'SELECT * FROM people WHERE personID=?';
      $stmt = $pdo-> prepare($sql);
      $stmt->execute([$id]);
      $result = $stmt->fetchAll();
      $stmt ->closeCursor();
      return $result;

    }
    function get_age($age){
      global $pdo;
      $sql = 'SELECT * FROM people WHERE age=?';
        $stmt = $pdo-> prepare($sql);
        $stmt->execute([$age]);
        $result = $stmt->fetchAll();
        $stmt ->closeCursor();
        return $result;

      }
