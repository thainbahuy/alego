<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.layout_common.head')
    <title>Alego Admin - Dashboard</title>
</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Alego Story</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
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

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>
            @if(session()->has('message-success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> {{session()->get('message-success')}} .
                </div>
            @elseif(session()->has('message-fail'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> {{session()->get('message-fail')}} .
                </div>
            @endif
            <!-- DataTables menu List -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    <b>Menu List</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTableMenu" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class='text-center'>Name</th>
                                <th class='text-center'>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listMenu as $item)
                                <tr id="rowMenu{{$item->menu_id}}">
                                    <td class='text-center'>
                                        <a href="{{route('view.admin.menu.edit',['id'=>$item->menu_id])}}">{{$item->name}}</a>
                                    </td>
                                    <td class='text-center'>
                                        <button onclick="showModalDeleteMenu('{{$item->menu_id}}')"  class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- DataTables sub-menu List -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    <b>Sub-Menu List</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTableSubMenu" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class='text-center'>Name</th>
                                <th class='text-center'>Menu</th>
                                <th class='text-center'>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listSubMenu as $item)
                                <tr id="rowSub{{$item->sub_menu_id}}">
                                    <td class='text-center'>
                                        <a href="{{route('view.admin.submenu.edit',$item->sub_menu_id)}}">
                                            {{$item->name}}
                                        </a>
                                    </td>
                                    <td class='text-center'>{{$item->menu}}</td>
                                    <td class='text-center'>
                                        <button onclick="showModalDeleteSubMenu({{$item->sub_menu_id}})" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- DataTables Event List -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    <b> Event List</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="test" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class='text-center'>Name</th>
                                <th class='text-center'>Cover</th>
                                <th class='text-center'>Author</th>
                                <th class='text-center'>Sub-Menu</th>
                                <th class='text-center'>Action</th>
                            </tr>
                            </thead>
{{--                            <tbody>--}}
{{--                            @foreach($listEvent as $item)--}}
{{--                                <tr id="rowEvent{{$item->id}}">--}}
{{--                                    <td style="width: 25%;" class='text-center'>--}}
{{--                                        <a href="{{route('view.admin.event.edit',['id'=>$item->id])}}">{{$item->name}}</a>--}}
{{--                                    </td>--}}
{{--                                    <td style="width: 25%;" class='text-center'>--}}
{{--                                        <img class="img-thumbnail"--}}
{{--                                             src="{{asset($item->image_cover)}}" alt="img">--}}
{{--                                    </td>--}}
{{--                                    <td  style="width: 25%;" class='text-center'>{{$item->author}}</td>--}}
{{--                                    <td style="width: 25%;" class='text-center'>{{$item->subMenu}}</td>--}}
{{--                                    <td style="width: 25%;" class='text-center'>--}}
{{--                                        <button onclick="showModelDeleteEvent({{$item->id}})"--}}
{{--                                                class="btn btn-danger">Delete--}}
{{--                                        </button>--}}
{{--                                    </td>--}}

{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

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
{{--delete question--}}
<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete this ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" id="delete_btn" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModalSubMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete this ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" id="delete_submenu_btn" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModalMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete this ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" id="delete_menu_btn" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>

@include('admin.layout_common.footerScript')
<script src="{{asset('admin/js/event.js')}}"></script>
<script src="{{asset('')}}admin/js/SubMenu.js"></script>
<script src="{{asset('')}}admin/js/Menu.js"></script>
<script src="{{asset('')}}admin/js/dashboard.js"></script>
</body>

</html>
