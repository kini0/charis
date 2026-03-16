<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>Tableau de bord</span>
                    </a>
                    
                </li> <!-- end Dashboard Menu -->
                
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-stack-line"></i> <span data-key="t-authentication">Organisations</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing.html" class="nav-link" data-key="t-one-page"> BINGERVILLE RÉSIDENTIEL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing">MINE AKOUEDO</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing.html" class="nav-link" data-key="t-job">ROUTE RN1</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Utilisateurs</span>
                    </a>
                    
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">IA</span>
                    </a>
                   
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Support</span>
                    </a>
                    
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
