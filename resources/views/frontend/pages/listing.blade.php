@extends('layouts.frontend.master')

@section('content')
<div class="slider" >
    <div id="slider-id">
        <div class="item" >
            <div class="banner" style="background:url('/frontend/assets/images/Group 89.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-content">
                                <h1>Used Cars For Sale</h1>
                                <p>Home / Used Cars / Used Cars For Sale</p>
                                <form action="">
                                    <h2>I want to trade my Wrecked car</h2>
                                    <ul>
                                        <li><input type="text" class="form-control" placeholder="Name"> </li>
                                        <li><input type="tel" class="form-control" placeholder="Phone No"> </li>
                                        <li><input type="text" class="form-control" placeholder="Vehicle No "></li>
                                        <li><input type="file" class="form-control" placeholder="Upload Car Image "></li>
                                        <li><button type="submit" class="btn">SUBMIT NOW</button></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" >
            <div class="banner" style="background:url('/frontend/assets/images/banner.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-content">
                                <h1>Why do we use it?</h1>
                                <p>It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page When Looking At Its Layout.</p>
                                <form action="">
                                    <h2>I want to trade my Wrecked car</h2>
                                    <ul>
                                        <li><input type="text" class="form-control" placeholder="Name"> </li>
                                        <li><input type="tel" class="form-control" placeholder="Phone No"> </li>
                                        <li><input type="text" class="form-control" placeholder="Vehicle No "></li>
                                        <li><input type="file" class="form-control" placeholder="Upload Car Image "></li>
                                        <li><button type="submit" class="btn">SUBMIT NOW</button></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner -->
