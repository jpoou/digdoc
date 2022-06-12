<x-layouts.app title="Citas">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Citas">
                <li class="active">Lista de citas</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header></header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="saveStage_wrapper"
                                 class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dataTables_scroll">
                                            <div class="dataTables_scrollBody"
                                                 style="position: relative; overflow: auto; width: 100%;">
                                                <table id="saveStage" class="display dataTable no-footer"
                                                       style="width: 100%;" role="grid"
                                                       aria-describedby="saveStage_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Paciente
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Hospital
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Doctor
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="saveStage"
                                                            rowspan="1" colspan="1" style="width: 407.984px;"
                                                            aria-label="Position: activate to sort column ascending">
                                                            Estado
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="saveStage"
                                                            rowspan="1" colspan="1" style="width: 407.984px;"
                                                            aria-label="Position: activate to sort column ascending">
                                                            Fecha de cita
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="saveStage"
                                                            rowspan="1" colspan="1" style="width: 407.984px;"
                                                            aria-label="Position: activate to sort column ascending">
                                                            Cant. de Signos
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="saveStage"
                                                            rowspan="1" colspan="1" style="width: 156.734px;"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            Acciones
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($appointments as $appointment)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $appointment->patient->name }} {{ $appointment->patient->surname }}</td>
                                                            <td>{{ $appointment->branch->name }}</td>
                                                            <td>{{ $appointment->staff?->title }} {{ $appointment->staff?->name }}</td>
                                                            <td><span class="badge badge-pill badge-{{ $appointment->status->color() }}">{{ $appointment->status->text() }}</span></td>
                                                            <td>{{ $appointment->appointment_at }}</td>
                                                            <td>
                                                                <span class="badge badge-pill badge-primary">{{ $appointment->signs_count }}</span>
                                                            </td>
                                                            <td class="center">
                                                                <a href="{{ route('appointments.edit', $appointment) }}"
                                                                   class="btn btn-tbl-edit btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('appointment.signs.create', $appointment) }}"
                                                                   class="btn btn-tbl-edit btn-xs">
                                                                    <i class="fa fa-folder-open"></i>
                                                                </a>
                                                                <form action="{{ route('appointments.destroy', $appointment) }}"
                                                                      method="POST" style="display: inline">
                                                                    @csrf @method('DELETE')
                                                                    <button class="btn btn-tbl-delete btn-xs"
                                                                            onclick="return confirm('¿Esta seguro de que desea eliminarlo?')">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </button>
                                                                </form>
                                                                <a href="{{ route('appointment.attachment.create', $appointment) }}"
                                                                   class="btn btn-tbl-edit btn-xs">
                                                                    <i class="fa fa-file"></i>
                                                                </a>
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
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>