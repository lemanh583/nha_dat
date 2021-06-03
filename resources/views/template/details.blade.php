<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GARO ESTATE | Property  page</title>
        <meta name="description" content="company is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('')}}assets/css/normalize.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/fontello.css">
        <link href="{{asset('')}}assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="{{asset('')}}assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="{{asset('')}}assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="{{asset('')}}bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/price-range.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="{{asset('')}}assets/css/owl.theme.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/owl.transitions.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/lightslider.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +1 234 567 7890</span>
                                <span><i class="pe-7s-mail"></i> your@company.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>              
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img src="{{asset('')}}assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        @if(!Auth::check())
                            <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.4s"><a href="{{route('login')}}">Đăng nhập</a></button>
                            <button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.5s"><a href="{{route('showformRegister')}}">Đăng ký</a></button>
                        @endif
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown " data-wow-delay="0.1s"><a class="active" href="{{route('home')}}">Home</a></li>
                        @foreach($categories as $ct)

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="">{{$ct->name}}</a></li>
                        @endforeach
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a >||</a></li>
                        {{-- <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Dự án <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="#">Nhà đất</a>
                                </li>
                                <li>
                                    <a href="bietthu.html">Biệt thự</a>
                                </li>
                            </ul>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="tintuc.html">Tin tức</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="lienhe.html">Liên hệ</a></li> --}}
                        @if(Auth::check())
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s" style="margin-right:-80px">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><b>{{Auth::user()->name}}</b> <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="{{route('showAddDetailUser')}}">Thêm bài viết</a>
                                </li>
                                <li>
                                    <a href="{{route('listDetailUser')}}">Quản lý bài viết</a>
                                </li>
                                <li>
                                    <a href="{{route('viewProfile')}}">Quản lý profile</a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Biệt thự </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                        <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div> 

                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">

                                        @foreach ($detail as $dt)
                                            
                                     
                                        <li data-thumb="{{asset($dt->url)}}"> 
                                            <img src="{{asset($dt->url)}}" />
                                        </li>


                                        @endforeach
                                        {{-- <li data-thumb="{{asset('')}}assets/img/property-1/property2.jpg"> 
                                            <img src="{{asset('')}}assets/img/property-1/property3.jpg" />
                                        </li>
                                        <li data-thumb="{{asset('')}}assets/img/property-1/property3.jpg"> 
                                            <img src="{{asset('')}}assets/img/property-1/property3.jpg" />
                                        </li>
                                        <li data-thumb="{{asset('')}}assets/img/property-1/property4.jpg"> 
                                            <img src="{{asset('')}}assets/img/property-1/property4.jpg" />
                                        </li>                                          --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left"><b>{{$detail[0]->title}}</b></h1>
                                <span class="property-price pull-right">{{$detail[0]->amount}}  Đ</span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                                {{-- <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">                                        
                                        <h2>Mức giá</h2>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label"><h3>13245</h3></span>
                                      
                                    </span>
                                </div> --}}

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info icon-area">
                                        <h2>Diện tích</h2>
                                    </span>
                                    <span class="property-info-entry">

                                        <span class="property-info-value"><h3>{{$detail[0]->area}}</h3></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <h2>Loại</h2>
                                    </span>
                                    <span class="property-info-entry">
                                       
                                        <span class="property-info-value"><h3>{{$detail[0]->nameType}}</h3></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    {{-- <span class="property-info-icon icon-bed"> --}}
                                        <h2>Địa chỉ</h2>
                                    {{-- </span> --}}
                                    <span class="property-info-entry">
                                        <span class="property-info-label">{{$detail[0]->tinh}},{{$detail[0]->huyen}},{{$detail[0]->xa}}</span>
                                       
                                    </span>
                                </div>

                                {{-- <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bath">
                                        <img src="{{asset('')}}assets/img/icon/os-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">PHÒNG TẮM</span>
                                        <span class="property-info-value">2<b class="property-info-unit">M</b></span>
                                    </span>
                                </div> --}}
                            </div>
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Miêu tả</h4>
                                <div class="s-property-content">
                                    <p>{{$detail[0]->descriptions}}</p>
                                </div>
                            </div>
                            <!-- End description area  -->
                           {{-- <div id="map"></div>
                            --}}
                            <div id="map">

                            </div>
                            <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKHLBgd9aVkhm4QqTgd2267j6DSLW7he8&callback=initMap&libraries=&v=weekly"
                        async></script>
                            <div class="section property-share"> 
                                <h4 class="s-property-title">Chia sẻ với bạn bè </h4> 
                                <div class="roperty-social">
                                    <ul> 
                                        <li><a title="Share this on dribbble " href="#"><img src="{{asset('')}}assets/img/social_big/dribbble_grey.png"></a></li>                                         
                                        <li><a title="Share this on facebok " href="#"><img src="{{asset('')}}assets/img/social_big/facebook_grey.png"></a></li> 
                                        <li><a title="Share this on delicious " href="#"><img src="{{asset('')}}assets/img/social_big/delicious_grey.png"></a></li> 
                                        <li><a title="Share this on tumblr " href="#"><img src="{{asset('')}}assets/img/social_big/tumblr_grey.png"></a></li> 
                                        <li><a title="Share this on digg " href="#"><img src="{{asset('')}}assets/img/social_big/digg_grey.png"></a></li> 
                                        <li><a title="Share this on twitter " href="#"><img src="{{asset('')}}assets/img/social_big/twitter_grey.png"></a></li> 
                                        <li><a title="Share this on linkedin " href="#"><img src="{{asset('')}}assets/img/social_big/linkedin_grey.png"></a></li>                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- End video area  -->
                            
                        </div>
                    </div>


                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">

                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="{{$detail[0]->images}}" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href="">Đại lý biệt thự</a>
                                                    <span>{{$detail[0]->nameUser}} </span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                {{-- <li><i class="pe-7s-map-marker strong"> </i>30 - Lê Duẩn - Vinh</li> --}}
                                                <li><i class="pe-7s-mail strong"> </i> {{$detail[0]->email}}</li>
                                                <li><i class="pe-7s-call strong"> </i> {{$detail[0]->phone_number}}</li>
                                            </ul>
                                            <p>Liên hệ với chúng tôi để biết thêm chi tiết…</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tương tự</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                        <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Biệt thự</a></h6>
                                                <span class="property-price">300000 đ</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Biệt thự</a></h6>
                                                <span class="property-price">300000 đ</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Biệt thự</a></h6>
                                                <span class="property-price">300000 đ</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Biệt thự</a></h6>
                                                <span class="property-price">300000 đ</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>  
                        </aside>
                    </div>
                </div>

            </div>
        </div>


          <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Thông tin </h4>
                                <div class="footer-title-line"></div>

                                <img src="assets/img/footer-logo.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> Lê Duẩn - Vinh - Nghệ An</li>
                                    <li><i class="pe-7s-mail strong"> </i> email@email.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +123456789</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Tin mới</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">
                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2020</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Tiêu đề tin </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Nội dung tin ...</p>
                                        </div>
                                    </li> 

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2020</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Tiêu đề tin </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Nội dung tin ...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2020</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Tiêu đề tin </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Nội dung tin ...</p>
                                        </div>
                                    </li> 

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Liên lạc</h4>
                                <div class="footer-title-line"></div>
                                <p>Gửi email của bạn để chúng tôi có thể liên hệ.</p>

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form> 

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/kimarotec"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/kimarotec" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/kimarotec" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
          
        @include('template/script')
        
        <script src="{{asset('')}}assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="{{asset('')}}assets/js/jquery-1.10.2.min.js"></script>
        <script src="{{asset('')}}bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('')}}assets/js/bootstrap-select.min.js"></script>
        <script src="{{asset('')}}assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="{{asset('')}}assets/js/easypiechart.min.js"></script>
        <script src="{{asset('')}}assets/js/jquery.easypiechart.min.js"></script>
        <script src="{{asset('')}}assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('')}}assets/js/wow.js"></script>
        <script src="{{asset('')}}assets/js/icheck.min.js"></script>
        <script src="{{asset('')}}assets/js/price-range.js"></script>
        <script type="text/javascript" src="{{asset('')}}assets/js/lightslider.min.js"></script>
        <script src="{{asset('')}}assets/js/main.js"></script>

        {{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> --}}
        {{-- <script src="{{asset('')}}assets/js/gmaps.js"></script>        
        <script src="{{asset('')}}assets/js/gmaps.init.js"></script> --}}

        <script src="{{asset('')}}assets/js/main.js"></script>

        <script>
            $(document).ready(function () {

                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>

    </body>
</html>