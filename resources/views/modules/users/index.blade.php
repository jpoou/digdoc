<x-layouts.app title="{{ config('app.name') }} | Usuarios">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Personal">
                <li class="active">Lista de usuarios</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header></header>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="btn-group">
                                        <a class="btn btn-info" href="{{ route('users.create') }}">
                                            Agregar <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                                            Nombre
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Correo
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Rol
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Correo verificado
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Personal
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="saveStage"
                                                            rowspan="1" colspan="1" style="width: 156.734px;"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            Acciones
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $user)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $user->name }}</td>
                                                            <td class="sorting_1"><a href="mailto:{{ $user->email }}"><i class="fa fa-send"></i> {{ $user->email }}</a></td>
                                                            <td class="sorting_1">{{ $user->roles->pluck('name')->join(',') }}</td>
                                                            <td class="sorting_1">{{ $user->email_verified_at }}</td>
                                                            <td class="sorting_1">{{ $user->staff?->title }}. {{ $user->staff?->name }}</td>
                                                            <td class="center">
                                                                <a href="{{ route('users.edit', $user) }}" class="btn btn-tbl-edit btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                @can('user a delete')
                                                                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline">
                                                                        @csrf @method('DELETE')
                                                                        <button class="btn btn-tbl-delete btn-xs" onclick="return confirm('¿Esta seguro de que desea eliminarlo?')" {{ $user->id == auth()->id() ? 'disabled' : '' }}>
                                                                            <i class="fa fa-trash-o "></i>
                                                                        </button>
                                                                    </form>
                                                                @endcan
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
