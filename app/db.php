<?php

$db = mysqli_connect(
  'localhost',
  'root',
  '',
  'fratteli'
);

if (!$db) {
  die('Error connect to DataBase');
}