<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>@yield('title')</title>

    <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{url('/css/price-range.css')}}" rel="stylesheet">
    <link href="{{url('/css/animate.css')}}" rel="stylesheet">
    <script src="/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/account.php"><i class="fa fa-user"></i> Аккаунт</a></li>
                            <li><a id="cart_text" href="/cart.php"><i class="fa fa-shopping-cart"></i> Корзина</a></li>

                            <li><a href="/auth/"><i class="fa fa-lock"></i> Вход</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Главная</a></li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">Отзывы</a></li>
                            <li><a href="contact-us.html">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form class="" action="/search.php" method="get">
                            <input type="text" name="query" placeholder="Поиск"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

@yield('content')

<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Сервис</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Онлайн консультация</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Личный кабинет</a></li>
                            <li><a href="#">Подбор картриджей</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Новые разделы</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">#</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Помощь</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Оплата</a></li>
                            <li><a href="#">Оферта</a></li>
                            <li><a href="#">Возврат товара</a></li>
                            <li><a href="#">Обратная связь</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Оформление заказа</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>О компании</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Информация о компании</a></li>
                            <li><a href="#">Вакансии</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Сотрудничество</a></li>
                            <li><a href="#">Сертификаты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>Подписаться на новости</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Ваш Email адрес" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Получайте последние новости с нашего сайта</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2018 'company'. Все права защищены.</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.scrollUp.min.js"></script>
<script src="/js/price-range.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/main.js"></script>


<script type="text/javascript">
    $(document).ready(function(e){

        var xhr = new XMLHttpRequest();

        xhr.open('GET','/engine/block/basket/get.php', true);
        xhr.send();

        xhr.onreadystatechange = function() { // (3)
            if (xhr.readyState != 4) return;



            if (xhr.status != 200) {
                alert(xhr.status + ': ' + xhr.statusText);
            } else {
                console.log(xhr.resposeText);
                var json_basket = JSON.parse(xhr.responseText);
                if(xhr.resposeText!='empty'){
                    $('#cart_text').html('<i class="fa fa-shopping-cart"></i> '+json_basket.count+' товаров на сумму '+json_basket.summ+' р.');
                }
                else{
                    $('#cart_text').html('<i class="fa fa-shopping-cart"></i> Корзина пуста');
                }

            }
        }
    });





</script>




</body>
</html>
