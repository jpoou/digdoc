<x-layouts.app title="Dashboard">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Pacientes Gráficas</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('dashboard') }}">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Gráficas</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card  card-box">
                    <div class="card-head">
                        <header>FILTROS</header>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('patients.graphics.index') }}">
                            <div class="form-group row">
                                <label for="patient_id" class="col-sm-2 control-label">Paciente</label>
                                <div class="col-sm-6">
                                    <select type="text" name="patient_id" id="patient_id" class="form-control js-basic-single">
                                        <option value="">Seleccione un pacientes</option>
                                        @foreach($patients as $patient)
                                            <option value="{{ $patient->id }}" @selected(old('patient_id', request('patient_id')) == $patient->id)>{{ $patient->surname }}, {{ $patient->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sign_id" class="col-sm-2 control-label">Signo</label>
                                <div class="col-sm-6">
                                    <select type="text" name="sign_id" id="sign_id" class="form-control js-basic-single">
                                        <option value="">Seleccione un signo</option>
                                        @foreach($signs as $sign)
                                            <option value="{{ $sign->id }}" @selected(old('sign_id', request('sign_id')) == $sign->id)>{{ $sign->code }} - {{ $sign->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="offset-md-2 col-md-9">
                                    <button type="submit" class="btn btn-info">Filtrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card  card-box">
                    <div class="card-head">
                        <header>GRÁFICA LINEAL</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body " id="chartjs_line_parent">
                        <div class="row">
                            <canvas id="chartjs_line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <!--Chart JS-->
        <script src="{{ asset('/assets/plugins/chart-js/Chart.bundle.js') }}"></script>
        <script src="{{ asset('/assets/plugins/chart-js/utils.js') }}"></script>
        <script>
            'use strict';

            $('.js-basic-single').select2();

            $(document).ready(function () {
                let config = {
                    type: 'line',
                    data: {
                        labels: {{ Js::from($labels) }},
                        datasets: [{
                            label: {{ Js::from($signSelect->name) }},
                            backgroundColor: window.chartColors.blue,
                            borderColor: window.chartColors.blue,
                            data: {{ Js::from($data) }},
                            fill: false,
                        }]
                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: 'Signos'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false,
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Fecha'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Pacientes'
                                }
                            }]
                        }
                    }
                };
                let ctx = document.getElementById("chartjs_line").getContext("2d");
                window.myLine = new Chart(ctx, config);
            });

            $(document).ready(function () {
                const config = {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [ 'data 1', 'date 2', 'date 4'],
                            backgroundColor: [
                                window.chartColors.red,
                                window.chartColors.orange,
                                window.chartColors.yellow,
                                window.chartColors.green,
                                window.chartColors.blue,
                                window.chartColors.grey,
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
