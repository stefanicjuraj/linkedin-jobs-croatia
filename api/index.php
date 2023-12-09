<?php
if ($_SERVER['REQUEST_URI'] === '/frontend') {
    require_once __DIR__ . '/departments/frontend/frontend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/backend') {
    require_once __DIR__ . '/departments/backend/backend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/data') {
    require_once __DIR__ . '/departments/data/data.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/full-stack') {
    require_once __DIR__ . '/departments/full-stack/full-stack.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/devops') {
    require_once __DIR__ . '/departments/devops/devops.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/mobile') {
    require_once __DIR__ . '/departments/mobile/mobile.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/quality-assurance') {
    require_once __DIR__ . '/departments/quality-assurance/quality-assurance.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/design') {
    require_once __DIR__ . '/departments/design/design.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/technical-writing') {
    require_once __DIR__ . '/departments/technical-writing/technical-writing.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/project-management') {
    require_once __DIR__ . '/departments/project-management/project-management.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/internship') {
    require_once __DIR__ . '/departments/internship/internship.php';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>linkedin-jobs-croatia</title>
    <!-- css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Inter', sans-serif;
    }
</style>

<body>

    <?php include 'sidebar.php' ?>

    <div class="mt-32 p-4">

        <div class="mx-auto">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-4xl font-extrabold text-center">linkedin-jobs-croatia</h1>
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