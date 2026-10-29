@extends('layouts.base')
@section('contenido')
    <div class="max-w-2xl mx-auto">
        <section>
            <h2>Últimos rescates</h2>
            <ul id="fotos">
                @foreach ($mascotas as $mascota)
                <li>
                    <h3>{{ $mascota->nombre }}</h3>
                    <p>{{ $mascota->especie }}</p>
                    @php
                    
                    
                    $anio_mascota_rescate=$mascota->edad_anio_rescate; 

                    $anio_actual=date('Y');
                    $mes_actual=date('m');

                    $fecha_rescate=$mascota->fecha_rescate;
                    $dateTime=new DateTime($fecha_rescate);
                    $anio_rescate=$dateTime->format('Y');
                    $mascota_anios=($anio_actual-$anio_rescate)+$anio_mascota_rescate;
                    

                    $tiempo_espera= $dateTime->diff(new DateTime());
                    @endphp
                    <p>Edad: {{$mascota_anios}} años </p>         
                    <p>Fecha de rescate: {{ $mascota->fecha_rescate }}</p>
                    <p>Tiempo esperando hogar: {{ $tiempo_espera->y }} años y {{ $tiempo_espera->m }} meses </p>
                    <button class="btn-mas">Quiero saber mas</button>

                </li>
                @endforeach
            
            </ul>
        </section>

        <section>
            <h2>Refugios disponibles</h2>
            <ul id="fotos">
                @foreach ($refugios as $refugio)
                <li>
                    <h3>{{ $refugio->nombre }}</h3>
                    <p>{{ $refugio->direccion }}</p>
                    

                </li>
                @endforeach
            
            </ul>
        </section>


        <section class="tarjeta">
            <h3>Artículos importantes</h3>
            <article>
                <h3>
                    Regla 3-3-3
                </h3>
                <p>
                    La denominada regla 3-3-3 divide el proceso de adaptación de un perro adoptado en tres etapas aproximadas: los primeros tres días, las primeras tres semanas y los primeros tres meses de convivencia.

                </p>
            </article>
            <article>
                <h3>
                    Proceso de adopción
                </h3>
                <p>
                    Se realiza la solicitud para un o varios perros de su interés, se recibirán en el refugio los documentos requeridos, y los rescatistas considerarán la información provista por usted. Si todo se aprueba adecuadamente se le hará la entrega de la mascota a su domicilio.
                </p>
            </article>
            <article>
                <h3>
                    Refugios
                </h3>
                <p>
                    Se cuentan con albergues para cantidades grandes de mascotas como ser el albergue angelino, zoonosis, Alma pro patitas, Animal Rights Oruro. Se tiene además hogares temporales que llegan a alberguergar mascotas por un periodo de tiempo limitado y en menor cantidad

                </p>
            </article>
        </section>
        
@endsection
