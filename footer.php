
<footer class="copy bg-dark pt-3 pb-3 mt-4 border-black bottom">
    <div class="container">
        <div class="row">
            <!-- <div class="col text-center">
                <p class="small m-0 text-white ">Copyright &copy; <?php echo date('Y'); ?> All rights reserved</p>
            </div> -->
            
            
        
        
            <div class="col-12 text-center">
                <h4 class="h2 text-white">If you'd like to discuss a project, reach out!</h4>
                  <!-- Button trigger modal -->

<button type="button" class="btn btn-sm contact mb-4 mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
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
<p class="small m-0 text-white text-center">Copyright &copy; <?php echo date('Y'); ?></p>
</div>
        </div>
    </div>
</footer>




<?php wp_footer(); ?>
  </body>
</html>