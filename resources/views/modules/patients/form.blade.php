@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="identifier">CUI</label>
        <div class="col-md-5">
            <input type="number" name="identifier" id="identifier" value="{{ old('identifier', $patient) }}" class="form-control input-height" required>
            @error('identifier')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
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
            <select name="gender" id="gender" class="form-control input-height">
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
            <select class="form-control input-height" id="blood_type" name="blood_type" aria-invalid="false">
                <option value="">Select...</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="birth_at">Fecha de nacimiento
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="date" name="birth_at" id="birth_at" value="{{ old('birth_at', $patient) }}" class="form-control input-height" required>
            @error('email')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="address">Dirección
        </label>
        <div class="col-md-5">
            <textarea id="address" name="address" placeholder="456, Pragri flat, varacha road, Surat" class="form-control-textarea" rows="5"></textarea>
            @error('address')
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