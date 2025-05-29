<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường Đại Học Công Nghệ Thông Tin - Đăng Ký Học Phần</title>

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

      /* Course Registration specific styles */
      .registration-container {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      }

      .registration-header {
        background-color: #e6f7ff;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        border: 1px solid #cceeff;
      }

      .registration-header h5 {
        color: #004080;
        font-weight: bold;
        margin-bottom: 0.5rem;
      }

      .registration-header .form-select {
        border-color: #008080;
      }

      .registration-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1.5rem;
      }

      .registration-table th,
      .registration-table td {
        border: 1px solid #e0e0e0;
        padding: 0.75rem;
        text-align: center;
        vertical-align: middle;
      }

      .registration-table thead th {
        background-color: #008080;
        color: white;
        font-weight: bold;
      }

      .registration-table tbody tr:nth-child(even) {
        background-color: #f8f8f8;
      }

      .registration-table .action-cell {
        width: 120px; /* Adjust width for buttons */
      }

      .registration-table .btn-register {
        background-color: #28a745; /* Green for register */
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .registration-table .btn-register:hover {
        background-color: #218838;
      }

      .registration-table .btn-registered {
        background-color: #6c757d; /* Grey for already registered */
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        cursor: not-allowed;
      }

      .registration-summary {
        background-color: #f0f8ff;
        border: 1px solid #cceeff;
        border-radius: 8px;
        padding: 1rem;
        margin-top: 2rem;
        font-weight: bold;
      }
      .registration-summary p {
        margin-bottom: 0.5rem;
      }
      .registration-summary span {
        color: #006666;
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
            <li class="nav-item"><a class="nav-link" href="/thoikhoabieu">Thời Khoá Biểu</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dangkihocphan">Đăng Ký Học Phần</a></li>
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
      <div class="registration-container">
        <div class="registration-header">
          <div class="d-flex align-items-center mb-3">
            <h5 class="m-0 me-3">Chọn học kỳ để đăng ký:</h5>
            <select class="form-select w-auto me-3">
              <option selected>Học kỳ 1 - Năm học 2025-2026</option>
              <option>Học kỳ Hè - Năm học 2024-2025</option>
              <option>Học kỳ 2 - Năm học 2024-2025</option>
            </select>
          </div>
          <div class="d-flex align-items-center mb-3">
            <p class="mb-0 me-3">
              <i class="fas fa-info-circle text-info me-2"></i>
              Vui lòng chọn các học phần muốn đăng ký và nhấn nút "Đăng ký".
            </p>
            <button class="btn btn-info ms-auto" id="viewRegisteredCoursesBtn">
              <i class="fas fa-eye me-2"></i>Xem các môn đã đăng ký
            </button>
          </div>
        </div>

        <table class="registration-table" id="registrationTable">
          <thead>
            <tr>
              <th>STT</th>
              <th>Mã học phần</th>
              <th>Tên học phần</th>
              <th>Số tín chỉ</th>
              <th>Lớp học phần</th>
              <th>Giảng viên</th>
              <th>Thời gian</th>
              <th>Phòng học</th>
              <th class="action-cell">Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>IT401</td>
              <td>Trí tuệ nhân tạo</td>
              <td>3</td>
              <td>IT401.01</td>
              <td>Nguyễn Văn A</td>
              <td>Thứ 2 (Tiết 7-9)</td>
              <td>A201</td>
              <td class="action-cell">
                <button class="btn-register">Đăng ký</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>IT402</td>
              <td>Học máy</td>
              <td>3</td>
              <td>IT402.02</td>
              <td>Trần Thị B</td>
              <td>Thứ 3 (Tiết 10-12)</td>
              <td>B305</td>
              <td class="action-cell">
                <button class="btn-register">Đăng ký</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>IT403</td>
              <td>Phân tích dữ liệu lớn</td>
              <td>3</td>
              <td>IT403.01</td>
              <td>Lê Văn C</td>
              <td>Thứ 4 (Tiết 1-3)</td>
              <td>C102</td>
              <td class="action-cell">
                <button class="btn-registered" disabled>Đã đăng ký</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>IT404</td>
              <td>An toàn thông tin</td>
              <td>3</td>
              <td>IT404.03</td>
              <td>Phạm Thị D</td>
              <td>Thứ 5 (Tiết 4-6)</td>
              <td>A105</td>
              <td class="action-cell">
                <button class="btn-register">Đăng ký</button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>IT405</td>
              <td>Phát triển ứng dụng di động</td>
              <td>3</td>
              <td>IT405.01</td>
              <td>Hoàng Văn E</td>
              <td>Thứ 6 (Tiết 7-9)</td>
              <td>B203</td>
              <td class="action-cell">
                <button class="btn-register">Đăng ký</button>
              </td>
            </tr>
            </tbody>
        </table>

        <div class="registration-summary">
          <p>Tổng số tín chỉ đã đăng ký: <span id="total-credits">3</span></p>
          <p>Số học phần đã đăng ký: <span id="total-courses">1</span></p>
          <button class="btn btn-primary mt-3">Xác nhận đăng ký</button>
        </div>
      </div>
    </main>

    <footer class="text-center py-4 mt-5" style="background-color: #004d4d; color: #ccffcc;">
      &copy; 2025 <span style="color: #ffff66;">Trường Đại Học Công Nghệ Thông Tin</span>. Mọi quyền được bảo lưu.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const registerButtons = document.querySelectorAll('.btn-register');
        const totalCreditsSpan = document.getElementById('total-credits');
        const totalCoursesSpan = document.getElementById('total-courses');
        const viewRegisteredCoursesBtn = document.getElementById('viewRegisteredCoursesBtn');
        const registrationTable = document.getElementById('registrationTable');
        const tableRows = registrationTable.querySelectorAll('tbody tr');

        let currentCredits = 3; // Initial value from "Đã đăng ký" example
        let currentCourses = 1; // Initial value from "Đã đăng ký" example
        let showingAllCourses = true; // State to track if all courses are being shown

        // Function to update summary totals
        function updateSummary() {
          totalCreditsSpan.textContent = currentCredits;
          totalCoursesSpan.textContent = currentCourses;
        }

        // Event listener for "Đăng ký" buttons
        registerButtons.forEach(button => {
          button.addEventListener('click', function() {
            if (this.classList.contains('btn-register')) {
              this.classList.remove('btn-register');
              this.classList.add('btn-registered');
              this.textContent = 'Đã đăng ký';
              this.disabled = true;

              // Update summary
              const row = this.closest('tr');
              const credits = parseInt(row.children[3].textContent); // Get credits from 4th column
              currentCredits += credits;
              currentCourses++;
              updateSummary();
            }
          });
        });

        // Event listener for "Xem các môn đã đăng ký" button
        viewRegisteredCoursesBtn.addEventListener('click', function() {
          if (showingAllCourses) {
            // Filter to show only registered courses
            tableRows.forEach(row => {
              const actionButton = row.querySelector('.action-cell button');
              if (actionButton && actionButton.classList.contains('btn-registered')) {
                row.style.display = ''; // Show registered courses
              } else {
                row.style.display = 'none'; // Hide non-registered courses
              }
            });
            this.textContent = 'Xem tất cả môn'; // Change button text
            this.classList.remove('btn-info');
            this.classList.add('btn-secondary');
            showingAllCourses = false;
          } else {
            // Show all courses
            tableRows.forEach(row => {
              row.style.display = ''; // Show all courses
            });
            this.textContent = 'Xem các môn đã đăng ký'; // Change button text back
            this.classList.remove('btn-secondary');
            this.classList.add('btn-info');
            showingAllCourses = true;
          }
        });

        // Initial update of summary
        updateSummary();
      });
    </script>
  </body>
</html>
 