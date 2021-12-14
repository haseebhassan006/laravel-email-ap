@extends('layouts.frontend.master')


@section('content')

 <!-- Banner -->
    <div class="slider" >
      <div id="slider-id">
        <div class="item" >
          <div class="banner" style="background:url('frontend/assets/images/banner.png')">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="slider-content">
                    <h1>Why do we use it?</h1>
                    <p>It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page When Looking At Its Layout.</p>
                        {{-- Livewire  Component--}}
                            <livewire:inquiry-form/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item" >
          <div class="banner" style="background:url('frontend/assets/images/banner.png')">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="slider-content">
                    <h1>Why do we use it?</h1>
                    <p>It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page When Looking At Its Layout.</p>
                            {{-- Livewire  Component--}}
                            <livewire:inquiry-form/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner -->
    <!-- About Us -->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h2 class="sec-heading">wHAT wE dO</h2>
            <p class="sec-para">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 dis-flex-start">
            <div class="content">
              <ul>
                <li>There Are Many Variations Of Passages Of Lorem Ipsum Available</li>
                <li>There Are Many Variations Of Passages Of Lorem Ipsum Available</li>
                <li>There Are Many Variations Of Passages Of Lorem Ipsum Available</li>
              </ul>
              <a href="#" class="btn btn-business mt-4">Learn More</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="img-box"><img src="frontend/assets/images/about-img.png" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us -->
    <!-- Services -->
    <section class="service">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="box-overlay colorlay light-green">
              <div class="img-box"><img src="frontend/assets/images/1.png" class="img-fluid" alt=""></div>
              <div class="overlay">
                <h3 class="hd">Used Cars</h3>
                <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                <a href="#" class="btn">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="box-overlay colorlay brown">
              <div class="img-box"><img src="frontend/assets/images/2.png" class="img-fluid" alt=""></div>
              <div class="overlay">
                <h3 class="hd">Damage Cars</h3>
                <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                <a href="#" class="btn">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="box-overlay colorlay ">
              <div class="img-box"><img src="frontend/assets/images/3.png" class="img-fluid" alt=""></div>
              <div class="overlay">
                <h3 class="hd">Flood Damaged Cars</h3>
                <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                <a href="#" class="btn">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="box-overlay colorlay light-brown height-400 ">
              <div class="img-box "><img src="frontend/assets/images/4.png" class="img-fluid" alt=""></div>
              <div class="overlay">
                <h3 class="hd">Towing Cars</h3>
                <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                <a href="#" class="btn">View More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="box-overlay colorlay green height-400 ">
              <div class="img-box "><img src="frontend/assets/images/5.png" class="img-fluid" alt=""></div>
              <div class="overlay">
                <h3 class="hd">Accidental Cars</h3>
                <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                <a href="#" class="btn">View More</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-8 col-sm-8">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="box-overlay colorlay brown height-400 ">
                    <div class="img-box "><img src="frontend/assets/images/6.png" class="img-fluid" alt=""></div>
                    <div class="overlay">
                      <h3 class="hd">Junk & Salvage Cars</h3>
                      <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                      <a href="#" class="btn">View More</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="box-overlay colorlay green height-400 ">
                    <div class="img-box "><img src="frontend/assets/images/7.png" class="img-fluid" alt=""></div>
                    <div class="overlay">
                      <h3 class="hd">Part-Exchange Cars</h3>
                      <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                      <a href="#" class="btn">View More</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="box-overlay colorlay  height-400 ">
                    <div class="img-box "><img src="frontend/assets/images/8.png" class="img-fluid" alt=""></div>
                    <div class="overlay">
                      <h3 class="hd">Scrap Cars</h3>
                      <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                      <a href="#" class="btn">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-sm-4">
              <div class="box-overlay colorlay  height-800 ">
                <div class="img-box "><img src="frontend/assets/images/9.png" class="img-fluid" alt=""></div>
                <div class="overlay">
                  <h3 class="hd">Where can I get some?</h3>
                  <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                  <a href="#" class="btn">View More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5 col-sm-5">
              <div class="box-overlay colorlay purple  height-800 ">
                <div class="img-box "><img src="frontend/assets/images/10.png" class="img-fluid" alt=""></div>
                <div class="overlay">
                  <h3 class="hd">Part-Exchange Cars</h3>
                  <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                  <a href="#" class="btn">View More</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-7 col-sm-7">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="box-overlay colorlay sky height-400 ">
                    <div class="img-box "><img src="frontend/assets/images/10.png" class="img-fluid" alt=""></div>
                    <div class="overlay">
                      <h4 class="text-dark">Latest Testimonial</h4>
                      <h3 class="hd">What They Say About Us.</h3>
                      <p>This Was Our First Time Renting From Royal Cars And We Were Very Pleased With The Whole Experience. Your Price Was Lower Than Other Companies. Our Rental Experience Was Good From Start To Finish, So We’ll Be Back In The Future Lorem Ipsum Diamet.</p>
                      <div class="star">Robertho</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="box-overlay colorlay blue height-400 ">
                    <div class="img-box "><img src="frontend/assets/images/6.png" class="img-fluid" alt=""></div>
                    <div class="overlay">
                      <h3 class="hd">Contact Us</h3>
                      <p>There Are Many Variations Of Passages Of Lorem Ipsum Available</p>
                      <a href="#" class="btn">View More</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services -->

@endsection