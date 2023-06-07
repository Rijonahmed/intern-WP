<?php



add_action('genesis_before_header', 'menu_intern_exam');
function menu_intern_exam(){
  ?>
<section>

  <div class="d-flex py-2 justify-content-between px-3 bg-primary">
  <div><i>The vacation you Desewe</i> </div>
  <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam.</div>
  </div>

</section>


<!-- navber section -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <h1>hello</h1>
   <div>
   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
    
      </ul>
   </div>
    </div>
  </div>
</nav>


  <?php

}














    
