<!doctype html>
<html lang="en-US" class="no-js">
<head>
    @include('web.layout_common.head')
    <title>Contact</title>
    <style>
        .selectbox{
            background-color: transparent;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body
    class="page-template page-template-template-normal page-template-template-normal-php page page-id-84 wp-custom-logo light-navigation sticky-header sticky-footer wpb-js-composer js-comp-ver-4.11.1 vc_responsive">

<div class="fade">
    <div class="inner"></div>
</div>

<header id="header">
    @include('web.layout_common.header',['data'=>$menu])
</header>

<div id="preloader"></div>
<main id="main" class="bg-lines">
{{--    <section class="hero-min-fullscreen flex-center py-10"--}}
{{--             data-background="http://torola.fwp.fastwp.net/wp-content/uploads/sites/30/2018/03/211.jpg"--}}
{{--             data-overlay="black; .8">--}}
{{--        <div class="page-title-wrapper text-light">--}}
{{--            <h1 class="page-title ">Contact us</h1>--}}
{{--            --}}{{--            <p class="page-subtitle">Let&#039;s talk about your next project!</p>--}}
{{--        </div>--}}
{{--    </section>--}}
    <a href="#no-gutters" class="scroll-down"><span></span></a>
    <section class="pt-8 pr-7 pb-5 pl-7">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="columns col-sm-5"><h5>@lang('Message.contact-infor').</h5>
                    <p class="small serif my-5">@lang('Message.contact-des')</p>
                    <div><b>Mail:</b> alegostudio@gmail.com</div>
                    <div><b>@lang('Message.address'):</b> 132 Le Loi, Hai Chau, Da Nang</div>
                    <div><b>@lang('Message.tel'):</b> 0935011363</div>
                </div>
                <div class="columns col-sm-7"><h5>@lang('Message.MAKE-AN-APPOINTMENT').</h5>
                    <div role="form" class="wpcf7" id="wpcf7-f558-p84-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form id="contact_form" action="{{route('web.contact-us')}}" method="post" class="wpcf7-form"
                              novalidate="novalidate">
                            @csrf
                            <div class="mail-form-message d-none mb-5"></div>
                            <p>
                                <span class="wpcf7-form-control-wrap your-subject">
                                    <label for="email" generated="true" class="error label-error" style="color : red">{{ $errors->first('name_metting') }}</label>
                                    <select name="name_metting" class="selectbox">
                                        <option value="Pre Wedding Ceremony">Pre Wedding Ceremony</option>
                                        <option value="Wedding Ceremony">Wedding Ceremony</option>
                                        <option value="Event">Event</option>
                                        <option value="TVC">TVC</option>
                                    </select>
                                </span><br/>
                                <span class="wpcf7-form-control-wrap your-subject">
                                    <label for="email" generated="true" class="error label-error" style="color : red">{{ $errors->first('type_metting') }}</label>
                                    <select name="type_metting" class="selectbox">
                                        <option value="Book online">@lang('Message.Book')</option>
                                        <option value="Metting">@lang('Message.Metting')</option>
                                    </select>
                                </span><br/>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <label for="email" generated="true" class="error label-error" style="color : red">{{ $errors->first('email') }}</label>
                                    <input type="text" name="email"
                                                                                        value="{{old('email')}}" size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Email:"/>
                                </span><br/>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <label for="name" generated="true" class="error label-error" style="color : red">{{ $errors->first('name') }}</label>
                                    <input type="text" name="name"
                                           value="{{old('name')}}" size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                           aria-required="true"
                                           aria-invalid="false"
                                           placeholder="Name:"/>
                                </span><br/>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <label for="phone" generated="true" class="error label-error" style="color : red">{{ $errors->first('phone') }}</label>
                                    <input type="text" name="phone"
                                           value="{{old('phone')}}" size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                           aria-required="true"
                                           aria-invalid="false"
                                           placeholder="Phone:"/>
                                </span><br/>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <label for="date" generated="true" class="error label-error" style="color : red">{{ $errors->first('date') }}</label>
                                    <input readonly id="datepicker" type="text" name="date"
                                           value="{{old('date')}}" size="40"
                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                           aria-required="true"
                                           aria-invalid="false"
                                           placeholder="@lang('Message.Date'):"/>
                                </span><br/>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="message"
                                              cols="40" rows="10"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              aria-invalid="false"
                                              placeholder="Message:">

                                    </textarea>
                                </span><br/>
                                <input type="submit" id="submit_contact_btn" value="@lang('Message.Send')" class="button style-5 uppercase"></p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="map-container">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.836491107283!2d108.21777335011797!3d16.07397248882339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421830b566a3f3%3A0xf3fdde306733c44e!2zMTMyIEzDqiBM4bujaSwgSOG6o2kgQ2jDonUgMSwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1563791729168!5m2!1svi!2s"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</main>
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p style="text-align: center" id="content-mess">Some text in the Modal..</p>
    </div>

</div>
<footer id="footer">
    @include('web.layout_common.footer')
</footer>

@include('web.layout_common.footerScript')

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="{{asset('website/js/contact.js')}}"></script>
<script>
    $( document ).ready(function() {
        let status = '{{Session::get('success')}}';
        if (status.length > 0){
            $('#myModal').show();
            $('#content-mess').text(status);
        }
    });
</script>
</body>
</html>
