<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('view.admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            {{--                <i class="fas fa-fw fa-folder"></i>--}}
            <span>Add new</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{route('view.admin.event.addnew')}}">Event</a>
            <a class="dropdown-item" href="{{route('view.admin.menu.add')}}">Menu</a>
            <a class="dropdown-item" href="{{route('view.admin.submenu.addnew')}}">Sub-Menu</a>
            <a class="dropdown-item" href="#">Team member</a>
            <a class="dropdown-item" href="#">Background</a>

        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            {{--                <i class="fas fa-fw fa-table"></i>--}}
            <span>Team member</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            {{--                <i class="fas fa-fw fa-table"></i>--}}
            <span>Background</span></a>
    </li>
</ul>
