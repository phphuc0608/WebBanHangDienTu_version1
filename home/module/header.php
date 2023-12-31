<div class="container-fluid">
    <div class="row" id="header_top">
      <div class="col-lg-2 py-2 pl-3">
        <i class="bi bi-telephone-fill pr-1"></i>
        0225.123.456
      </div>
      <div class="col-lg-2 py-2 pl-3">
        <i class="bi bi-phone-fill pr-1"></i>
        079.123.4567
      </div>
      <div class="col-lg-2 py-2 pl-3">
        <i class="bi bi-envelope-fill pr-1"></i>
        website@gmail.com
      </div>
      <div class="col-lg-6 py-2 pl-3">
        <form action="../home/xu_ly_tim_kiem_trang_chu.php" method="POST" class="input-group-sm input-group">
          <input name="tu_khoa" type="text" class="form-control my-0 mr-0" placeholder="Từ khóa">
          <div class="input-group-append">
            <button class="btn btn-sm btn-danger my-0" type="submit">
              Tìm kiếm
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12" id="header_bottom">
        <div class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="/<?php echo $root; ?>/home/trang_chu.php">
            <img src="/<?php echo $root; ?>/img/home/logo.png" id="logo">
          </a>
          <a class="navbar-toggler bg-color-2 px-3 py-2" type="a"
          data-toggle="collapse" data-target="#menu" aria-controls="collapse-navbar"
          aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list text-color-2"></i>
          </a>
          <div class="navbar-collapse collapse" id="menu">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item px-3">
                <a class="nav-link" href="/<?php echo $root; ?>/home/trang_chu.php">
                  <i class="bi bi-house-door-fill"></i> 
                  Trang chủ
                </a>
              </li>
							<li class="nav-item px-3">
                <a class="nav-link" style="cursor:pointer;">
                  <i class="bi bi-people-fill"></i> 
                  Giới thiệu
                </a>
              </li>
							<li class="nav-item  px-3 dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;">
                  <i class="bi bi-box-fill"></i> 
                  Loại sản phẩm
                </a>
								<div class="dropdown-menu">
                  <a class="dropdown-item" href="/<?php echo $root; ?>/home/gioi_thieu_tat_ca_san_pham.php">Tất cả sản phẩm</a>
                  <?php
                    $loai_san_phams = execute_query("SELECT * FROM loai_san_pham");
                    foreach($loai_san_phams as $loai_san_pham)
                      echo'<a href="/'.$root.'/home/gioi_thieu_san_pham_theo_loai.php?id='.$loai_san_pham['ma_loai_san_pham'].'" class="dropdown-item">'.$loai_san_pham['ten_loai_san_pham'].'</a>';
                  ?>
								</div>
							</li>
							<li class="nav-item dropdown px-3">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;">
                  <i class="bi bi-collection-fill"></i> 
                  Nhà sản xuất</a>
								<div class="dropdown-menu">
                <?php
                    $nha_san_xuats = execute_query("SELECT * FROM nha_san_xuat");
                    foreach($nha_san_xuats as $nha_san_xuat)
                      echo'
                      <a href="/'.$root.'/home/gioi_thieu_san_pham_theo_nha_san_xuat.php?id='.$nha_san_xuat['ma_nha_san_xuat'].'" class="dropdown-item" style="cursor:pointer;">'.$nha_san_xuat['ten_nha_san_xuat'].'</a>';
                  ?>
								</div>
							</li>
							<li class="nav-item px-3"><a href="/<?php echo $root; ?>/home/gioi_thieu_tat_ca_tin_tuc.php" class="nav-link"><i class="bi bi-newspaper"></i> Tin tức</a></li>
							<li class="nav-item px-3"><a class="nav-link" style="cursor:pointer;"><i class="bi bi-envelope-fill pr-2"></i> Thông tin liên hệ</a></li>
						</ul>
					</div>
        </div>
      </div>
    </div>
  </div>