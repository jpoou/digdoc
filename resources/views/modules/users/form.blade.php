@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombre
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $user) }}" class="form-control input-height" required>
            @error('name')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="email">Correo electrónico
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="email" name="email" id="email" value="{{ old('email', $user) }}" class="form-control input-height" required>
            @error('email')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="staff_id">Personal</label>
        <div class="col-md-5">
            <select class="form-control input-height" name="staff_id" id="staff_id">
                <option value="">Seleccione el personal</option>
                @foreach($staffs as $staff)
                    <option value="{{ $staff->id }}" @selected(old('staff_id', $user) == $staff->id)>{{ $staff->name }}</option>
                @endforeach
            </select>
            @error('staff_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="role_id">Rol</label>
        <div class="col-md-5">
            <select class="form-control input-height" name="role_id" id="role_id">
                <option value="">Seleccione un rol</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" @selected(old('staff_id', $user) == $role->id)>{{ $role->name }}</option>
                @endforeach
            </select>
            @error('role_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-info">Enviar</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</div>
