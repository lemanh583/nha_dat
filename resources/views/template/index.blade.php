<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GARO ESTATE | Home page</title>
        <meta name="description" content="GARO is a real-estate template">
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
        <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
        <style>
            html{
                scroll-behavior: smooth;
            }
        </style>
    </head>
    <body>
        <div id="head"></div>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        {{-- <div class="header-connect">
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
        </div>             --}}
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

                        {{-- @foreach($categories as $ct)

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="">{{$ct->name}}</a></li>
                        @endforeach
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a >||</a></li> --}}

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
                        </li> --}}
                        {{-- <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="tintuc.html">Tin tức</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="lienhe.html" style="margin-right:85px">Liên hệ</a></li> --}}

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


        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="{{asset('')}}assets/img/slide1/slider-image-1.jpg" alt="Mirror Edge"></div> 
                    <div class="item"><img src="{{asset('')}}assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div> 
                    <div class="item"><img src="{{asset('')}}assets/img/slide1/slider-image-4.jpg" alt="GTA V"></div>   

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Tìm kiếm nhà đất</h2>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="{{route('searchIndex')}}" class=" form-inline">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="Tìm kiếm">
                                </div>
                                <!-- <div class="form-group">                                   
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn thành phố">

                                        <option>Hà Nội</option>
                                        <option>Vinh</option>
                                        <option>Hồ Chí Minh</option>
                                    </select>
                                </div>
                                <div class="form-group">                                     
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <option>Tỉnh</option>
                                        <option>Nghệ An</option>
                                        <option>Hà Tĩnh</option>
                                    </select>
                                </div> -->
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">

                                    <div class="search-row">   

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Giá tiền(tỷ): </label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="50" data-slider-step="2" 
                                                   data-slider-value="[0,20]" id="price-range" ><br />
                                            <b class="pull-left color">0</b> 
                                            <b class="pull-right color">50</b>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Diện tích (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[50,450]" id="property-geo" ><br />
                                            <b class="pull-left color">40m</b> 
                                            <b class="pull-right color">12000m</b>
                                        </div>
                                        <!-- End of  --> 
                                    </div>

                                    <div class="search-row">
                                        <div class="form-group">                                     
                                            <select  class="form-control" >
                                                <option>Tỉnh</option>
                                                <option>Nghệ An</option>
                                                <option>Hà Tĩnh</option>
                                            </select>
                                        </div>
                                        <div class="form-group">                                     
                                            <select class="form-control" >
                                                <option>Tỉnh</option>
                                                <option>Nghệ An</option>
                                                <option>Hà Tĩnh</option>
                                            </select>
                                        </div> 
                                        <div class="form-group">                                     
                                            <select class="form-control" >
                                                <option>Tỉnh</option>
                                                <option>Nghệ An</option>
                                                <option>Hà Tĩnh</option>
                                                <option>Hà Tĩnh</option>
                                            </select>
                                        </div>
                                        

                                    </div>
                                    <br>
                                    <div class="search-row">  
                                        <div class="form-group">                                     
                                            <select class="form-control" >
                                                <option>Tỉnh</option>
                                                <option>Nghệ An</option>
                                                <option>Hà Tĩnh</option>
                                                <option>Hà Tĩnh</option>
                                            </select>
                                        </div>
                                        <div class="form-group">                                     
                                            <select class="form-control" >
                                                <option>Tỉnh</option>
                                                <option>Nghệ An</option>
                                                <option>Hà Tĩnh</option>
                                                <option>Hà Tĩnh</option>
                                            </select>
                                        </div>
                                       
                                    </div>

                                    <div class="search-row">  

                                      
                                    </div>                                    

                                    <div class="search-row">  

                                        
                                    </div>   

                                </div>                     

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- property area -->
        <div class="content-area recent-property" style="padding-bottom: 60px; background-color: rgb(252, 252, 252);">
            <div class="container">   
                <div class="row">
                    <div class="col-md-12  padding-top-40 properties-page">
                        <div class="col-md-12 "> 
                            <div class="col-xs-10 page-subheader sorting pl0">

                                <ul class="sort-by-list">
                                    <li class="active">
                                        <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                            Ngày <i class="fa fa-sort-amount-asc"></i>					
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                            Giá <i class="fa fa-sort-numeric-desc"></i>						
                                        </a>
                                    </li>
                                </ul><!--/ .sort-by-list-->

                                <div class="items-per-page">
                                    <label for="items_per_page"><b>Trang:</b></label>
                                    <div class="sel">
                                        <select id="items_per_page" name="per_page">
                                            <option value="3">3</option>
                                            <option value="6">6</option>
                                            <option value="9">9</option>
                                            <option selected="selected" value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                            <option value="45">45</option>
                                            <option value="60">60</option>
                                        </select>
                                    </div><!--/ .sel-->
                                </div><!--/ .items-per-page-->
                            </div>

                            <div class="col-xs-2 layout-switcher">
                                <a class="layout-list " href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                                <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                            </div>
                        </div>

                        <div class="col-md-12 "> 
                            <div id="list-type" class="proerty-th-list">
                                
                                
                            @foreach($listDetail as $dt)
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="{{route('details',$dt->id_detail)}}" ><img src="{{$dt->url}}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="{{route('details',$dt->id_detail)}}"> {{$dt->titledt}} </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Rộng :</b> {{$dt->area}}m </span>
                                            <span class="proerty-price pull-right">{{$dt->amount}} đ</span>
                                            <br> <b>Loại:</b> {{$dt->nameType}}
                                            <br><b>Kiểu:</b> {{$dt->nameCategory}}
                                            <br><b>Địa chỉ: </b> {{$dt->tinh}}, {{$dt->huyen}}, {{$dt->xa}}
                                            <br><b>Ngày đăng bài:</b> {{$dt->created_at}}
                                            <br><br><span class=" pull-right">{{$dt->nameUser}}</span>
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                                

                                

                                

                                

                                

                                

                                

                                
                                
                                

                                

                                

                            </div>
                        </div>

                        {{$listDetail->links()}}
                        {{-- <div class="col-md-12"> 
                            <div class="pull-right">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>                
                        </div> --}}
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

                                <img src="{{asset('')}}assets/img/footer-logo.png" alt="" class="wow pulse" data-wow-delay="1s">
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
                                                <img src="{{asset('')}}assets/img/demo/small-proerty-2.jpg">
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
                                                <img src="{{asset('')}}assets/img/demo/small-proerty-2.jpg">
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
                                                <img src="{{asset('')}}assets/img/demo/small-proerty-2.jpg">
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
            <div id="cuonlen"style="position: fixed;right:0px;top:80%"><a href="#head"><img src="https://icon-library.com/images/top-arrow-icon/top-arrow-icon-19.jpg" alt="" style="width:80px;height:80px;"></a></div>
        </div>
          <script>
              
                let cuonlen = document.getElementById("cuonlen");
                    window.addEventListener('scroll',function(){
                    let vitri = window.pageYOffset;
                    if(vitri <= 720){ cuonlen.style.display = "none";}
                    else{cuonlen.style.display = "block";}
                });
   
          </script>
       
          <script src="{{asset('')}}assets/js/modernizr-2.6.2.min.js"></script>

        <script src="{{asset('')}}assets/js/jquery-1.10.2.min.js"></script>
        <script src="{{asset('')}}bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('')}}assets/js/bootstrap-select.min.js"></script>
        <!-- <script src="assets/js/bootstrap-hover-dropdown.js"></script> -->

        <script src="{{asset('')}}assets/js/easypiechart.min.js"></script>
        <script src="{{asset('')}}assets/js/jquery.easypiechart.min.js"></script>

        <script src="{{asset('')}}assets/js/owl.carousel.min.js"></script>   
        <script src="{{asset('')}}assets/js/wow.js"></script>

        <script src="{{asset('')}}assets/js/icheck.min.js"></script>
        <script src="{{asset('')}}assets/js/price-range.js"></script>

        <script src="{{asset('')}}assets/js/main.js"></script>
       
       
    </body>
</html>
