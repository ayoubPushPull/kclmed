<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/assets/images/logo/logo2.png') }}">
    <!-- Page Title  -->
    <title>Dashboard - Hospital Manegment | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('dashboard/assets/css/theme.css?ver=3.1.2') }}">
    <link href="{{ asset('dashboard/assets/css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">

    @livewireStyles
    @stack('styles')

</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-sidebar" data-content="sidebarMenu">
            <div class="nk-sidebar-bar">
                <div class="nk-apps-brand">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img" src="./images/logo-small.png"
                            srcset="./images/logo-small2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="{{ asset('dashboard/assets/images/logo-dark-small.png') }}"
                            srcset="./images/logo-dark-small2x.png 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body">
                        <div class="nk-sidebar-content" data-simplebar>
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu apps-menu">
                                    {{-- <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPharmacy">
                                            <span class="nk-menu-icon"><em class="icon ni ni-capsule"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item active">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                        </a>
                                    </li> --}}
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch"
                                            data-target="navDashboards">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                            <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                        </a>
                                    </li>


                                    {{--  <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPages">
                                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navMisc">
                                            <span class="nk-menu-icon"><em class="icon ni ni-server"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navError">
                                            <span class="nk-menu-icon"><em class="icon ni ni-alert-c"></em></span>
                                        </a>
                                    </li> --}}
                                    <li class="nk-menu-hr"></li>

                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin-settings', Auth::user()->slug) }}"
                                            class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="nk-sidebar-footer">


                            </div>
                        </div>
                        <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                            <a href="#" data-bs-toggle="dropdown" data-offset="50,-50">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md ms-4">
                                <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Abu Bin Ishtiyak</span>
                                            <span class="sub-text text-soft">info@softnio.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="html/user-profile.html"><em
                                                    class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="html/user-profile.html"><em
                                                    class="icon ni ni-setting-alt"></em><span>Account
                                                    Setting</span></a></li>
                                        <li><a href="html/user-profile.html"><em
                                                    class="icon ni ni-activity-alt"></em><span>Login
                                                    Activity</span></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST" id="logoutform">
                                                @csrf
                                            </form>
                                            <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                                <em class="icon ni ni-signout"></em><span>
                                                    Sign out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content" data-content="navDashboards">
                        <h5 class="title">Dashboards</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="{{ route('admin-Requests') }}">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-text-fill"></em></span>
                                    <span class="nk-menu-text">Requests Management</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="{{ route('admin-Appointments') }}">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                                    <span class="nk-menu-text">Appointments Management</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="{{ route('admin-Contacts') }}">
                                    <span class="nk-menu-icon"><em class="icon ni ni-call-fill"></em></span>
                                    <span class="nk-menu-text">Contacts Management</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a class="nk-menu-link nk-menu-toggle" href="{{ route('admin-Blogs') }}">
                                    <span class="nk-menu-icon"><em class="icon ni ni-puzzle-fill"></em></span>
                                    <span class="nk-menu-text">Blogs Management</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-Blogs') }}"><span
                                                class="nk-menu-text">Blogs List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-Blogs-add') }}"><span
                                                class="nk-menu-text">Add Blogs</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content menu-active" data-content="navApps">
                        <h5 class="title">Apps</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin-dashboard') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li>


                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users "></em></span>
                                    <span class="nk-menu-text">Users</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-users') }}"><span
                                                class="nk-menu-text">User List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-user-add') }}"><span
                                                class="nk-menu-text">Add Users</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-building-fill"></em></span>
                                    <span class="nk-menu-text">Doctors Office</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-doctoroffices') }}"><span
                                                class="nk-menu-text">Offices List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-doctoroffices-add') }}"><span
                                                class="nk-menu-text">Add Office</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-plus-medi-fill"></em></span>
                                    <span class="nk-menu-text">Cabinet Type</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-cabinettypes') }}"><span
                                                class="nk-menu-text">Type List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-cabinettypes-add') }}"><span
                                                class="nk-menu-text">Add Type</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-pen2"></em></span>
                                    <span class="nk-menu-text">Plans</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-plans') }}"><span
                                                class="nk-menu-text">Plans List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-plans-add') }}"> <span
                                                class="nk-menu-text">Add Plans</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-capsule"></em></span>
                                    <span class="nk-menu-text">Medications</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-medications') }}"><span
                                                class="nk-menu-text">Medications List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-medications-add') }}"><span
                                                class="nk-menu-text">Add Medications</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin-medicategories') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Medications Category List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin-medicategories-add') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Medications Category</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>


                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-clipboad-check"></em></span>
                                    <span class="nk-menu-text">Medical Background</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-medicalbackgrounds') }}"><span
                                                class="nk-menu-text">Medical Background</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link"
                                            href="{{ route('admin-medicalbackgrounds-add') }}"><span
                                                class="nk-menu-text">Add Medical Background</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin-medicalbackgroundcategory') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Medical Background
                                                Category</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin-medicalbackgroundcategory-add') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Add Medical Background
                                            </span></a>
                                    </li>

                                </ul><!-- .nk-menu-sub -->
                            </li>
                    </div>
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @livewire('header-component')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->


    <!-- JavaScript -->
    <script src="{{ asset('dashboard/assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('dashboard/assets/js/scripts.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('dashboard/assets/js/charts/gd-hospital.js?ver=3.1.2') }}"></script>

    @livewireScripts

    <script>
        window.livewire.on('add', () => {
            $('#addtype').modal('hide');
        });

        window.livewire.on('update', () => {
            $('#user-edit').modal('hide');
        });
        window.livewire.on('updatepassword', () => {
            $('#password-edit').modal('hide');
        });
    </script>
    @stack('scripts')
</body>

</html>
