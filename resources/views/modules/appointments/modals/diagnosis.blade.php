<!-- Modal -->
<div class="modal fade" id="diagnosisModal" tabindex="-1" role="dialog" aria-labelledby="diagnosisModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diagnosisModalLabel">Diagnostico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('appointment.diagnostic.store', $appointment) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="diseases">Enfermedades</label>
                        <select class="form-control js-basic-single" name="diseases[]" id="diseases" style="width: 100%" multiple>
                            @foreach($diseases as $disease)
                                <option value="{{ $disease->id }}" @selected(old('diseases[]') == $disease->id)>{{ $disease->name }}</option>
                            @endforeach
                        </select>
                        @error('diseases')
                        <span class="help-block text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="observation">Observaciones</label>
                        <textarea class="form-control" name="observation" id="observation" cols="30" rows="10"></textarea>
                        @error('observation')
                        <span class="help-block text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
