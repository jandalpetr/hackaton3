<h1>Dog Index</h1>
<div class="search">
   <h4>Find a pet</h4>
      <form action="/index" method="get">
      @csrf
         <input type="text" name="name" placeholder="enter the name">
         <input type="submit">
      </form>
</div>

<ul>
@foreach($list as $l)
<div class="dog">

   <img src="/images/pets/{{ $l->photo}}" alt="dog photo">
   <h3>{{ $l->name }}</h3>
   <p>Dog ID - {{$l->id}}</p>  
   <li> breed {{ $l->breed}}</li>
   <li> weight {{ $l->weight}}</li>
   <li> age {{ $l->age}}</li>
   <li> client id:{{ $l->client_id}}</li>
   <p> Go to <a href="/client/{{$l->client_id}}">Client profile</a></p>
   

</div>
   

@endforeach

</ul>
