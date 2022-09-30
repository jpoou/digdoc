<x-layouts.app title="Crear cita | Buscar paciente">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Crear cita">
                <li>
                    <a class="parent-item" href="{{ route('patients.index') }}">Pacientes</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                    <a class="parent-item" href="{{ route('appointments.index') }}">Crear cita</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Buscar paciente</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Buscar</header>
                        </div>
                        <div class="card-body " id="bar-parent6">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-body">
                                        <form action="{{ route('appointment.patient.find') }}">
                                            <div class="form-group">
                                                <label for="search">Pacientes</label>
                                                <input type="text" class="form-control input-lg" id="search" name="search" value="{{ request('search') }}" placeholder="Nombres, Apellidos, CUI, No. Caso">
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="offset-md-12 col-md-12">
                                                        <button type="submit" class="btn btn-info">Buscar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($patients as $patient)
                                            <tr class="active">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><strong>{{ $patient->surname }}</strong>, {{ $patient->name }}</td>
                                                <td>
                                                    <a class="btn btn-success btn-xs" href="{{ route('patient.appointment.create', $patient) }}">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                    <a class="btn btn-primary btn-xs" href="{{ route('patients.edit', $patient) }}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $patients->appends(request()->except('page'))->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Crear paciente</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('patients.store') }}" class="form-horizontal" method="POST">
                                @include('modules.patients.form', [ 'patient' => new \App\Models\Patient() ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
