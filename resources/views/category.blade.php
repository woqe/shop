@extends('shell')

@section('title')
    {{$category['name']}}
@stop

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Категории</h2>
                        @include('menu.vertical',$menu)
                        <div class="brands_products"><!--brands_products-->
                            <h2>Производитель (prod)</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Test</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Test</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Цена</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                       data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br/>
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt=""/>
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center"></h2>
                        <div class="product-filter">
                            <ul role="tablist">
                                <li role="presentation" class="list active">
                                    <a href="#display-1-1" role="tab" data-toggle="tab"></a>
                                </li>
                                <li role="presentation"  class="grid ">
                                    <a href="#display-1-2" role="tab" data-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="sort">
                                        <label>Цена</label>
                                        <select id="sort">
                                            <option value="upPr">Сначала дорогие</option>
                                            <option value="downPr">Сначала дешевые</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="limit">
                                        <label>Показывать товаров</label>
                                        <select id="count">
                                            <option value="9">9</option>
                                            <option value="18">18</option>
                                            <option value="36">36</option>
                                            <option value="72">72</option>
                                            <option value="144">144</option>
                                            <option value="1000">1000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div id="products">
                            @foreach($positions as $position)
                                @if($position['price']=='0,00')@continue
                                @endif

                                    <div class="col-sm-4 product">
                                        <div class="product-image-wrapper">

                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a style="display:flex" href="/product/{{$category['id']}}/{{$position['id']}}">
                                                        <img src="
                                                        @if($position['img'])/engine/import/
                                                        @else
                                                            'https://www.mearto.com/assets/no-image-83a2b680abc7af87cfff7777d0756fadb9f9aecd5ebda5d34f8139668e0fc842.png'
                                                        @endif
                                                        " alt="" />
                                                    </a>
                                                    <h2>{{$position['price']}} руб.</h2>
                                                    <p class="hidden hidden-price">{{intval($position['price'])}}</p>
                                                    <p>{{$position['name']}}</p>
                                                    <a href="#" id_prod="{{$position['id']}}" class="toch-button btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div><!--products-->
                    </div><!--features_items-->
                    <div class="pagination-area">
                        <div class="row">
                            <div class="col-md-5 col-xs-12">
                                <div class="pagination">
                                    <ul id="list-pages">

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <div class="product-result">
                                    <span id="pages_formatted">Showing 1 to 16 of 19 (2 Pages)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var resObj;
        var count = parseInt($('#count').val());
        $('#sort').change(function(e){

            resObj = sortProducts($('#sort').val(),0);
            paginator(1,count,true);



        });
        $('#count').change(function(e){
            count = parseInt($(this).val());
            paginator(1,count,true);

        });

        function sortProducts(type,launch){
            if(launch>0){
                var items = [];
                $.each($('.product'),function(key,value){
                    items[items.length]=new Object({
                        html:$(value).html(),
                        price:$(value).find('.hidden-price').text().replace(/\s+/g,''),

                    });

                });
            }
            else{
                var items = resObj.items;
            }

            function comparePrice(priceA, priceB){
                if(type=='upPr'){
                    return priceB.price-priceA.price;
                }
                else {
                    return priceA.price-priceB.price;
                }


            }
            var arr = items.sort(comparePrice);
            //paginator($('#count').val());

            console.log(new Object({items:items,arr:arr}));
            return new Object({items:items,arr:arr});
        }
        $('.toch-button').off('click');

        resObj = sortProducts('upPr',1);
        paginator(1,count,true);

        function paginator(needPage,CNTitems,refreshPaginator,noSort){

            $('#products').empty();

            var start = (needPage-1)*CNTitems;

            var elem=0;

            $.each(resObj.arr,function(key,value){


                if(key>=start&&elem<parseInt($('#count').val())){

                    $('#products').append('<div class="col-sm-4 product">'+value['html']+'</div>');

                    elem++;
                }

            });
            $('.toch-button').click(function(e){
                e.preventDefault();

                var xhr = new XMLHttpRequest();

                xhr.open('GET','/engine/block/basket/add.php?id='+$(this).attr('id_prod'), true);
                xhr.send();
                xhr.onreadystatechange = function() { // (3)
                    if (xhr.readyState != 4) return;
                    if (xhr.status != 200) {
                        alert(xhr.status + ': ' + xhr.statusText);
                    } else {
                        <?
                                /*
                        if($_SESSION['uid']>0):?>
                        notify('Товар добавлен в корзину','38, 172, 206',1200);
                        <?else:?>
                        notify('Пожалуйста авторизуйтесь на сайте','0,0,0',1200);
                        <?endif;
                                */?>
                        refresh_cart();
                    }
                }

            });

            $('#pages_formatted').text('Показано '+elem+' элементов из '+ resObj.arr.length);
            if(refreshPaginator){
                var pages = resObj.items.length/parseInt($('#count').val());
                $('#list-pages').empty();
                $('#list-pages').append('<li id="max-left"><a>&laquo;</a></li>');

                $('#list-pages').append('<li id="left"><a>&lt;</a></li>');
                $('#list-pages').append('<li id="first" class="page active"><a>1 из '+Math.ceil(pages)+'</a></li>');

                $('#list-pages').append('<li id="right"><a>&gt;</a></li>');
                $('#list-pages').append('<li id="max-right"><a>&raquo;</a></li>');


                $('.page').click(function(e){
                    $.each($('.page'),function(key,value){
                        $(value).removeClass('active');
                    });
                    $(this).addClass('active');
                    paginator(parseInt($(this).find('a').text()),count,false);


                });
                $('#first').click(function(e){
                    $.each($('.page'),function(key,value){
                        $(value).removeClass('active');
                    });
                    $(this).addClass('active');
                    paginator(1,count,false);


                });
                $('#max-left').click(function(e){
                    paginator(1,count,false);
                    $('.page').find('a').html('1 из '+Math.ceil(pages));
                    var scrolltop=$('.product-title').offset().top;
                    $(document).scrollTop(scrolltop);


                });
                $('#right').click(function(e){

                    if(parseInt($('.page').find('a').text())!=Math.ceil(pages)){
                        paginator(parseInt($('.page').find('a').text())+1,count,false);

                        $('.page').find('a').html(parseInt($('.page').find('a').text())+1+' из '+Math.ceil(pages));
                        var scrolltop=$('.product-title').offset().top;
                        $(document).scrollTop(scrolltop);
                    }


                });
                $('#left').click(function(e){

                    if(parseInt($('.page').find('a').text())!=1){
                        paginator(parseInt($('.page').find('a').text())-1,count,false);

                        $('.page').find('a').html(parseInt($('.page').find('a').text())-1+' из '+Math.ceil(pages));
                        var scrolltop=$('.product-title').offset().top;
                        $(document).scrollTop(scrolltop);

                    }


                });
                $('#max-right').click(function(e){
                    paginator(Math.ceil(pages),count,false);
                    $('.page').find('a').html(Math.ceil(pages)+' из '+Math.ceil(pages));
                    var scrolltop=$('.product-title').offset().top;
                    $(document).scrollTop(scrolltop);


                });
            }

        }
    </script>
@stop