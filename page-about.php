<?php get_header(); ?>

<main>

<p>A former "print" guy who's <br/>now doing things on the web.</p>



<div class="container text-center mt-5">
    <h3 class="mb-3">Need help with your website or files before releasing to vendors?</h3

    
    
    <!-- Button trigger modal -->

<button type="button" class="btn btn-sm contact mb-4" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
  Let's talk about it!
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