<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>
  @stack('prepend-style')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="{{ url('/style/main.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
  @stack('addon-style')

</head>

<body>

  <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <!-- side bar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="/images/hand.png" class="my-4" style="max-width: 150px;" alt="">
        </div>
        <div class="list-group list-group-flush">
        <a href="{{route('admin-dashboard')}}" class="list-group-item list-group-item-action">
            Dashboard
          </a>
          <a href="{{route('product.index')}}" class="list-group-item list-group-item-action {{(request()->is('admin/product')) ? 'active' : ''}}">
            Jasa
          </a>
          <a href="{{route('category.index')}}" class="list-group-item list-group-item-action {{(request()->is('admin/category*')) ? 'active' : ''}}">
            Kategori
          </a>
           <a href="{{route('trx')}}" class="list-group-item list-group-item-action {{(request()->is('admin/trx*')) ? 'active' : ''}}">
            Transaksi
          </a>
          <a href="{{route('user.index')}}" class="list-group-item list-group-item-action {{(request()->is('admin/user*')) ? 'active' : ''}}">
            User
          </a>

        </div>
      </div>

      <!-- page content -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
          <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
          </button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto d-none d-lg-flex">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture" />
                  Hi, {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/">Logout</a>
                </div>
              </li>
            </ul>
            <!-- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none mt-3">
              <li class="nav-item">
                <a class="nav-link" href="#">
                Hi, {{ Auth::user()->name }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-inline-block" href="#">
                  Cart
                </a>
              </li>
            </ul>
          </div>
        </nav>

    {{-- Section Content --}}
    @yield('content')
    {{-- /Section Content --}}



      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  @stack('prepend-script')
  <script src="/vendor/jquery/jquery.min.js"> </script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script type="text/javascript">
    @if(auth()->user()->is_admin)
    function sendMarkRequest(id = null) {
        return $.ajax("{{ route('markNotification') }}", {
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
"id": id
            }
        });
    }
    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
            })
        });
    });
@endif
  </script>
  @stack('addon-script')
</body>

</html>