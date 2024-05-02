<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="../logo.png" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <style>
        body {
            background: linear-gradient(to right, #d5f7f1, #03cffc); /* Adjust colors as needed */
            min-height: 100vh;
        }
        .custom-image {
            width: 360px;
            height: 500px;
            position: absolute;
            bottom: 1;
            right: 0;
        }
    </style>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"
          id="navLinks">
        <li class="nav-item">
          <a class="nav-link" 
             aria-current="page" 
             href="index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="teacher.php">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="grade.php">Grade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="class.php">Class</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="course.php">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="message.php">Message</a>
        </li>
     
      </ul>
    
  </div>
    </div>
    <div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
Option  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><button class="dropdown-item" type="button"> <a class="nav-link" href="../logout.php">Logout</a></button></li>
    <li><button class="dropdown-item" type="button"> <a class="nav-link" href="pass.php">Change Password</a></button></li>
    <li><button class="dropdown-item" type="button"> <a class="nav-link" href="settings.php">Settings</a></button></li>

  </ul>
</div>
</nav>
