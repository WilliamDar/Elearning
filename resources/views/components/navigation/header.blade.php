<div class="header_container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo_container">
                        <a href="#">
                            <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                <div class="logo_img"><img src="images/logo.png" alt=""></div>
                                <div class="logo_text">learn</div>
                            </div>
                        </a>
                    </div>
                    <nav class="main_nav_contaner ml-auto">
                        <ul class="main_nav">
                            <li class="active"><a href="{{route('dashboard')}}">home</a></li>
                            <li><a href="{{route('courses')}}">courses</a></li>
                            <li><a href="{{route('news')}}">news</a></li>
                            <li><a href="{{route('contact')}}">contact</a></li>
                        </ul>
                        <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                        <!-- Hamburger -->

                        <div class="hamburger menu_mm">
                            <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="header_search_container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                    <form action="#" class="header_search_form">
                        <input type="search" class="search_input" placeholder="Search" required="required">
                        <button
                            class="header_search_button d-flex flex-column align-items-center justify-content-center">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>