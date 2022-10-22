<x-layouts.app title="{{ config('app.name') }} | Receta">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Recetar">
                <li>
                    <a class="parent-item" href="{{ route('appointments.index') }}">Citas</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Recetar</li>
            </x-pages.page-bar>

            <div class="col-md-12">

                <x-pages.profile-patient :patient="$appointment->patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Recetar</header>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('appointment.prescription.store', $appointment) }}" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3">
                                                <label for="medicine_id">Medicamento:</label>
                                                <select type="text" name="medicine_id" id="medicine_id"
                                                        class="form-control js-data-select-medicine-ajax" onchange="fillValuesDefaultMedicine()"></select>
                                                @error('medicine_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <label for="dose">Dosis:</label>
                                                <input type="text" name="dose" id="dose" value="{{ old('dose') }}" class="form-control"
                                                       placeholder="1 pastilla">
                                                @error('dose')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <label for="frequency">Frecuencia:</label>
                                                <input type="text" name="frequency" id="frequency" value="{{ old('frequency') }}" class="form-control"
                                                       placeholder="Cada 8 hrs">
                                                @error('frequency')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <label for="duration">Duración:</label>
                                                <input type="text" name="duration" id="duration" value="{{ old('frequency') }}" class="form-control"
                                                       placeholder="2 semanas">
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
                                                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#diagnosisModal">
                                                                <i class="fa fa-plus"></i> Diagnostico
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
                                            <header>Medicamentos recetados</header>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-scrollable">
                                                <table id="mainTables" class="table table-striped"
                                                       style="cursor: pointer;">
                                                    <thead>
                                                    <tr>
                                                        <th>Medicamento</th>
                                                        <th>Dosis</th>
                                                        <th>Frecuencia</th>
                                                        <th>Duración</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($appointment->prescriptions as $prescription)
                                                        <tr>
                                                            <td tabindex="1">{{ $prescription->medicine->name }}</td>
                                                            <td tabindex="1">{{ $prescription->dose }}</td>
                                                            <td tabindex="1">{{ $prescription->frequency }}</td>
                                                            <td tabindex="1">{{ $prescription->duration }}</td>
                                                            <td class="center">
                                                                <form action="{{ route('prescription.destroy', $prescription) }}" method="POST" style="display: inline">
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
    @include('modules.appointments.modals.diagnosis')

    @push('scripts')
        <script>
            $('.js-basic-single').select2({});

            $('.js-data-select-medicine-ajax').select2({
                ajax: {
                    delay: 350, // wait 350 milliseconds before triggering the request
                    url: '/api/medicines',
                    data: function (params) {
                        // Query parameters will be ?search=[term]&type=public
                        return {
                            search: params.term
                        }
                    },
                    processResults: function (data) {
                        // Transforms the top-level key of the response object from 'items' to 'results'
                        return {
                            results: data
                        };
                    }
                }
            });

            function fillValuesDefaultMedicine()
            {
                $('#dose').val('1 ml')
                $('#frequency').val('Cada 2hrs')
                $('#duration').val('2 meses')
            }

        </script>
    @endpush
</x-layouts.app>
