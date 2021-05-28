<?php
require_once __DIR__ . '/partials/templates/head.php'; 
require_once __DIR__ . '/partials/scripts/get-rooms.php'; ?>

<!DOCTYPE html>
<html lang="en">

<body>
    
    <header class="container mt-5 text-center">
        <h1>Welcome to our Hotel Archive</h1>
    </header>

    <main class="container mt-5">
        <h2>Rooms Archive</h2>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">Room Number</th>
                    <th class="p-3">Link</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($rooms)) {
                    foreach($rooms as $room) { ?>
                <tr>
                    <td class="p-3"><?php echo $room['id']; ?></td>
                    <td class="p-3"><?php echo $room['room_number']; ?></td>
                    <td class="p-3">
                        <a class="text-success" 
                            href="./details.php?id=<?php echo $room['id']; ?>">
                            Show Details
                        </a>
                    </td>
                </tr>
                   <?php }
                }
                ?>
            </tbody>
        </table>
    </main>

</body>
</html>