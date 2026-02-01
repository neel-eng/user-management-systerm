<?php
require "views/partials/header.php";
require "views/partials/nav.php";

?>
<div class="container">
    <h2>Add User</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="date" name="dob" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone No" required>

        <button type="submit" name="submit">Add User</button>
    </form>
</div>

</body>
</html>
