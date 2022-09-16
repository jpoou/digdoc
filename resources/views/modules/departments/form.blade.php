@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombres
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $department) }}" class="form-control input-height" required>
            @error('name')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-info">Crear</button>
                <a href="{{ route('departments.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</div>
