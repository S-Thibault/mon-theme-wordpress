<?php get_header(); ?>




<body id="pageTop" data-spy="scroll" data-target="#navbarResponsive" data-offset="100">
  <nav id="navbarSection" class="navbar navbar-expand-md bg-dark navbar-dark border border-white fixed-top">
    <div class="container">

      <!-- brand -->
      <a class="navbar-brand text-center" href="#pageTop">Landscaper</a>

      <!-- toggler/collapsible button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div id="navbarResponsive" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto text-uppercase">
          <li class="nav-item pr-2">
            <a class="nav-link" href="#headerSection">Home</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#aboutSection">About</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#serviceSection">Services</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#gallerySection">Gallery</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#testimonialSection">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactSection">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME SECTION -->
  <header id="headerSection" class="vw-100 vh-100 border border-white" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="masking">
      <div class="container">
        <div class="vh-100 d-flex flex-column mt-5 pt-5 align-items-center text-white text-center">
          <h1 class="mt-auto mb-3 font-weight-bolder text-uppercase display-5">Landscaping Services</h1>
          <h6 class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
          <h6 class="">Duis sed dapibus leo nec ornare diam.</h6>
          <a class="btn-custom btn btn-lg mt-5 mb-auto" href="#aboutSection">More Info</a>
        </div>
      </div>
    </div>
  </header>

  <section id="aboutSection" class="min-vw-100 min-vh-100 border border-warning" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="container">
      <div class="row mt-5 pt-5 mb-5 pb-4 text-black-50 ">
        <div class="col-lg-6">
          <h3 class="font-weight-bold text-dark">Welcome to <span class="font-weight-bolder">Landscaper</span></h3>

