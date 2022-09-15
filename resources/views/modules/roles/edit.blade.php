d<x-layouts.app title="Editar rol">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Editar rol">
                <li>
                    <a class="parent-item" href="{{ route('roles.index') }}">Roles</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Editar rol</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('roles.update', $role) }}" class="form-horizontal" method="POST">
                                @method('PUT')
                                @include('modules.roles.form', [ 'role' => $role, 'permissions' => $permissions ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
