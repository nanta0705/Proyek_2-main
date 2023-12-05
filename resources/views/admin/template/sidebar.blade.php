<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="{{url('/assets')}}/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{url('/assets')}}/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{url('/assets')}}/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="/assets/images/gaweayu1.png" class="header-brand-img light-logo1" alt="logo">
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



                <li class="sub-category">
                    <h3>Akun</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Akun</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Akun</a></li>
                        <li><a href="{{url('/admin/data_client')}}" class="slide-item"> Akun Client</a></li>
                        <li><a href="{{url('/admin/data_owner')}}" class="slide-item"> Akun Owner</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{url('/admin/content')}}"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">Content Management</span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{url('/owner/katalog_makeup')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Katalog Makeup</span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{url('/owner/type_makeup')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Type Makeup</span></a>
                </li>



            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