<?php if (have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>

        <div class="card">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
              <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>

                    <p class="card-text">
                      <?php the_excerpt()?>
                    </p>
                  <a href="<?php the_permalink() ?>" class="card-link">voir plus</a>
              </div>
        </div>
      </div>
    <?php endwhile?>

  </div>
<?php else: ?>
   <h1>Pas d'article</h1>
<?php endif; ?>


</div>
</div>
</section>

  <!-- ABOUT SECTION -->
  <!-- <section id="aboutSection" class="min-vw-100 min-vh-100 border border-warning" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="container">
      <div class="row mt-5 pt-5 mb-5 pb-4 text-black-50 text-left">
        <div class="col-lg-6">
          <h3 class="font-weight-bold text-dark">Welcome to <span class="font-weight-bolder">Landscaper</span></h3>
          <hr class="ml-0 mb-4">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam
            commodo nibh.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo
            nibh.</p>
          <a class="btn-custom btn btn-lg mb-5" href="#serviceSection">View All Services</a>
        </div>
        <div class="col-lg-3">
          <img src="<?php bloginfo('template_directory');?>/img/about-1.jpg" class="w-100 img-fluid rounded">
          <h6 class="mt-3 mb-3 font-weight-bold text-dark">Garden Care</h6>
          <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis.</p>
        </div>
        <div class="col-lg-3">
          <img src="<?php bloginfo('template_directory');?>/img/about-2.jpg" class="w-100 img-fluid rounded">
          <h6 class="mt-3 mb-3 font-weight-bold text-dark">Lawn Care</h6>
          <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- SERVICES SECTION -->
  <section id="serviceSection" class="min-vw-100 min-vh-100 border border-white" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="container">
      <div class="d-flex flex-column mt-4 pt-5 align-items-center text-white text-center">
        <h1 class="mb-3 font-weight-bolder display-4">Our Services</h1>
        <hr class="mt-0 mb-3">
        <h6 class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</h6>
      </div>

      <!-- services photos -->
      <div class="row mb-5 pt-3 pb-5 justify-content-center text-center text-white">
        <div class="col-lg-3">
          <img src="<?php bloginfo('template_directory');?>/img/service-1.jpg" class="img-fluid rounded-circle">
          <h3 class="pt-4">Lawn Care</h3>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
        <div class="col-lg-3">
          <img src="<?php bloginfo('template_directory');?>/img/service-2.jpg" class="img-fluid rounded-circle">
          <h3 class="pt-4">Landscape Design</h3>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
        <div class="col-lg-3">
          <img src="<?php bloginfo('template_directory');?>/img/service-3.jpg" class="img-fluid rounded-circle">
          <h3 class="pt-4">Tree Care</h3>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
        <div class="col-lg-3">
          <img src="<?php bloginfo('template_directory');?>/img/service-4.jpg" class="img-fluid rounded-circle">
          <h3 class="pt-4 text-nowrap">Spring & Fall Cleanup</h3>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- GALLERY SECTION -->
  <section id="gallerySection" class="min-vw-100 min-vh-100 border border-warning" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="container">
      <div class="d-flex flex-column mt-4 pt-5 align-items-center text-black-50 text-center">
        <h1 class="mb-3 font-weight-bolder text-dark display-4">Project Gallery</h1>
        <hr class="mt-0 mb-3">
        <h6 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</h6>

        <!-- buttons -->
        <div class="row text-nowrap">
          <div id="btnContainer" class="col-md-3">
            <button id="all" class="ml-2 mr-0 btn-gallery btn-custom btn btn-lg active">All</button>
          </div>
          <div class="col-md-3">
            <button id="lawnCare" class="ml-0 mr-2 btn-gallery btn-custom btn btn-lg">Lawn Care</button>
          </div>
          <div class="col-md-3">
            <button id="gardenCare" class="ml-1 mr-2 btn-gallery btn-custom btn btn-lg">Garden Care</button>
          </div>
          <div class="col-md-3">
            <button id="planting" class="ml-4 mr-4 btn-gallery btn-custom btn btn-lg">Planting</button>
          </div>
        </div>
      </div>
      <div id="thumbnailGallery" class="row pt-5 pb-5 align-items-center text-center text-uppercase">
        <div class="filterDiv lawnCare p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="0" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/01-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv planting p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="1" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/02-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv lawnCare p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="2" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/03-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv lawnCare p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="3" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/04-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv planting p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="4" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/05-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv gardenCare p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="5" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/06-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv gardenCare p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="6" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/07-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv lawnCare p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="7" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/08-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv planting p-2 pt-0 col-xs-1 col-sm-6 col-lg-4">
          <div id="8" class="overlay cursor">
            <img src="<?php bloginfo('template_directory');?>/img/09-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking w-100 h-100 rounded">
              <p class="text w-50 h-50 mx-auto mt-auto text-white text-center">Lorem ipsum.</p>
            </div>
          </div>
        </div>
      </div>
      <div id="myModal" class="modal font-weight-bold text-white">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/01-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/02-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/03-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/04-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/05-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/06-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/07-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/08-large.jpg" class="img-fluid w-100">
          </div>
          <div class="mySlides">
            <img src="<?php bloginfo('template_directory');?>/img/09-large.jpg" class="img-fluid w-100">
          </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section id="testimonialSection" class="border border-white" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="masking w-100 h-100">
      <div class="container">
        <div class="d-flex flex-column mt-5 pt-5 align-items-center text-white text-center">
          <h1 class="mt-4 mb-3 pt-3 font-weight-bolder text-uppercase display-4">Testimonials</h1>
          <hr class="mt-0 mb-4">
        </div>
        <div id="testimonials" class="carousel slide" data-ride="carousel" data-interval="1500">
          <ul class="carousel-indicators">
            <li class="m-1" data-target="#testimonials" data-slide-to="0" class="active"></li>
            <li class="m-1" data-target="#testimonials" data-slide-to="1"></li>
            <li class="m-1" data-target="#testimonials" data-slide-to="2"></li>
            <li class="m-1" data-target="#testimonials" data-slide-to="3"></li>
          </ul>
          <div class="carousel-inner pt-5 pb-3 align-items-center text-center">

            <!-- adds slides to the carousel -->
            <div class="carousel-item active">

              <!-- specifies the content of each slide -->
              <div class="carousel-caption">

                <!-- create a caption for each slide -->
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- John DOE, Parker County, TX</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- Jenny DOE, Parker County, TX</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- John POE, Parker County, TX</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- Jane BOE, Parker County, TX</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contactSection" class="min-vw-100 min-vh-100 border border-warning" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="container">
      <div class="d-flex flex-column mt-4 pt-5 align-items-center text-black-50 text-center">
        <h1 class="mb-3 font-weight-bolder text-dark display-4">Contact Us</h1>
        <hr class="mt-0 mb-3">
        <h6 class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</h6>
        <div class="row pt-3 justify-content-center text-black-50 text-center text-nowrap">
          <div class="contact-item col-lg-3 mr-5">
            <h3 class="text-dark">Address</h3>
            <hr class="mt-0">
            <p>4321 California St,</p>
            <p class="contact-information">San Francisco, CA 12345</p>
          </div>
          <div class="contact-item col-lg-3 ml-3 mr-3">
            <h3 class="text-dark">Working Hours</h3>
            <hr class="mt-0">
            <p style="margin-left: -0.75rem;">Monday-Saturday: 07:00 - 18:00</p>
            <p class="contact-information">Sunday: <span class="font-weight-bold text-uppercase"> Closed</span></p>
          </div>
          <div class="contact-item col-lg-3 ml-5">
            <h3 class="text-dark">Contact Info</h3>
            <hr class="mt-0">
            <p>Phone: +1 123 456 1234</p>
            <p class="contact-information">Email: info@company.com</p>
          </div>
        </div>
      </div>
      <form action="mail.php" method="post" enctype="application/x-www-form-urlencoded">
        <div class="pt-5 pb-2 text-dark text-center">
          <h3>Leave us a message</h3>
        </div>
        <div class="form-row justify-content-center">
          <div class="col-lg-4 mr-1 mb-2">
            <input id="myName" type="text" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="col-lg-4 ml-1 mb-2">
            <input id="myEmail" type="email" class="form-control" placeholder="Email" name="email">
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <textarea id="myMessage" class="form-control" rows="5" placeholder="Write something..." name="message"></textarea>
          </div>
        </div>
        <div class="row mt-2 mb-5 justify-content-center">
          <button type="button" class="btn-custom btn" data-toggle="modal" name="submit" data-target="#contactModal">Send Message</button>
        </div>
      </form>
    </div>

    <!-- CONTACT MODAL -->
    <div id="contactModal" class="modal fade text-center justify-content-center" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

          <!-- modal header -->
          <div class="modal-header">
            <h6 id="exampleModalLabel" class="modal-title">Message successfully sent</h6>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>

          <!-- modal body -->
          <div class="modal-body font-weight-light justify-content-center">
            <h6>Thank you for contacting <span class="font-weight-bolder text-success">Landscaper.</span><br>We will be in touch with you soon!</h6>
          </div>

          <!-- modal footer -->
          <div class="modal-footer mx-auto">
            <button type="button" class="btn-custom btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
