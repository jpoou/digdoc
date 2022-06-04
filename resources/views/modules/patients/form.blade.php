@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombres
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $patient) }}" class="form-control input-height" required>
            @error('name')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="surname">Apellidos
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="surname" id="surname" value="{{ old('surname', $patient) }}" class="form-control input-height" required>
            @error('surname')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="phone">Teléfono
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="phone" id="phone" value="{{ old('phone', $patient) }}" class="form-control input-height" required>
            @error('phone')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="email">Correo
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="email" name="email" id="email" value="{{ old('email', $patient) }}" class="form-control input-height" required>
            @error('email')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="gender">Genero
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <select name="gender" id="gender" class="form-control">
                <option value="male">Masculino</option>
                <option value="feminine">Femenina</option>
                <option value="other">Otro</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="blood_type">Tipo de sangre
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="blood_type" id="blood_type" value="{{ old('blood_type', $patient) }}" class="form-control input-height" required>
            @error('email')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="birth_at">Tipo de sangre
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="date" name="birth_at" id="birth_at" value="{{ old('birth_at', $patient) }}" class="form-control input-height" required>
            @error('email')
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