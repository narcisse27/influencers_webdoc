<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <title>Webdoc Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/custom.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/Dashboard.css') }}">
    {{ csrf_field() }}
    <!--<script src="{{ asset('admin/assets/js/require.min.js') }}"></script>
    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="{{ asset('/admin/assets/css/Dashboard.css') }}" rel="stylesheet" />
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="./dashboard">
                        <!--<img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">-->
                        <svg width="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.89 58.05"><title>logo</title><g id="2a7387ba-d0c1-4373-8236-d89b1687af42" data-name="Calque 2"><g id="d99945e4-e551-482f-8c62-9538d602a825" data-name="Calque 1"><path d="M9,12.12a17.3,17.3,0,0,1,6.72-1.26c7.85,0,12.69,4.28,14.7,10.18a21,21,0,0,1,1.07,6.72v.63c0,7.85-3.52,13.19-9,15.64a17,17,0,0,1-6.66,1.26C7.85,45.3,3,41,1,35.12A21,21,0,0,1,0,28.4v-.63C0,19.91,3.45,14.58,9,12.12ZM15.7,18c-5.15,0-6.84,4.59-6.84,9.73v.63c0,5.28,1.63,9.74,6.91,9.74s6.84-4.53,6.84-9.74v-.63C22.61,22.55,20.86,18,15.7,18Z"/><path d="M35.79,50.83c3.27,0,4.9-1.14,5.78-3.58l1-2.52L30.89,11.5h9.55L46.6,32.1l6.15-20.6h9.49L49,49.63C47.35,54.15,44.59,58,38.37,58a10.22,10.22,0,0,1-3.9-.56V50.76C34.85,50.76,35.35,50.83,35.79,50.83Z"/><path d="M78.24,45.3c-7.91,0-13.06-4.09-15.33-9.87a17,17,0,0,1-1.13-6.22V28c0-7.86,3.58-13.44,9.11-15.9a16,16,0,0,1,6.41-1.26c7.48,0,11.93,3.9,13.76,9.62A22.68,22.68,0,0,1,92,27.2V31H70.83a7.61,7.61,0,0,0,4.9,6.6,8.53,8.53,0,0,0,3.2.57,9.57,9.57,0,0,0,8-3.71l4.33,4.9C88.67,42.85,84.4,45.3,78.24,45.3ZM77.24,18c-4.09,0-5.84,3.2-6.28,6.91H83.27v-.76C83.27,20.35,81.13,18,77.24,18Z"/><path d="M97,40.52c0-3,1.89-4.72,4.9-4.72s5,1.76,5,4.72-2,4.64-5,4.64S97,43.41,97,40.52ZM98.29,31,97.22,0h0a9.12,9.12,0,0,1,9.12,9.42L105.64,31Z"/></g></g></svg>
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="nav-item d-none d-md-flex">
                            <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                        </div>
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                                <span class="nav-unread"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                                    <div>
                                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                                        <div class="small text-muted">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                                    <div>
                                        <strong>Alice</strong> started new task: Tabler UI design.
                                        <div class="small text-muted">1 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                                    <div>
                                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                                        <div class="small text-muted">2 hours ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                                <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"><span class="badge badge-primary">6</span></span>
                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-send"></i> Message
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <!--<div class="my-3 my-md-5">-->
            @yield('content')
        <!--</div>-->
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">First link</a></li>
                                <li><a href="#">Second link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Third link</a></li>
                                <li><a href="#">Fourth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Fifth link</a></li>
                                <li><a href="#">Sixth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Other link</a></li>
                                <li><a href="#">Last link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    Premium and Open Source dashboard template with responsive and high quality UI. For Free!
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
@yield('script')
</body>
</html>