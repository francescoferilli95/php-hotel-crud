<?php
require_once __DIR__ . '/partials/templates/head.php'; 
require_once __DIR__ . '/partials/scripts/get-details.php'; ?>

<!DOCTYPE html>
<html lang="en">

<body>
    <header class="container mt-5 text-center">
        <h1>Rooms Details</h1>
    </header>

    <main class="container">
        <?php if(!empty($room)) { ?>
        <h1><?php echo $room['id']; ?></h1>
        <ul>
            <li class="p-3">Room Number: <?php echo $room['room_number']; ?></li>
            <li class="p-3">Floor: <?php echo $room['floor']; ?></li>
            <li class="p-3">Beds: <?php echo $room['beds']; ?></li>
        </ul>
        <?php } else { ?>
                <h2>No room found.</h2>
        <?php } ?>
        
        <p>
            <a class="text-success mt-5" href="./">Go back to archive</a>
        </p>
    </main>

</body>
</html>