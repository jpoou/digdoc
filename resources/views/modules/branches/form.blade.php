@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombre
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $branch) }}" class="form-control input-height" required>
            @error('name')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="type">Tipo
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <select name="type" id="type" class="form-control">
                <option value="hospital">Hospital</option>
                <option value="clinic">Clínica</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="address">Dirección
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <textarea name="address" id="address" class="form-control-textarea" rows="3" required>{{ old('address', $branch) }}</textarea>
            @error('address')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="phone">Teléfono
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="phone" id="phone" value="{{ old('phone', $branch) }}" class="form-control input-height" required>
            @error('phone')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="schedule">Horarios
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="schedule" id="schedule" value="{{ old('schedule', $branch) }}" class="form-control input-height" required>
            @error('schedule')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-info">Crear</button>
                <a href="{{ route('branches.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</div>