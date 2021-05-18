@extends('button')

@section('content2')

    <link rel="stylesheet" href="{{ asset('../css/contacts.css') }}">

    <section class="contacts">
        <div class="container">
            <div class="contacts-body">
                <h2>Контакты студии Backstage </h2>
                <div class="title">
                    <img src="{{ asset('../img/phone-icon2.png') }}" alt="Телефон">
                    <h3>Наши номера</h3>
                </div>
                <div class="content">
                <a href="tel:+380664258654">+(380) 66 42 58 654</a>
                <a href="tel:+380631234567">+(380) 63 12 34 567</a>
                <p>Звоните нам для предварительной записи ежедневно с 10:00 до 20:00.</p>
                </div>

                <div class="title">
                    <img src="{{ asset('../img/mail-icon.png') }}" alt="Почта">
                    <h3>Наша почта</h3>
                </div>
                <div class="content">
                    <a href="mailto:nastyapolyakova02@gmail.com?subject=Вопрос%20от%20клиента">backstage@gmail.com</a>
                </div>

                <div class="title">
                    <img src="{{ asset('../img/map-icon.png') }}" alt="Карта">
                    <h3>Наш адрес</h3>
                </div>
                <div class="content">
                    <p>Киев, ул. Большая Васильковская, 141</p>
                    <p>3 минуты от метро Лыбедская. Вы всегда можете позвонить нам, если заблудились и мы подскажем вам дорогу.</p>
                    <h4>Мы на карте:</h4>
                </div>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1dhFwhnLAqGoLF61fgTCtv0s1pWcfDhVe" width="100%" height="480" style="border:0;"></iframe>

            </div>
        </div>
    </section>

@endsection
