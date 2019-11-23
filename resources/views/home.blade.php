@extends('layouts.restricted')

@section('content')
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Lista de Usuarios
                        </p>
                    </header>

                    <div class="card-content">
                      <p>La sigiente tabla renderiza una <b>coleccion</b> de objetos <b>User</b> filtrando solo aquellos correos que de encuentran Verificados</p><br>
                      <ul>
                        <?php foreach ($verificados as $verificado): ?>
                          <li>* {{$verificado->name}}</li>
                        <?php endforeach; ?>
                      </ul>
                    <br>  <p>El objeto <p>Usuarios</p> es obtenido de manera asincrona por medio de <b>Axios</b> y se renderiza con la instrucción <b>v-for</b> del framework <b>VueJs.</b></p><br>


                        <table class="table is-fullwidth is-bordered is-striped">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Correo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="usuario in usuarios">
                              <td>@{{usuario.name}}</td>
                              <td>@{{usuario.email}}</td>
                            </tr>
                          </tbody>
                        </table>

                        <p>Puede visualizar el contenido en la consola fulsando f12 y a continuación.</p>

                        <pre>
                          @{{usuarios}}
                        </pre>

                        <p>Por ultimo se renderiza un <b>arreglo</b> por medio <b>v-for</b>.</p><br>
                        <ul>
                          <li v-for="numero in arreglo">- @{{numero}}</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
