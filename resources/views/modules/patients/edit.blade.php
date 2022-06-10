<x-layouts.app title="Editar">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Editar paciente">
                <li>
                    <a class="parent-item" href="{{ route('patients.index') }}">Pacientes</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Editar paciente</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            {{--<form action="{{ route('patients.update', $patient) }}" class="form-horizontal" method="POST">
                                @method('PUT')
                                @include('modules.patients.form', [ 'patient' => $patient ])
                            </form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>