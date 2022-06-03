<x-layouts.app title="Editar">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Editar hospitales</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Inicio</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="">Hospitales</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Editar hospital</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('branches.store') }}" class="form-horizontal" method="POST">
                                @include('modules.branches.form', [ 'branch' => $branch ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>