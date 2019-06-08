@extends('layouts.app')

@section('content')
<!-- Full Page Intro -->
<div id="intro-section" class="view">
  <img src="img/bg.jpg" alt="" width="100%;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container px-md-3 px-sm-0">
            <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                    <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">Creative Agency</h3>
                    <hr class="hr-light my-4 w-75">
                    <h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit deleniti consequuntur nihil.</h4>
                    <a href="#!" class="btn btn-rounded btn-outline-white">
                        <i class="fa fa-home"></i> Visit us
                    </a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->
</header>
<main>

<!--Section: about-->
<section id="about" class="py-5">

    <!-- Container -->
    <div class="container">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center mb-5">Why is it so great?</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet,
            consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad
            minim veniam.</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 text-center text-lg-left">
                <img class="img-fluid" src="images/4.jpg" alt="Sample image">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!-- Grid row -->
                <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-1">
                        <i class="fa fa-mail-forward fa-lg green-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-10 col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Safety</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad
                            minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam
                            assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-1">
                        <i class="fa fa-mail-forward fa-lg green-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-10 col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Technology</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad
                            minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam
                            assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!--Grid row-->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-1">
                        <i class="fa fa-mail-forward fa-lg green-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-10 col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Finance</h5>
                        <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim
                            ad minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam
                            assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!--Grid row-->

            </div>
            <!--Grid column-->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Container -->

</section>
<!--Section: about-->

<!--Section: projects-->
<section id="projects" class="text-center py-5" style="background-color: #eee;">

    <!-- Container -->
    <div class="container">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold mb-5">Our best projects</h2>
        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit est laborum.</p>

        <!-- Grid row -->
        <div class="row text-center">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                    <img src="images/1.jpg" class="img-fluid" alt="Sample project image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Excerpt-->
                <div class="card-body pb-0">
                    <h4 class="font-weight-bold my-3">Title of the news</h4>
                    <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
                        necessitatibus saepe eveniet ut et voluptates repudiandae.
                    </p>
                    <a class="btn btn-green btn-sm"><i class="fa fa-clone left"></i> View project</a>
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                    <img src="images/5.jpg" class="img-fluid" alt="Sample project image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Excerpt-->
                <div class="card-body pb-0">
                    <h4 class="font-weight-bold my-3">Title of the news</h4>
                    <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
                        necessitatibus saepe eveniet ut et voluptates repudiandae.
                    </p>
                    <a class="btn btn-green btn-sm"><i class="fa fa-clone left"></i> View project</a>
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                    <img src="images/3.jpg" class="img-fluid" alt="Sample project image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Excerpt-->
                <div class="card-body pb-0">
                    <h4 class="font-weight-bold my-3">Title of the news</h4>
                    <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
                        necessitatibus saepe eveniet ut et voluptates repudiandae.
                    </p>
                    <a class="btn btn-green btn-sm"><i class="fa fa-clone left"></i> View project</a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Container -->

</section>
<!--Section: projects-->

<!--Section: gallery-->
<section id="gallery" class="text-center py-5">

    <!-- Container -->
    <div class="container">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold mb-5">Our best projects</h2>
        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit est laborum.</p>

        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg"
                            data-size="1600x1067">
                            <img src="images/fruits/1.jpg"
                                class="img-fluid z-depth-1-half">
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg"
                            data-size="1600x1067">
                            <img src="images/fruits/2.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg"
                            data-size="1600x1067">
                            <img src="images/fruits/3.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                          <img src="images/fruits/4.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg"
                            data-size="1600x1067">
                            <img src="images/fruits/5.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                          <img src="images/fruits/6.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg"
                            data-size="1600x1067">
                            <img src="images/fruits/7.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg"
                            data-size="1600x1067">
                            <img src="images/fruits/8.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg"
                            data-size="1600x1067">
                            <img src="images/fruits/9.jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                </div>

            </div>
        </div>

    </div>
    <!-- Container -->

</section>
<!--Section: gallery-->



<!--Section: call to action-->
<div class="streak streak-md streak-photo" style="background-image:url('images/6.jpg')">
    <div class="flex-center rgba-black-light pattern-1">
        <div class="white-text smooth-scroll mx-4">
            <h2 class="h2-responsive mb-5 wow fadeIn">If you have any legal problem in your life ... We are
                available</h2>
            <div class="text-center">
                <a href="#contact" class="btn btn-outline-white wow fadeIn " data-offset="100" data-wow-delay="0.2s">Contact
                    us</a>
            </div>
        </div>
    </div>
</div>
<!--Section: call to action-->

<!--Section: articles-->
<section id="articles" class="text-center py-5">

    <!-- Container -->
    <div class="container">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold mb-5">Articles</h2>

        <!-- Section: Products v.4 -->
        <section class="text-center my-5">

          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
          <!-- Section description -->
          <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
            nostrum quisquam eum porro a pariatur veniam.</p>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
              <!-- Collection card -->
              <div class="card collection-card z-depth-1-half">
                <!-- Card image -->
                <div class="view zoom">
                  <img src="images/fruits/portrait/5.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe dark">
                    <a>
                      <p>Cherries
                        <i class="fas fa-angle-right"></i>
                      </p>
                    </a>
                  </div>
                </div>
                <!-- Card image -->
              </div>
              <!-- Collection card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
              <!-- Collection card -->
              <div class="card collection-card z-depth-1-half">
                <!-- Card image -->
                <div class="view zoom">
                  <img src="images/fruits/portrait/2.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe light">
                    <a>
                      <p>Fruits
                        <i class="fas fa-angle-right"></i>
                      </p>
                    </a>
                  </div>
                </div>
                <!-- Card image -->
              </div>
              <!-- Collection card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
              <!-- Collection card -->
              <div class="card collection-card z-depth-1-half">
                <!-- Card image -->
                <div class="view zoom">
                  <img src="images/fruits/portrait/3.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe dark">
                    <a>
                      <p>Wholesale
                        <i class="fas fa-angle-right"></i>
                      </p>
                    </a>
                  </div>
                </div>
                <!-- Card image -->
              </div>
              <!-- Collection card -->
            </div>
            <!-- Grid column -->

            <!-- Fourth column -->
            <div class="col-lg-3 col-md-6">
              <!-- Collection card -->
              <div class="card collection-card z-depth-1-half">
                <!-- Card image -->
                <div class="view zoom">
                  <img src="images/fruits/portrait/4.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe light">
                    <a>
                      <p>Crops
                        <i class="fas fa-angle-right"></i>
                      </p>
                    </a>
                  </div>
                </div>
                <!-- Card image -->
              </div>
              <!-- Collection card -->
            </div>
            <!-- Fourth column -->

          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Products v.4 -->

    </div>
    <!-- Container -->

</section>
<!--Section: articles-->

<!--Section: contact-->

<!--Section: contact-->

</main>
<!--Main layout-->
@endsection
