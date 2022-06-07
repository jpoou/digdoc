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

                <x-pages.plofile-patient :patient="$patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Reservar una cita</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form action="{{ route('patient.appointment.store', $patient) }}" class="form-horizontal" novalidate="novalidate" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Fecha de cita
                                                <span class="required" aria-required="true"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                    <input class="form-control input-height" size="16" placeholder="date of appointment" type="date" value="">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                </div>
                                                <input type="hidden" id="dtp_input2" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">De</label>
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input class="form-control input-height" type="time" value="13:45:00" id="example-time-input">
                                                    </div>
                                                    <label class="control-label small-label col-md-2">A</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-height" type="time" value="13:45:00" id="example-time-input2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Doctor consultor
                                                <span class="required" aria-required="true"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" name="select">
                                                    <option value="">Seleccione un doctor</option>
                                                    @foreach($doctors as $doctor)
                                                        <option value="{{ $doctor->id }}">{{ $doctor->title }} {{ $doctor->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Condición
                                            </label>
                                            <div class="col-md-5">
                                                <input name="creditcard" type="text" placeholder="Injury/Condition" class="form-control input-height">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Notas
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="address" class="form-control-textarea" placeholder="note" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" class="btn btn-info">Enviar</button>
                                                <a href="{{ route('patients.index') }}" class="btn btn-default">Cancelar</a>
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