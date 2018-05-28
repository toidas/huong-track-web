<div class="content-header white box-shadow-0" id="content-header">
    <div class="navbar navbar-expand-lg">
        <div class="navbar-text nav-title flex" id="pageTitle">
            <a href="{{$url}}">{{$title}}</a>
        </div>
        <ul class="nav flex-row order-lg-2">
            <li class="dropdown d-flex align-items-center">
                <a href="#" data-toggle="dropdown" class="d-flex align-items-center">
                                <span class="avatar w-32">
                                    <img src="{{asset('img/a5.jpg')}}" alt="...">
                                </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right w pt-0 mt-2 animate fadeIn">

                    <a class="dropdown-item" href="{{route('getout')}}">Sign out</a>
                </div>
            </li>
        </ul>
    </div>
</div>
