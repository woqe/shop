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
