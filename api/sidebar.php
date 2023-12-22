<?php
$page = basename($_SERVER['REQUEST_URI']);
$pages = [
    'Frontend' => ['url' => '/frontend', 'icon' => 'desktop-outline'],
    'Backend' => ['url' => '/backend', 'icon' => 'server-outline'],
    'Data' => ['url' => '/data', 'icon' => 'analytics-outline'],
    'Full Stack' => ['url' => '/full-stack', 'icon' => 'code-working-outline'],
    'DevOps' => ['url' => '/devops', 'icon' => 'cloud-upload-outline'],
    'System & Network' => ['url' => '/system-network', 'icon' => 'construct-outline'],
    'Cybersecurity' => ['url' => '/cybersecurity', 'icon' => 'shield-checkmark-outline'],
    'AI & Machine Learning' => ['url' => '/ai-machine-learning', 'icon' => 'rocket-outline'],
    'Mobile' => ['url' => '/mobile', 'icon' => 'phone-portrait-outline'],
    'Game' => ['url' => '/game', 'icon' => 'game-controller-outline'],
    'Quality Assurance' => ['url' => '/quality-assurance', 'icon' => 'checkmark-circle-outline'],
    'Design' => ['url' => '/design', 'icon' => 'color-palette-outline'],
    'Technical Writing' => ['url' => '/technical-writing', 'icon' => 'document-text-outline'],
    'Project Management' => ['url' => '/project-management', 'icon' => 'bar-chart-outline'],
    'IT Support' => ['url' => '/it-support', 'icon' => 'settings-outline'],
    'Internship' => ['url' => '/internship', 'icon' => 'school']
];
?>

<nav class="fixed top-0 z-50 py-1 w-full bg-[#222] border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-lg text-white rounded-lg sm:hidden focus:outline-none focus:ring-1 focus:ring-gray-500">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
                <a class="flex ml-2 md:mr-24" href="/">
                    <span class="self-center text-xl text-white font-bold sm:text-2xl whitespace-nowrap">linkedin-jobs-croatia</span>
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

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-72 h-screen pt-24 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <?php foreach ($pages as $name => $pageDetails) :
                $isActive = $page !== null && rtrim($pageDetails['url'], '/') === '/' . $page;
            ?>
                <li>
                    <a href="<?php echo $pageDetails['url']; ?>" class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 <?php if ($isActive) echo 'bg-gray-100'; ?>">
                        <ion-icon name="<?php echo $pageDetails['icon']; ?>" class="h-5 w-5"></ion-icon>
                        <span class="flex-1 ml-3"><?php echo $name ?></span>
                        <span class="inline-flex items-center justify-center">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-4">
            <a href="https://github.com/stefanicjuraj/linkedin-jobs-croatia">
                <ion-icon name="logo-github" class="h-7 w-7"></ion-icon>
            </a>
        </div>
    </div>
</aside>

<!-- icons script -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>