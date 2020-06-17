@extends('layouts.layout', [
    'title' => 'edit the Pet'
])

@section('content')

<form method="post" action="/pet/update/{{$pet->id}}">

@csrf
<p>The pet id is: </p><h1>{{ $pet->id }}</h1>
<h2>name: {{ $pet->name }}</h2>
<div>
    <label>new name</label>
    <input type="text" name="name">
    <p>current: {{ $pet->name }}</p>
</div>
<div>
    <label>new age </label>
    <input type="text" name="age">
    <p>current: {{ $pet->age }}
</div>
<div>
    <label>new weight</label>
    <input type="text" name="weight">
    <p>current: {{ $pet->weight }}
</div>
<div>
    <label>new photo</label>
    <input type="text" name="photo">
    <p>current: {{ $pet->photo }}
</div>
<div>
    <label>new breed</label>
    <input type="text" name="breed">
    <p>current: {{ $pet->breed }}
</div>
<button type="submit">Save Pet!</button>
</form>
@endsection
