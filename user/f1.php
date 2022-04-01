<div class="row" data-keyframe='<?= token();?>'>
    <div class="col-md-6 offset-md-3 col-sm-12 col-lg-6 offset-lg-3" style="margin-top: 4em; margin-bottom: 4em">
      
        
<div class="">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-gray-600"><strong>Hi <?= ucwords($_SESSION['raws']['firstname']); ?>,</strong></h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body" style="padding-bottom: 2em">
                      <h5 class="card-title text-center bold"><b>Are you ready to take your preliminary?</b></h5>
 



            <p class="text-center">
                <a href="#" class="btn btn-primary btn-icon-split" id="rikro">
                    <span class="icon text-white-50">
                      <i class="fa fa-long-arrow-right"></i>
                    </span>
                    <span class="text">Yes</span>
                  </a>
            </p>
       
                </div>
              </div>
            </div>
        
    </div>
      

</div>
<script type="text/javascript">
$("#rikro").click(function(){
    window.location.href = "<?= Inaki::path() ?>app/i/<?= uniqid(). token(). uniqid(). time() . sha1(time()); ?>?turnkey=<?= token(); ?>";
});
</script>