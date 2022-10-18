@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombre
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $medicine) }}"
                   class="form-control input-height" placeholder="Nombre detallado" required>
            @error('name')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="dose">Dosis
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="dose" id="dose" value="{{ old('dose', $medicine) }}" class="form-control input-height" placeholder="1 ml" required>
            @error('dose')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="frequency">Frecuencia
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="frequency" id="frequency" value="{{ old('frequency', $medicine) }}" class="form-control input-height" placeholder="Cada 12 hrs" required>
            @error('frequency')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="duration">Duración
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="duration" id="duration" value="{{ old('duration', $medicine) }}" class="form-control input-height" placeholder="2 meses" required>
            @error('duration')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="description">Descripción
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <textarea name="description" id="description" class="form-control-textarea" rows="3" required>{{ old('description', $medicine) }}</textarea>
            @error('description')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-info">Crear</button>
                <a href="{{ route('medicines.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</div>
