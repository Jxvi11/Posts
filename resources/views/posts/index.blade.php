@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')

    <div class="container">
        <div class="row">
            <legend>Listado de posts</legend>
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Ver</th>
                    <th>Eliminar</th>
                    <th>Editar</th>

                </tr>
              </thead>
              <tbody>
                @if (count($posts) > 0 )
                    @foreach($posts as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->titulo }}</td>
                            <td>
                                <a href="{{ route('posts.show',$p->id) }}" method="GET" class="btn btn-success btn-sm">Ver</a>
                            </td>
                            <td>
                                <form id="delete-form-{{ $p->id }}" action="{{ route('posts.destroy',$p->id) }}" style="display: none;" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('¿Seguro que quieres eliminar el siguiente posts?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $p->id }}').submit();
                                }else {
                                    event.preventDefault();
                                }">Eliminar
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('posts.edit',$p->id) }}" m method="GET" class="btn btn-info btn-sm">Editar</a>
                            </td>
                        </tr>
                    @endforeach

                    {{ $posts->links() }}

                @endif
              </tbody>
            </table>
        </div>
    </div>
@endsection
