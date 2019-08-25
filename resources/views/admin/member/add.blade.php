<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.layout_common.head')
    <title>Member-Add New</title>
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
                <a href="#">Menu</a>
            </li>
            <li class="breadcrumb-item active">Add new</li>
        </ol>
        @if(session()->has('message-success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Add New Member .
            </div>
        @elseif(session()->has('message-fail'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong> Add New Member .
            </div>
        @endif
        <form id="member_form" action="{{route('admin.member.add')}}" method="post">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-label-group">
                                        <span><b>Position</b></span>
                                        <input type="number" min="1" max="1000" id="position" name="position" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            @error('position')
                                <label for="position" generated="true" class="error label-error" style = "color : red">{{$message}}</label>
                            @enderror
                            <label for="position" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Name</b></span>
                                <input type="text" value="{{old('name')}}" id="name" name="name" class="form-control" maxlength="100" >
                            </div>
                            @error('name')
                                <label for="name" generated="true" class="error label-error" style = "color : red">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Role</b></span>
                                <input type="text" value="{{old('role')}}" id="role" name="role" class="form-control" maxlength="100" >
                            </div>
                            @error('role')
                                <label for="role" generated="true" class="error label-error" style = "color : red">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div id="thumbnail">
                            <div class="pDiv">
                                <img class="imgKLIK5" src="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Avatar</b></span>
                                <br>
                                <input readonly  maxlength="500" type="hidden" id="avatar" name="avatar" class="form-control">
                                <button type="button" id="ckfinder_btn" class="btn btn-primary">Choose Image</button>
                            </div>
                            @error('avatar')
                                <label for="avatar" generated="true" class="error label-error" style = "color : red">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit"  class="btn btn-primary btn-block" >Add New</button>
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
<script src = "{{asset('ckfinder/ckfinder.js')}}"></script>
<style>
    img {
        width:30%;
        float: left;
    }
    .pDiv {
        float:left;
        width:100%
    }
</style>
<script>
    var button1 = document.getElementById( 'ckfinder_btn' );

    button1.onclick = function() {
        selectFileWithCKFinder( 'avatar' );
    };

    function selectFileWithCKFinder( elementId ) {
        CKFinder.popup( {
            chooseFiles: true,
            width: 1000,
            height: 700,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var output = document.getElementById( elementId );
                    output.value = file.getUrl();
                    //preview
                    $(".imgKLIK5").attr("src", output.value);
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var output = document.getElementById( elementId );
                    output.value = evt.data.resizedUrl;
                } );
            }
        } );
    }

</script>

</body>

</html>
