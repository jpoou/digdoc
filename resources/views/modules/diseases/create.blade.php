<x-layouts.app title="Crear">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Crear enfermedad">
                <li>
                    <a class="parent-item" href="{{ route('diseases.index') }}">Enfermedades</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Crear enfermedad</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('diseases.store') }}" class="form-horizontal" method="POST">
                                @include('modules.diseases.form', [ 'disease' => new \App\Models\Disease() ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>