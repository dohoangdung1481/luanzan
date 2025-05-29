<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường Đại Học Công Nghệ Thông Tin</title>

    <!-- Fonts & Bootstrap -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <style>
      body {
        background: #f4f7fa;
        font-family: 'Segoe UI', sans-serif;
      }

      .header {
        background: linear-gradient(to right, #aaeac6e5, #e86b2d);
        color: white;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      }

      /* Link trong navbar */
      .nav-link {
        color: white !important;
        font-weight: 600;
        font-size: 1.05rem;
        transition: color 0.3s ease;
        padding: 8px 16px;
        border-radius: 4px;
      }

      .nav-link:hover {
        color: #ffff99 !important;
        background-color: transparent !important;
        text-decoration: none;
      }

      /* Navbar Brand */
      .navbar-brand {
        font-size: 1.25rem;
        font-weight: bold;
        color: #ffff66 !important;
      }

      /* Giãn đều các item navbar */
      .navbar-nav {
        gap: 1rem;
        justify-content: center;
        align-items: center;
      }

      /* Căn chỉnh text bên phải navbar */
      .navbar-text {
        font-size: 0.95rem;
        color: #ccffcc;
        white-space: nowrap;
      }

      .navbar-text strong {
        color: #ffff66;
      }

      .content-box {
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      }

      .highlight {
        background: #fff3cd;
        padding: 10px;
        border-left: 4px solid #ffc107;
        margin-top: 1rem;
      }
    </style>
  </head>

  <body>
    <!-- HEADER -->
    <header class="py-3" style="background: linear-gradient(90deg, #0d6251c5, #008080); color: white;">
      <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex align-items-center mb-2 mb-md-0">
          <img src="/images/logolv.png" alt="Logo" width="160" class="me-3" />
          <div>
            <h3 class="m-0 fw-bold" style="font-size: 1.75rem; color: #efefef;">
              TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN
            </h3>
            <p class="m-0 fst-italic small" style="color: #fafafa; font-size: 0.9rem; font-weight: 500; letter-spacing: 0.05em;">
              Information Technology University
            </p>
            <p class="m-0 fst-italic small" style="color: #ccffcc;">
              Thành nhân trước thành danh - Sức mạnh của kiến thức giúp ta vững bước trên con đường đi đến thành công và tạo nên giá trị bền vững
            </p>
          </div>
        </div>

        <div class="text-end small" style="color: #e6f7ff;">
          <div>
            <a href="#" class="me-2" style="color: #e6f7ff;">SITEMAP</a> |
            <a href="#" class="mx-2" style="color: #e6f7ff;">LIÊN HỆ</a> |
            LANGUAGE:
            <img src="https://flagcdn.com/w40/vn.png" alt="VN" width="20" class="mx-1" />
            <img src="https://flagcdn.com/w40/gb.png" alt="EN" width="20" class="mx-1" />
          </div>
          <div class="mt-1">
            <i class="fab fa-facebook-square fs-5 me-2" style="color: #ffff66;"></i>
            <i class="fab fa-youtube fs-5" style="color: #ffff66;"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #006666;">
      <div class="container">
        <a class="navbar-brand fw-bold fs-5" href="/" style="color: #ffff66;">Trang Chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="/thoikhoabieu"> Thời Khoá Biểu</a></li>
            <li class="nav-item"><a class="nav-link" href="/dangkihocphan">Đăng Ký Học Phần</a></li>
            <li class="nav-item"><a class="nav-link" href="/xemdiem">Xem Điểm</a></li>
            <li class="nav-item"><a class="nav-link" href="/xemlichthi">Xem Lịch Thi</a></li>
            <li class="nav-item"><a class="nav-link" href="/hocphi">Học Phí</a></li>
          </ul>
          <span class="navbar-text ms-auto">
            Chào bạn <strong>Đỗ Hoàng Dũng (DH52000037)</strong>
          </span>
        </div>
      </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="container mt-5">
      <div class="p-4 rounded-4 shadow-sm" style="background-color: #f0ffff;">
        <h4 class="mb-4 text-uppercase fw-bold text-secondary">Thông Tin Quản Lý Đào Tạo</h4>
        <ol class="list-group list-group-numbered mb-4">
          <li class="list-group-item border-0 ps-0">Quy chế, quy định, văn bản hướng dẫn</li>
          <li class="list-group-item border-0 ps-0">Kiểm định cơ sở giáo dục và chương trình đào tạo</li>
          <li class="list-group-item border-0 ps-0">Hướng dẫn và quy trình</li>
          <li class="list-group-item border-0 ps-0">Biểu mẫu</li>
          <li class="list-group-item border-0 ps-0">Biểu đồ giảng dạy học tập</li>
          <li class="list-group-item border-0 ps-0">Chương trình đào tạo</li>
          <li class="list-group-item border-0 ps-0">Danh sách cán bộ tham gia công tác giảng dạy</li>
          <li class="list-group-item border-0 ps-0">Niên giám</li>
          <li class="list-group-item border-0 ps-0">Sổ tay đăng ký môn học</li>
        </ol>
        <div class="alert alert-warning rounded-3 mb-0">
          <strong>Sổ tay sinh viên học kỳ hè (2024 - 2025) & học kỳ 1 (2025 - 2026)</strong>
          <span class="text-muted d-block mt-1">(29/04/2025)</span>
        </div>
      </div>
    </main>

    <!-- TIN TỨC & SỰ KIỆN -->
    <section class="news-highlight py-5">
      <div class="container">
        <h2 class="text-3xl fw-bold mb-4" style="color: #004080;">Tin tức & Sự kiện nổi bật</h2>
        <div class="row">
          <div class="col-md-6 mb-4">
            <img src="/images/zxc.jpg" class="img-fluid rounded-3 shadow mb-3">
            <h5 class="fw-semibold">Triển lãm Thơ Thiền cổ Việt Nam – Hành trình 20 năm lan tỏa tinh thần Thiền qua thi ca</h5>
          </div>
          <div class="col-md-6">
            <div class="d-flex mb-3">
              <img src="/images/zxc.jpg" class="rounded-3 me-3" style="width: 100px; height: 70px; object-fit: cover;">
              <div>
                <span class="text-primary small fw-semibold">Nghiên cứu & Sáng tạo</span>
                <p class="mb-0 fw-medium">Vòng Bán kết cuộc thi Ra Khơi 2025: Top 7 dự án chính thức lộ diện</p>
              </div>
            </div>
            <div class="d-flex">
              <img src="/images/zxc.jpg" class="rounded-3 me-3" style="width: 100px; height: 70px; object-fit: cover;">
              <div>
                <span class="text-primary small fw-semibold">Hoạt động của Văn Lang</span>
                <p class="mb-0 fw-medium">Buổi tập huấn cán bộ Đoàn – Hội Khoa Kỹ thuật Cơ – Điện và Máy tính</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CHƯƠNG TRÌNH ĐÀO TẠO -->
    <section class="education-programs py-5" style="background-color: #e6f7ff;">
      <div class="container">
        <h2 class="text-3xl fw-bold mb-4" style="color: #004080;">Chương trình đào tạo</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="bg-white p-3 rounded-4 shadow-sm h-100">
              <img src="/images/zxc.jpg" class="img-fluid rounded-3 mb-3">
              <h5 class="fw-bold">Chương trình Đại học</h5>
              <p class="text-muted small">Giúp hình thành tư duy nghiên cứu, trang bị kỹ năng hữu ích để phát triển sự nghiệp.</p>
              <a href="#" class="text-decoration-none fw-semibold text-primary">Tìm hiểu thêm</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-white p-3 rounded-4 shadow-sm h-100">
              <img src="/images/zxc.jpg" class="img-fluid rounded-3 mb-3">
              <h5 class="fw-bold">Chương trình Sau đại học</h5>
              <p class="text-muted small">Cung cấp tài nguyên học thuật và nghiên cứu phong phú cho người học.</p>
              <a href="#" class="text-decoration-none fw-semibold text-primary">Tìm hiểu thêm</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-white p-3 rounded-4 shadow-sm h-100">
              <img src="/images/zxc.jpg" class="img-fluid rounded-3 mb-3">
              <h5 class="fw-bold">Chương trình Liên kết Quốc tế</h5>
              <p class="text-muted small">Cơ hội nhận bằng từ các đại học hàng đầu thế giới, trải nghiệm toàn cầu.</p>
              <a href="#" class="text-decoration-none fw-semibold text-primary">Tìm hiểu thêm</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- DANH SÁCH SỰ KIỆN MỚI -->
<section class="events-list py-5" style="background-color: #e6f7ff;">
  <div class="container">
    <h2 class="fw-bold mb-4" style="color: #004080;">Danh sách sự kiện</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 px-3 pb-4">

      <!-- Sự kiện 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
          <img src="/images/zxc.jpg" class="card-img-top" alt="Sự kiện 1" style="height: 190px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-teal-600 text-white text-center rounded-3 py-1 px-2 me-2" style="background-color: #008080; min-width: 50px;">
                <div class="text-uppercase small" style="font-size: 0.7rem;">May</div>
                <div class="fw-bold fs-4">31</div>
              </div>
              <span class="text-muted small">Ngày 31.05.2025</span>
            </div>
            <h5 class="card-title text-secondary mb-3" style="font-weight: 600; font-size: 1rem;">
              Chuỗi Live talk Hướng nghiệp bền vững 5.0 “Empowering Tomorrow”
            </h5>
            <div class="mt-auto">
              <button class="btn btn-warning w-100">Đăng ký tham gia</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Sự kiện 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
          <img src="/images/zxc.jpg" class="card-img-top" alt="Sự kiện 2" style="height: 190px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-teal-600 text-white text-center rounded-3 py-1 px-2 me-2" style="background-color: #008080; min-width: 50px;">
                <div class="text-uppercase small" style="font-size: 0.7rem;">Jun</div>
                <div class="fw-bold fs-4">07</div>
              </div>
              <span class="text-muted small">Ngày 07.06.2025</span>
            </div>
            <h5 class="card-title text-secondary mb-3" style="font-weight: 600; font-size: 1rem;">
              Đại hội Đại biểu Đảng bộ Đại học Kinh tế Thành phố Hồ Chí Minh lần thứ XIV
            </h5>
            <div class="mt-auto">
              <button class="btn btn-warning w-100">Đăng ký tham gia</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Sự kiện 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
          <img src="/images/zxc.jpg" class="card-img-top" alt="Sự kiện 3" style="height: 190px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-teal-600 text-white text-center rounded-3 py-1 px-2 me-2" style="background-color: #008080; min-width: 50px;">
                <div class="text-uppercase small" style="font-size: 0.7rem;">Jun</div>
                <div class="fw-bold fs-4">23</div>
              </div>
              <span class="text-muted small">Ngày 23.06.2025</span>
            </div>
            <h5 class="card-title text-secondary mb-3" style="font-weight: 600; font-size: 1rem;">
              UEH Mekong Summer Camp 2025 – Local Life, Global Mind
            </h5>
            <div class="mt-auto">
              <button class="btn btn-warning w-100">Đăng ký tham gia</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Sự kiện 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
          <img src="/images/zxc.jpg" class="card-img-top" alt="Sự kiện 4" style="height: 190px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-teal-600 text-white text-center rounded-3 py-1 px-2 me-2" style="background-color: #008080; min-width: 50px;">
                <div class="text-uppercase small" style="font-size: 0.7rem;">Jul</div>
                <div class="fw-bold fs-4">09</div>
              </div>
              <span class="text-muted small">Ngày 09.07.2025</span>
            </div>
            <h5 class="card-title text-secondary mb-3" style="font-weight: 600; font-size: 1rem;">
              SEED 2025 – Dự án khởi nghiệp bền vững phát triển kinh tế
            </h5>
            <div class="mt-auto">
              <button class="btn btn-warning w-100">Đăng ký tham gia</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


    <!-- FOOTER -->
    <footer class="text-center py-4 mt-5" style="background-color: #004d4d; color: #ccffcc;">
      &copy; 2025 <span style="color: #ffff66;">Trường Đại Học Công Nghệ Thông Tin</span>. Mọi quyền được bảo lưu.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>



