<x-layouts.app title="Dashboard">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Dashboard</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('dashboard') }}">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="state-overview">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-white">
                        <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">group</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Citas</span>
                            <span class="info-box-number">{{ $appointments_count }}</span>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 45%"></div>
                            </div>
                            <span class="progress-description">
                                Aumento del 45% en 28 días
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-white">
                        <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Nuevos pacientes</span>
                            <span class="info-box-number">{{ $patients_count }}</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                            </div>
                            <span class="progress-description">
                                Aumento del 40% en 28 días
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-white">
                        <span class="info-box-icon push-bottom bg-success"><i
                                class="material-icons">content_cut</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Operations</span>
                            <span class="info-box-number">10</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 85%"></div>
                            </div>
                            <span class="progress-description">
					                    85% Increase in 28 Days
					                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-white">
                        <span class="info-box-icon push-bottom bg-info"><i
                                class="material-icons">monetization_on</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Hospital Earning</span>
                            <span class="info-box-number">13,921</span><span>$</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
					                    50% Increase in 28 Days
					                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- end widget -->
        <!-- start new patient list -->
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Lista de nuevos pacientes</header>
                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table display product-overview mb-30" id="support_table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>No. citas</th>
                                        <th>Enfermedad</th>
                                        <th>Edad</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($patients as $patient)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $patient->name }}</td>
                                            <td>{{ $patient->appointments_count }}</td>
                                            <td>
                                                <span class="label label-sm label-success">Influenza</span>
                                            </td>
                                            <td>{{ $patient->birth_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Lista de doctores</header>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <ul id="homeDoctorList">
                                @foreach($doctors as $doctor)
                                    <li class="w-100">
                                        <div class="details">
                                            <div class="title">
                                                {{ $doctor->title }}. <a href="#">{{ $doctor->surname }}, {{ $doctor->name }}</a>
                                            </div>
                                            <div>
                                                <span class="clsAvailable">Activo desde: {{ $doctor->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="text-center full-width">
                                <a href="{{ route('staffs.index') }}">Ver todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end new patient list -->
    </div>
</x-layouts.app>
