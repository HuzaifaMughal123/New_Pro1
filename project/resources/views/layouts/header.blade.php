<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Educenter</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


    <!-- header -->
    <header class="fixed-top header">
        
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item @@about">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item @@courses">
                                <a class="nav-link" href="/courses">COURSES</a>
                            </li>
                            <li class="nav-item @@events">
                                <a class="nav-link" href="/events">EVENTS</a>
                            </li>
                            <li class="nav-item @@blog">
                                <a class="nav-link" href="/blog">BLOG</a>
                            </li>
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">
                                    <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                                    </a>
                                    <a class="dropdown-item" href="">
                                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                                    </a>
                                    
                                </div>
                            </li>
                            <li class="nav-item @@contact">
                                <a class="nav-link" href="/contact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->