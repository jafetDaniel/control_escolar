                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tecnológico Nacional de México</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- bienvenido -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">  
                                            <a class="h5 mb-0 font-weight-bold text-gray-800" href="{{route('home.student')}}">Bienvenido</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- calificaciones -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a class="h5 mb-0 font-weight-bold text-gray-800" href="{{route('calificaciones.student')}}">Calificaciones</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- carga -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">    
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <a class="h5 mb-0 mr-3 font-weight-bold text-gray-800" href="{{route('carga.student')}}">Carga</a>
                                                </div>                             
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Información Académica</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{asset('storage').'/'.$student->photo}}" width="120px" height="120px" alt="photo">
                                    </div>
                                    <p><strong>Nombre: </strong>{{ Auth::user()->name}}</p>
                                    <p><strong>Número de control: </strong>{{$student->number_control}}</p>
                                    <p><strong>Carrera: </strong>{{$student->career_name}}</p>
                                    <p><strong>Promedio General: </strong>{{$student->average}}</p>
                                    <p><strong>Estatus Académico: </strong>{{$student->status}}</p>
                                    <p><strong>Semestre: </strong>{{$student->semester_name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->