
@extends('plantilla')

@section('titulo', 'Ficha de post')

@section('contenido')

    <div class="container">

        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <div class="content">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Id</label>
                                <output  type="text" class="form-control" name="nombre">{{ $posts->id }}
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Titulo</label>
                                <output  type="text" class="form-control" name="codigo">{{ $posts->titulo }}
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Contenido</label>
                                <output  type="text" class="form-control" name="empresa">{{ $posts->contenido }}
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Fecha Creación</label>
                                <output  type="text" class="form-control" name="empresa">{{ $posts->created_at }}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="content">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <br>
                            <a href="{{ route('posts.index') }}" class="btn btn-danger">Atrás</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
