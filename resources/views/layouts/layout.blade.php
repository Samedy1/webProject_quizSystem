<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Quiz System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/settings.css">
    <link rel="stylesheet" href="/css/select_sub.css">
    <link rel="stylesheet" href="/css/question.css">
    <!-- bootstrap css -->
</head>

<body class="clearfix">
    <!-- =============== Navigation ================ -->
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                    <span class="title">Quiz</span>
                </a>
            </li>

            {{-- <li>
                <a href="/dashboard">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Dashboard</span>
                </a>
            </li> --}}

            <li>
                <a href="{{ route('subjects.index') }}">
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="title">Subject</span>
                </a>
            </li>

            <li>
                <a href="{{ route('histories.index', Auth::user()->id ) }}">
                    <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class="title">History</span>
                </a>
            </li>

            {{-- <li>
                <a href="#">
                    <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                    <span class="title">Help</span>
                </a>
            </li> --}}

            <li>
                <a href="{{ route('settings.edit', Auth::user()->id) }}">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Settings</span>
                </a>
            </li>

            <li>
                <a href="{{ route('password.edit', Auth::user()->id) }}">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <span class="title">Password</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    {{-- <ion-icon name="search-outline"></ion-icon> --}}
                </label>
            </div>
            <div class="user">
                <img src="/img/users/{{Auth::user()->user_img}}" alt="">
            </div>
            <x-app-layout>
            </x-app-layout>
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
            
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>
            
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
            
                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
            
                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            
                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
            
                        <div class="mt-3 space-y-1">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
            
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- ======================= Cards ================== -->
        <div class="wrapper">
            @yield('content')
        </div>
    </div>
            

    <!-- =========== Scripts =========  -->
    <script src="/js/main.js"></script>
    {{-- <script src="/js/settings.js"></script> --}}

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>