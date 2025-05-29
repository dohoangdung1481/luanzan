<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường Đại Học Công Nghệ Thông Tin - Xem Lịch Thi</title>

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

      /* Exam Schedule specific styles */
      .exam-schedule-container {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      }

      .exam-schedule-header {
        background-color: #e6f7ff;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        border: 1px solid #cceeff;
      }

      .exam-schedule-header h5 {
        color: #004080;
        font-weight: bold;
        margin-bottom: 0.5rem;
      }

      .exam-schedule-header .form-select {
        border-color: #008080;
      }

      .exam-schedule-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1.5rem;
      }

      .exam-schedule-table th,
      .exam-schedule-table td {
        border: 1px solid #e0e0e0;
        padding: 0.75rem;
        text-align: center;
        vertical-align: middle;
      }

      .exam-schedule-table thead th {
        background-color: #008080;
        color: white;
        font-weight: bold;
      }

      .exam-schedule-table tbody tr:nth-child(even) {
        background-color: #f8f8f8;
      }

      .exam-schedule-note {
        background-color: #fff3cd;
        border: 1px solid #ffc107;
        border-radius: 8px;
        padding: 1rem;
        margin-top: 2rem;
        color: #856404;
      }
      .exam-schedule-note p {
        margin-bottom: 0.5rem;
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

    <main class="container mt-5">
      <div class="exam-schedule-container">
        <div class="exam-schedule-header">
          <div class="d-flex align-items-center mb-3">
            <h5 class="m-0 me-3">Chọn học kỳ xem lịch thi:</h5>
            <select class="form-select w-auto me-3">
              <option selected>Học kỳ 2 - Năm học 2024-2025</option>
              <option>Học kỳ 1 - Năm học 2024-2025</option>
              <option>Học kỳ Hè - Năm học 2023-2024</option>
            </select>
          </div>
          <div class="d-flex align-items-center mb-3">
            <h5 class="m-0 me-3">Tìm kiếm theo Mã sinh viên:</h5>
            <input type="text" id="studentIdSearch" class="form-control w-auto me-3" placeholder="Nhập mã sinh viên (ví dụ: DH52000037)">
            <button class="btn btn-primary" id="searchButton">Tìm kiếm</button>
          </div>
          <p class="mb-1">
            <i class="fas fa-calendar-alt text-primary me-2"></i>
            Thông tin lịch thi được cập nhật thường xuyên. Vui lòng kiểm tra lại trước ngày thi.
          </p>
        </div>

        <table class="exam-schedule-table" id="examScheduleTable">
          <thead>
            <tr>
              <th>STT</th>
              <th>Mã sinh viên</th> <th>Mã học phần</th>
              <th>Tên học phần</th>
              <th>Ngày thi</th>
              <th>Giờ thi</th>
              <th>Phòng thi</th>
              <th>Hình thức thi</th>
              <th>Ghi chú</th>
            </tr>
          </thead>
          <tbody>
            <tr data-student-id="DH52000037">
              <td>1</td>
              <td>DH52000037</td>
              <td>CS101</td>
              <td>Cấu trúc dữ liệu</td>
              <td>01/06/2025</td>
              <td>08:00 - 10:00</td>
              <td>Phòng A201</td>
              <td>Tự luận</td>
              <td>Mang theo thẻ SV</td>
            </tr>
            <tr data-student-id="DH52000037">
              <td>2</td>
              <td>DH52000037</td>
              <td>MA203</td>
              <td>Giải tích 3</td>
              <td>03/06/2025</td>
              <td>13:00 - 15:00</td>
              <td>Phòng B305</td>
              <td>Trắc nghiệm</td>
              <td>Sử dụng máy tính cá nhân</td>
            </tr>
            <tr data-student-id="DH52000038">
              <td>3</td>
              <td>DH52000038</td>
              <td>EN101</td>
              <td>Tiếng Anh cơ bản</td>
              <td>05/06/2025</td>
              <td>09:00 - 11:00</td>
              <td>Phòng Lab C102</td>
              <td>Vấn đáp</td>
              <td>Chuẩn bị bài nói</td>
            </tr>
            <tr data-student-id="DH52000039">
              <td>4</td>
              <td>DH52000039</td>
              <td>IT305</td>
              <td>Lập trình Web</td>
              <td>07/06/2025</td>
              <td>14:00 - 16:00</td>
              <td>Phòng Máy D401</td>
              <td>Thực hành</td>
              <td>Thi trên máy tính</td>
            </tr>
            </tbody>
        </table>

        <div class="exam-schedule-note">
          <h5><i class="fas fa-exclamation-triangle me-2"></i>Lưu ý quan trọng:</h5>
          <p>- Sinh viên có mặt tại phòng thi trước giờ thi 15 phút.</p>
          <p>- Mang theo giấy tờ tùy thân có ảnh (CMND/CCCD hoặc thẻ sinh viên).</p>
          <p>- Nghiêm cấm sử dụng tài liệu, thiết bị điện tử khi chưa được phép.</p>
        </div>
      </div>
    </main>

    <footer class="text-center py-4 mt-5" style="background-color: #004d4d; color: #ccffcc;">
      &copy; 2025 <span style="color: #ffff66;">Trường Đại Học Công Nghệ Thông Tin</span>. Mọi quyền được bảo lưu.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const studentIdSearchInput = document.getElementById('studentIdSearch');
        const searchButton = document.getElementById('searchButton');
        const examScheduleTable = document.getElementById('examScheduleTable');
        const tableRows = examScheduleTable.querySelectorAll('tbody tr');

        searchButton.addEventListener('click', filterTable);
        studentIdSearchInput.addEventListener('keyup', function(event) {
          if (event.key === 'Enter') {
            filterTable();
          }
        });

        function filterTable() {
          const searchTerm = studentIdSearchInput.value.trim().toLowerCase();

          tableRows.forEach(row => {
            const studentId = row.getAttribute('data-student-id'); // Get student ID from data attribute
            if (studentId && studentId.toLowerCase().includes(searchTerm)) {
              row.style.display = ''; // Show the row
            } else {
              row.style.display = 'none'; // Hide the row
            }
          });
        }
      });
    </script>
  </body>
</html>
