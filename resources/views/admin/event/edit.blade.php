<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.layout_common.head')
    <title>Event-Edit</title>
    <style type="text/css">
        #loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            background: rgba(0,0,0,0.75) url('{{asset('admin/loading.gif')}}') no-repeat center center;
            z-index: 10000;
        }
    </style>
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

<div id="loader"></div>
<div id="wrapper">

    @include('admin.layout_common.navbar')

    <div id="content-wrapper">


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Event</a>
            </li>
            <li class="breadcrumb-item active">Add new</li>
        </ol>
        @if(session()->has('message-success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Update Event .
            </div>
        @elseif(session()->has('message-fail'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong> Update Event .
            </div>
        @endif
        <form id="add_eventfilm_form" action="{{route('admin.event.edit')}}" method="post">
            {{ csrf_field() }}
            <input name="id" style="display: none" type="text" value="{{$event->id}}">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="checkbox" @php if ($event->show_home == 1) echo 'checked'; @endphp id="showhome" value="1" name="showhome" > Show in Home Page
                            </div>
                            <label for="showhome" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Event Name</b></span>
                                <input value="{{$event->name}}" type="text" id="name" name="name" class="form-control" maxlength="100" >
                            </div>
                            <label for="name" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Sub-menu :</b></span>
                                @foreach($listSubMenu as $item)
                                    <input @php if ($item->sub_menu_id == $event->sub_menu_id) echo 'checked'; @endphp type="radio" id="sub_menu" value="{{$item->sub_menu_id}}" name="sub_menu" >{{$item->name}}
                                @endforeach
                            </div>
                            <label for="sub_menu" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Producer</b></span>
                                <input value="{{$event->producer}}" maxlength="50" type="text" id="producer" name="producer" class="form-control" >
                            </div>
                            <label for="producer" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Director</b></span>
                                <input value="{{$event->director_photographer}}" maxlength="50" type="text" id="director" name="director" class="form-control"  >
                            </div>
                            <label for="director" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Editor</b></span>
                                <input value="{{$event->editor_designer}}" maxlength="50" type="text" id="editor" name="editor" class="form-control" >
                            </div>
                            <label for="editor" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Description</b></span>
                                <textarea rows="10" name="description" id="description" class="form-control">{{$event->description}}</textarea>
                            </div>
                            <label for="description" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Author</b></span>
                                <input value="{{$event->author}}" maxlength="20" type="text" id="author" name="author" class="form-control"  >
                            </div>
                            <label for="author" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div id="thumbnail">
                            <div class="pDiv">
                                <img class="imgKLIK5" src="{{Helpers::convertJsonToArray($event->image_cover)['link']}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Image cover name</b></span>
                                <br>
                                <input readonly type="hidden" value="{{Helpers::convertJsonToArray($event->image_cover)['link']}}" id="image_cover" name="image_cover[link]" class="form-control">
                                <input readonly type="hidden" value="{{Helpers::convertJsonToArray($event->image_cover)['keyhash']}}" id="image_cover_key" name="image_cover[keyhash]" class="form-control">
                                <input type="file" id="image_choose_btn" class="btn btn-primary">
                            </div>
                            <label for="image_cover" generated="true" class="error label-error" style = "color : red"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <span><b>Video Link</b></span>
                                <input value="{{$event->video_link}}" maxlength="100" type="text" id="video_link" name="video_link" class="form-control">
                            </div>
                            <label for="video_link" generated="true" class="error label-error" style = "color : red"></label>
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
<script src="{{asset('admin/js/event.js')}}"></script>
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

</body>

</html>
