
<h2>List of clients</h2>
<div class="form">
    <form action="/client/index" method="get">

        <label>Find a Pet Saviour
            <input type="text" name="name" placeholder="first name of saviour">
        </label>
        <input type="submit">
    </form>
</div>
@foreach($list as $l)


    <div class="client__card">

        <span>saviour ID: {{$l->id}}</span><br>
        <p>name:<h4>{{$l->first_name}}</h4></p><br>
        <p>surname:<h4> {{$l->surname}}</h4>  
        <p>email: {{$l->email}} </p>   
        <p>address: {{$l->address}}</p>    
        <p>phone: {{$l->phone}}</p>    

    </div>

@endforeach