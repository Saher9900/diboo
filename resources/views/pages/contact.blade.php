@extends('layouts.main')

@section('title', 'DIBOO FASHION - اتصل بنا')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1 class="animate-on-scroll">اتصل بنا</h1>
            <p class="animate-on-scroll">نسعد بتواصلكم معنا</p>
        </div>
    </section>

    <section class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="contact-form-card animate-on-scroll">
                        <h3>أرسل لنا رسالة</h3>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">الاسم</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">البريد الإلكتروني</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">رقم الهاتف</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">الموضوع</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">الرسالة</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-custom">إرسال</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="contact-info-card animate-on-scroll">
                        <h3>معلومات التواصل</h3>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div class="contact-details">
                                <h4>العنوان</h4>
                                <p>الرياض، المملكة العربية السعودية</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📧</div>
                            <div class="contact-details">
                                <h4>البريد الإلكتروني</h4>
                                <p>info@diboofashion.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div class="contact-details">
                                <h4>الهاتف</h4>
                                <p>+966 50 123 4567</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">⏰</div>
                            <div class="contact-details">
                                <h4>ساعات العمل</h4>
                                <p>السبت - الخميس: 9 صباحاً - 10 مساءً</p>
                                <p>الجمعة: 4 مساءً - 10 مساءً</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section py-5">
        <div class="container">
            <h2 class="section-title text-center animate-on-scroll">موقعنا</h2>
            <div class="map-container animate-on-scroll">
                <div class="map-placeholder">
                    <p>🗺️ خريطة الموقع</p>
                    <p>الرياض، المملكة العربية السعودية</p>
                </div>
            </div>
        </div>
    </section>
@endsection
