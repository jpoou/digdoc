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
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3">
                                            <label for="name">Medicamento:</label>
                                            <select type="text" name="name" id="name"
                                                    class="form-control js-data-select-medicine-ajax"></select>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <label for="dose">Dosis:</label>
                                            <input type="text" name="dose" id="dose" class="form-control"
                                                   placeholder="1 pastilla">
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <label for="frequency">Frecuencia:</label>
                                            <input type="text" name="frequency" id="frequency" class="form-control"
                                                   placeholder="Cada 8 hrs">
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <label for="duration">Duración:</label>
                                            <input type="text" name="duration" id="duration" class="form-control"
                                                   placeholder="2 semanas">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-info">Agregar</button>
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
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td tabindex="1">Car</td>
                                                        <td tabindex="1">100</td>
                                                        <td tabindex="1">200</td>
                                                        <td tabindex="1">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td tabindex="1">Bike</td>
                                                        <td tabindex="1">330</td>
                                                        <td tabindex="1">240</td>
                                                        <td tabindex="1">1</td>
                                                    </tr>
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

        </script>
    @endpush
</x-layouts.app>
