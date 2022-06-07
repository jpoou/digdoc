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
                                            <label class="control-label col-md-3" for="appointment_at">Fecha de cita
                                                <span class="required" aria-required="true"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                    <input class="form-control input-height" size="16" placeholder="Fecha de cita" type="date" id="appointment_at" name="appointment_at" value="{{ old('appointment_at') }}">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                </div>
                                                @error('appointment_at')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="from">De</label>
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input class="form-control input-height" type="time" id="from" name="from" value="{{ old('from') }}">
                                                    </div>
                                                    <label class="control-label small-label col-md-2" for="to">A</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-height" type="time" id="to" name="to" value="{{ old('to') }}">
                                                    </div>
                                                </div>
                                                @error('from')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                @error('to')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="branch_id">Lugar
                                                <span class="required" aria-required="true"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" name="branch_id" id="branch_id">
                                                    <option value="">Seleccione el lugar</option>
                                                    @foreach($branches as $branch)
                                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('branch_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="doctor_id">Doctor consultor
                                                <span class="required" aria-required="true"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" name="doctor_id" id="doctor_id">
                                                    <option value="">Seleccione un doctor</option>
                                                    @foreach($doctors as $doctor)
                                                        <option value="{{ $doctor->id }}">{{ $doctor->title }} {{ $doctor->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('doctor_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="reason">Motivos
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="reason" class="form-control-textarea" rows="5" id="reason">{{ old('reason') }}</textarea>
                                            </div>
                                            @error('reason')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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