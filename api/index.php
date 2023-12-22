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
} elseif ($_SERVER['REQUEST_URI'] === '/system-network') {
    require_once __DIR__ . '/departments/system-network/system-network.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/cybersecurity') {
    require_once __DIR__ . '/departments/cybersecurity/cybersecurity.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/ai-machine-learning') {
    require_once __DIR__ . '/departments/ai-machine-learning/ai-machine-learning.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/mobile') {
    require_once __DIR__ . '/departments/mobile/mobile.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/game') {
    require_once __DIR__ . '/departments/game/game.php';
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
} elseif ($_SERVER['REQUEST_URI'] === '/it-support') {
    require_once __DIR__ . '/departments/it-support/it-support.php';
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

    iframe {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        background-color: #fff;
        max-width: 100%;
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

        <script type="text/javascript">
            rssfeed_url = new Array();
            rssfeed_url[0] = "https://politepol.com/fd/9jte6NtKnmC2";
            rssfeed_url[1] = "https://politepol.com/fd/95W1L5GAzV6p";
            rssfeed_url[2] = "https://politepol.com/fd/VYOWLy0OlYE8";
            rssfeed_url[3] = "https://politepol.com/fd/hy5fKt0iNR1f";
            rssfeed_url[4] = "https://politepol.com/fd/XNC7LQkC3uEj";
            rssfeed_frame_width = "550";
            rssfeed_frame_height = "1000";
            rssfeed_scroll = "off";
            rssfeed_scroll_step = "4";
            rssfeed_scroll_bar = "on";
            rssfeed_target = "_blank";
            rssfeed_font_size = "15";
            rssfeed_font_face = "Arial, sans-serif";
            rssfeed_border = "off";
            rssfeed_css_url = "https://scraper-widget.vercel.app/linkedin-scraper.css";
            rssfeed_title = "off";
            rssfeed_title_name = "";
            rssfeed_title_bgcolor = "#333";
            rssfeed_title_color = "#fff";
            rssfeed_title_bgimage = "";
            rssfeed_footer = "off";
            rssfeed_footer_name = "";
            rssfeed_footer_bgcolor = "#fff";
            rssfeed_footer_color = "#333";
            rssfeed_footer_bgimage = "";
            rssfeed_item_title_length = "100";
            rssfeed_item_title_color = "#666";
            rssfeed_item_bgcolor = "#fff";
            rssfeed_item_bgimage = "";
            rssfeed_item_border_bottom = "on";
            rssfeed_item_source_icon = "on";
            rssfeed_item_date = "off";
            rssfeed_item_description = "on";
            rssfeed_item_description_length = "250";
            rssfeed_item_description_color = "#666";
            rssfeed_item_description_link_color = "#333";
            rssfeed_item_description_tag = "on";
            rssfeed_no_items = "0";
            rssfeed_cache = "05dac2f49a9b48a20f22bb4ed417b2a3";
        </script>

    </div>

    <!-- script -->
    <script type="text/javascript" src="https://scraper-widget.vercel.app/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</body>

</html>