    <header class="navbar navbar-expand-lg navbar-dark position-fixed top-0 start-0 w-100 ">
        <div class="container border-b-blue py-3 transition-all position-relative">

            <button class="menuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <a class="fw-semibold brand-text logoContainer" href="/">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" class="logo d-none d-sm-block" alt="Kairamya Aviation" />
                <img src="<?php echo get_template_directory_uri() ?>/images/white_logo.svg" class="logo d-block d-sm-none" alt="Kairamya Aviation" />
            </a>

            <nav class="d-lg-flex gx-5 align-items-start primaryNav" id="primaryNav">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-4">
                    <button class="menuClose">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg></span>
                    </button>
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about-us">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Flights</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                </ul>

                <button class="searchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M15.2282 15.2282L22.3273 22.3273" stroke="#01457D" stroke-width="3"
                            stroke-linecap="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.62275 17.2455C13.8327 17.2455 17.2455 13.8327 17.2455 9.62275C17.2455 5.41282 13.8327 2 9.62275 2C5.41282 2 2 5.41282 2 9.62275C2 13.8327 5.41282 17.2455 9.62275 17.2455Z"
                            stroke="#01457D" stroke-width="3" />
                    </svg>
                </button>
            </nav>

            <div class="position-absolute searchBar row">
                <input type="search" class="col" placeholder="Search..." />
                <button class="searchBtn col-auto d-grid align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M15.2282 15.2282L22.3273 22.3273" stroke="#01457D" stroke-width="3"
                            stroke-linecap="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.62275 17.2455C13.8327 17.2455 17.2455 13.8327 17.2455 9.62275C17.2455 5.41282 13.8327 2 9.62275 2C5.41282 2 2 5.41282 2 9.62275C2 13.8327 5.41282 17.2455 9.62275 17.2455Z"
                            stroke="#01457D" stroke-width="3" />
                    </svg>
                </button>

                <a href="" class="closeBtn"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg></span></a>
            </div>
        </div>
    </header>