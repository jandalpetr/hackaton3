
@extends('layouts.layout', [
    'title' => 'list of pets'
])

@section('content')



<form method="post" action="/client/update/{{$client->id}}">

@csrf
<p>your id is: </p><h1>{{ $client->id }}</h1>
<div>
    <label>first name</label>
    <input type="text" name="first_name">
    <p>current: {{ $client->first_name }}</p>
</div>
<div>
    <label>surname </label>
    <input type="text" name="surname">
    <p>current: {{ $client->surname }}
</div>
<div>
    <label>addres</label>
    <input type="text" name="address">
    <p>current: {{ $client->address }}
</div>
<div>
    <label>email</label>
    <input type="text" name="email">
    <p>current: {{ $client->email }}
</div>
<div>
    <label>phone</label>
    <input type="text" name="phone">
    <p>current: {{ $client->phone }}
</div>
<button type="submit">Save client!</button>
</form>
@endsection