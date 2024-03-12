<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Danh Mục /</span><span> Thêm Danh Mục</span>
            </h4>
            
            <div class="app-ecommerce">
            <form action="index.php?act=create_danh_muc" method="post">
              <!-- Add Product -->
              <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            
                <div class="d-flex flex-column justify-content-center">
                  <h4 class="mb-1 mt-3">Thêm Danh Mục</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                  <input type="reset" class="btn btn-label-secondary" value="Nhập Lại">
                  <a href="index.php?act=list_dm" class="btn btn-label-primary"> Danh Sách</a>
                  <input type="submit" class="btn btn-primary" value="Xác Nhận" name="submit">
                </div>
              </div>
              
              <div class="row">
            
                <!-- First column-->
                <div class="col-12 col-lg-12">
                  <!-- Product Information -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-tile mb-0">Thông Tin Danh Mục</h5>
                    </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-name">Tên Danh Mục</label>
                        <input type="text" class="form-control" placeholder="Tên Danh Mục" name="tendm" aria-label="tendm">
                      </div>
                    </div>
                  </div>            
                </div>
                <!-- /Second column -->
              </div>
              </form>
            </div>
</div>
                      <!-- / Content -->