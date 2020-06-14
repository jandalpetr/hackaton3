<h1>Details of the Client</h1>


<h2>Client</h2>
{{ $client }}

<p>your name -{{$client->first_name}}</p>
<p>surname -{{$client->surname}}</p>
<p>address -{{$client->address}}</p>
<p> email -{{$client->email}}</p>
<p>phone -{{$client->phone}}</p>

<div class="add pet">
   <a href="/pet/create/{{$client->id}}"><p>Add Pets for Mr/Mrs{{$client->first_name}}</p></a> 
    <p>With owner id {{$client->id}}</p>
</div>