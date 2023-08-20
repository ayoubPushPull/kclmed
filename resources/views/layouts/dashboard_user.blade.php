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
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Dashboard - Hospital Manegment | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('dashboard/assets/css/theme.css?ver=3.1.2') }}">
    @livewireStyles
</head>

<body class="nk-body ui-rounder npc-default has-sidebar">
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
                                    {{--<li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPharmacy">
                                            <span class="nk-menu-icon"><em class="icon ni ni-capsule"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item active">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch"
                                            data-target="navDashboards">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        </a>
                                    </li>--}}
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
                                        <a href="{{ route('cabinet-settingcabinets', Auth::user()->slug) }}"
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
                                            <span class="lead-text">{{ Auth::user()->name }}</span>
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
                   
                    <div class="nk-menu-content menu-active" data-content="navApps">
                        <h5 class="title">Apps</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="{{route('cabinet-dashboard')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li>


                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" >
                                    <span class="nk-menu-icon"><em class="icon ni ni-users "></em></span>
                                    <span class="nk-menu-text">Personal</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-personals') }}"><span
                                                class="nk-menu-text">Personal List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-personals-add') }}"><span
                                                class="nk-menu-text">Add Personal</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>




                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-alt-fill"></em></span>
                                    <span class="nk-menu-text">Patients</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-patients') }}"><span
                                                class="nk-menu-text" >Patient List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-patients-add') }}"><span
                                                class="nk-menu-text" >Add Patient</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calender-date"></em></span>
                                    <span class="nk-menu-text">Appointment</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-AppointmentCabinets') }}"><span
                                                class="nk-menu-text" >Appointment List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-AppointmentCabinets-add') }}"><span
                                                class="nk-menu-text">Add Appointment</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('admin-doctoroffices-add') }}"><span
                                                class="nk-menu-text">Appointment Calendar</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-notes-alt"></em></span>
                                    <span class="nk-menu-text">Arrangement</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('cabinet-arrangements') }}"><span
                                                class="nk-menu-text">Arrangement List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('cabinet-arrangements-add') }}"><span
                                                class="nk-menu-text">Add Arrangement</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calendar-check"></em></span>
                                    <span class="nk-menu-text">Session</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"  href="{{ route('cabinet-seances') }}"><span
                                                class="nk-menu-text">Session List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-seances-add') }}"> <span
                                                class="nk-menu-text">Add Session</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-money"></em></span>
                                    <span class="nk-menu-text">Payments</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"  href="{{ route('cabinet-payments') }}"><span
                                                class="nk-menu-text">Payment List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-payments-add') }}"><span
                                                class="nk-menu-text">Add Payment</span></a>
                                    </li>
                                    
                                   
                                </ul><!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-reload"></em></span>
                                    <span class="nk-menu-text">Expenses</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"  href="{{ route('cabinet-expenses') }}"><span
                                                class="nk-menu-text">Expenses List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-expenses-add') }}"><span
                                                class="nk-menu-text">Add Expenses</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"  href="{{ route('cabinet-expensecategories') }}"><span
                                                class="nk-menu-text"> List Expense Categories</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-expensecategories-add') }}"><span
                                                class="nk-menu-text">Add Expense Categories</span></a>
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
                                        <a  class="nk-menu-link"  href="{{ route('cabinet-MedicationCabinets') }}"><span
                                                class="nk-menu-text">Medications List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-MedicationCabinets-add') }}"><span
                                                class="nk-menu-text">Add Medication</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('cabinet-medicationcategories') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">List Category</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('cabinet-medicationcategories-add') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Category</span></a>
                                    </li>

                                </ul><!-- .nk-menu-sub -->
                            </li>
              {{--        <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-folder"></em></span>
                                    <span class="nk-menu-text">Documents</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"  href="{{ route('cabinet-documents') }}"><span
                                                class="nk-menu-text">Document List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-documents-add') }}"><span
                                                class="nk-menu-text">Add Document</span></a>
                                    </li>
                                   

                                </ul><!-- .nk-menu-sub -->
                            </li>
                    --}}
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-clipboad-check"></em></span>
                                    <span class="nk-menu-text">Grades</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"  href="{{ route('cabinet-grades') }}"><span
                                                class="nk-menu-text">Grades List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link" href="{{ route('cabinet-grades-add') }}"><span
                                                class="nk-menu-text">Add Grade</span></a>
                                    </li>
                                   

                                </ul><!-- .nk-menu-sub -->
                            </li>
                            {{--<li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-clipboad-check"></em></span>
                                    <span class="nk-menu-text">Medical Background</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"><span
                                                class="nk-menu-text" ><li class="nk-menu-item">
                                        <a class="nk-menu-link" href="{{ route('admin-medicalbackgrounds') }}"><span
                                                class="nk-menu-text">Medical Background</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a  class="nk-menu-link"  href="{{ route('admin-medicalbackgrounds-add') }}"><span
                                                class="nk-menu-text">Add Medical Background</span></a>
                                    </li></span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a class="nk-menu-link"><span
                                                class="nk-menu-text">Medical Background Category</span></a>
                                    </li>

                                </ul><!-- .nk-menu-sub -->
                            </li> --}}

                           {{--
                               <!-- <li class="nk-menu-item">
                                <a href="html/apps-messages.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                                    <span class="nk-menu-text">Users</span>
                                </a>
                            </li>-->

                            <li class="nk-menu-item">
                                <a href="html/apps-file-manager.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-folder-fill"></em></span>
                                    <span class="nk-menu-text">Doctors</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-chats.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                                    <span class="nk-menu-text">Doctors Office</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-calendar.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                                    <span class="nk-menu-text">Type Cabinet</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-kanban.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                                    <span class="nk-menu-text">Plans</span><span
                                        class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                              <li class="nk-menu-item">
                                <a href="html/apps-calendar.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                                    <span class="nk-menu-text">Medication</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-kanban.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                                    <span class="nk-menu-text">medical background</span><span
                                        class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu -->   --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed nk-header-fluid is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                    data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png"
                                        srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png"
                                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none"
                                    placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em
                                                class="icon ni ni-globe"></em></a>
                                    </li>
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em
                                                    class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                                <a href="#">Setting</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar">
                                                                <span>IH</span>
                                                                <span class="status dot dot-lg dot-gray"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div>
                                                                    <span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got
                                                                        my last messages.</div>
                                                                    <div class="status delivered">
                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item is-unread">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span>
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                                    <span class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you
                                                                        help me with this problem ?</div>
                                                                    <div class="status unread">
                                                                        <em class="icon ni ni-bullet-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar">
                                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from
                                                                        Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/c-sm.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new
                                                                        computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar">
                                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div>
                                                                    <span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new
                                                                        computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                </ul><!-- .chat-list -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em
                                                    class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="{{asset('dashboard/assets/images/flags/english-sq.png')}}"
                                                    alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/english.png" alt=""
                                                            class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/spanish.png" alt=""
                                                            class="language-flag">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/french.png" alt=""
                                                            class="language-flag">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/turkey.png" alt=""
                                                            class="language-flag">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <img src="{{ asset('dashboard/assets/images/users/') }}/{{ Auth::user()->profile_photo_path }}" .>
                                                   
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/hospital/user-profile.html"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="html/hospital/settings.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="html/hospital/settings-account-log.html"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em
                                                                class="icon ni ni-moon"></em><span>Dark
                                                                Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <form action="{{ route('logout') }}" method="POST"
                                                            id="logoutform">
                                                            @csrf

                                                        </form>
                                                        <a class="dropdown-item ai-icon"
                                                            href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                                            <em class="icon ni ni-signout"></em>
                                                            Sign out
                                                        </a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
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
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="{{ asset('dashboard/assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('dashboard/assets/js/scripts.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('dashboard/assets/js/charts/gd-hospital.js?ver=3.1.2') }}"></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
