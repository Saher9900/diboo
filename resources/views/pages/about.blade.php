@extends('layouts.main')

@section('title', 'DIBOO FASHION - من نحن')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1 class="animate-on-scroll">من نحن</h1>
            <p class="animate-on-scroll">تعرف على قصة DIBOO FASHION</p>
        </div>
    </section>

    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div class="about-content animate-on-scroll">
                        <h2>قصتنا</h2>
                        <p>تأسست DIBOO FASHION في عام 2020 بهدف تقديم أرقى الأزياء والملابس التي تجمع بين الأناقة والجودة. نحن نؤمن بأن الأناقة ليست مجرد مظهر خارجي، بل هي تعبير عن الشخصية والثقة بالنفس.</p>
                        <p>نسعى دائمًا لتقديم منتجات عالية الجودة بأسعار مناسبة، مع التركيز على التصاميم الحديثة التي تواكب أحدث صيحات الموضة العالمية.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="about-image animate-on-scroll">
                        <img src="{{ asset('images/image.png') }}" alt="DIBOO FASHION" class="about-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="values-section py-5">
        <div class="container">
            <h2 class="section-title text-center animate-on-scroll">قيمنا</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">💎</div>
                        <h3>الجودة</h3>
                        <p>نستخدم أفضل الأقمشة والمواد لضمان جودة عالية لجميع منتجاتنا</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">🎨</div>
                        <h3>الإبداع</h3>
                        <p>تصاميم فريدة ومبتكرة تعكس الذوق الرفيع</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">🤝</div>
                        <h3>الثقة</h3>
                        <p>نبنِ علاقات طويلة الأمد مع عملائنا من خلال الجودة والخدمة المتميزة</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">🌍</div>
                        <h3>الاستدامة</h3>
                        <p>نلتزم بالممارسات المستدامة في عمليات الإنتاج</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="mission-card animate-on-scroll">
                        <h3>رؤيتنا</h3>
                        <p>أن نكون الخيار الأول لعملائنا في مجال الأزياء الراقية، وأن نكون علامة تجارية رائدة تمتد تأثيراتها عالميًا.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="mission-card animate-on-scroll">
                        <h3>رسالتنا</h3>
                        <p>تقديم منتجات عالية الجودة بأسعار مناسبة، مع التركيز على خدمة العملاء والرضا التام، والمساهمة في تعزيز الثقة بالنفس من خلال الأناقة.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
