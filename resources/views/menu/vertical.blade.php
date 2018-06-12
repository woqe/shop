<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    @foreach ($menu as $key => $value)
    @if($value['group']=='n' && $value['parent']=='0')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="/product/{{$value->id}}/">{{$value->name}}</a></h4>
        </div>
    </div>
    @elseif($value['parent']=='0')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#{{$value->id}}">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    {{$value->name}}
                </a>
            </h4>
        </div>
        <div id="{{$value->id}}" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>



                    @foreach ($menu as $key2 => $value2)
                    @if($value2['parent']==$value['id_xml'])
                    <li><a href="/product/{{$value2->id}}/">{{$value2->name}}</a></li>
                    @endif
                    @endforeach
                    <li><a href="/product/{{$value->id}}/">{{$value->name}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div><!--/category-products-->