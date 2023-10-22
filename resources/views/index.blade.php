@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('h1')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center"><h2>¡Bienvenidos a "My Chirp's BootCamp"!</h2></div>
        </div>
        <div class="card-body">
            <div class="card-text">



                <p>Me complace compartir contigo que he completado con éxito el BootCamp de <a
                        href="https://www.youtube.com/watch?v=thCwKk3nyJE" target="_blank">Laravel 10 desde cero | Curso
                        completo |
                        Aprendible</a>, una experiencia de
                    aprendizaje intensiva en el desarrollo de aplicaciones web con Laravel. A lo largo de este BootCamp, he
                    adquirido conocimientos sólidos en la creación de aplicaciones web y programación en PHP.</p>

                <p>En este espacio, he reunido una variedad de recursos y proyectos que he desarrollado durante mi tiempo en
                    el BootCamp. Aquí encontrarás ejemplos de código, aplicaciones web y soluciones que demuestran mis
                    habilidades en Laravel, así como mi pasión por la programación web.</p>

                <p>Si estás interesado en explorar y aprender más sobre el desarrollo de aplicaciones web, te invito a
                    navegar a través de mis proyectos y recursos. Espero que encuentres información valiosa y ejemplos de
                    trabajo que inspiren tus propios proyectos y desafíos en el mundo del desarrollo web.</p>

                <p>¡Gracias por visitar mi perfil y explorar mis conocimientos adquiridos en "My Chirp's BootCamp"! Si
                    tienes alguna pregunta o deseas discutir cualquier proyecto en particular, no dudes en contactarme.</p>

            </div>
        </div>
    </div>
@endsection
