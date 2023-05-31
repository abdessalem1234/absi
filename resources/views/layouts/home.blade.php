<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('page_description')" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="{{ asset('vendor/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        .nav-header {
            background-color: #DD2F6E;

        }

        .content-body {
            padding-top: 7.5rem;
        }

        @media only screen and (max-width: 1400px) {
            [data-sidebar-style="full"][data-layout="vertical"] .deznav .metismenu>li>a {
                font-size: 14px;
            }
        }
    </style>
    @yield('css')



</head>

<body>

    <div id="app">
        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader" style="z-index: 100000">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->

        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper" class="show">



            <!--**********************************
            Nav header start
        ***********************************-->
            <div class="nav-header">
                <a href="{{ route('NFC.home') }}" class="brand-logo">
                    <img class="logo-abbr" src="{{ asset('images/logo/logo.png') }}" alt="">
                    <img class="logo-compact" src="{{ asset('images/logo/logotexte.png') }}" alt="">
                    <img class="brand-title" src="{{ asset('images/logo/logotexte.png') }}" alt="">
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->



            <!--**********************************
            Header start
        ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">

                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                                <div class="dashboard_bar">
                                    <a href="{{ route('NFC.home') }}"> Accueil</a>
                                </div>
                            </div>
                         
                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link  ai-icon" href="javascript:;" role="button"
                                        data-toggle="dropdown">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z"
                                                fill="#3E4954" />
                                        </svg>
                                      
                                            <span id="nbr-notif"
                                                class="badge light text-white bg-primary">0</span>
                                   
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div id="DZ_W_Notification1" class="widget-media dz-scroll "
                                            style="max-height:380px;">
                                            <ul class="timeline">
                                                
                                            </ul>
                                        </div>
                                   

                                    </div>
                                </li>


                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                                        <div class="header-info">
                                            <small>Bonjour</small>
                                            {{-- <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span> --}}
                                            <span>test</span>
                                        </div>
                                        <img src="{{  asset('images/avatar/1.jpg') }}" width="5" alt="" />
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{!! url('/') !!}" class="dropdown-item ai-icon">
                                            <svg style="color: rgb(221, 47, 110);" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-house" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                                                    fill="#dd2f6e"></path>
                                                <path fill-rule="evenodd"
                                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"
                                                    fill="#dd2f6e"></path>
                                            </svg>
                                            <span class="ml-2">Mon espace </span>
                                        </a>
                                        <a href="{!! url('/profil') !!}" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg"
                                                class="text-primary" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span class="ml-2">Profil </span>
                                        </a>


                                        <a class="dropdown-item ai-icon" href="#"
                                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">

                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                                                class="text-danger" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span class="ml-2">Déconnexion </span>
                                        </a>
                                        <form id="logout-form" action="#" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>


            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="deznav">
                <div class="deznav-scroll">
                    <ul class="metismenu" id="menu">
                      
                     
                            <li>
                                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="bi bi-reddit"></i>
                                    <span class="nav-text">NFC</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a
                                            href="{{ route('NFC.home') }}">Home</a>
                                    </li>
                                    <li><a  href="{{ route('NFC.home') }}"> </a>
                                           
                                    </li>
                                  
                                   

                                </ul>
                            </li>
                      
                       
                

                     

                    
                    


                    </ul>




                </div>
            </div>
            <!--**********************************
            Sidebar end
        ***********************************-->



            <!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">
                <!-- row -->
                @yield('content')
            </div>


        </div>

    </div>

</body>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
<script>
    function showSuccessToast(message, title) {
        toastr.success(message, title, {
            positionClass: "toast-top-right",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1,
        });
    }
</script>
<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>

<script src="{{ mix('js/app.js') }}"></script>

<script src="{{ asset('vendor/toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('js/plugins-init/toastr-init.js') }}"></script>
@yield('script')

</html>
