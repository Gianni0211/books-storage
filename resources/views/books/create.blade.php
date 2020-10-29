<x-app>

<div class="container">
 <div class="row">
  <div class="col-12">

   <h3>Inserisci Il tuo libro</h3>
  
  </div>
  <div class="col-12">

<form action="{{ route('books.store') }}" method="POST">
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 @csrf
  <div class="form-group">
    <label for="titolo">Titolo</label>
    <input type="text" name="title" class="form-control" id="titolo" >
    
  </div>
  <div class="form-group">
    <label for="author">Autore</label>
    <input type="text" name="author" class="form-control" id="author" >
  </div>
  <div class="form-group">
    <label for="genre">Genere</label>
    <input type="text" name="genre" class="form-control" id="genre" >
    
  </div>
  <div class="form-group">
    <label for="description">Descrizione</label>
    <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
    
  </div>
  
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  </div>
 </div>

</div>



</x-app>