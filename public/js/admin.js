var oneC = function(){
  $('.load').css({'display':'block'});
  var xhr = new XMLHttpRequest();

  xhr.open('GET',module('1c.php'), true);
  xhr.send();

  xhr.onreadystatechange = function() {
    if (xhr.readyState != 4){
      return;
     }
     $('.load').css({'display':'none'});
    if (xhr.status != 200) {

    } else {
      var html=xhr.responseText;
      $('.right_side').html(html);
    }
  }
}

var stat = function(){
  $('.load').css({'display':'block'});
  var xhr = new XMLHttpRequest();

  xhr.open('GET',module('charts.php'), true);
  xhr.send();

  xhr.onreadystatechange = function() {
    if (xhr.readyState != 4){
      return;
     }
     $('.load').css({'display':'none'});
    if (xhr.status != 200) {

    } else {
      var html=xhr.responseText;
      $('.right_side').html(html);
    }
  }
}


var about = function(){
  var html='';
  html+='Версия ядра: <b>1.00</b>';
  $('.right_side').html(html);
}

var orders = function(){
  $('.load').css({'display':'block'});
  var xhr = new XMLHttpRequest();

  xhr.open('GET',module('orders.php'), true);
  xhr.send();

  xhr.onreadystatechange = function() {
    if (xhr.readyState != 4){
      return;
     }
     $('.load').css({'display':'none'});
    if (xhr.status != 200) {

    } else {
      var json = JSON.parse(xhr.responseText);
      console.log(json);

      var html='<table class="table table-stripped">\
            <thead>\
              <tr>\
                <th>id заказа</th>\
                <th>id пользователя</th>\
                <th>timestamp</th>\
                <th></th>\
              </tr>\
            </thead>\
            <tbody>';
      var json = JSON.parse(xhr.responseText);
      console.log(typeof(json));
      json.forEach(function callback(current,index,array){

      html+='<tr>\
            <th scope="row">'+current.id+'</th>\
            <td>'+current.uid+'</td>\
            <td>'+current.date+'</td>\
            <td>\
              <div class="btn-group">\
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Действие\
                  <span class="caret"></span>\
                </button>\
                <ul class="dropdown-menu" role="menu">\
                  <li><a id_of_client="'+current.id+'" class="remove_client" href=#>Удалить</a></li>\
                </ul>\
              </div>\
            </td>\
          </tr>';
      });
      html+='</tbody></table>';
      $('.right_side').html(html);
    }
  }
}



$('.menu').click(function(){
  eval($(this).attr('id')+'()');
});



var module = function(file){
  return('/engine/block/admin/'+file);
}





orders();
