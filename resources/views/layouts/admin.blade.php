<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>قالب لوحة القيادة · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard-rtl/">



    <!-- Bootstrap core CSS -->
<link href="{{ asset('assets/dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        border-radius: 50%;
        -moz-outline-radius: 50%;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/dashboard.rtl.css') }}" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3">  شركة الاصيل </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a id="navbarDropdown" class="nav-link" role="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="بحث" aria-label="بحث">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

      <a class="nav-link px-3 btn btn-danger" style="margin-left:2px ;" href="{{ route('logout') }}"  onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
{{ __('خروج') }}



      </a>

    </div>

  </div>

</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">
              <span data-feather="home"></span>
              لوحة القيادة
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <span data-feather="shopping-cart"></span>
                المنتجات
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link alert alert-warning rounded text-dark" style="text-decoration: none; raduis: 50,50,50,50;"  href="{{ url('/') }}" >
              <span class="alert-warning text-dark rounded" data-feather="shopping-cart" style="display: inline-block; padding: 10px 20px; raduis:50,50,50,50;"></span>
              عرض المنتجات
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link alert alert-warning rounded text-dark" style="text-decoration: none;" href="{{ url('products/create') }}">
              <span class="alert-warning text-dark rounded" style="display: inline-block; padding: 10px 20px;" data-feather="shopping-cart"></span>
              اضافة منتج جديد
            </a>
          </li>
          <hr class="featurette-divider">
          <li class="nav-item">
            <a class="nav-link">
              <span data-feather="shopping-cart"></span>
              الأصناف
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link alert alert-warning rounded text-dark" style="text-decoration: none;" href="{{ url("categories/index") }}">
              <span class="alert-warning text-dark rounded" style="display: inline-block; padding: 10px 20px;" data-feather="shopping-cart"></span>
              عرض الاصناف
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link alert alert-warning rounded text-dark" style="text-decoration: none;" href="{{ url("categories/create") }}">
              <span class="alert-warning text-dark rounded" style="display: inline-block; padding: 10px 20px;" data-feather="shopping-cart"></span>
              اضافة صنف جديد
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        @yield('content')

    </main>
  </div>
</div>


    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
