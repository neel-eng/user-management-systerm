<?php 

require "views/partials/header.php";
require "views/partials/nav.php";

?>

 <div class="container">
        <h2>Users List</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>

            <?php foreach ($users as $row) : ?>
                <tr>
                    <td>
                        <a href="/user-management/user-profile?id=<?= $row['id']; ?>">
                            <?= $row['name']; ?>
                        </a>
                    </td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['dob']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['phone']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="pagination">
            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <a href="?page=<?= $i; ?>" class="<?= ($page == $i) ? 'active' : ''; ?>">
                    <?= $i; ?>
                </a>
            <?php } ?>
        </div>
    </div>

</body>

</html>

