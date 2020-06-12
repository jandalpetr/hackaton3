







<form method="post" action="/pet">

    @csrf
    <div>
        <label>name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>client id </label>
        <input type="text" name="client_id">
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
