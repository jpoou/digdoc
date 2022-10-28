<!-- Modal -->
<div class="modal fade" id="laboratoryModal" tabindex="-1" role="dialog" aria-labelledby="laboratoryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="laboratoryLabel">Ingresar laboratorio/examen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('appointment.laboratories.store', $appointment) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file">Adjunto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="observation">Observaciones</label>
                        <textarea class="form-control" name="observation" id="observation" cols="30" rows="10"></textarea>
                        @error('observation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
