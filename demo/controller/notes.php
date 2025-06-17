<?php 

require 'Database.php';
require 'functions.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';

// $id = $_GET['id'];
// $query = "select * from notes where id = ?";
// $notes = $db->query($query, [$id])->fetchAll();

$notes = $db->query('select * from notes where user_id = 1')->fetchAll();


require "views/notes.view.php";