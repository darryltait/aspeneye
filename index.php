<?php get_header(); ?>

<main>
<div class="container mt-5">
    <div class="row title-bar">
        <div class="col-md-6 col-lg-6 dark">
            <h1 class="text-center pb-4 title fade-in1">Aspen Eye Studio</h1>

        </div>
        <div class="col-md-6 col-lg-6">
        <div class="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/aspeneye1.jpg" alt="Aspen trees image" class="">
        </div>
        </div>
    </div>
    <div class="row d-flex align-items-center">
    <div class="col-md-6 col-lg-6 order-md-2">
       
        <!-- <div class="bg-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/aspeneye1.jpg" alt="Aspen trees image" class="aspenimage">
        </div> -->
    </div>
    <div class="col-md-6 col-lg-6 order-md-1">
        
        <h3 class="fade-in2 text-center">Helping individuals and businesses with their web-site needs.</h3>
        <h3 class="text-center fade-in3 and">&</h3>
        <h3 class="fade-in4 text-center">Providing  quality control services to ad agencies.</h3>
        <!-- <button type="submit" class="btn  btn-sm btn-outline-dark">Sign-up to get updates</button> -->
    </div>
   
    </div>
</div>  
<!-- <?php
    if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
    <div class="container">
    <?php the_post_thumbnail('full'); ?>
    </div>
    <?php endwhile; ?>
       <?php endif; ?> -->


<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 col-lg-6">
            <div class="card p-3 service-box">
            <h3 class="text-center">Web Design</h3>
            <p>Specializing in custom-themed WordPress sites that reflect you and your business.</p>
            </div>
            
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card p-3 service-box">
            <h3 class="text-center">QC for Ad Agencies</h3>
            <p>Need an extra set of eyes to look over your work going out to printers and vendors?</p>
            </div>
           
        </div>
        <!-- <div class="col-md-4 col-lg-4">
            <h3>Feature 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quidem debitis, nulla aliquid ea sunt.</p>
        </div> -->
        
    </div>
</div>
<div class="container text-center mt-5">
    <h3 class="mb-3">Need help with your website or files before releasing to vendors?</h3

    
    
    <!-- Button trigger modal -->

<button type="button" class="btn btn-sm contact mb-4" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
  Let's talk!
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Contact Me</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary w-100">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</div>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3">
            <a href="" class="card">
            <img src="" alt="">
            <h4>Subtitle</h4>
            </a>
        </div>
        <div class="col-md-3 col-lg-3">
            <a href="" class="card">
            <img src="" alt="">
            <h4>Subtitle</h4>
            </a>
        </div>
        <div class="col-md-3 col-lg-3">
            <a href="" class="card">
            <img src="" alt="">
            <h4>Subtitle</h4>
            </a>
        </div>
        <div class="col-md-3 col-lg-3">
            <a href="" class="card">
            <img src="" alt="">
            <h4>Subtitle</h4>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, itaque vero.
            </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatibus temporibus similique nam nesciunt! Expedita quisquam voluptates rem dignissimos eum.</p>
            <button type="submit">Sign unpack</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-md-6 col-lg-6">
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eveniet voluptas quasi.</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut tempora molestiae corrupti, perferendis, ex totam id omnis consectetur impedit explicabo iusto laboriosam vitae excepturi eveniet nihil! Voluptates necessitatibus repellendus vero?</p>
    </div>
    <div class="col-md-6 col-lg-6">
        <img src="<?php echo get_template_directory_uri(); ?>/img/aspen-629371_640.jpg" class="img-fluid" alt="">
    </div>
    </div>
</div> -->
  
</main>
<?php get_footer(); ?>