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
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/screens-section.jpg" alt="Sample image">
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
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid" alt="Sample project image">
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
                    <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid" alt="Sample project image">
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
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" class="img-fluid" alt="Sample project image">
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
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg"
                                class="img-fluid z-depth-1-half">
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg"
                            data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg"
                            data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg"
                            data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg"
                            data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg"
                            data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                class="img-fluid z-depth-1-half" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg"
                            data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg"
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
<div class="streak streak-md streak-photo" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img(115).jpg')">
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
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/5.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe dark">
                    <a>
                      <p>Red trousers
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
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/8.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe light">
                    <a>
                      <p>Sweatshirt
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
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/9.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe dark">
                    <a>
                      <p>Accessories
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
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/7.jpg" class="img-fluid"
                    alt="">
                  <div class="stripe light">
                    <a>
                      <p>Sweatshirt
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
<section id="contact" class="py-5" style="background-color: #eee;">

    <div class="container">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center mb-5">Contact us</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-9 mb-md-0 mb-5">

            <form>

                <!-- Grid row -->
                <div class="row">

                <!-- Grid column -->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <input type="text" id="contact-name" class="form-control">
                    <label for="contact-name" class="">Your name</label>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <input type="text" id="contact-email" class="form-control">
                    <label for="contact-email" class="">Your email</label>
                    </div>
                </div>
                <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
                    <div class="md-form mb-0">
                    <input type="text" id="contact-Subject" class="form-control">
                    <label for="contact-Subject" class="">Subject</label>
                    </div>
                </div>
                <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
                    <div class="md-form">
                    <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                    <label for="contact-message">Your message</label>
                    </div>
                </div>
                <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-green btn-md">Send</a>
            </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li>
                <i class="fa fa-map-marker fa-2x green-text"></i>
                <p>San Francisco, CA 94126, USA</p>
                </li>
                <li>
                <i class="fa fa-phone fa-2x mt-4 green-text"></i>
                <p>+ 01 234 567 89</p>
                </li>
                <li>
                <i class="fa fa-envelope fa-2x mt-4 green-text"></i>
                <p class="mb-0">contact@example.com</p>
                </li>
            </ul>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>

</section>
<!--Section: contact-->

</main>
<!--Main layout-->
@endsection
