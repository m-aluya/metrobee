  <?php include_once 'classes/Classess.php';  ?>
<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add products</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= Inaki::path() ?>console/store" enctype='multipart/form-data'>
                        <?php
                        if(isset($_GET['id'])){
                            Inaki::deleteItem(intval($_GET['id']), 'products');
                        }
                        
                        if(isset($_POST['sub'])){
                            if(!empty($_FILES)){
                                $pic = Commerce::fileUploader();
                                Commerce::addproduct(strip_tags($_POST['name']), intval($_POST['price']), $pic);
                            }
                        }
                        
                        
                        
                        ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Picture</label><br/>
                            <input type="file" name="file" required/>
                        </div>
                        <button type="submit" class="btn btn-primary" name="sub">Add product</button>
                    </form>
                </div>
              </div>
    </div>
    
    <div class="col-md-8">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Product list</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Picture</th>
                      <th>Price</th>
                      <th>Delete</th>
                     </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Name</th>
                      <th>Picture</th>
                      <th>Price</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php Commerce::productList();  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
</div>