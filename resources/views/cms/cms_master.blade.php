<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cms_style.css') }}">
    <title>My Mobile | Admin Panel</title>
  </head>

  <body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <div class="site-branding d-flex"><a class="site-logo align-self-center" href="{{ url('cms/dashboard') }}"><img src="{{ url('lib/unishop3/dist/img/logo/logos-lights.png') }}" alt="My Mobile"></a></div>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="{{ url('user/logout') }}">Sign out</a>
    </li>
  </ul>
</nav>
<hr><hr>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cms/dashboard') }}">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cms/menu') }}">
              Menu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cms/content') }}">
              Content 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cms/categories') }}">
              Categoreis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cms/products') }}">
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cms/orders') }}">
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a target="_blank" class="nav-link" href="{{ url('') }}">
              To Front Site
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  @yield ('cms_content')
    </main>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script src="{{ asset('js/cms_script.js') }}"> </script>
    @if ( Session::has('sm') )
      <script>
    toastr.options.positionClass = 'toast-top-center';
    toastr.success("{{ Session::get('sm') }}");
    </script>
    @endif
</body>

</html>