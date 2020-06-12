<h1>Index</h1>



<ul>
@foreach($list as $l)
   <li> <h3>{{ $l->name }}</h3></li>
   <li> {{ $l->breed}}</li>
   <li> {{ $l->weight}}</li>
   <li> {{ $l->age}}</li>
   <li> client {{ $l->client_id}}</li>
   <br>
   <p>Dog ID</p> <a href="/index/{{$l->id}}">{{$l->id}}</a>
   

@endforeach

</ul>
