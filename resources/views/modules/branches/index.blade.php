<x-layouts.app title="Sucursales">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Hospitales</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Inicio</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Lista de hospitales</li>
                    </ol>
                </div>
            </div>
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
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="btn-group">
                                        <a class="btn btn-info" href="{{ route('branches.create') }}">
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
                                                            Teléfono
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="saveStage" rowspan="1" colspan="1"
                                                            style="width: 262.375px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Tipo
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="saveStage"
                                                            rowspan="1" colspan="1" style="width: 407.984px;"
                                                            aria-label="Position: activate to sort column ascending">
                                                            Dirección
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="saveStage"
                                                            rowspan="1" colspan="1" style="width: 156.734px;"
                                                            aria-label="Salary: activate to sort column ascending">
                                                            Acciones
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($branches as $branch)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $branch->name }}</td>
                                                            <td>{{ $branch->phone }}</td>
                                                            <td>{{ $branch->type }}</td>
                                                            <td>{{ $branch->address }}</td>
                                                            <td class="center">
                                                                <a href="#" class="btn btn-tbl-edit btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form action="{{ route('branches.destroy', $branch) }}" method="POST" style="display: inline">
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
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>