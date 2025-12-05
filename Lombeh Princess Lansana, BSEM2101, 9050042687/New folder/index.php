 <?php include 'db.PHP'; ?>
 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="container">
 <h2>CRUD Dashboard</h2>
 <a class="btn" href="create.PHP">Add New Record</a>
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