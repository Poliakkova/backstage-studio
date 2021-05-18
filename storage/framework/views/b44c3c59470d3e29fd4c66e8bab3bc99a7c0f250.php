<?php $__env->startSection('content2'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('../css/portfolio.css')); ?>">

    <section class="portfolio">
        <div class="container">
            <div class="portfolio-body">
                <h2>Наши мастера и их работы</h2>
                <?php $i = 1;?>
                <?php $__currentLoopData = $masters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="master-block">
                    <div class="photo">
                        <img src="<?php echo e('../img/workers/'.$master->photo); ?>" alt="Фото мастера">
                    </div>
                        <h3><?php echo e($master->name); ?></h3>
                        <p>Любимые стили татуировки: <?php echo e($master->style); ?> и другие.</p>
                        <p>Дополнительная специалзация: <?php echo e($master->specializing); ?>.</p>
                        <p>Cтаж: <?php echo e($master->experience); ?>.</p>
                        <span class="gallery-button">Посмотреть работы</span>
                        <div class="gallery-body">
                            <div class="grid">
                            <?php $__currentLoopData = $master->works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="work"><a class="popup-link" href="#image<?php echo e($i); ?>"><img src="<?php echo e('../img/works/'.$work->photo); ?>" alt="Работа мастера"></a></div>
                                <div id="image<?php echo e($i); ?>" class="popup">
                                    <div class="popup-body">
                                        <div class="popup-content popup-content-image">
                                            <a href="#" class="popup-close close-popup" ></a>
                                            <div class="popup-image">
                                                <img src="<?php echo e('../img/works/'.$work->photo); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <h4>Какие вопросы следует задать мастеру на консультации?</h4>
                <p>Стерильность. Просто необходимо задать специалисту вопросы о безопасности во время сеанса.
                    Хорошие и опытные татуировщики всегда используют одноразовые модули (картриджи, иглы) и другие расходники,
                    он должен это все открыть при Вас уже перед самим началом работы. Спросите, какими средствами дезинфекции
                    и способами стерилизации он пользуется, обратите внимание, чтобы он использовал
                    одноразовые перчатки и контейнеры (колпачки) для смешивания краски.
                    Не стесняйтесь задавать вопросы об этом. Это Ваше здоровье и безопасность!</p>
                <p>Портфолио.  Как написано выше – специалист должен показать Вам уровень своих татуировок,
                    насколько он опытен в этом искусстве. В нашем случае, очень важно обратить внимание еще и на
                    интересующий стиль татуировки – были ли подобные в его практике. Стоит особое внимание обратить
                    на качество татуировок в портфолио (пусть покажет свой инстаграм). Четкие контуры, эстетичное сочетание цветов, плавные переходы
                    и в целом красивый вид рисунка должны присутствовать. Вам должно нравиться его портфолио!</p>
                <p>Рекомендации. Спросите о противопоказаниях и рекомендациях до и после нанесения татуировки в салоне.
                    Не стоит употреблять алкоголь, наркотики, антибиотики перед сеансом. Нельзя посещать
                    спортзал, бани, сауны и пляжи неделю после. Обо всем этом
                    опытный мастер тату должен рассказать и предупредить еще на консультации до нанесения татуировки.</p>
                <p>Важно понимать, что консультация с мастером в салоне - это лишь знакомство с ним. Это Вас ни к чему не обязывает.
                    И вместе с этим, она Вам будет очень полезна для принятия взвешенного решения! Не стоит тратить
                    время на поиски мастеров и различные сомнения – просто запишитесь в наш салон на консультацию.
                    Администратор скажет какой мастер работает в подходящем стиле и готов Вас принять в ближайшее время.</p>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\backstage\resources\views/portfolio.blade.php ENDPATH**/ ?>