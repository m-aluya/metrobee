<?php   
Inaki::head("Gallery");
?>
<body>
    <div class="container-fluid" style="margin-top: 3em">
        <section class="sign_in_area bg_color sec_pad" style="margin-top: 4em">
            <div class="container">
                  
               
    <?= Inaki::navbar(); ?>
                <h3 class="text-center">Metro Bee Gallery</h3><br/>
        <?php 
        
        function segmenta($id){
           
            if((int)$id % 2 == 0){
                return 'fadeInRight';
            } else {
                return 'fadeInLeft';
            }
        }
        
        
        
        function Gallery(){
            global $link;
            $sql = "select * from gallery";
            $result = $link->query($sql);
          $counter = 1;
            while ($row = mysqli_fetch_array($result) ) {
                  $lun = $counter++;
                if(intval($row['video']) == 1){
                    echo ' 
                <br/><div class="col-md-6 mb-3 col-lg-6 col-sm-12 prototype_content wow '. segmenta($lun).'" data-wow-delay="0.2s"> 
                

 <iframe width="560" height="315" src="'. $row['name'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
  </div>';
                    
                } else {
                    
                echo ' 
                <div class="col-md-6 col-lg-6 col-sm-12 mb-3 prototype_content wow '. segmenta($lun).'" data-wow-delay="0.2s"> 
                
<div class="card">
  <img src="'. Inaki::path(). $row['name'] .'" class="img-fluid card-img-top" alt="'.$row['details'].' "> 
  <div class="card-body">
    <p class="card-text wow '. segmenta($lun).'" data-wow-delay="0.2s">'. $row['details'] .'</p>
   
  </div></div></div>';
                }
                
                
                
                
               
              
            }
        } ?>
         
                <div class="row">
                    <?php 
                      Gallery();
                    ?>
                </div>          
            </div>
        </section>
    </div>

       <?= Inaki::footer(); ?>
    
</body>


</html>