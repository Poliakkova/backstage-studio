@extends('layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('../css/button.css') }}">

    @yield('content2')

    <section class="button-section">
        <div class="container">
            <div class="button-section-content">
                <h4>Запишитесь на консультацию!</h4>
                <div class="button-group">
                    <a class="big-button popup-link" href="#popup">Консультация бесплатно</a>
                    <p class="paragraph2">Оставьте номер телефона и мы свяжемся с вами в ближайшее время</p>
                </div>
            </div>
        </div>
    </section>

@endsection
