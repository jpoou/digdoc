<x-layouts.app title="{{ config('app.name') }} | Laboratorios">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Laboratorios">
                <li>
                    <a class="parent-item" href="{{ route('appointments.index') }}">Citas</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Laboratorios</li>
            </x-pages.page-bar>

            <div class="col-md-12">

                <x-pages.profile-patient :patient="$appointment->patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Laboratorios</header>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('appointment.laboratories.store', $appointment) }}" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3">
                                                <label for="attachment_id">Examen/Laboratorio:</label>
                                                <select type="text" name="attachment_id" id="attachment_id"
                                                        class="form-control js-basic-single">
                                                        <option value="">Selecciones una estudio</option>
                                                    @foreach($studies as $study)
                                                        <option value="{{ $study->id }}">{{ $study->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('attachment_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="observation">Observación:</label>
                                                <input type="text" name="observation" id="observation" value="{{ old('observation') }}" class="form-control">
                                                @error('duration')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Agregar</button>
                                                    <div class="col">
                                                        <div class="float-right">
                                                            <!-- Button trigger modal -->
                                                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#laboratoryModal">
                                                                <i class="fa fa-plus"></i> Laboratorios
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <div class="card-head">
                                            <header>Lista de laboratorios</header>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-scrollable">
                                                <table id="mainTables" class="table table-striped"
                                                       style="cursor: pointer;">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Laboratorio</th>
                                                        <th>Doctor</th>
                                                        <th>Observaciones</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($appointment->laboratories as $laboratory)
                                                        <tr>
                                                            <td tabindex="1">{{ $laboratory->id }}</td>
                                                            <td tabindex="1">{{ $laboratory->attachment->name }}</td>
                                                            <td tabindex="1">{{ $laboratory->user->name }}</td>
                                                            <td tabindex="1">{{ $laboratory->observation }}</td>
                                                            <td tabindex="1">
                                                                @if($laboratory->file)
                                                                    <a href="{{ asset($laboratory->file) }}" target="_blank"><i class="fa fa-cloud-download"></i> Adjunto</a>
                                                                @else
                                                                    Sin adjuntar
                                                                @endif
                                                            </td>
                                                            <td class="center">
                                                                <form action="{{ route('appointment.laboratories.destroy', [$appointment, $laboratory]) }}" method="POST" style="display: inline">
                                                                    @csrf @method('DELETE')
                                                                    <button class="btn btn-tbl-delete btn-xs" onclick="return confirm('¿Esta seguro de que desea eliminarlo?')">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
    </div>

    @include('modules.appointments.modals.laboratory')

    @push('scripts')
        <script>
            $('.js-basic-single').select2();
        </script>
    @endpush
</x-layouts.app>
