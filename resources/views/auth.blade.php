@extends('shell')

@section('title')
    Вход
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Создайте нового пользователя!</h2>
                            {!! Form::open(['method'=>'post','url'=>'auth/login']) !!}
                            <input name="username" type="text" placeholder="Логин"/>
                            <input name="password" type="password" placeholder="Email"/>
                            <button type="submit" id="entry" class="btn btn-default">Войти</button>
                            {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-sm-1">
                    <h2 class="or">ИЛИ</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Создайте нового пользователя!</h2>
                        {!! Form::open(['method'=>'post','url'=>'auth/register']) !!}
                            <input name="name" type="text" placeholder="Логин"/>
                            <input name="email" type="email" placeholder="Email"/>
                            <input name="password" type="password" placeholder="Пароль"/>
                            <input name="password_confirmation" type="password" placeholder="Повтор пароля"/>
                            <button type="submit" id="register" class="btn btn-default">Регистрация</button>
                        {!! Form::close() !!}
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

    <script>
        $('#enter').click(function(e){

            var xhr = new XMLHttpRequest();
            //alert('/engine/block/auth/login.php?login='+$('input[name=login_l]').val()+'&password='+$('input[name=password_l]').val());

            xhr.open('GET','/engine/block/auth/login.php?login='+$('input[name=login_l]').val()+'&password='+$('input[name=password_l]').val(), true);
            xhr.send();

            xhr.onreadystatechange = function() { // (3)
                if (xhr.readyState != 4) return;
                if (xhr.status != 200) {
                    alert(xhr.status + ': ' + xhr.statusText);
                } else {
                    if(xhr.responseText=='ok'){
                        location.replace('/');
                    }
                    else{
                        alert('Неверный логин или пароль');
                    }
                }
            }
        });


    </script>
@stop