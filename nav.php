<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>نظام وحدة الامناء</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
</head>

<body>
  <nav class="navbar navbar-dark  bg-dark navbar-expand-lg fixed-top d-flex"  >
      <div class="container-fluid"  >


      <ul class="nav justify-content-end m-2">
                        <li class="dropdown">
                            <div   class="dropdown-toggle text-light" id="noti_count" style="cursor: pointer;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="counter">0</span><i class="fas fa-bell" style="font-size: 20px;"></i>
                            </div>
                            
                            <div class="dropdown-menu overflow-h-menu dropdown-menu-right">
                                <div class="notification">

                                </div>
                            </div>
                        </li>
                    </ul>

        <a class="navbar-brand" href="" >نظام وحدة الامناء</a>
        <button  class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header" >
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  العقود
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">زواج</a></li>
                  <li><a class="dropdown-item" href="#">طلاق</a></li>
                </ul> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  التوكيلات
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">خاصه</a></li>
                  <li><a class="dropdown-item" href="#">عامه</a></li>
                </ul>       
                    <li class="nav-item">
                <a class="nav-link" href="c.php">تقرير مساحة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">المقاسم</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ارشيف</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  البصائر
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" >
                  <li><a class="dropdown-item" href="a.php">بيع</a></li>
                  <li><a class="dropdown-item" href="a.php">شراء</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">بحث عن بصائر</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex mt-1" role="search">
              <input class=" form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-warning me-1" type="submit">Search</button>
            </form>

          
          </div>
        </div>
      </div>
    </nav>

