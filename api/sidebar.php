<?php
$page = basename($_SERVER['REQUEST_URI']);
$pages = [
    'frontend' => '/frontend',
    'backend' => '/backend',
    'data' => '/data',
    'full stack' => '/full-stack',
    'mobile' => '/mobile',
    'design' => '/design',
    'technical writing' => '/technical-writing',
    'internship' => '/internship'
]
?>

<nav class="fixed top-0 z-50 w-full bg-[#222] border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-lg text-white rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
                <a class="flex ml-2 md:mr-24">
                    <span class="self-center text-xl text-white font-bold sm:text-2xl whitespace-nowrap">linkedin-scraper</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center mr-3">
                    <div>
                        <p class="text-lg text-white font-bold">📍 Croatia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-24 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <?php foreach ($pages as $name => $url) : ?>
                <li>
                    <a href="<?php echo $url; ?>" class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 <?php echo ($page == $name) ? 'bg-gray-100' : ''; ?>">
                        <span class="flex-1 ml-3"><?php echo ucfirst($name); ?></span>
                        <span class="inline-flex items-center justify-center">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>

<!-- icons script -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>