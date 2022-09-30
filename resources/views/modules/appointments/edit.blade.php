<x-layouts.app title="Crear cita">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Crear cita">
                <li>
                    <a class="parent-item" href="{{ route('patients.index') }}">Citas</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Crear cita</li>
            </x-pages.page-bar>


            <div class="col-md-12">

                <x-pages.profile-patient :patient="$appointment->patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Reservar una cita</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form action="{{ route('appointments.update', $appointment) }}" class="form-horizontal" novalidate="novalidate" method="post">
                                    @csrf
                                    @method('PUT')
                                    @include('modules.appointments.form', [ 'appointment' => $appointment ])
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" class="btn btn-info">Enviar</button>
                                                <a href="{{ route('appointments.index') }}" class="btn btn-default">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END PROFILE CONTENT -->
            </div>

        </div>
    </div>
</x-layouts.app>
