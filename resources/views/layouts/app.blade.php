@props([
    'user'
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'JollyMotor') }}</title>

    <!-- Favicon -->
    <link href="/assets/images/favicon.png" rel="icon" type="image/png">

    <!-- title and description-->
    <title>JollyMotor</title>
    <meta name="description" content="Socialite - Social sharing network HTML Template">

    <link rel="stylesheet" href="/assets/css/tailwind.css">
    <link rel="stylesheet" href="/assets/css/style.css">  

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <!-- custom style -->
    <style> 
        #header-nav nav a.uk-active         { color:rgb(59, 130, 246)}
        .dark #header-nav nav a.uk-active   { color:#fff !important}
    </style>
 
</head>
<body class="bg-white dark:bg-slate-950 overflow-x-hidden">
    
    <div id="wrapper">

        @if (isset($header))
            @include('components.header')
        @endif

        <div id="site__sidebar" class="fixed top-0 left-0 z-[99] pt-[--m-top] overflow-hidden transition-transform xl:duration-500 max-xl:w-full max-xl:-translate-x-full">

                <!-- sidebar inner -->
                <div class="p-2 max-xl:bg-white shadow-sm 2xl:w-72 sm:w-64 w-[80%] h-[calc(100vh-64px)] relative z-30 max-lg:border-r dark:max-xl:!bg-slate-700 dark:border-slate-700">
            
                    <div class="pr-4" data-simplebar>

                        <nav id="side">
                        
                            <ul>
                                <li>
                                    <a href="feed.html">
                                        <img src="/assets/images/icons/home.png" alt="feeds" class="w-6">
                                        <span> Mappa </span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="messages.html">
                                        <img src="/assets/images/icons/message.png" alt="messages" class="w-5">
                                        <span> Crews </span> 
                                    </a>
                                </li> 
                                <li>
                                    <a href="video.html">
                                        <img src="/assets/images/icons/video.png" alt="messages" class="w-6">
                                        <span> Eventi </span> 
                                    </a>
                                </li>
                            </ul>
                        </nav>
            
                        <nav id="side" class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
                            <div class="px-3 pb-2 text-sm font-medium"> 
                                <div class="text-black dark:text-white">Aiuto</div> 
                            </div>
            
                            <ul class="mt-2 -space-y-2" 
                                uk-nav="multiple: true">
                    
                                <li>
                                    <a href="setting.html"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span> Impostazioni </span>                  
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <div class="text-xs font-medium flex flex-wrap gap-2 gap-y-0.5 p-2 mt-2">
                            <a href="#" class="hover:underline">Support</a>
                            <a href="#" class="hover:underline">Contact Us </a>
                            <a href="#" class="hover:underline">Developer</a>
                        </div>

                    </div>

                </div>

                <!-- sidebar overly -->
                <div id="site__sidebar__overly" 
                    class="absolute top-0 left-0 z-20 w-screen h-screen xl:hidden backdrop-blur-sm"
                    uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"> 
                </div>
        </div>

        
        {{ $slot }}
        
    </div>

    <script src="/assets/js/uikit.min.js"></script>
    <script src="/assets/js/simplebar.js"></script>
    <script src="/assets/js/script.js"></script>
    
    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 

    <!-- Dark mode -->
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }

        // Whenever the user explicitly chooses light mode
        localStorage.theme = 'light'

        // Whenever the user explicitly chooses dark mode
        localStorage.theme = 'dark'

        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem('theme')
    </script>

</body>
</html>