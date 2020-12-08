@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('users/update', ['id' => $users->id])}}" method="post" novalidate>
                    @csrf 
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required value="{{$users->name}}">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" required value="{{$users->email}}">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="password" class="form-control" required value="{{$users->password}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Envíar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection