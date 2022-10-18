<x-layouts.app title="{{ config('app.name') }} | Crear medicamento">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Crear medicamento">
                <li>
                    <a class="parent-item" href="{{ route('medicines.index') }}">Medicamentos</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Crear medicamento</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('medicines.store') }}" class="form-horizontal" method="POST">
                                @include('modules.medicines.form', [ 'medicine' => new \App\Models\Medicine() ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
