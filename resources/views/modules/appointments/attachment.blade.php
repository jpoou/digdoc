<x-layouts.app>

    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Adjuntar información">
                <li>
                    <a class="parent-item" href="{{ route('appointments.index') }}">Citas</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Ajuntar información</li>
            </x-pages.page-bar>

            <div class="col-md-12">

                <x-pages.plofile-patient :patient="$appointment->patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Adjuntar</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form action="{{ route('appointment.attachment.store', $appointment) }}" class="form-horizontal" novalidate="novalidate" method="post">
                                    <div class="form-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="type">Tipo:</label>
                                                <select class="form-control input-height" id="type" name="type" aria-invalid="false" required>
                                                    @foreach(App\Enums\AttachmentType::cases() as $type)
                                                        <option value="{{ $type->value }}" @selected(old('type') == $type->value)>{{ $type->text() }}</option>
                                                    @endforeach
                                                </select>
                                                @error('type')
                                                <span class="help-block text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="attachment_id" data-toggle="tooltip" data-placement="right"
                                                       title="Diagnostico: Adjuntar indicador, Receta: Adj. Medicamento, Estudio: Adj. Examen/Imagenes"
                                                >Adjunto:</label>
                                                <select class="form-control input-height select2" id="attachment_id" name="attachment_id" aria-invalid="false">
                                                    <option value="">Seleccione una opción</option>
                                                    @foreach($attachments as $attachment)
                                                        <option value="{{ $attachment->id }}"
                                                                @selected(old('attachment_id') == $attachment->id)>{{ $attachment->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('attachment_id')
                                                <span class="help-block text-danger"> {{ $message }} </span>
                                                @enderror
                                                <ul class="my-2">
                                                    <li><strong>Diagnostico:</strong> Adj. indicador</li>
                                                    <li><strong>Receta:</strong> Adj. Medicamento</li>
                                                    <li><strong>Estudio:</strong> Adj. Examen/Imagen</li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <label for="quantity">Cantidad:</label>
                                                <input type="text" name="quantity" id="quantity" value="{{ old('quantity') }}" class="form-control input-height">
                                                @error('quantity')
                                                <span class="help-block text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <label class="my-3" for="indications">Indicaciones / Comentarios / Observaciones: </label>
                                                <textarea class="form-control" name="indications" id="indications" rows="10" required></textarea>
                                                @error('indications')
                                                <span class="help-block text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Enviar</button>
                                                    <a href="{{ route('appointments.index') }}" class="btn btn-default">Cancelar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END PROFILE CONTENT -->

            </div>

        </div>
    </div>

    <script>
        $('.select2').select2({
            placeholder: "Select",
            width: 'auto',
            allowClear: true
        });
    </script>
</x-layouts.app>