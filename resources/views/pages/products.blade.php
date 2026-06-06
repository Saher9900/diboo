@extends('layouts.main')

@section('title', 'DIBOO FASHION - المنتجات')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1 class="animate-on-scroll">منتجاتنا</h1>
            <p class="animate-on-scroll">اكتشف تشكيلتنا المتنوعة من الأزياء الراقية</p>
        </div>
    </section>

    <section class="filters-section py-4">
        <div class="container">
            <div class="filter-buttons animate-on-scroll">
                <button class="filter-btn active" data-id="all">all</button>
                @foreach ($categories as $val)
                  <button class="filter-btn" data-id="{{ $val->id }}">{{ $val->name }}</button>
                @endforeach
            </div>
        </div>
    </section>

    <section class="products-section py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $val)
                    
                <div class="col-md-4 col-lg-3 mb-4 product-item" data-category="{{ $val->category->id }}">
                    <div class="product-card animate-on-scroll">
                        <div class="product-image">
                            <img src="{{ asset('storage/' . $val->images[0]->name) }}" alt="{{ $val->name }}">
                            <span class="discount-badge">-{{ $val->sale }}%</span>
                        </div>
                        <div class="product-info">
                            <h4>{{ $val->name }}</h4>
                            <p class="product-category">{{ $val->category->name }}</p>
                            <div class="product-details">
                                <span class="product-color">اللون: أبيض</span>
                                <span class="product-fabric">القماش: قطن 100%</span>
                            </div>
                            <div class="product-price">
                                <span class="old-price">250 ر.س</span>
                                <span class="new-price">200 ر.س</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
