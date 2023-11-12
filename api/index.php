<?php
if ($_SERVER['REQUEST_URI'] === '/frontend') {
    include 'frontend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/backend') {
    include 'backend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/data') {
    include 'data.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/full-stack') {
    include 'full-stack.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/devops') {
    include 'devops.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/mobile') {
    include 'mobile.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/design') {
    include 'design.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/technical-writing') {
    include 'technical-writing.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/internship') {
    include 'internship.php';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>linkedin-scraper</title>
    <!-- css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php include 'sidebar.php' ?>

    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</body>

</html>