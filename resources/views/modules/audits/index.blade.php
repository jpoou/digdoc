<x-layouts.app title="{{ config('app.name') }} | Auditoría">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Auditoría">
                <li class="active">Lista de cambios en las tablas</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header></header>
                        </div>
                        <div class="card-body">
                            <div id="saveStage_wrapper"
                                 class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row my-3">
                                            <form action="{{ route('appointments.index') }}" style="width: 100%" id="form-filter">
                                                <div class="col-lg-3 col-md-3">
                                                    <label for="status">Filtrar por modelo:</label>
                                                    <select type="text" name="status" id="status" class="form-control">
                                                        <option value="">Todo</option>
                                                        @foreach($models as $model)
                                                            <option value="{{ $model }}"
                                                                @selected(old('status', request('status')) == $model)>
                                                                {{ $model }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <label for="status">Filtrar por usuario:</label>
                                                    <select type="text" name="status" id="status" class="form-control">
                                                        <option value="">Tod@s</option>
                                                        @foreach($users as $user)
                                                            <option value="{{ $user->id }}"
                                                                @selected(old('status', request('status')) == $user->id)>
                                                                {{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
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
                                                            Usuario
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Evento
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Modelo
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Url
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Agente
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            IP
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Acciones
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($audits as $audit)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $audit->user_type }}</td>
                                                            <td class="sorting_1">{{ $audit->event }}</td>
                                                            <td class="sorting_1">{{ $audit->auditable_type }}</td>
                                                            <td class="sorting_1">{{ $audit->url }}</td>
                                                            <td class="sorting_1">{{ $audit->user_agent }}</td>
                                                            <td class="sorting_1">{{ $audit->ip_address }}</td>
                                                            <td class="center">
                                                                <a href="{{ route('audits.show', $audit) }}" class="btn btn-circle btn-xs">
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
