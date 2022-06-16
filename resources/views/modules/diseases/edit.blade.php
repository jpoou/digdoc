d<x-layouts.app title="Editar enfermedad">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Editar Enfermedad">
                <li>
                    <a class="parent-item" href="{{ route('diseases.index') }}">Enfermedades</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Editar enfermedad</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('diseases.update', $disease) }}" class="form-horizontal" method="POST">
                                @method('PUT')
                                @include('modules.diseases.form', [ 'disease' => $disease ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>