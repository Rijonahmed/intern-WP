<?php
get_header();

?>
<section>
<div id="slider-section"  class="single-item">
<?php
    query_posts('post_type=slide&post_status=publish&post_per_page=3&order=ASC&paged='.get_query_var       ('post'));
    if(have_posts()) :
        while(have_posts()) :
            the_post();
    ?>

  <div class="single-slider">
      <div class="slider-content">
          <h4><?php the_title();?></h4>
          <h6><?php the_content(); ?></h6>
          <a href="">read more</a>
      </div>
     <div class="silder-img"><?php the_post_thumbnail(); ?></div>
      
  </div>

  <?php 
  endwhile; endif;
  ?>

</div>

</section>

<!-- Grand Hotel section -->

<section>
<div class="row">
    <div class="col-md-4" style="background-image: url('https://cdn.britannica.com/45/5645-050-B9EC0205/head-treasure-flower-disk-flowers-inflorescence-ray.jpg'); background-repeat: no-repeat; background-size: cover;">
    <h1 class="">Grand Hotel</h1>
      
    </div>
    <div class="col-md-4 ">
<img class="w-100" src="https://cdn.britannica.com/45/5645-050-B9EC0205/head-treasure-flower-disk-flowers-inflorescence-ray.jpg" alt="">
    </div>
    <div class="col-md-4">
    <img class="w-100" src="https://cdn.britannica.com/45/5645-050-B9EC0205/head-treasure-flower-disk-flowers-inflorescence-ray.jpg" alt="">
      </div>
  </div>
</section>

<!-- our rooms section -->
<section>
  <div class="text-center">
    <p class="fs-1">&#8212;</p>
  <h4>COMFORTABLE STAY</h4>
  <h2>OUR ROOMS</h2>
  <h2>Style & Comfort</h2>
  </div>
<div class="card-group">
  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/512/1088/1088537.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/512/1088/1088537.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/512/1088/1088537.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</section>

<!-- package section -->
<section  class="py-3" style="background-image: url('https://thegrandhotel.com/wp-content/themes/themariner-pro/assets/img/pkg-bg.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="d-flex gap-4 justify-content-center my-5" >
<div class="card" style="width: 30rem;">
  <img src="https://thegrandhotel.com/wp-content/uploads/slide-entrance.jpg.webp" class=" m-2" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title text-primary">FAMILY FUN PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta beatae nostrum. Reprehenderit optio suscipit officia vero inventore ullam vitae?</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
<div class="card" style="width: 30rem;">
  <img src="https://thegrandhotel.com/wp-content/uploads/GH-Amenities-Photoshopped_101-scaled.jpg.webp" class=" m-2" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt nesciunt voluptates asperiores tempora dignissimos exercitationem! Hic in asperiores quasi sunt.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
</div>
</section>

<!-- sister properties section -->

<section class="py-5" style="background-image: url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNhcnN8ZW58MHx8MHx8fDA%3D&w=1000&q=80'); background-repeat: no-repeat; background-size: cover;">
<p class="text-center">our</p>
<h1 class="text-center">sister properties</h1>
<div class="card-group gap-3 container">
<div class="card" style="width: 23rem;">
  <img src="https://img.freepik.com/premium-photo/front-view-generic-brandless-moder-car_110488-502.jpg" class=" m-2" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
<div class="card" style="width: 23rem;">
  <img src="https://img.freepik.com/premium-photo/front-view-generic-brandless-moder-car_110488-502.jpg" class=" m-2" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
<div class="card" style="width: 23rem;">
  <img src="https://img.freepik.com/premium-photo/front-view-generic-brandless-moder-car_110488-502.jpg" class=" m-2" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
</div>

</section>

<!-- widget section -->
<section>
  <div class="row">
    <div class="col-md-7">
     <div class="row">
      <div class="col-md-8">promos</div>
      <div class="col-md-4">follow us</div>
     </div>
    </div>
    <div class="col-md-5">
      <h1>map</h1>
    </div>

  </div>

</section>



<div class="bg-image" style="max-width: 22rem;">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp" class="w-100" />
  <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
    <h4>Custom heading</h4>
    <p class="m-0">paragraph</p>
  </div>
</div>


<?php
get_footer();