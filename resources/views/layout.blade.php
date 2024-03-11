<!DOCTYPE html>
<html lang="eng">                          
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    @include('header')
    <div class="container-fluid mt-4">
        <div class="content bg-muted text-dark p-3">
        <h1 class="display-4 font-weight-bold" > @yield('content')</h1>
        </div>
    </div>
    @yield('yippi')
    <footer class="bg-dark text-light text-center py-3 fixed-bottom">
    @include('footer')
    </footer>
    </html>
