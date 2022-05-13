@extends('layouts.app')

@section('section')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Album example</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Main call to action</a>
                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($films as $film)
                        <div class="col">
                            <div class="card shadow-sm">
                                <video controls>
                                    <source src="{{ $film->video }}" type="video/webm">
                                    Désolé, votre navigateur ne supporte pas ce format de vidéos.
                                </video>
                                <div class="card-body">
                                    <h2 class="card-text">{{ $film->nom }}</h2>
                                    <p class="card-text">{{ $film->description }}</p>
                                    <hr>
                                    <p class="card-text">{{ $film->synopsis }}</p>
                                    <hr>
                                    <p>Avec {{ $film->acteur1 }}, {{ $film->acteur2 }}, {{ $film->acteur3 }}, {{ $film->acteur4 }}</p>
                                    <p>Réalisé par {{ $film->realisateur }}</p>
                                    <p>Sorti le {{ $film->dt_sortie }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">{{ $film->duree }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <nav>
            <ul class="pagination pagination-lg justify-content-center">
                {{ $films->links() }}
            </ul>
        </nav>

    </main>

@endsection
