@extends('layouts.default')

@section('title-block')
    Про нас
@endsection
@section('content')
    <style>
        .txt-header {
            margin: 10px 0;
            font-size: 21px;
        }
        h1 {
            display: block;
            font-size: 2em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }
        body {
            background-color: #f6f6f6;
            font-family: Montserrat,sans-serif;
            font-weight: 300;
            font-size: 1rem;
            color: #232323;
            overflow-anchor: auto;
            scroll-behavior: smooth;
            -webkit-text-size-adjust: none;
        }
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        p {
            line-height: 170%;
        }
        .main-wrapper {
            margin: 30px 0
        }

        main.left,aside {
            float: left
        }

        @media (min-width: 1024px) {
            main.left {
                width:70%;
                margin-right: 8%;
                float: left
            }
        }

        @media (max-width: 1023px) {
            main.left {
                width:100%
            }
        }

        @media (min-width: 1024px) {
            aside {
                width:22%;
                float: left
            }
        }

        @media (max-width: 1023px) and (min-width:850px) {
            aside {
                width:40%;
                margin-left: 30%;
                margin-top: 50px
            }
        }

        @media (max-width: 849px) and (min-width:550px) {
            aside {
                width:60%;
                margin-left: 20%;
                margin-top: 50px
            }
        }

        @media (max-width: 549px) {
            aside {
                width:100%;
                margin-top: 50px
            }
        }

        aside .heading {
            margin-bottom: 12px;
            font-weight: 800;
            font-size: 1.25rem
        }

        aside .course {
            max-width: 100%;
            margin-bottom: 20px
        }

        aside .course .title_course {
            font-weight: 500;
            font-size: .875rem;
            color: #201e1c
        }

        aside .course:hover .title_course {
            color: #f26651
        }

        aside .course .time-start {
            font-size: 14px
        }

        aside .course .course-img {
            position: relative
        }

        aside .course img {
            width: 100%
        }

        aside .course span.num-lessons {
            font-weight: 200
        }

        aside .course .button-on-course {
            position: absolute;
            right: 0;
            bottom: 0;
            margin: 10px 11px;
            -webkit-box-shadow: 2px 4px 10px rgba(33,31,29,.14)!important;
            box-shadow: 2px 4px 10px rgba(33,31,29,.14)!important;
            background-color: #fff;
            color: #211f1d;
            border-radius: 50%;
            width: 54px;
            height: 54px;
            text-align: center;
            line-height: 54px;
            font-size: 12px
        }

        aside .course:hover .button-on-course {
            -webkit-animation: .4s pulse linear;
            animation: .4s pulse linear
        }

        aside .course:hover img {
            -webkit-box-shadow: 10px 20px 20px rgba(107,106,105,.2);
            box-shadow: 10px 20px 20px rgba(107,106,105,.2)
        }

        @keyframes pulse {
            from {
                transform: scale(1)
            }

            50% {
                transform: scale(1.3)
            }

            to {
                transform: scale(1)
            }
        }

        aside .course .button-tag {
            position: absolute;
            left: 0;
            bottom: 4px;
            background-color: #b761f2;
            padding: 10px 15px;
            color: #fff;
            font-weight: 500;
            font-size: .75rem
        }

        aside .course .button-tag.online {
            background-color: #5869ff
        }

        aside .btn.white,aside .btn.red {
            width: 100%;
            padding: 15px 0;
            text-align: center;
            border-radius: 9px;
            margin-bottom: 20px
        }

        aside .btn.white {
            border: 1px solid #232323;
            background: transparent
        }

        aside .test-text {
            width: 100%;
            font-size: .875rem;
            font-weight: 300;
            margin-bottom: 20px
        }
    </style>
    <div class="main-wrapper container">
        <main class="left container">
            <h1 class="heading">Школа програмування</h1>
            <div class="block">
                <p class="txt">
                    На сьогоднішній день програмування – один із найперспективніших напрямків. Комп'ютеризація торкнулася всіх сфер нашого життя, і цей процес не припиняється. Це робить хороших програмістів затребуваними фахівцями на ринку праці. Програміст – та людина, яка ніколи не залишиться безробітною, але на етапі навчання доведеться докласти багато зусиль.<br><br>Наша <b>школа програмування</b> для початківців розробила навчальні програми так, щоб зробити навчання максимально простим. У них дотримано балансу між теорією та практикою, є тести для перевірки набутих навичок та відеоуроки.	</p>
                <br>
                <h3 class="txt-header">Чи варто вчитися онлайн?</h3>
                <p class="txt">
                    <b>Онлайн школа програмування для початківців</b> за якістю та обсягом матеріалу не відрізняється від очного навчання. Зате при організації процесу дистанційно навчання ви отримуєте низку переваг: </p>
                <ul class="txt">
                    <li><b>ІТ школа програмування</b> завжди під рукою. Не потрібно витрачати час на дорогу, достатньо мати вихід в інтернет та бажання вчитися;</li>
                    <li>немає обмеження у вигляді географічного фактора. Наша <b>школа програмування</b> доступна в будь-якій точці земної кулі;</li>
                    <li><b>Айті школа програмування</b> дозволяє в будь-який момент часу повторити пройдений раніше матеріал;</li>
                    <li>не скидайте з рахунків психологічну складову. Багато хто набагато комфортніше почувається вдома, ніж у навчальній аудиторії. Віддалене навчання дозволяє об'єднати переваги звичайної <b>школи кодингу</b> та домашній затишок.</li>
                </ul>
                <p class="txt">
                    Стереотип про те, що <b>школа програмування онлайн</b> для початківців не може конкурувати з віддаленим навчанням за якістю безнадійно застарів. Ключове навчання – бажання засвоювати новий матеріал. Безкоштовна школа програмування для початківців зі свого боку гарантує якісні навчальні матеріали, перевірку засвоєних знань та підтримку учнів.
                </p>
                <h3 class="txt-header">Що пропонують у нашій школі IT технологій</h3>
                <p class="txt">
                    Наша школа частково є безкоштовною онлайн-школою програмування для початківців. У програмуванні критично важливо відразу вибрати правильний напрямок. Погодьтеся, було б неприємно витратити час і гроші на навчання геймдеву в <b>школі IT</b>, а потім раптом зрозуміти, що вам хотілося б працювати в галузі штучного інтелекту.<br><br>
                    <b>Школа програмування</b> пропонує перед початком навчання пройти міні-тест. За його результатами зможете правильно підібрати напрямок. Так і гроші заощадите, і час. Щодо навчання, то <b>школа програміста</b> пропонує:
                </p>
                <ul class="txt">
                    <li><a href="courses/games">заглибитися в геймдев</a> – розробка ігор приносить непогані гроші. Якщо вам до душі цей напрямок, зможете заробляти, займаючись улюбленою справою;</li>
                    <li><a href="courses/web">навчання з поглибленням у веб-дизайн</a>. Зарплати у цій галузі також тримаються на високому рівні;</li>
                    <li><a href="courses/design">графічний дизайн</a>. Під час навчання у <b>ІТ школі програмування</b> розберетеся в тонкощах роботи у Фотошоп, Blender 3D;</li>
                    <li>вивчення <a href="courses/languages">мов програмування</a> Java, Python, C++ та інших.</li>
                </ul>
                <p class="txt">
                    Також онлайн школа it для початківців навчає бажаючих за комплексною програмою. Випускники отримують набір практичних навичок та теоретичних знань, достатній для працевлаштування.<br><br>
                    Хоч би який напрямок ви обрали, школа програмування дає актуальну інформацію. Що найголовніше – немає перекосу у бік теорії чи практики, у цьому питанні дотримано балансу.
                </p>
                <h3 class="txt-header">Як організовано навчання</h3>
                <p class="txt">
                    У <b>школі айти</b> навчання організовано так:
                </p>
                <ul class="txt">
                    <li><a href="reg">придбавши підписку</a>, учні отримують доступ до навчальних матеріалів. У самих відео розбирається і теорія, і різні приклади;</li>
                    <li>для самоконтролю в <b>школі ІТ</b> передбачені практичні завдання, розділені на 3 рівні за складністю (початковий, середній та складний). У <b>навчання IT онлайн</b> практика особливо важлива, теорія швидко забувається, тому потрібно постійно застосовувати її для вирішення практичних завдань.</li>
                </ul>
                <p class="txt">
                    Є матеріали у вільному доступі, статті на IT тематику також можна розглядати як елемент навчання. Цю частину матеріалів <b>школа програмування</b> надає абсолютно безкоштовно.<br><br>
                    І найважливіше. <b>Школа програмування</b> дає базу, правильно структурує інформацію для кращого сприйняття новачками. Але багато залежить і від вас, має бути бажання вчитися, освоювати щось нове.
                    Якщо ви вирішили стати програмістом, то маєте бути готові до того, що вчитися доведеться весь час. Школа програмування забезпечує хороший старт, але потім ви переходите в «автономне плавання» і все починає залежати лише від вас.
                    Якщо все сказане вище за вас не лякає, то ласкаво просимо. <b>Наша школа програмування</b> чекає на вас, увійти в IT не так складно, як здається спочатку.
                </p>
            </div>
        </main>
@endsection
