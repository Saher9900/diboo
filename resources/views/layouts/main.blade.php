<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DIBOO FASHION')</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/image.png') }}" alt="DIBOO FASHION Logo" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ url('products') }}">المنتجات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('about') }}">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">اتصل بنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4>DIBOO FASHION</h4>
                    <p>علامتك التجارية المفضلة للأزياء الراقية والأنيقة</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>روابط سريعة</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">الرئيسية</a></li>
                        <li><a href="{{ url('products') }}">المنتجات</a></li>
                        <li><a href="{{ url('about') }}">من نحن</a></li>
                        <li><a href="{{ url('contact') }}">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>تواصل معنا</h4>
                    <p>البريد الإلكتروني: info@diboofashion.com</p>
                    <p>الهاتف: +966 50 123 4567</p>
                </div>
            </div>
            <hr>
            <p class="text-center mb-0">&copy; 2024 DIBOO FASHION. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
