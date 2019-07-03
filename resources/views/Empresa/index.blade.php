{{-- Restriccion de acceso - Leer comentario en layout.redirect--}}
@include('layout.redirect')

@extends('layout.master')

@section('title')
  <title>Perfil Empresa</title>
@endsection

@section('styles')
  @include('layout.materialize')
@endsection

@section('body')
<div style="position: relative; top: 1px">
  @foreach ($companies as $company) {{-- Obtención de los datos de la Empresa --}}
    @if ($company->id == Auth::user()->id) 
        
        <div class="row">
            <div class="col s12"> 
                <h5 class="left-align"><i class="material-icons">person</i><b>&nbspDatos Personales</b></h5>    
                <div class="card horizontal z-depth-1"> {{--Creacion de card superiro con datos de usuario--}}
                    <div class="col s3 indigo" style="position: relative; top: 0px">
                        <h6 style = "color:white;"><b>Nombre:</b></h6>
                        <h6 style = "color:white;"><b>RUT:</b></h6>
                        <h6 style = "color:white;"><b>Email:</b></h6>
                        <h6 style = "color:white;"><b>Teléfono:</b></h6>
                        <h6 style = "color:white;"><b>Celular:</b></h6>
                    </div>
                    <div class="col s9" style="position: relative; top: 0px"> 
                        <h6>&nbsp{{$company->nombres}}&nbsp{{$company->apellidos}}</h6> 
                        <h6>&nbsp{{$company->rut}}</h6>
                        <h6>&nbsp{{$company->email}}</h6>
                        <h6>&nbsp{{$company->telefono}}</h6>
                        <h6>&nbsp{{$company->celular}}</h6>
                    </div>
                    <div class="col s2">  
                        <div>    
                            @if (empty(Auth::user()->foto))  
                              <img src="/images/default.png" class="center-align" style="width:80%; position: relative; left: 45px; top: 2px">
                            @else
                              <img src="{{$company->foto}}" class="center-align" style="width:80%; position: relative; left: 45px; top: 2px">
                            @endif
                        </div>
                    </div>
                </div>
                </div>
            </div>      



        <div class="row">
          <div class="col s6">     
            <div class="card-panel z-depth-1"> <!--Rectangulito donde estará el título y el botón desplegable -->
              <h5 class="left-align"><b>Próximas Reuniones de Práctica</b></h5> 
              <table class="highlight">
                  <thead>
                    <tr>
                        <th>Día</th>
                        <th>Fecha</th>
                        <th>Horario</th>
                        <th>Facultad</th>
                        <th>Sala</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Lunes</td>
                      <td>22 de Julio</td>
                      <td>12:00 - 13:00</td>
                      <td>Facultad de Ingeniería</td>
                      <td>Eugenio Munita</td>
                    </tr>
                    <tr>
                      <td>Jueves</td>
                      <td>25 de Julio</td>
                      <td>8:30 - 9:30</td>
                      <td>Facultad de Ingeniería</td>
                      <td>Eugenio Munita</td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>      
          <div class="col s6">            
              <div class="card-panel z-depth-1"> <!--Rectangulito donde estará el título y el botón desplegable -->
                <h5 class="left-align"><b>&nbspInformación nº2</b></h5>
                <ul class="collapsible"> <!--Collapsible de información-->
                  <li>
                    <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>
                      &nbsp<b>Información X</b></h6> </div>
                    <div class="collapsible-body">
                      <span>
                        <div class="section">
                          1
                        </div> 
                      </span>
                    </div>
                    <div class="collapsible-body">
                      <span>
                          <div class="section">
                            2
                          </div> 
                        </span>
                    </div>
                    <div class="collapsible-body">
                      <span>
                        3
                      </span>
                    </div>
                    <div class="collapsible-body">
                      <span>
                        <div class="section">
                          4
                        </div> 
                      </span>
                    </div>
                  </li>
                </ul>
    
                <ul class="collapsible"> <!--Collapsible de información-->
                  <li>
                    <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>
                      &nbsp<b>Información Y</b></h6> </div>
                    <div class="collapsible-body">
                      <span>
                        <div class="section">
                          <h7><b>Ejemplo título</b></h7>
                          <p><i>&nbsp&nbspInformación respectiva al ejemplo.</i></p>
                        </div> 
                      </span>
                    </div>
                  </li>
                </ul>
              </div>
              
          </div>      
        </div>
    
    @endif
  @endforeach
</div>
@endsection

@section('scripts')
  <script src={{ asset('js/nav_scripts.js') }}></script>
@endsection
