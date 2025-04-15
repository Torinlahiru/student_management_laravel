<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
  </style>
</head>
<body class="h-100">

  <div class="d-flex h-100">


    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Logo</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="" class="nav-link link-dark" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
          </a>
        </li>
        <li>
          <a href="{{route('student.index')}}" class="nav-link {{ request()->routeIs('student.index') ? 'active' : 'link-dark' }}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Student
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Teacher
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            Enrollment
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Payments
          </a>
        </li>
      </ul>
    </div>

    <!-- Optional main content area -->
    <div class="flex-grow-1 p-4">
        <div class="content">
            <h2>Student Management System</h2>
            @yield('content')
        </div>
    </div>

</div>
</body>
</html>
