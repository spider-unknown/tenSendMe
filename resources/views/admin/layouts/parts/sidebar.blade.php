<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                         src="{{asset('admin/images/shards-dashboards-logo.svg')}}" alt="Shards Dashboard">
                    <span class="d-none d-md-inline ml-1">TenSendMe</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>
    {{--    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">--}}
    {{--        <div class="input-group input-group-seamless ml-3">--}}
    {{--            <div class="input-group-prepend">--}}
    {{--                <div class="input-group-text">--}}
    {{--                    <i class="fas fa-search"></i>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>--}}
    {{--    </form>--}}
    <div class="nav-wrapper">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{Helper::urlActiveHelper('home')}}"
                   href="{{route('home')}}">
                    <i class="material-icons">edit</i>
                    <span>Главное</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{Helper::urlActiveHelper('category')}}"
                   href="{{route('category.index')}}">
                    <i class="material-icons">vertical_split</i>
                    <span>Категории</span>
                </a>
            </li>
        </ul>
    </div>
</aside>