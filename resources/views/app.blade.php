<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Admin Panel - @yield('title')</title>

  <script src="{{url('lib/jquery/jquery.min.js')}}"></script>

  <!-- Favicons -->
  <link href="{{url('img/favicon.png')}}" rel="icon">
  <link href="{{url('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{url('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{url('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{url('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{url('css/style.css')}}" rel="stylesheet">
  <link href="{{url('css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{url('lib/chart-master/Chart.js')}}"></script>

  <style>
    img {
      width: 100px;
      height: 100px;
      object-fit: cover;
    }
  </style>

  @yield('style')

  <!-- =======================================================

  ======================================================= -->
</head>

<body>
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{url('admin/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Выйти</a></li>
        </ul>

        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{url('admin/edit')}}"><i class="fa fa-user" aria-hidden="true"></i> Профиль</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li><a href="{{url('admin/')}}"><i class="fa fa-list-ul" aria-hidden="true"></i>Объявления</a></li>
            <li><a href="{{url('admin/promotion')}}"><i class="fa fa-dollar" aria-hidden="true"></i>Акции</a></li>
            <li><a href="{{url('admin/user')}}"><i class="fa fa-user" aria-hidden="true"></i>Пользователи</a></li>
            <li><a href="{{url('admin/categories')}}"><i class="fa fa-truck" aria-hidden="true"></i>Категории</a></li>
            <li><a href="{{url('admin/brands')}}"><i class="fa fa-bus" aria-hidden="true"></i>Бренды машин</a></li>
            <li><a href="{{url('admin/brandmodels')}}"><i class="fa fa-car" aria-hidden="true"></i>Модели брендов</a></li>
            <li><a href="{{url('admin/colors')}}"><i class="fa fa-paint-brush" aria-hidden="true"></i>Цвета</a></li>
            <li><a href="{{url('admin/fueltypes')}}"><i class="fa fa-tint" aria-hidden="true"></i>Типы топлива</a></li>
            <li><a href="{{url('admin/gearboxes')}}"><i class="fa fa-cube" aria-hidden="true"></i>КПП</a></li>
            <li><a href="{{url('admin/cities')}}"><i class="fa fa-building" aria-hidden="true"></i>Города</a></li>
            {{-- <li><a href="{{url('admin/rating')}}"><i class="fa fa-building" aria-hidden="true"></i>Отзывы</a></li> --}}
            @yield('main')
        </ul>

        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <section id="main-content">
        @yield('content')
    </section>
  </section>
<script src="{{url('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{url('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{url('lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{url('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{url('lib/common-scripts.js')}}"></script>

  @yield('js')

  @yield('modal')
</body>

</html>
