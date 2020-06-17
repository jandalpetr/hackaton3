@extends('layouts.layout', [
    'title' => 'Pet details'
])

@section('content')



<h1>Details of the Dog</h1>


<h2>dog</h2>


{{$pet->name}}<br>
{{$pet->breed}}<br>
{{$pet->weight}}<br>

<a href="/pet/{{$pet->id}}/edit">edit this Pet</a>
@endsection
