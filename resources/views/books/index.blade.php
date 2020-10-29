<x-app>


<div class="container">
 <div class="row">
  <div class="col-12">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Autore</th>
      <th scope="col">Genere</th>
      <th scope="col">Descrizione</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($books as $book)
   
   <tr>
     <th scope="row">1</th>
         <td>{{ $book['title'] }}</td>
      <td>{{ $book['author'] }}</td>
      <td>{{ $book['genre'] }}</td>
      <td>{{ $book['description'] }}</td> 
     </tr>
     <a href="{{ route('book.show'), compact('book') }}" class="btn btn-info">Vedi</a>
     <a href="{{ route('book.edit'), compact('book') }}" class="btn btn-info">Edit</a>
     <form action="{{ route('book.destroy', compact('book')) }}" method="POST">
     @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Elimina</button>
    
    </form>
      @endforeach
   
  </tbody>
</table>

  </div>
 </div>
</div>



</x-app>