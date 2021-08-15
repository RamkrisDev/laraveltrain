<h1>for blade</h1>

{{10+10}} 


<h2>total={{count($users)}}</h2>


@if($name=='muthu')
    <h1>welcome {{$name}}</h1>
@elseif($name=='ram')
    <h1>hello {{$name}}</h1>
@else
    <h1>unkown user</h1>
@endif


@unless($name=='kusi')
<h1>you r not kusi</h1>
@endunless


@for($i=0;$i< 10;$i++)

    <h1>{{$i}}</h1>
@endfor

@foreach($users as $u)


<li>{{$loop->index}}-{{$u}}</li>

<h4>index-{{$loop->index}}: s.no-{{$loop->iteration}}: remain-{{$loop->remaining}} even-{{$loop->even}}:odd-{{$loop->odd}}</h4>
@if($loop->first)
    <i>first name</i>
@elseif($loop->last)
    <i>last name</i>
@endif

@endforeach




@include('inner')
@foreach($users as $uu)
    <h3>{{$uu}}</h3>
@endforeach



<script>
    var data=@json($users);
    console.warn(data);
</script>



@csrf

@include('headers')