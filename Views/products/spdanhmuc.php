<section>
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container-fluid">
        <div class="row cs_gap_y_70">
            <div class="col-lg-3">
                <div class="cs_filter_sidebar">
                    <div class="cs_filter_sidebar_heading cs_medium">
                        <div class="cs_filter_sidebar_heading_in">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_395_2711)">
                                    <path d="M14.2249 3.46555C12.5384 3.46555 10.8518 3.46555 9.16531 3.4598C8.99666 3.4598 8.93268 3.51153 8.88034 3.6667C8.49651 4.81038 7.42643 5.569 6.22259 5.56325C5.00712 5.56325 3.93123 4.78739 3.55903 3.63796C3.5125 3.49429 3.44853 3.45406 3.30314 3.4598C2.43079 3.46555 1.55845 3.46555 0.686101 3.4598C0.360425 3.4598 0.08709 3.22992 0.0231179 2.93681C-0.0466698 2.62072 0.0987213 2.29314 0.395319 2.1667C0.523263 2.11498 0.67447 2.09199 0.819861 2.09199C1.64568 2.08624 2.47732 2.08624 3.30314 2.09199C3.44853 2.09199 3.5125 2.05176 3.55903 1.90808C3.93123 0.770148 4.99549 0.0057803 6.20515 3.31758e-05C7.42062 -0.00571395 8.48488 0.735665 8.86871 1.88509C8.92687 2.0575 9.00829 2.09199 9.17694 2.09199C12.4744 2.08624 15.7777 2.08624 19.0752 2.08624C19.145 2.08624 19.2206 2.08624 19.2903 2.08624C19.7091 2.10923 19.994 2.39658 19.994 2.78739C19.9882 3.17819 19.6974 3.4598 19.2729 3.46555C18.3133 3.4713 17.3537 3.46555 16.3942 3.46555C15.6788 3.46555 14.9519 3.46555 14.2249 3.46555ZM4.80358 2.7759C4.80358 3.5575 5.43748 4.18969 6.22259 4.18969C7.00189 4.18969 7.6358 3.56325 7.64161 2.79888C7.64743 2.01727 7.01934 1.38509 6.22841 1.37934C5.43748 1.3736 4.80358 1.99429 4.80358 2.7759Z" fill="currentColor" />
                                    <path d="M16.5167 8.53426C17.4064 8.53426 18.2846 8.53426 19.1628 8.53426C19.2791 8.53426 19.3954 8.53426 19.5059 8.56299C19.8083 8.64345 20.006 8.93081 20.0002 9.2469C19.9886 9.5515 19.7792 9.81587 19.4768 9.88483C19.3779 9.90782 19.2733 9.91357 19.1744 9.91357C18.3486 9.91357 17.5169 9.91931 16.6911 9.91357C16.5515 9.91357 16.4934 9.94805 16.4469 10.086C16.063 11.2412 15.0046 11.9998 13.7833 12.0055C12.5678 12.0055 11.5094 11.2584 11.1256 10.109C11.0674 9.9423 10.986 9.91357 10.829 9.91357C7.51403 9.91931 4.19912 9.91931 0.890016 9.91357C0.773703 9.91357 0.65739 9.91357 0.541077 9.88483C0.192139 9.81012 -0.0230402 9.51127 0.00603803 9.15495C0.0293006 8.82161 0.29682 8.55725 0.645759 8.54C0.732994 8.53426 0.820228 8.53426 0.907463 8.53426C4.20493 8.53426 7.50822 8.53426 10.8057 8.54C10.9802 8.54 11.0674 8.50552 11.1314 8.32161C11.5094 7.18368 12.5911 6.43081 13.7949 6.43656C14.9988 6.4423 16.0688 7.21242 16.4469 8.35035C16.4701 8.40207 16.4934 8.46529 16.5167 8.53426ZM13.7717 10.6205C14.5568 10.6262 15.1907 10.0113 15.1965 9.24115C15.2023 8.4538 14.5859 7.82161 13.7949 7.81012C13.0098 7.79862 12.3585 8.43081 12.3527 9.20667C12.3527 9.98828 12.9807 10.6147 13.7717 10.6205Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_395_2711">
                                        <rect width="20" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Lọc danh mục</span>
                        </div>
                    </div>
                    <div class="cs_filter_sidebar_in">
                        <div class="cs_filter_sidebar_in">
                            <!-- DANHMUC -->
                            <div>
                                <h4 class="mt-5 cs_filter_widget_title cs_medium cs_fs_18">Danh mục <span></span></h4>
                                <?php
                                foreach ($listdm as $dm) {
                                    extract($dm);
                                    $demsp = dem_sp_dm($id);
                                    echo '<li class="d-flex justify-content-between align-items-center  p-1">
                                    <a class="fw-bold" href="?act=spdanhmuc&id=' . $id . '">' . $tendm . '
                                    </a>
                                    <span class="badge rounded-pill text-bg-warning">' . $demsp['countsp'] . '</span>
                                    </li>';
                                }
                                ?>
                            </div>

                        </div>
                        <!-- <div class="cs_filter_widget mt-3">
                            <h3 class="cs_filter_widget_title cs_medium cs_fs_18">Price <span></span></h3>
                            <div class="cs_range_slider_wrap">
                                <form  action="?act=spdanhmuc" method="post">
                                    <label for="giaspdau">Giá thấp nhất:</label>
                                    <select  class="form-select" name="giaspdau" id="giaspdau">
                                        <option value="150000">150.000 VNĐ</option>
                                        <option value="200000">200.000 VNĐ</option>
                                        <option value="300000">300.000 VNĐ</option>
                                    </select>
                                    <label for="giaspcuoi">Giá cao nhất:</label>
                                    <select class="form-select" name="giaspcuoi" id="giaspcuoi">
                                        <option value="300000">300.000 VNĐ</option>
                                        <option value="500000">500.000 VNĐ</option>
                                        <option value="1000000">1000.000 VNĐ</option>
                                    </select>
                                    <div class="d-flex justify-content-center ">
                                        <input class="btn btn-primary mt-3" type="submit" value="Lọc Sản Phẩm" name="submitlocgia">
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- .col -->
            <div class="col-lg-9">
                <div class="cs_product_grid cs_product_grid_3 cs_grid_view">
                    <?php
                    foreach ($list_sp_dm as $sp) {
                        extract($sp); ?>
                        <div class="cs_product_col">
                            <div class="cs_product cs_style_1">
                                <div class="cs_product_thumb position-relative">
                                    <a href="?act=chitietsp&id=<?= $id ?>">
                                        <img src="./uploads/<?= $image ?>" style=" object-fit: cover; height:400px;" alt="">
                                    </a>
                                    <div class="cs_discount_badge cs_white_bg cs_fs_14 cs_primary_color position-absolute">-25%</div>
                                    <div class="cs_cart_badge position-absolute">
                                        <a href="wishlist.html" class="cs_cart_icon cs_accent_bg cs_white_color">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="?act=chitietsp&id=<?= $id ?>" class="cs_cart_icon cs_accent_bg cs_white_color">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </div>
                                    <a href="cart.html" class="cs_cart_btn cs_accent_bg cs_fs_16 cs_white_color cs_medium position-absolute">Add To Cart</a>
                                </div>
                                <div class="cs_product_info text-center">
                                    <h3 class="cs_product_title cs_fs_21 cs_medium">
                                        <a href="?act=chitietsp&id=<?= $id ?>"><?= $tensp ?></a>
                                    </h3>
                                    <div class="cs_single_product_review">
                                        <div class="cs_rating_container">
                                            <div class="cs_rating cs_size_sm" data-rating="4.5">
                                                <div class="cs_rating_percentage"></div>
                                            </div>
                                        </div>
                                        <span>(5)</span>
                                        <span>Stock: <span class="cs_accent_color">12 in stock</span></span>
                                    </div>
                                    <p class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium">$250.00</p>
                                    <p class="cs_product_desc">Our men black t-shirt offers a classic fit and is made from high-quality pure cotton <br>materials to keep you feeling and looking great.</p>
                                    <div class="cs_action_btns">
                                        <a href="#" class="cs_btn cs_style_1 cs_fs_16 cs_medium cs_accent_btn">Add to Cart</a>
                                        <button class="cs_heart_btn"><i class="fa-regular fa-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="cs_height_75 cs_height_lg_50"></div>
                <!-- <ul class="cs_pagination cs_fs_21 cs_semibold cs_mp0">
                        <li class="cs_page_item active"><a class="cs_page_link" href="#">01</a></li>
                        <li class="cs_page_item"><a class="cs_page_link" href="#">02</a></li>
                        <li class="cs_page_item"><a class="cs_page_link" href="#">03</a></li>
                        <li class="cs_page_item"><a class="cs_page_link" href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul> -->
            </div>
            <!-- .col -->
        </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
    <hr>
</section>