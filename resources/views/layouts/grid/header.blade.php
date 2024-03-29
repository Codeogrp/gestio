<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-light navbar-end bg-white">
      <div class="container">
        <nav class="js-mega-menu navbar-nav-wrap">
          <!-- Default Logo -->
          <a class="navbar-brand" href="index-2.html" aria-label="Space">
            <img class="navbar-brand-logo" src="{{ asset('gestio/landing/svg/logos/logo.svg') }}" alt="Image Description">
          </a>
          <!-- End Default Logo -->

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-default">
              <i class="bi-list"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-x"></i>
            </span>
          </button>
          <!-- End Toggler -->
      
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <!-- Landings -->
              <li class="hs-has-mega-menu nav-item"
                  data-hs-mega-menu-item-options='{
                    "desktop": {
                      "maxWidth": "30rem"
                    }
                  }'>
                <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" aria-current="page" href="#" role="button" aria-expanded="false">Accueil</a>

                <!-- Mega Menu -->
                <div class="hs-mega-menu hs-position-right-fix dropdown-menu" aria-labelledby="landingsMegaMenu" style="min-width: 30rem;">
                  <!-- Main Content -->
                  <div class="navbar-dropdown-menu-inner">
                    <div class="row">
                      <div class="col-sm mb-3 mb-sm-0">
                        <span class="dropdown-header">Utilisateur</span>
                        <a class="dropdown-item active" href="index-2.html">Corporate</a>
                        <a class="dropdown-item " href="landing-agency.html">Agency</a>
                        <a class="dropdown-item " href="landing-consulting.html">Consulting</a>
                        <a class="dropdown-item " href="landing-services.html">Services</a>
                        <a class="dropdown-item " href="landing-business.html">Business</a>
                      </div>

                      <div class="col-sm">
                        <span class="dropdown-header">Equipe</span>
                        <a class="dropdown-item " href="landing-services-growth.html">Growth</a>
                        <a class="dropdown-item " href="landing-services-saas.html">SaaS</a>
                        <a class="dropdown-item " href="landing-services-wallet.html">Wallet</a>
                        <a class="dropdown-item " href="landing-services-api.html">API</a>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Main Content -->
                </div>
                <!-- End Mega Menu -->
              </li>
              <!-- End Landings -->

              <!-- Pages -->
              <li class="hs-has-mega-menu nav-item">
                <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">A propos</a>

                <!-- Mega Menu -->
                <div class="hs-mega-menu hs-position-right dropdown-menu w-100" aria-labelledby="pagesMegaMenu" style="min-width: 42rem;">
                  <!-- Main Content -->
                  <div class="navbar-dropdown-menu-inner">
                    <div class="row">
                      <div class="col-sm-6 col-md-3">
                        <span class="dropdown-header">Company</span>
                        <a class="dropdown-item " href="page-about.html">About</a>
                        <a class="dropdown-item " href="page-services.html">Services</a>
                        <a class="dropdown-item " href="page-customer-stories.html">Customer Stories</a>
                        <a class="dropdown-item " href="page-customer-story.html">Customer Story</a>
                        <a class="dropdown-item " href="page-help-center.html">Help Center</a>
                        <a class="dropdown-item " href="page-help-center-categories.html">Help Center: Categories</a>
                        <a class="dropdown-item " href="page-help-center-article.html">Help Center: Article</a>
                      </div>

                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0">
                        <span class="dropdown-header invisible">Company</span>
                        <a class="dropdown-item " href="page-careers.html">Careers</a>
                        <a class="dropdown-item " href="page-careers-overview.html">Careers: Overview</a>
                        <a class="dropdown-item " href="page-hire-us.html">Hire Us</a>
                        <a class="dropdown-item " href="page-contacts.html">Contacts</a>
                        <a class="dropdown-item " href="page-login.html">Log In</a>
                        <a class="dropdown-item " href="page-signup.html">Sign Up</a>
                        <a class="dropdown-item " href="page-reset-password.html">Forgot Password</a>
                      </div>

                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0">
                        <span class="dropdown-header">Portfolio</span>
                        <a class="dropdown-item " href="portfolio-modern.html">Modern</a>
                        <a class="dropdown-item " href="portfolio-classic.html">Classic</a>
                        <a class="dropdown-item " href="portfolio-case-study.html">Case Study</a>
                      </div>

                      <div class="col-sm-6 col-md-3">
                        <span class="dropdown-header">Specialty pages</span>
                        <a class="dropdown-item " href="page-pricing.html">Pricing</a>
                        <a class="dropdown-item " href="page-coming-soon.html">Coming Soon</a>
                        <a class="dropdown-item " href="page-coming-soon-simple.html">Coming Soon: Simple</a>
                        <a class="dropdown-item " href="page-error-404.html">Error 404</a>
                        <a class="dropdown-item " href="page-terms.html">Terms &amp; Conditions</a>
                        <a class="dropdown-item " href="page-privacy.html">Privacy &amp; Policy</a>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Main Content -->
                </div>
                <!-- End Mega Menu -->
              </li>
              <!-- End Pages -->

              <!-- Blog -->
              <li class="hs-has-sub-menu nav-item">
                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">Blog</a>

                <!-- Mega Menu -->
                <div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 12rem;">
                  <a class="dropdown-item " href="blog-classic.html">Classic</a>
                  <a class="dropdown-item " href="blog-article.html">Article</a>
                  <a class="dropdown-item " href="blog-author-profile.html">Author Profile</a>
                </div>
                <!-- End Mega Menu -->
              </li>
              <!-- End Blog -->

              <!-- Docs -->
              <li class="hs-has-mega-menu nav-item"
                  data-hs-mega-menu-item-options='{
                    "desktop": {
                      "maxWidth": "20rem"
                    }
                  }'>
                <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">Guide du Débutant</a>

                <!-- Mega Menu -->
                <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 20rem;">
                  <!-- Link -->
                  <a class="navbar-dropdown-menu-media-link" href="documentation/index.html">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <span class="navbar-dropdown-menu-media-title">Documentation <span class="badge bg-primary rounded-pill ms-1">v2.1</span></span>
                        <p class="navbar-dropdown-menu-media-desc">Cette documentation vous présente les différents modes d'utilisation de GESTIO</p>
                      </div>
                    </div>
                  </a>
                  <!-- End Link -->

                  <div class="dropdown-divider"></div>

                  <!-- Link -->
                  <a class="navbar-dropdown-menu-media-link" href="snippets/index.html">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M21 2H13C12.4 2 12 2.4 12 3V13C12 13.6 12.4 14 13 14H21C21.6 14 22 13.6 22 13V3C22 2.4 21.6 2 21 2ZM15.7 8L14 10.1V5.80005L15.7 8ZM15.1 4H18.9L17 6.40002L15.1 4ZM17 9.59998L18.9 12H15.1L17 9.59998ZM18.3 8L20 5.90002V10.2L18.3 8ZM9 2H3C2.4 2 2 2.4 2 3V21C2 21.6 2.4 22 3 22H9C9.6 22 10 21.6 10 21V3C10 2.4 9.6 2 9 2ZM4.89999 12L4 14.8V9.09998L4.89999 12ZM4.39999 4H7.60001L6 8.80005L4.39999 4ZM6 15.2L7.60001 20H4.39999L6 15.2ZM7.10001 12L8 9.19995V14.9L7.10001 12Z" fill="#035A4B"/>
                          <path d="M21 18H13C12.4 18 12 17.6 12 17C12 16.4 12.4 16 13 16H21C21.6 16 22 16.4 22 17C22 17.6 21.6 18 21 18ZM19 21C19 20.4 18.6 20 18 20H13C12.4 20 12 20.4 12 21C12 21.6 12.4 22 13 22H18C18.6 22 19 21.6 19 21Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <span class="navbar-dropdown-menu-media-title">Tutoriel Vidéo</span>
                        <p class="navbar-dropdown-menu-media-desc">Move quickly with copy-to-clipboard feature</p>
                      </div>
                    </div>
                  </a>
                  <!-- End Link -->
                </div>
                <!-- End Mega Menu -->
              </li>
              <!-- End Docs -->

              <li class="nav-divider"></li>

              <!-- Log in -->
              <li class="nav-item">
                <a class="js-animation-link btn btn-ghost-secondary btn-no-focus me-2 me-lg-0" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                   data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>Se connecter</a>

                <a class="js-animation-link d-lg-none btn btn-primary" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                   data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>
                  <i class="bi-person-circle me-1"></i>  S'inscrire
                </a>
              </li>
              <!-- End Log in -->

              <!-- Sign up -->
              <li class="nav-item">
                <a class="js-animation-link d-none d-lg-inline-block btn btn-primary" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                   data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>
                  <i class="bi-person-circle me-1"></i> S'inscrire
                </a>
              </li>
              <!-- End Sign up -->
            </ul>
          </div>
          <!-- End Collapse -->
        </nav>
      </div>
    </header>

    <!-- ========== END HEADER ========== -->