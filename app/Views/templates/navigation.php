<div class="app-main">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Dashboard</li>
                    <li>
                        <a href="<?php echo base_url().'/dashboard/dash_dyn' ?>" class="mm-active">                                                                                              <!-- href einrichten mit baseurl (PHP) -->
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li><br/>
                    <li class="app-sidebar__heading"><i class="fas fa-file-pdf"></i> Dokumente</li>
                    <li>
                        <ul>
                            <li>
                                <a href="/downloads/erwartungshorizont.pdf" target="_blank">                                                                                                      <!-- href einrichten mit baseurl (PHP) -->
                                    <i class="metismenu-icon"></i>
                                    Erwartungshorizont
                                </a>
                            </li>
                            <li>
                                <a href="/downloads/bewertungsbogen.pdf" target="_blank">                                                                                                      <!-- href einrichten mit baseurl (PHP) -->
                                    <i class="metismenu-icon">
                                    </i>Bewertungsbogen
                                </a>
                            </li>

                </ul>
            </div>
        </div>
    </div>