<?php
add_action('genesis_after_content','welcome_to_fusion_section' );

function welcome_to_fusion_section(){
    ?>
    <section class="container">
        <h1 class="text-center">Welcome To fution</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, officiis maiores! Quos porro maxime nam quibusdam quam qui. Illum distinctio voluptatibus omnis impedit harum non magni maiores similique recusandae fuga.</p>

        <div class="card-group multiple-items">
  <div class="card mx-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mx-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mx-3">
    <img src="https://images.firstpost.com/wp-content/uploads/2022/02/tom-and-jerry.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

    </section>

    <?php
}