<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường Đại Học Công Nghệ Thông Tin</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

      /* Timetable specific styles */
      .timetable-container {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      }

      .timetable-header {
        background-color: #e6f7ff;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        border: 1px solid #cceeff;
      }

      .timetable-header h5 {
        color: #004080;
        font-weight: bold;
        margin-bottom: 0.5rem;
      }

      .timetable-header .form-select {
        border-color: #008080;
      }

      .timetable-table {
        width: 100%;
        border-collapse: collapse; /* Ensure borders collapse for a clean look */
        margin-top: 1.5rem;
      }

      .timetable-table th,
      .timetable-table td {
        border: 1px solid #a0a0a0; /* Stronger border for better visibility */
        padding: 0.75rem;
        text-align: center;
        vertical-align: middle;
      }

      .timetable-table thead th {
        background-color: #008080;
        color: white;
        font-weight: bold;
      }

      /* Style for the footer row of the timetable table to match the header */
      .timetable-table tfoot th {
        background-color: #008080;
        color: white;
        font-weight: bold;
      }

      .timetable-table tbody tr:nth-child(even) {
        background-color: #f8f8f8;
      }

      .timetable-table tbody td:first-child,
      .timetable-table tbody td:last-child {
        background-color: #e6f7ff;
        font-weight: bold;
        color: #004d4d;
      }

      .timetable-cell-content {
        font-size: 0.85rem;
        line-height: 1.3;
      }
      .timetable-cell-content strong {
        display: block;
        font-size: 0.95rem;
        color: #006666;
      }
      .timetable-cell-content span {
        display: block;
        color: #555;
      }
    </style>
  </head>

  <body>
    <header class="py-3" style="background: linear-gradient(90deg, #0d6251c5, #008080); color: white;">
      <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex align-items-center mb-2 mb-md-0">
          <img src="/images/logolv.png" alt="Logo" width="160" class="me-3" onerror="this.onerror=null;this.src='https://placehold.co/160x50/008080/FFFFFF?text=Logo';" />
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

    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #006666;">
      <div class="container">
        <a class="navbar-brand fw-bold fs-5" href="/" style="color: #ffff66;">Trang Chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="/thoikhoabieu"> Thời Khoá Biểu</a></li>
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

    <main class="container mt-5">
      <div class="timetable-container">
        <div class="timetable-header">
          <div class="d-flex align-items-center mb-3">
            <h5 class="m-0 me-3">Chọn học kỳ xem TKB:</h5>
            <select class="form-select w-auto me-3">
              <option selected>Học kỳ 2 - Năm học 2024-2025</option>
              <option>Học kỳ 1 - Năm học 2024-2025</option>
            </select>
            <select class="form-select w-auto">
              <option selected>Tuần 39 (Từ 26/05/2025 - Đến 01/06/2025)</option>
              <option>Tuần 40 (Từ 02/06/2025 - Đến 08/06/2025)</option>
            </select>
          </div>
          <p class="mb-1"><img src="uploaded:image_80d070.png-0d16cd4b-010c-4abd-9ea8-87300026b74b" alt="note icon" width="20" class="me-2" onerror="this.onerror=null;this.src='https://placehold.co/20x20/008080/FFFFFF?text=i';">Lưu ý tuần 24 tương ứng với tuần 1 của học kì. Bắt đầu từ ngày 10/01/2025</p>
          <ul class="list-unstyled small">
            <li>- Tiết 01 (07h00 - 07h45) Tiết 02 (07h50 - 08h35) Tiết 03 (08h40 - 09h25)</li>
            <li>- Tiết 04 (09h35 - 10h20) Tiết 05 (10h25 - 11h10) Tiết 06 (11h15 - 12h00)</li>
            <li>- Tiết 07 (12h35 - 13h20) Tiết 08 (13h25 - 14h10) Tiết 09 (14h15 - 15h00)</li>
            <li>- Tiết 10 (15h00 - 15h45) Tiết 11 (15h50 - 16h35) Tiết 12 (16h40 - 17h25)</li>
            <li>- Tiết 13 (17h40 - 18h25) Tiết 14 (18h30 - 19h15) Tiết 15 (19h20 - 20h05)...</li>
          </ul>
        </div>

        <table class="timetable-table">
          <thead>
            <tr>
              <th></th>
              <th>THỨ HAI</th>
              <th>THỨ BA</th>
              <th>THỨ TƯ</th>
              <th>THỨ NĂM</th>
              <th>THỨ SÁU</th>
              <th>THỨ BẢY</th>
              <th>CHỦ NHẬT</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiết 1</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 1</td>
            </tr>
            <tr>
              <td>Tiết 2</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 2</td>
            </tr>
            <tr>
              <td>Tiết 3</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 3</td>
            </tr>
            <tr>
              <td>Tiết 4</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 4</td>
            </tr>
            <tr>
              <td>Tiết 5</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 5</td>
            </tr>
            <tr>
              <td>Tiết 6</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 6</td>
            </tr>
            <tr>
              <td>Tiết 7</td>
              <td>
                <div class="timetable-cell-content">
                  <strong>CS101</strong>
                  <span>Cấu trúc dữ liệu</span>
                  <span>Phòng A101</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 7</td>
            </tr>
            <tr>
              <td>Tiết 8</td>
              <td>
                <div class="timetable-cell-content">
                  <strong>CS101</strong>
                  <span>Cấu trúc dữ liệu</span>
                  <span>Phòng A101</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 8</td>
            </tr>
            <tr>
              <td>Tiết 9</td>
              <td>
                <div class="timetable-cell-content">
                  <strong>CS101</strong>
                  <span>Cấu trúc dữ liệu</span>
                  <span>Phòng A101</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 9</td>
            </tr>
            <tr>
              <td>Tiết 10</td>
              <td></td>
              <td>
                <div class="timetable-cell-content">
                  <strong>MA203</strong>
                  <span>Giải tích 3</span>
                  <span>Phòng B205</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 10</td>
            </tr>
            <tr>
              <td>Tiết 11</td>
              <td></td>
              <td>
                <div class="timetable-cell-content">
                  <strong>MA203</strong>
                  <span>Giải tích 3</span>
                  <span>Phòng B205</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 11</td>
            </tr>
            <tr>
              <td>Tiết 12</td>
              <td></td>
              <td>
                <div class="timetable-cell-content">
                  <strong>MA203</strong>
                  <span>Giải tích 3</span>
                  <span>Phòng B205</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 12</td>
            </tr>
            <tr>
              <td>Tiết 13</td>
              <td></td>
              <td></td>
              <td>
                <div class="timetable-cell-content">
                  <strong>EN101</strong>
                  <span>Tiếng Anh cơ bản</span>
                  <span>Phòng C302</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 13</td>
            </tr>
            <tr>
              <td>Tiết 14</td>
              <td></td>
              <td></td>
              <td>
                <div class="timetable-cell-content">
                  <strong>EN101</strong>
                  <span>Tiếng Anh cơ bản</span>
                  <span>Phòng C302</span>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tiết 14</td>
            </tr>
            <tr>
              <td>Tiết 15</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="timetable-cell-content">
                  <strong>PE101</strong>
                  <span>Thể dục</span>
                  <span>Sân vận động</span>
                </div>
              </td>
              <td></td>
              <td>Tiết 15</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th>THỨ HAI</th>
              <th>THỨ BA</th>
              <th>THỨ TƯ</th>
              <th>THỨ NĂM</th>
              <th>THỨ SÁU</th>
              <th>THỨ BẢY</th>
              <th>CHỦ NHẬT</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </main>

    <footer class="text-center py-4 mt-5" style="background-color: #004d4d; color: #ccffcc;">
      &copy; 2025 <span style="color: #ffff66;">Trường Đại Học Công Nghệ Thông Tin</span>. Mọi quyền được bảo lưu.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
