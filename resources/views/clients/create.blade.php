@section('content')

<form method="post" action="/client">

@csrf

<div>
    <label>first name</label>
    <input type="text" name="first_name">
</div>
<div>
    <label>surname </label>
    <input type="text" name="surname">
</div>
<div>
    <label>addres</label>
    <input type="text" name="address">
    <label>email</label>
    <input type="text" name="email">
    <label>phone</label>
    <input type="text" name="phone">
</div>
<button type="submit">Save client!</button>
</form>
@endsection