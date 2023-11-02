<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="{{url('/assets')}}/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{url('/assets')}}/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{url('/assets')}}/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="{{url('/assets')}}/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>


                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-clipboard"></i><span class="side-menu__label">Tables</span><span class="badge bg-secondary side-badge">2</span><i class="angle fa fa-angle-right hor-rightangle"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Tables</a></li>
                        <li><a href="tables.html" class="slide-item">Default table</a></li>
                        <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Akun</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Akun</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Akun</a></li>
                        <li><a href="{{url('/admin/daftar_akun_client')}}" class="slide-item"> Akun Client</a></li>
                        <li><a href="profile.html" class="slide-item"> Akun Owner</a></li>

                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Custom & Error Pages</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Custom Pages</a></li>
                        <li><a href="login.html" class="slide-item"> Login</a></li>
                        <li><a href="register.html" class="slide-item"> Register</a></li>
                        <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                        <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Error Pages</span><i class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="400.html">400</a></li>
                                <li><a class="sub-slide-item" href="401.html">401</a></li>
                                <li><a class="sub-slide-item" href="403.html">403</a></li>
                                <li><a class="sub-slide-item" href="404.html">404</a></li>
                                <li><a class="sub-slide-item" href="500.html">500</a></li>
                                <li><a class="sub-slide-item" href="503.html">503</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="side-menu__icon fe fe-sliders"></i>
                        <span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Submenus</a></li>
                        <li><a href="javascript:void(0);" class="slide-item">Level-1</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.1</a></li>
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.2</a></li>
                                <li class="sub-slide2">
                                    <a class="sub-side-menu__item2" href="javascript:void(0);" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Level-2.3</span><i class="sub-angle2 fa fa-angle-right"></i></a>
                                    <ul class="sub-slide-menu2">
                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.1</a></li>
                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.2</a></li>
                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.3</a></li>
                                    </ul>
                                </li>
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.4</a></li>
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>