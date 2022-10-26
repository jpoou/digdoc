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
                            <span class="info-box-text">Personal</span>
                            <span class="info-box-number">{{ $doctors_count }}</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 85%"></div>
                            </div>
                            <span class="progress-description">
					                    Aumento del 80% en 28 días
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
                                class="material-icons">home</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Hospitales</span>
                            <span class="info-box-number">{{ $branches_count }}</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
					                    Aumento del 90% en 28 días
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
                                            <td>{{ $patient->birth_at->age }}</td>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>ENFERMEDADES PIE CHART</header>
                    </div>
                    <div class="card-body " id="chartjs_pie_parent">
                        <div class="row"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px none; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
                            <canvas id="chartjs_pie" style="display: block; height: 554px; width: 1385px;" width="2770" height="1108"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <!--Chart JS-->
        <script src="{{ asset('/assets/plugins/chart-js/Chart.bundle.js') }}" ></script>
        <script src="{{ asset('/assets/plugins/chart-js/utils.js') }}" ></script>
        <script>
            'use strict';

            $(document).ready(function () {

                const randomScalingFactor = function () {
                    return Math.round(Math.random() * 100);
                };

                const config = {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                            ],
                            backgroundColor: [
                                window.chartColors.red,
                                window.chartColors.orange,
                                window.chartColors.yellow,
                                window.chartColors.green,
                                window.chartColors.blue,
                            ],
                            label: 'Dataset 1'
                        }],
                        labels: []
                    },
                    options: {
                        responsive: true
                    }
                };

                const ctx = document.getElementById("chartjs_pie").getContext("2d");
                window.myPie = new Chart(ctx, config);
            });
        </script>
    @endpush
</x-layouts.app>
