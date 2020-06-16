@extends('layouts.layout', [
    'title' => 'Add a new Pet'
])

@section('content')




<form method="post" action="/pet/store">

    @csrf
    
    <div>
        <label>name</label>
        <input type="text" name="name">
    </div>
    <div>
    <input type="hidden" name="client_id" value="{{$client->id}}">
     
    </div>
    <div>
        <label>doctorid</label>
        <input type="text" name="doctor_id">
        <label>Breed</label>
        <input type="text" name="breed">
        <label>weight</label>
        <input type="text" name="weight">
    </div>
    <button type="submit">Save my new Pet!</button>
</form>
@endsection