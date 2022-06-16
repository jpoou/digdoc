<x-layouts.app title="Crear rol">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Crear rol">
                <li>
                    <a class="parent-item" href="{{ route('roles.index') }}">Roles</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Crear rol</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('roles.store') }}" class="form-horizontal" method="POST">
                                @include('modules.roles.form', [ 'role' => new Spatie\Permission\Models\Role() ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>