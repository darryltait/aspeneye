<?php get_header(); ?>

<main>
<div class="container">
<h2 class="text-center display-2 mt-5 mb-4">Work with a lot of freelancers? </h2>
        <h2 class="text-center display-2 mt-2 mb-4 fade-in2">You need an extra set of eyes to look over things.</h2>

        <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="card service-box p-3">

            
            <h4 class="card-title">Specializing in Custom Sites</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eveniet debitis quasi dignissimos quae odit iusto reiciendis et hic ipsum?</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="card service-box p-3">
            <h4 class="card-title">Tailored to Your Business</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quam obcaecati quod adipisci ea fugiat accusantium error, odit cumque illum et repellat iure impedit?</p>
        </div>
        </div>
        </div>
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

</main>

<?php get_footer(); ?>