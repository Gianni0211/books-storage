<x-app>



@if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
 @endif

<div class="container">
 <div class="row">
  
  <div class="col-12">

<h1>Modifica il tuo libro</h1>

<form action="{{ route('books.store') }}" method="POST">
 @csrf
 @method('PUT')
  <div class="form-group">
    <label for="titolo">Titolo</label>
    <input type="text" name="title" vlaue="{{ $book->title }}" class="form-control" id="titolo" >
    
  </div>
  <div class="form-group">
    <label for="author">Autore</label>
    <input vlaue="{{ $book->author }}" type="text" name="author" class="form-control" id="author" >
  </div>
  <div class="form-group">
    <label for="genre">Genere</label>
    <input vlaue="{{ $book->genre }}" type="text" name="genre" class="form-control" id="genre" >
    
  </div>
  <div class="form-group">
    <label for="description">Descrizione</label>
    <textarea name="description" id="description" cols="30" rows="10">{{ old($book->description) }}</textarea>
    
  </div>
  
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



  </div>
 </div>
</div>

</x-app>