<div class="product-details-area pb-100 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                            extract($sanpham);
                        ?>
                    <div class="product-details-img-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="swiper-container product-details-big-img-slider-2 pd-big-img-style">
                                <a href="#">
                                    <img src="../uploads/<?=$image?>" alt="">
                                </a>
                            </div>
                            <div class="product-details-small-img-wrap">
                                <div class="swiper-container product-details-small-img-slider-2 pd-small-img-style pd-small-img-style-modify"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content" data-aos="fade-up" data-aos-delay="400">
                            <a style="font-size: 25px" href="?act=chitietsp&id=<?=$id?>"><?=$tensp?></a>
                            <div class="product-details-price">
                                <span class="old-price"><?=number_format($giasp, 0, ',', '.')?>đ</span>
                                <span class="new-price"><?=number_format($giakm, 0, ',', '.')?>đ</span>
                            </div>
                            <div class="trangthai">
                                <?php if($soluong<1) {?>
                                    <p class="hethang">*Tạm thời hết hàng</p>
                                <?php }else{ ?>
                                    <p><span><?= $soluong;?></span> sản phẩm có sẵn</p>
                                <?php } ?>
                            </div>
                            <?php
                                extract($danhmuc);
                            ?>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span class="title">Category:</span>
                                        <ul>
                                            <li><a href="?act=spdanhmuc&id=<?=$id?>"><?=$tendm?></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <?php
                                extract($sanpham);
                                if($soluong>0) {
                            ?>
                                <div class="product-details-action-wrap">
                                    <div class="single-product-cart btn-hover">
                                        <button onclick="themgiohang(<?= $id; ?>,<?= $giakm; ?>)" class="product-action-btn-2 theme-color" title="Add To Cart"><i class="pe-7s-cart"></i> Thêm Vào Giỏ Hàng</button>
                                    </div>
                                    <div class="single-product-cart btn-hover">
                                        <form action="?act=chitietsp&id=<?= $id?>" method="post">
                                            <button type="submit" name="datngayct" class="product-action-btn-2 theme-color">Mua ngay</button>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-area pb-85">
            <div class="container">
                <div class="description-review-topbar nav" data-aos="fade-up" data-aos-delay="200">
                    <a class="active" data-bs-toggle="tab" href="#des-details1"> Mô tả </a>
                    <a data-bs-toggle="tab" href="#des-details3" class=""> Đánh giá </a>
                </div>
                <div class="tab-content">
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-content text-center">
                            <p data-aos="fade-up" data-aos-delay="400"><?=$mota?></p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div id="loadbinhluan" class="review-wrapper">
                            <?php extract($dembl);?>
                            <h3><span id="countbl"><?=$countbl?></span> đánh giá</h3>
                            <?php
                                foreach ($listbl as $bl) {
                                    extract($bl);
                                    echo '<div class="single-review">
                                            <div class="review-img">
                                                <img src="../assets/images/userbl.png" alt="">
                                            </div>
                                            <div class="review-content">
                                                <h5><span>'.$hovaten.'</span> - '.$ngaybinhluan.'</h5>
                                                <p>'.$noidung.'</p>
                                            </div>
                                        </div>';
                                }
                                ?>
                            
                        </div>
                        <?php if(isset($_SESSION['user'])) : ?>
                                <?php extract($sanpham); ?>
                                    <div class="ratting-form-wrapper">
                                        <div class="ratting-form">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style mb-15">
                                                            <label>Đánh giá của bạn <span>*</span></label>
                                                            <textarea id="noidung"></textarea>
                                                            <p id="binhluanErr" style="color:red;"><?= $noidungErr; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <input id="ngaybinhluan" type="hidden" value="<?= date('Y-m-d'); ?>">
                                                            <button class="btn btn-dark" onclick="binhluanjs(<?= $id ?>,'<?= $_SESSION['user']['hovaten'] ?>')">Gửi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product-area pb-95">
            <div class="container">
                <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                    <h2>Sản phẩm liên quan</h2>
                </div>
                
                <div class="related-product-active swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach($splq as $sp) : ?>
                            <?php extract($sp); if($soluong>0) {?>
                            <div class="swiper-slide">
                                <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                                    <div class="product-img img-zoom mb-25">
                                        <a href="?act=chitietsp&id=<?= $id?>">
                                            <img src="../uploads/<?= $image?>" alt="">
                                        </a>
                                        <div class="product-badge badge-top badge-right badge-pink">
                                            <span>-<?= $khuyenmai?>%</span>
                                        </div>
                                        <div class="product-action-2-wrap">
                                            <input type="hidden" name="id" value="<?= $id?>">
                                            <input type="hidden" name="tensp" value="<?= $tensp?>">
                                            <input type="hidden" name="image" value="<?= $image?>">
                                            <input type="hidden" name="giasp" value="<?= $giakm?>">
                                            <button data-id="<?= $id?>" onclick="themgiohang(<?= $id?>,<?= $giakm?>)" class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Thêm Vào Giỏ Hàng</button>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="?act=chitietsp&id=<?= $id?>"><?= $tensp?></a></h3>
                                        <div class="product-price">
                                            <span class="old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                                            <span class="new-price"><?= number_format($giakm, 0, ',', '.')?>₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } endforeach; ?>
                    </div>
                </div>
            </div>
        </div>