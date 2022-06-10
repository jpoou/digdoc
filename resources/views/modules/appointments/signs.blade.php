<x-layouts.app>

    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Signos vitales">
                <li>
                    <a class="parent-item" href="{{ route('appointments.index') }}">Citas</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Registrar signos vitales</li>
            </x-pages.page-bar>

            <div class="col-md-12">

                <x-pages.plofile-patient :patient="$appointment->patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Registrar signos vitales</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form action="{{ route('appointment.signs.store', $appointment) }}" class="form-horizontal" novalidate="novalidate" method="post">
                                    @csrf
                                    <div class="form-body">
                                        @foreach($signs as $sign)
                                            <div class="form-group row">
                                                <label class="control-label col-md-3" for="{{ $sign->id }}">{{ $sign->name }}
                                                    <span class="required" aria-required="true"> * </span>
                                                    <p>{{ $sign->description }}</p>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                        <input class="form-control input-height" size="16" placeholder="{{ $sign->unit }}" type="{{ $sign->type }}" id="{{ $sign->id }}" name="sing[{{ $sign->id }}]">
                                                    </div>
                                                    @error('value')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach
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