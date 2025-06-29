<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GARO ESTATE | Home page</title>
    <meta name="description" content="GARO is a real-estate template">
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icheck.min_all.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleland.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body>

    {{-- <div id="preloader">
            <div id="status">&nbsp;</div>
        </div> --}}
    <!-- Body content -->

    <div>
        <p>Harga Paket Termasuk : </p>
        @if ($item->tiket == 'yes')
        <label for="tiket" class="contain">Tiket Pesawat
            <input type="checkbox" name="tiket" id="tiket" checked disabled>
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->visa == 'yes')
        <label for="visa" class="contain">Visa-Siskohat
            <input type="checkbox" checked disabled name="visa" id="visa">
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->akomodasi == 'yes')
        <label for="akomodasi" class="contain">Akomodasi di Saudi
            <input type="checkbox" checked disabled name="akomodasi" id="akomodasi">
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->makan == 'yes')
        <label for="makan" class="contain">Makan di Saudi
            <input type="checkbox" checked disabled name="makan" id="makan">
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->umroh == 'yes')
        <label for="umroh" class="contain">Umroh 3x
            <input type="checkbox" checked disabled name="umroh" id="umroh">
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->tour == !null)
        <label class="contain">Paket tour
            <input type="checkbox" checked disabled id="showInput">
            <span class="checkmark"></span>
        </label>
        <input type="text" id="inputContainer" style="display:block;" name="tour"
            class="tourdesc" value="{{$item->tour}}" disabled>
        @endif
        @if ($item->airpot == 'yes')
        <label for="airport" class="contain">Airport Handling
            <input type="checkbox" checked disabled name="airport" id="airport">
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->bus == 'yes')
        <label for="bus" class="contain">Bus selama di Saudi
            <input type="checkbox" checked disabled name="bus" id="bus">
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->zam == 'yes')
        <label for="zam" class="contain">Zam-zam 5 Liter
            <input type="checkbox" checked disabled name="zam" id="zam">
            <span class="checkmark"></span>
        </label>
        @endif
        @if ($item->passport == 'yes')
        <label for="passport" class="contain">Passport
            <input type="checkbox" checked disabled name="passport" id="passport">
            <span class="checkmark"></span>
        </label>
        @endif
    </div>


    <nav class="navbar navbar-default ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hana Safar</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse yamm" id="navigation">
                <div class="button navbar-right">
                    <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.html')" data-wow-delay="0.4s">Login</button>
                    <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.5s">Submit</button>
                </div>
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->

    <div class="slider-area">
        <div id="bg-slider" class="owl-carousel owl-theme">

            <div class="item"><img src="{{asset('build/assets/assets/img/mecca.jpg')}}" alt="GTA V"></div>

        </div>
        <div class="container slider-content">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                    <h2>Selalu Membantu Perjalanan Umroh Anda</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>

                </div>
            </div>
        </div>
    </div>

    <div class="home-lager-shearch" style="padding-top: 25px; margin-top: -125px; padding-bottom: 60px; background-color: rgb(252, 252, 252); border-radius:100px;">
        <div class="container">
            <div class="col-md-12 large-search">
                <div class="search-form wow pulse">
                    <form action="" class=" form-inline">
                        <div class="col-md-12 clear">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Key word">
                            </div>
                            <div class="col-md-4">
                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                    <option>New york, CA</option>
                                    <option>Paris</option>
                                    <option>Casablanca</option>
                                    <option>Tokyo</option>
                                    <option>Marraekch</option>
                                    <option>kyoto , shibua</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select id="basic" class="selectpicker show-tick form-control">
                                    <option> -Status- </option>
                                    <option>Rent </option>
                                    <option>Boy</option>
                                    <option>used</option>

                                </select>
                            </div>
                        </div>
                        <div class="center">
                            <input type="submit" value="" class="btn btn-default btn-lg-sheach">
                        </div>
                    </form>
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
                        </div>
                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 ">
                        <div id="list-type" class="proerty-th">
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-2.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-1.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-1.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-2.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-2.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-1.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-2.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html"><img src="assets/img/demo/property-1.jpg"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="assets/img/icon/bed.png">(5)|
                                            <img src="assets/img/icon/shawer.png">(2)|
                                            <img src="assets/img/icon/cars.png">(1)
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-hover-dropdown.js')}}"></script>

    <script src="{{asset('js/easypiechart.min.js')}}"></script>
    <script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>

    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>

    <script src="{{asset('js/icheck.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>