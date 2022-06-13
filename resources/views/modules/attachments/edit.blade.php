d<x-layouts.app title="Editar adjunto">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Editar adjunto">
                <li>
                    <a class="parent-item" href="{{ route('attachments.index') }}">Adjuntos</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Editar adjunto</li>
            </x-pages.page-bar>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información básica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('attachments.update', $attachment) }}" class="form-horizontal" method="POST">
                                @method('PUT')
                                @include('modules.attachments.form', [ 'attachment' => $attachment ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>