@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="title">Titulo
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="title" id="title" value="{{ old('title', $staff) }}" class="form-control input-height" required>
            @error('title')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombres
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $staff) }}" class="form-control input-height" required>
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
            <input type="text" name="surname" id="surname" value="{{ old('surname', $staff) }}" class="form-control input-height" required>
            @error('surname')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="email">Correo electrónico
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="email" name="email" id="email" value="{{ old('email', $staff) }}" class="form-control input-height" required>
            @error('email')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="phone">Teléfono</label>
        <div class="col-md-5">
            <input type="tel" name="phone" id="phone" value="{{ old('phone', $staff) }}" class="form-control input-height" required>
            @error('phone')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="branch_id">Hospital</label>
        <div class="col-md-5">
            <select class="form-control input-height" name="branch_id" id="branch_id">
                <option value="">Seleccione el lugar</option>
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}" @selected(old('branch_id', $staff) == $branch->id)>{{ $branch->name }}</option>
                @endforeach
            </select>
            @error('branch_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-info">Crear</button>
                <a href="{{ route('staffs.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</div>
