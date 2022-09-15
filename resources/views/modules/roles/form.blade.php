@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombre
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $role) }}" class="form-control input-height" required>
            @error('name')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="permissions">Permisos</label>
        <div class="col-md-5">
            <select class="form-control input-height js-basic-single" name="permissions[]" id="permissions" multiple>
                @foreach($permissions as $permission)
                    <option value="{{ $permission->id }}" @selected(old('permissions[]', $role->permissions->contains($permission)) == $permission->id)>{{ $permission->name }}</option>
                @endforeach
            </select>
            @error('permissions')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-info">Enviar</button>
                <a href="{{ route('roles.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-basic-single').select2();
        });
    </script>
@endpush
