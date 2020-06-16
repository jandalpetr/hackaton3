<h1>Details of the Client</h1>


<h2>Client</h2>


<p>your name -{{$client->first_name}}</p>
<p>surname -{{$client->surname}}</p>
<p>address -{{$client->address}}</p>
<p> email -{{$client->email}}</p>
<p>phone -{{$client->phone}}</p>

<div class="add pet">
   <a href="/pet/create/{{$client->id}}"><p>Add Pets for Mr/Mrs{{$client->first_name}}</p></a> 
    <p>With owner id {{$client->id}}</p>
</div>
<div class="edit client">
<a href="/client/{{$client->id}}/edit">edit profile</a>
</div>
<h4>Pets</h4>

<ul>
 @foreach($dogs as $d)
    <li>
        <div class="pet">
            name -{{$d->name}}<br>
            age - {{$d->age}}<br>
            photo - {{$d->photo}}<br>
            breed - {{$d->breed}}<br>
            <a href="/pet/{{$d->id}}">pet profile</a>
        </div>
    </li>
    @endforeach

</ul>


