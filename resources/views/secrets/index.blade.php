@extends('layouts.app')

@section('content')


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">El Secreto</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link fw-bold py-1 px-0" href="#">Logout</a>
            </nav>
        </div>
    </header>

    <main class="px-3">
        <h1>Guarda tus secretos</h1>
        <hr>

    </main>

    <div class="row">
        <div class="form-group col-md-6">
            <router-link :to='{name:"secrets"}' class="btn btn-primary">Ver Secretos</router-link>
        </div>
        <div class="form-group col-md-6">
            <router-link :to='{name:"crear"}' class="btn btn-success">Crear Secreto</router-link>
        </div>
    </div>
    <article>
        <div class="row">
            <div class="col-md-12">
                <router-view></router-view>
            </div>

        </div>

    </article>

    <footer class="mt-auto text-white-50">
        <p class="lead">
            <a
                href="#"
                class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Learn more</a>
        </p>
        <p>Cover template for
            <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by
            <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    </footer>
</div>


@endsection