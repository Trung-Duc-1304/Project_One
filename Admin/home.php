<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-8">
              <div class="card-body">
                <h6 class="card-title mb-1 text-nowrap">Xin chúc mừng Katie!</h6>
                <small class="d-block mb-3 text-nowrap">Bán chạy nhất của tháng</small>

                <h5 class="card-title text-primary mb-1">$48,9k</h5>
                <small class="d-block mb-4 pb-1 text-muted">78% mục tiêu</small>

                <a href="javascript:;" class="btn btn-sm btn-primary">Xem doanh số bán hàng</a>
              </div>
            </div>
            <div class="col-4 pt-3 ps-0">
              <img src="../assets/admin/img/illustrations/prize-light.png" width="90" height="140" class="rounded-start" alt="View Sales">
            </div>
          </div>
        </div>
      </div>
      <!-- New Visitors & Activity -->
      <div class="col-lg-8 mb-4">
        <div class="card">
          <div class="card-body row g-4">
            <div class="col-md-6 pe-md-4 card-separator">
              <div class="card-title d-flex align-items-start justify-content-between">
                <h5 class="mb-0">Khách mới</h5>
                <small>Tuần trước</small>
              </div>
              <div class="d-flex justify-content-between">
                <div class="mt-auto">
                  <h2 class="mb-2">23%</h2>
                  <small class="text-danger text-nowrap fw-medium"><i class='bx bx-down-arrow-alt'></i> -13.24%</small>
                </div>
                <div id="visitorsChart"></div>
              </div>
            </div>
            <div class="col-md-6 ps-md-4">
              <div class="card-title d-flex align-items-start justify-content-between">
                <h5 class="mb-0">Hoạt động</h5>
                <small>Tuần trước</small>
              </div>
              <div class="d-flex justify-content-between">
                <div class="mt-auto">
                  <h2 class="mb-2">82%</h2>
                  <small class="text-success text-nowrap fw-medium"><i class='bx bx-up-arrow-alt'></i> 24.8%</small>
                </div>
                <div id="activityChart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ New Visitors & Activity -->

      <div class="col-md-12 col-lg-4">
        <div class="row">
          <div class="col-lg-6 col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../assets/admin/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                  </div>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cardOpt6">
                      <a class="dropdown-item" href="?act=list_order">Xem thêm</a>
                      <!-- <a class="dropdown-item" href="javascript:void(0);">Xóa bỏ</a> -->
                    </div>
                  </div>
                </div>
                <span class="d-block">Đơn Hàng</span>

                <h4 class="card-title mb-1"> <?= $Count_order['total_orders'] ?></h4>
                <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-body pb-2">
                <span class="d-block fw-medium">Doanh Thu</span>
                <h4 class="card-title mb-0"> <?= number_format($Count_price['total_price']) ?> VND</h4>
                <div id="profitChart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-body pb-0">
                <span class="d-block fw-medium">Chi phí</span>
              </div>
              <div id="expensesChart" class="mb-2"></div>
              <div class="p-3 pt-2">
                <small class="text-muted d-block text-center">$21k Chi phí nhiều hơn tháng trước</small>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../assets/admin/img/icons/unicons/briefcase.png" alt="Credit Card" class="rounded">
                  </div>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                      <a class="dropdown-item" href="javascript:void(0);">Xem thêm</a>
                      <a class="dropdown-item" href="javascript:void(0);">Xóa bỏ</a>
                    </div>
                  </div>
                </div>
                <span class="d-block">Giao dịch</span>
                <h4 class="card-title mb-1">$14,857</h4>
                <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Total Income -->
      <div class="col-md-12 col-lg-8 mb-4">
        <div class="card">
          <div class="row row-bordered g-0">
            <div class="col-md-8">
              <div class="card-header">
                <h5 class="card-title mb-0">Tổng thu nhập</h5>
                <small class="card-subtitle">Tổng quan về báo cáo hàng năm</small>
              </div>
              <div class="card-body">
                <div id="totalIncomeChart"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-header d-flex justify-content-between">
                <div>
                  <h5 class="card-title mb-0">Báo cáo</h5>
                  <small class="card-subtitle">Trung bình hàng tháng $45,578k</small>
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                    <a class="dropdown-item" href="javascript:void(0);">28 ngày qua</a>
                    <a class="dropdown-item" href="javascript:void(0);">Tháng trước</a>
                    <a class="dropdown-item" href="javascript:void(0);">Năm ngoái</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="report-list">
                  <div class="report-list-item rounded-2 mb-3">
                    <div class="d-flex align-items-start">
                      <div class="report-list-icon shadow-sm me-2">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/admin/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">
                      </div>
                      <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                        <div class="d-flex flex-column">
                          <span>Thu nhập</span>
                          <h5 class="mb-0">$42,845</h5>
                        </div>
                        <small class="text-success">+2.34k</small>
                      </div>
                    </div>
                  </div>
                  <div class="report-list-item rounded-2 mb-3">
                    <div class="d-flex align-items-start">
                      <div class="report-list-icon shadow-sm me-2">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/admin/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">
                      </div>
                      <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                        <div class="d-flex flex-column">
                          <span>Chi phí</span>
                          <h5 class="mb-0">$38,658</h5>
                        </div>
                        <small class="text-danger">-1.15k</small>
                      </div>
                    </div>
                  </div>
                  <div class="report-list-item rounded-2">
                    <div class="d-flex align-items-start">
                      <div class="report-list-icon shadow-sm me-2">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/admin/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">
                      </div>
                      <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                        <div class="d-flex flex-column">
                          <span>Lợi nhuận</span>
                          <h5 class="mb-0">$18,220</h5>
                        </div>
                        <small class="text-success">+1.35k</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Total Income -->
      </div>
      <!--/ Total Income -->
    </div>

    <div class="row">
      <!-- Performance -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Hiệu suất</h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="performanceId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceId">
                <a class="dropdown-item" href="javascript:void(0);">28 ngày qua</a>
                <a class="dropdown-item" href="javascript:void(0);">Tháng trước</a>
                <a class="dropdown-item" href="javascript:void(0);">Năm ngoái</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <small>Thu nhập: <span class="fw-medium">$846.17</span></small>
              </div>
              <div class="col-6">
                <small>Việc bán hàng: <span class="fw-medium">25.7M</span></small>
              </div>
            </div>
          </div>
          <div id="performanceChart"></div>
        </div>
      </div>
      <!--/ Performance -->

      <!-- Conversion rate -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">Tỷ lệ chuyển đổi</h5>
              <small class="text-muted">So với tháng trước</small>
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="conversionRate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="conversionRate">
                <a class="dropdown-item" href="javascript:void(0);">Chọn tất cả</a>
                <a class="dropdown-item" href="javascript:void(0);">Làm cho khỏe lại</a>
                <a class="dropdown-item" href="javascript:void(0);">Chia sẻ</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex flex-row align-items-center gap-1 mb-4">
                <h2 class="mb-2">8.72%</h2>
                <small class="text-success fw-medium">
                  <i class='bx bx-chevron-up'></i>
                  4.8%
                </small>
              </div>
              <div id="conversionRateChart"></div>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-4">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Số lần hiển thị</h6>
                    <small class="text-muted">12.4k lượt truy cập</small>
                  </div>
                  <div class="user-progress">
                    <i class='bx bx-up-arrow-alt text-success me-2'></i> <span>12.8%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Đã thêm vào giỏ hàng</h6>
                    <small class="text-muted">32 Sản phẩm trong giỏ hàng</small>
                  </div>
                  <div class="user-progress">
                    <i class='bx bx-down-arrow-alt text-danger me-2'></i> <span>- 8.5% </span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Thủ tục thanh toán</h6>
                    <small class="text-muted">21 Kiểm tra sản phẩm</small>
                  </div>
                  <div class="user-progress">
                    <i class='bx bx-up-arrow-alt text-success me-2'></i> <span>9.12%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Đã mua</h6>
                    <small class="text-muted">12 Đơn đặt hàng</small>
                  </div>
                  <div class="user-progress">
                    <i class='bx bx-up-arrow-alt text-success me-2'></i> <span>2.83%</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Conversion rate -->

      <div class="col-md-12 col-lg-4">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../assets/admin/img/icons/unicons/cc-warning.png" alt="Credit Card" class="rounded">
                  </div>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="cardOpt5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
                      <a class="dropdown-item" href="javascript:void(0);">Xem thêm</a>
                      <a class="dropdown-item" href="javascript:void(0);">Xóa bỏ</a>
                    </div>
                  </div>
                </div>
                <span class="d-block mb-1">Doanh thu</span>
                <h3 class="card-title text-nowrap mb-2">$42,389</h3>
                <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +52.18%</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
            <div class="card">
              <div class="card-body">
                <span class="d-block fw-medium">Việc bán hàng</span>
                <h3 class="card-title mb-2">482k</h3>
                <span class="badge bg-label-info mb-3">+34%</span>
                <small class="text-muted d-block">Mục tiêu bán hàng</small>
                <div class="d-flex align-items-center">
                  <div class="progress w-75 me-2" style="height: 8px;">
                    <div class="progress-bar bg-info" style="width: 78%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>78%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between gap-3">
                  <div class="d-flex align-items-start flex-column justify-content-between">
                    <div class="card-title">
                      <h5 class="mb-0">Chi phí</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                      <div class="mt-auto">
                        <h3 class="mb-2">$84.7k</h3>
                        <small class="text-danger text-nowrap fw-medium"><i class='bx bx-down-arrow-alt'></i> 8.2%</small>
                      </div>
                    </div>
                    <span class="badge bg-label-secondary rounded-pill">Năm 2021</span>
                  </div>
                  <div id="expensesBarChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-12 mb-4 mb-md-0">
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th>Sản phẩm</th>
                  <th>Giá</th>
                  <th>Tình trạng</th>
                  <th>hành động</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <?php foreach ($list_order_home as $Home) :
                  extract($Home);
                ?>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="../uploads/<?= $image ?>" alt="Oneplus" height="32" width="32" class="me-2 rounded-2 ">
                        <div>
                          <span class="fw-medium lh-1"><?= $tensp ?></span>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-muted lh-1"><?= number_format($giasp) ?> VNĐ</div>
                      <small class="text-muted"><?= $Pay ?></small>
                    </td>
                    <td>
                      <?php
                      switch ($Home['trangthaidh']) {
                        case "0":
                          echo "<span class='badge bg-label-info'>Chờ xác nhận</span><br>";
                          break;
                        case '1':
                          echo "<span class='badge bg-label-warning'>Chờ lấy hàng</span><br>";
                          break;
                        case '2':
                          echo "<span class='badge bg-label-primary'>Đang giao hàng</span><br>";
                          break;
                        case '3':
                          echo "<span class='badge bg-label-success'>Đã giao</span><br>";
                          break;
                        case "-1":
                          echo "<span class='badge bg-label-danger'>Đã hủy</span><br>";
                          break;
                        default:
                          echo "Trạng thái không xác định<br>";
                          break;
                      }
                      ?>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="?act=list_order"><i class="bx bx-edit-alt me-1"></i> Xem chi tiết</a>
                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Xóa bỏ</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- / Content -->