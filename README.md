# Sierra Leone Football Association – PHP & MySQL System

## Overview
This project is a Web Programming Techniques assignment that demonstrates a football data management system.

📁 PROJECT STRUCTURE
 project/
 │── index.php
 │── create.php
 │── edit.php
 │── delete.php
 │── db.php
 │── README.md
 │── dashboard.sql


� db.php
 <?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'crud_app';
 $conn = new mysqli($host, $user, $pass, $db);
 if ($conn->connect_error) {
 die('Connection failed: ' . $conn->connect_error);
 }
 ?>

 
 🏠 index.php (Read + Table View)
  <?php include 'db.php'; ?>
 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="container">
 <h2>CRUD Dashboard</h2>
 <a class="btn" href="create.php">Add New Record</a>
 <br><br>
 <table>
  <tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
  </tr>
 <?php
 $result = $conn->query("SELECT * FROM users");
 while ($row = $result->fetch_assoc()): ?>
 <tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['name'] ?></td>
  <td><?= $row['email'] ?></td>
  <td>
    <a class="btn" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
    <a class="btn" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
  </td>
 </tr>
 <?php endwhile; ?>
 </table>
 </div>
 </body>
 </html>

 ➕ create.php
 <?php include 'db.php'; ?>
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $conn->query("INSERT INTO users (name,email) VALUES ('$name', '$email')");
 header('Location: index.php');
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="container">
 <h2>Add Record</h2>
 <form method="POST">
  <label>Name</label><br>
  <input type="text" name="name" required><br><br>
  <label>Email</label><br>
  <input type="email" name="email" required><br><br>
  <button class="btn" type="submit">Save</button>
 </form>
 </div>
 </body>
 </html>

 
 ✏ edit.php
 <?php include 'db.php'; ?>
  <?php
 $id = $_GET['id'];
 $result = $conn->query("SELECT * FROM users WHERE id=$id");
 $user = $result->fetch_assoc();
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $name = $_POST['name'];
 3
$email = $_POST['email'];
 $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
 header('Location: index.php');
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="container">
 <h2>Edit Record</h2>
 <form method="POST">
  <label>Name</label><br>
  <input type="text" name="name" value="<?= $user['name'] ?>" 
required><br><br>
  <label>Email</label><br>
  <input type="email" name="email" value="<?= $user['email'] ?>" 
required><br><br>
  <button class="btn" type="submit">Update</button>
 </form>
 </div>
 </body>
 </html>
 🗑 delete.php
 <?php include 'db.php'; ?>
 <?php
 $id = $_GET['id'];
 $conn->query("DELETE FROM users WHERE id=$id");
 header('Location: index.php');
 ?>

 
 🛢 database.sql
 CREATE DATABASE IF NOT EXISTS crud_app;
 USE crud_app;
 CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 4
email VARCHAR(100)
);


## Features
- User accounts
- Player, coach, referee management
- Clubs and matches
- Contracts system
- XAMPP compatible
- PDO database connection

## Requirements
- XAMPP
- PHP 7+
- MySQL / phpMyAdmin

## Setup
1. Start Apache and MySQL in XAMPP.
2. Import `database.sql` into phpMyAdmin.
3. Place the project folder into `htdocs/`.
4. Visit `http://localhost/your-folder/`.
