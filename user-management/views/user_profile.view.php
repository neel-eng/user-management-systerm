<?php

require "views/partials/header.php";
require "views/partials/nav.php";
?>
<div class="container">
    <h2>User Profile</h2>

    <p><strong>ID:</strong> <?= $user['id']; ?></p>
    <p><strong>Name:</strong> <?= $user['name']; ?></p>
    <p><strong>Date of Birth:</strong> <?= $user['dob']; ?></p>
    <p><strong>Email:</strong> <?= $user['email']; ?></p>
    <p><strong>Phone:</strong> <?= $user['phone']; ?></p>
    <p><strong>Created At:</strong> <?= $user['created_at']; ?></p>

    <br>
    <a href="view_users.php">⬅ Back to Users List</a>
</div>

</body>
</html>