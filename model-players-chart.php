<?php
function selectInstructors(){
  try{
    $conn =get_db_connection();
    $stmt = $conn->prepare("SELECT player_name, count(
