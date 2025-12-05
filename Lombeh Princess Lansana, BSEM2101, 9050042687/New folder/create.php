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