<section class="sale-page">
    <div class="container">
        <div class="row">
            <!-- col-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="hold-transition skin-blue sidebar-mini">
                    <div class="wrapper">
                        <div class="main-header">
                            <nav class="navbar navbar-static-top">
                                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <aside class="main-sidebar">
                    <div class="sidebar">
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">SHOW RESULTS BY:</li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 131.png"></i> <span>Search filter</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Create Category </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Category </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 132.png"></i> <span>Keyword</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Create Category </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Category </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Path 1933.png"></i> <span>City</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Category </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Category </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 138.png"></i> <span>State</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Author </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Author </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 142.png"></i> <span>Make</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Book </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Book </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 152.png"></i> <span>Model</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Media </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Media </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Path 1943.png"></i> <span>Version</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 146.png"></i> <span>Price Range</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 148.png"></i> <span>Year</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 150.png"></i> <span>Mileage (KM)</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 152.png"></i> <span>Registered In</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 154.png"></i> <span>Trusted Cars</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 154.png"></i> <span>Transmission</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 158.png"></i> <span>Color</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 160.png"></i> <span>Engine Type</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 160.png"></i> <span>Engine Capacity</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 164.png"></i> <span>Assembly</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 166.png"></i> <span>Body Type</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 168.png"></i> <span>Model Category</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 170.png"></i> <span>Seller Type</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 172.png"></i> <span>Picture Availability</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 174.png"></i> <span>Video Availability</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i><img src="/frontend/assets/images/Group 176.png"></i> <span>Ad Type</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <!-- col-4 -->
            <!-- col-8 -->
            <div class="col-sm-12 col-md-8 col-lg-8">
               <div class="row">
                   <div class="col-lg-9">
                    <div class="serachmee">
                     <div class="form-group">
                        <p>Sort By:</p>
                  <input type="text" class="form-control" id="" placeholder="Updated Date:Recent First">
                </div>
                   </div>
                   </div>

                   <div class="col-lg-3">
                       <ul class="serchbutn">
                           <li><a href="#">List </a></li>
                               <li><a href="#">grid </a></li>
                       </ul>
                   </div>
               </div>
               <div class="color-area">
               <div class="row">
                   <div class="col-lg-9">
                    <div class="media">
                          <img class="mr-3" src="/frontend/assets/images/rectangle_64.png" alt="Generic placeholder image">
                         <div class="media-body">
                            <h5 class="mt-0">2014 Audi A6 Prestige</h5>
                            <ul>
                                <li> 2014 |</li>
                                <li> 5 Km | </li>
                                <li> Diesel |</li>
                                <li> Automatic</li>

                            </ul>
                            <a class="viewbutn" href="#">View More</a>

                          </div>
                        </div>
                     </div>

                   <div class="col-lg-3">
                    <div class="saleprice">
                       <a href="#">$2,800.00</a>
                   </div>
               </div>
               </div>
               </div>
               <div class="color-area">
                 <div class="row">
                   <div class="col-lg-9">
                    <div class="media">
                          <img class="mr-3" src="/frontend/assets/images/rectangle_64.png" alt="Generic placeholder image">
                          <div class="media-body">
                            <h5 class="mt-0">2014 Audi A6 Prestige</h5>
                            <ul>
                                <li> 2014 |</li>
                                <li> 5 Km | </li>
                                <li> Diesel |</li>
                                <li> Automatic</li>

                            </ul>
                            <a class="viewbutn" href="#">View More</a>

                          </div>
                        </div>
                     </div>

                   <div class="col-lg-3">
                    <div class="saleprice">
                       <a href="#">$2,800.00</a>
                   </div>
                 </div>
               </div>
               </div>

               <div class="color-area">
                <div class="row">
                   <div class="col-lg-9">
                    <div class="media">
                          <img class="mr-3" src="/frontend/assets/images/rectangle_64.png" alt="Generic placeholder image">
                          <div class="media-body">
                            <h5 class="mt-0">2014 Audi A6 Prestige</h5>
                            <ul>
                                <li> 2014 |</li>
                                <li> 5 Km | </li>
                                <li> Diesel |</li>
                                <li> Automatic</li>

                            </ul>
                            <a class="viewbutn" href="#">View More</a>

                          </div>
                        </div>
                     </div>

                   <div class="col-lg-3">
                    <div class="saleprice">
                       <a href="#">$2,800.00</a>
                   </div>
                 </div>
               </div>
               </div>
               <div class="saleslides">

               <div class="row">
                   <div class="col-lg-12">
                    <div id="cilent">
                 <div class="item">
                  <img src="/frontend/assets/images/Rectangle 68.png">
                  <div class="texting">
                      <h2>2017 HONDA ACCORD EXL</h2>
                      <h4>$27,300</h4>
                  </div>
                </div>

                <div class="item">
                  <img src="/frontend/assets/images/Rectangle 68.png">
                  <div class="texting">
                      <h2>2017 HONDA ACCORD EXL</h2>
                      <h4>$27,300</h4>
                  </div>
                </div>

                 <div class="item">
                  <img src="/frontend/assets/images/Rectangle 68.png">
                  <div class="texting">
                      <h2>2017 HONDA ACCORD EXL</h2>
                      <h4>$27,300</h4>
                  </div>
                </div>
                   </div>
              </div>
                 </div>
                </div>
                 <div class="color-area">
               <div class="row">
                   <div class="col-lg-9">
                    <div class="media">
                          <img class="mr-3" src="/frontend/assets/images/rectangle_64.png" alt="Generic placeholder image">
                          <div class="media-body">
                            <h5 class="mt-0">2014 Audi A6 Prestige</h5>
                            <ul>
                                <li> 2014 |</li>
                                <li> 5 Km | </li>
                                <li> Diesel |</li>
                                <li> Automatic</li>

                            </ul>
                            <a class="viewbutn" href="#">View More</a>

                          </div>
                        </div>
                     </div>

                   <div class="col-lg-3">
                    <div class="saleprice">
                       <a href="#">$2,800.00</a>
                   </div>
               </div>
               </div>
               </div>
                <div class="color-area">
               <div class="row">
                   <div class="col-lg-9">
                    <div class="media">
                          <img class="mr-3" src="/frontend/assets/images/rectangle_64.png" alt="Generic placeholder image">
                          <div class="media-body">
                            <h5 class="mt-0">2014 Audi A6 Prestige</h5>
                            <ul>
                                <li> 2014 |</li>
                                <li> 5 Km | </li>
                                <li> Diesel |</li>
                                <li> Automatic</li>

                            </ul>
                            <a class="viewbutn" href="#">View More</a>

                          </div>
                        </div>
                     </div>

                   <div class="col-lg-3">
                    <div class="saleprice">
                       <a href="#">$2,800.00</a>
                   </div>
               </div>
               </div>
               </div>
               </div>
            <!-- col-8 -->
        </div>
    </div>
    </section>

@endsection
