<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.layout_common.head')
    <title>Sub Menu-Edit</title>
</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Alego Story</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">


        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    @include('admin.layout_common.navbar')

    <div id="content-wrapper">


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">SubMenu</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        @if(session()->has('message-success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Edit SubMenu .
            </div>
        @elseif(session()->has('message-fail'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong> Edit SubMenu .
            </div>
        @endif
        <form id="add_submenu_form" action="{{route('admin.submenu.edit')}}" method="post">
            {{ csrf_field() }}
            <input value="{{$subMenu->sub_menu_id}}" type="hidden" id="id" name="id" class="form-control" maxlength="100" >
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Name</b></span>
                                <input value="{{$subMenu->name}}" type="text" id="name" name="name" class="form-control" maxlength="100" >
                            </div>
                            <label for="name" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-label-group">
                                <span><b>Menu :</b></span>
                                @foreach($listMenu as $item)
                                    <input @php if ($item->menu_id == $subMenu->menu_id) echo 'checked' @endphp type="radio" id="menu_id" value="{{$item->menu_id}}" name="menu_id" >{{$item->name}}
                                @endforeach
                            </div>
                            <label for="menu_id" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>

                <button type="submit" id="btn_addNewFilm" class="btn btn-primary btn-block" >Update</button>
            </div>
            <!-- </form> -->


            <!-- /.container-fluid -->



    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('admin/layout_common/logout-modal')

@include('admin.layout_common.footerScript')

<script src="{{asset('admin/js/jquery.validate.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin/js/SubMenu.js')}}"></script>

</body>

</html>
