<form action="{{route('character.update', $character)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="contenitore-input">
        <label for="name" >Nome</label>
        <input type="text" name="name" id="name" value="{{}}">
    </div>

    <div class="contenitore-input">
        <label for="description" >Descrizione</label>
        <textarea  name="description" id="description">{{}}</textarea>
    </div>

    <div class="container-input">
        <label for="attack" >Attacco</label>
        <input type="text" name="attack" id="attack" value="{{}}">
    </div>

   
    <button>Modifica</button>
</form>