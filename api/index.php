<?php
if ($_SERVER['REQUEST_URI'] === '/frontend') {
    require_once __DIR__ . '/departments/frontend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/backend') {
    require_once __DIR__ . '/departments/backend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/data') {
    require_once __DIR__ . '/departments/data.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/full-stack') {
    require_once __DIR__ . '/departments/full-stack.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/devops') {
    require_once __DIR__ . '/departments/devops.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/mobile') {
    require_once __DIR__ . '/departments/mobile.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/quality-assurance') {
    require_once __DIR__ . '/departments/quality-assurance.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/design') {
    require_once __DIR__ . '/departments/design.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/technical-writing') {
    require_once __DIR__ . '/departments/technical-writing.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/internship') {
    require_once __DIR__ . '/departments/internship.php';
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

    <div class="mt-32 p-4">

        <div class="mx-auto">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-4xl font-extrabold text-center">linkedin-scraper</h1>
                <p class="mt-8 w-2/3 sm:w-1/3 text-xl text-center">
                    PHP web application designed to automate viewing job postings from LinkedIn within the IT industry departments in Croatia.
                </p>
                <a class="mt-8 px-8 py-4 text-base font-medium text-center inline-flex items-center text-black bg-gray-100 rounded-lg">
                    View all positions
                    <ion-icon name="arrow-down-outline" class="ml-2"></ion-icon>
                </a>
            </div>
        </div>

    </div>

    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</body>

</html>