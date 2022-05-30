<?php

$db = mysqli_connect(
  'localhost',
  'root',
  'root',
  'fratteli'
);

if (!$db) {
  die('Error connect to DataBase');
}