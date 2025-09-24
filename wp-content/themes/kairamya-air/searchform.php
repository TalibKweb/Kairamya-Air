<form role="search" method="get"
    class="search-form position-absolute searchBar row " action="<?php echo esc_url(home_url('/')); ?>">

    <input type="search" class="search-field col " placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit"
        class="search-submit searchBtn col-auto d-grid align-items-center justify-content-center ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M15.2282 15.2282L22.3273 22.3273" stroke="#01457D" stroke-width="3"
                stroke-linecap="round" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.62275 17.2455C13.8327 17.2455 17.2455 13.8327 17.2455 9.62275C17.2455 5.41282 13.8327 2 9.62275 2C5.41282 2 2 5.41282 2 9.62275C2 13.8327 5.41282 17.2455 9.62275 17.2455Z"
                stroke="#01457D" stroke-width="3" />
        </svg>
    </button>
    <a href="" class="closeBtn">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg>
        </span>
    </a>

</form>

<!-- <div class="position-absolute searchBar row">
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
</div> -->
