<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('../css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('../css/button.css')); ?>">

    <section class="block1">
        <div class="container">
            <h1>Backstage</h1>
            <h2>Лучший тату-салон в Киеве</h2>
            <p>Воплотим в жизнь любую идею</p>
            <div class="button-group">
                <a class="big-button popup-link" href="#popup">Консультация бесплатно</a>
                <p>Оставьте номер телефона и мы свяжемся с вами в ближайшее время</p>
            </div>
        </div>
    </section>

    <section class="block2">
        <div class="container">
            <div class="block2-content">
                <img class="block2-logo" src="<?php echo e(asset('../img/big-logo.svg')); ?>" alt="Логотип">
                <div class="block2-text">
                    <h3>О тату салоне</h3>
                    <p>Наш тату салон - это не только профессионльная тату-студия, а также команда опытных мастеров
                        с качественным портфолио и гарантией безопасности.</p>
                    <p>Каждую работу мы выполняем с индивидуальным подходом, исходя из ваших пожеланий. Клиентам мы
                        предоставляем отдельный оборудованный кабинет со всеми удобствами: комфортная кушетка, вай-фай,
                        телевизор и вкусный чай со сладостями.</p>
                    <p>Наши мастера не только качественно сделают татуировку, но и помогут определиться и сделать
                        эскиз будущей работы, а также будут с вами на связи во время всего заживления тату, чтобы
                        позаботиться о том, чтоб вы остались довольны результатом.</p>
                </div>
            </div>
            <div class="block2-icons">
                <div class="icon-block">
                    <img src="<?php echo e(asset('../img/help-icon.png')); ?>" alt="Помощь">
                    <p>Консультации с мастером</p>
                </div>
                <div class="icon-block">
                    <img src="<?php echo e(asset('../img/quality-icon.png')); ?>" alt="Качество">
                    <p>Гарантия качества и безопасности</p>
                </div>
                <div class="icon-block">
                    <img src="<?php echo e(asset('../img/tea-icon.png')); ?>" alt="Чай">
                    <p>Чай, кофе</p>
                </div>
                <div class="icon-block">
                    <img src="<?php echo e(asset('../img/wifi-icon.png')); ?>" alt="Вай-фай">
                    <p>wi-fi, TV</p>
                </div>
            </div>
        </div>
    </section>

    <section class="block3">
        <div class="container">
            <div class="block3-content">
                <h3>Почему выбирают нас?</h3>
                <ul class="block3-list">
                    <li>
                        Лучшее соотношение цена - качество. Также делаем скидки на интересные заказы.
                    </li>
                    <li>
                        Только сетифицированные профессионалы. Мастера выполня любые творческие идеи в наилучшем качестве.
                        <a href="portfolio">Посмотреть портфолио...</a>
                    </li>
                    <li>
                        Мы следим за безопасностью. Все расходные материалы - только одноразовые.
                        Используем качественные краски у проверенных продавцов. Стерилизация помещения после каждого клиента.
                    </li>
                    <li>
                        Делаем татуировки любой сложности. Предоставляем бесплатные уникальные эскизы на заказ.
                    </li>
                    <li>
                        Удобное месторасположение. 3 минуты от метро Лыбедская. Киев, ул. Большая Васильковская, 141. Работаем ежедневно с 10:00 до 20:00.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="block4">
        <div class="container">
            <h3>Галерея работ</h3>
            <div class="gallery">
                <div class="cols">
                    <a class="popup-link" href="#image"><img src="<?php echo e(asset('../img/works/3.png')); ?>" alt="Тату дракон"></a>
                    <a class="popup-link" href="#image2"><img src="<?php echo e(asset('../img/works/7.png')); ?>" alt="Тату цветы"></a>
                </div>
                <div class="cols">
                    <a class="popup-link" href="#image3"><img src="<?php echo e(asset('../img/works/4.png')); ?>" alt="Тату реализм"></a>
                        <a class="popup-link" href="#image4"><img src="<?php echo e(asset('../img/works/2.png')); ?>" alt="Тату орнамент"></a>
                </div>
                <div class="cols">
                    <a class="popup-link" href="#image5"><img src="<?php echo e(asset('../img/works/6.png')); ?>" alt="Тату лайнворк"></a>
                        <a class="popup-link" href="#image6"><img src="<?php echo e(asset('../img/works/1.png')); ?>" alt="Тату рукав"></a>
                </div>
                <div class="cols">
                    <a class="popup-link" href="#image7"><img src="<?php echo e(asset('../img/works/8.png')); ?>" alt="Цветная тату"></a>
                        <a class="popup-link" href="#image8"><img src="<?php echo e(asset('../img/works/5.png')); ?>" alt="Тату графика"></a>
                </div>
            </div>
            <a class="more-button" href="portfolio">Посмотреть больше ></a>
            <img src="<?php echo e(asset('../img/divider.svg')); ?>" alt="Узор" class="divider">
        </div>
    </section>

    <div id="image" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/3.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="image2" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/7.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="image3" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/4.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="image4" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/2.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="image5" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/6.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="image6" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/1.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="image7" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/8.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="image8" class="popup">
        <div class="popup-body">
            <div class="popup-content popup-content-image">
                <a href="#" class="popup-close close-popup" ></a>
                <div class="popup-image">
                    <img src="<?php echo e(asset('../img/works/5.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="block5">
        <div class="container">
            <h3>Как происходит сеанс?</h3>
            <div class="block5-content">
                <div class="step-block">
                    <img src="<?php echo e(asset('../img/phone-icon.png')); ?>" alt="Звонок">
                    <h4>Запись</h4>
                    <p>Мастера принимают только по записи. Перед первым визитом обязательно <a href="#popup" class="popup-link">оставьте номер телефона</a> и дождитесь звонка, или позвоните сами по
                        <a href="contacts">контактам</a>, указанным на сайте.</p>
                </div>
                <img src="<?php echo e(asset('../img/fast-forward.png')); ?>" alt="Дальше" class="arrow">
                <div class="step-block">
                    <img src="<?php echo e(asset('../img/consult-icon.png')); ?>" alt="Консультация">
                    <h4>Консультация</h4>
                    <p>На консультации вы обсудите с мастером эскиз, деталзацию татуировки, ее размер и точную стоимость,
                        время и продолжительность сеанса(-ов), а также нужно будет оставить предоплату за процедуру.</p>
                </div>
                <img src="<?php echo e(asset('../img/fast-forward.png')); ?>" alt="Дальше" class="arrow">
                <div class="step-block">
                    <img src="<?php echo e(asset('../img/tattoo-icon.png')); ?>" alt="Сеанс">
                    <h4>Сеанс</h4>
                    <p>На сеанс просьба приходить на точно указанное время. Переносить и отменять визит лучше минимум за 2 дня.
                        После сеанса вы можете получать бесплатные консультации с мастером по поводу процесса заживления.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="block6">
        <div class="container">
            <div class="block6-content">
                <h3>Услуги</h3>
                <table class="block6-table">
                    <tr>
                        <td>Консультация</td>
                        <td class="right">Бесплатно</td>
                    </tr>
                    <tr>
                        <td>Эскиз на заказ</td>
                        <td class="right">Бесплатно</td>
                    </tr>
                    <tr>
                        <td>Анастезия</td>
                        <td class="right">100-300 грн</td>
                    </tr>
                    <tr>
                        <td>Тату в любом стиле</td>
                        <td class="right">~1000 грн/час</td>
                    </tr>
                    <tr>
                        <td>Перекрытие тату и шрамов</td>
                        <td class="right">от 1000 грн</td>
                    </tr>
                    <tr>
                        <td>Удаление татуировок</td>
                        <td class="right">от 200 грн</td>
                    </tr>
                    <tr>
                        <td>Удаление татуажа</td>
                        <td class="right">200-800 грн</td>
                    </tr>
                </table>
                <a class="more-button" href="service">Посмотреть детальный прайс ></a>
            </div>
        </div>
    </section>

    <section class="block7">
        <div class="container">
            <h3>Что о нас говорят клиенты</h3>
            <div class="slider-container">
                <div class="slider-track">

                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slider-item">
                        <div class="user">
                            <img src="<?php echo e(asset('../img/clients/'.$comment->client->photo)); ?>" alt="Клиент">
                            <p><?php echo e($comment->client->name); ?></p>
                        </div>
                        <div class="comment">
                            <img class="quote1" src="<?php echo e(asset('../img/quote1.png')); ?>" alt="Скобка">
                            <p><?php echo e($comment->text); ?></p>
                            <img class="quote2"  src="<?php echo e(asset('../img/quote2.png')); ?>" alt="Скобка">
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            <div class="slider-buttons">
                <button class="prev"></button>
                <button class="next"></button>
            </div>
        </div>
    </section>

    <section class="block8">
        <div class="container">
            <div class="block8-content">
                <img class="phone-pic" src="<?php echo e(asset('../img/phone.png')); ?>" alt="Форма">
                <div class="offer">
                    <h3>Запишитесь на консультацию</h3>
                    <p class="paragraph">Также если у вас есть вопросы порядка и условий предоставления услуг, мы готовы ответить на них в телефонном режиме. </p>
                    <img class="phone-pic-small" src="<?php echo e(asset('../img/phone.png')); ?>" alt="Форма">
                    <div class="button-group">
                        <a class="big-button popup-link" href="#popup">Консультация бесплатно</a>
                        <p class="paragraph2">Оставьте номер телефона и мы свяжемся с вами в ближайшее время</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\backstage\resources\views/home.blade.php ENDPATH**/ ?>