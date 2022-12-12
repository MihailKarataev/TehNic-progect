<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header__topbar">
                <a href="/" class="logo"></a>
                <!--main menu -->
                <nav class="header__topmenu">
                    <ul>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Спец пердложения</a></li>
                        <li><a href="#">Контракты</a></li>
                    </ul>
                </nav>
                <!--END main menu -->
                <div class="header__contacts">
                    <div class="header__email">Infohome@yahoo.com</div>
                    <div class="heade__phone">
                        <div class="header__phone__description">Звоните нам</div>
                        <div class="header__phone__number">+7 (351) 283 28 47</div>
                    </div>
                </div>
            </div>
            <div class="header__downbar">
                <!--list of technique -->
                <div class="header__machinery">
                    <a href="#" class="header__mini-loader"></a>
                    <a href="#" class="header__front-loader"></a>
                    <a href="#" class="header__escavator-loader"></a>
                    <a href="#" class="header__bulldozer"></a>
                    <a href="#" class="header__escavators"></a>
                    <a href="#" class="header__autograider"></a>
                    <a href="#" class="header__forklift"></a>
                    <a href="#" class="header__truck-crane"></a>
                </div>
                <!--END list of technique -->
            </div> 
            <div class="slider__wrapper">
                <!--menu of slider-->
                <div class="slider__menu">
                    <a href="#" class="slider__menu-rent">Аренда</a>
                    <a href="#" class="slider__menu-service">Сервис</a>
                    <a href="#" class="slider__menu-spares">Запчасти</a>
                    <a href="#" class="slider__menu-financy">Финансовые решения</a>
                </div>
                <!--END menu of slider-->
                <div class="slider">
                    <!--slider content -->
                    <div class="slider__item">
                        <img class="slider__item-image" src="<?php echo get_template_directory_uri(); ?>/images/slide.jpg">
                        <div class="slider__item-description">
                            Уникальное спецпредложение!
                        </div>
                    </div>
                    <!--END slider content -->
                </div>
            </div>
        </header>
        <!--content page -->
        <div class="content">
            <div class="content__news">
                <div class="news__title">Новости:</div>
                <div class="news__item">
                    <div class="news__title">19 Сентября</div>
                    <div class="news__content">Оперативные поставки дробилок и грохотов McCiaskey +, бесплатная пуско-наладка</div>
                    <a href="#" class="news__link">Подробнее</a>
                </div>
                <div class="news__item">
                    <div class="news__title">19 Сентября</div>
                    <div class="news__content">Оперативные поставки дробилок и грохотов McCiaskey +, бесплатная пуско-наладка</div>
                    <a href="#" class="news__link">Подробнее</a>
                </div>
                <div class="news__item">
                    <div class="news__title">19 Сентября</div>
                    <div class="news__content">Оперативные поставки дробилок и грохотов McCiaskey +, бесплатная пуско-наладка</div>
                    <a href="#" class="news__link">Подробнее</a>
                </div>
            </div>
            <div class="contant__aboutus">
                <div class="aboutus__title">Несколько слов о нас:</div>
                <div class="aboutus__content">
                    <p>Компания «АстрА-техно» – генеральный импортер и дистрибьютор в России строительной, землеройной, коммунально-уборочной техники таких брендов, как:
                    MUSTANG (США) — мини погрузчики с бортовым поворотом, шарнирно-сочлененные мини погрузчики, гусеничные мини погрузчики;
                    HANIX (Япония) — гусеничные мини экскаваторы;</p> 
                    <p>А также представляет популярные бренды ландшафтно-озеленительной, грузоподъемной, дорожной, высотной техники и дробильно-сортировочного оборудования</p>
                    <p>AVANT (Финляндия) — мини тракторы и мини погрузчики с шарнирно-сочлененной рамой;</p> 
                    <p>DIECI (Италия) — высокопроизводительные телескопические погрузчики с жёсткой стрелой и с поворотной башней;</p>  
                    <p>TEREX (Великобритания) — экскаваторы-погрузчики, мини экскаваторы и фронтальные погрузчики;</p> 
                    <p>Представленные компанией «АстрА-техно» бренды являются лидерами в своей области, а фирмы-изготовители имеют огромный опыт в производстве универсальной техники. Используя современные передовые технологии и разработки, высококвалифицированный персонал заводов-изготовителей производит технику, которая отвечает всем требованиям самых взыскательных клиентов. 
                    Продажа минитракторов, подъемников и других видов техники - это сфера, в которой особенно важны профессионализм, опыт и понимание главных тенденций данного направления. Наши клиенты, которые хотят купить минитрактор, должны быть уверены в качестве приобретаемой техники и сервисном обслуживании. 
                    Помимо самих моделей техники наша компания осуществляет продажу дополнительного оборудования, которым при необходимости могут оснащаться машины. Оборудование поставляется от ведущих отечественных и зарубежных изготовителей.</p>
                </div>
            </div>
        </div>
        <!--END content page-->

        <!--logo partners -->
        <div class="footer__partners">
            <div class="partners__logo partners__mcclockey"></div>
            <div class="partners__logo partners__terex"></div>
            <div class="partners__logo partners__ddieci"></div>
            <div class="partners__logo partners__hanix"></div>
            <div class="partners__logo partners__avant"></div>
            <div class="partners__logo partners__mustang"></div>
            <div class="partners__logo partners__hanix"></div>
        </div>
        <!--END logo partners -->

        <!--footer -->
        <footer class="footer">
            <div class="footer__content">
                <div class="footer__copyright">© 2022 Copyright</div>
            </div>
        </footer>
        <!--END footer -->
    </div>
</body>
</html>