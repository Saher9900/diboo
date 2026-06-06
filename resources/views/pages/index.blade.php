@extends('layouts.main')

@section('title', 'DIBOO FASHION - الرئيسية')

@section('content')
    <section class="hero-section text-center">
        <div class="container">
            <div class="hero-logo animate-on-scroll">
                <img src="{{ asset('images/image.png') }}" alt="DIBOO FASHION Logo" class="hero-logo-img">
            </div>
            <h1 class="hero-title animate-on-scroll">مرحبًا بكم في DIBOO FASHION</h1>
            <p class="hero-subtitle animate-on-scroll">اكتشف أحدث صيحات الموضة والأزياء الراقية</p>
            <a href="{{ url('products') }}" class="btn btn-custom btn-lg animate-on-scroll">تسوق الآن</a>
        </div>
    </section>

    <section class="features-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">👔</div>
                        <h3>جودة عالية</h3>
                        <p>منتجات مصنوعة من أفضل الأقمشة لضمان الراحة والأناقة</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">✨</div>
                        <h3>تصاميم حصرية</h3>
                        <p>تصاميم فريدة ومميزة تناسب جميع الأذواق</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">🚚</div>
                        <h3>توصيل سريع</h3>
                        <p>خدمة توصيل سريعة لجميع المناطق</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-section py-5">
        <div class="container">
            <h2 class="section-title text-center animate-on-scroll">منتجات مميزة</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="product-card animate-on-scroll">
                        <div class="product-image">
                            <span class="discount-badge">-20%</span>
                        </div>
                        <div class="product-info">
                            <h4>قميص كلاسيكي</h4>
                            <p class="product-category">قمصان</p>
                            <div class="product-details">
                                <span class="product-color">اللون: أبيض</span>
                                <span class="product-fabric">القماش: قطن</span>
                            </div>
                            <div class="product-price">
                                <span class="old-price">250 ر.س</span>
                                <span class="new-price">200 ر.س</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product-card animate-on-scroll">
                        <div class="product-image">
                            <span class="discount-badge">-15%</span>
                        </div>
                        <div class="product-info">
                            <h4>بنطلون أنيق</h4>
                            <p class="product-category">بنطلونات</p>
                            <div class="product-details">
                                <span class="product-color">اللون: أسود</span>
                                <span class="product-fabric">القماش: كتان</span>
                            </div>
                            <div class="product-price">
                                <span class="old-price">300 ر.س</span>
                                <span class="new-price">255 ر.س</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product-card animate-on-scroll">
                        <div class="product-image">
                            <span class="discount-badge">-30%</span>
                        </div>
                        <div class="product-info">
                            <h4>جاكيت شتوي</h4>
                            <p class="product-category">جاكيتات</p>
                            <div class="product-details">
                                <span class="product-color">اللون: بني</span>
                                <span class="product-fabric">القماش: صوف</span>
                            </div>
                            <div class="product-price">
                                <span class="old-price">500 ر.س</span>
                                <span class="new-price">350 ر.س</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
