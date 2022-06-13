@csrf
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="name">Nombre
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <input type="text" name="name" id="name" value="{{ old('name', $attachment) }}" class="form-control input-height" required>
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
            <select class="form-control" id="type" name="type" required>
                @foreach(App\Enums\AttachmentType::cases() as $type)
                    <option value="{{ $type->value }}" @selected(old('type', $attachment->type->value) == $type->value)>{{ $type->text() }}</option>
                @endforeach
            </select>
            @error('type')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="description">Descripción
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <textarea name="description" id="description" class="form-control-textarea" rows="3" required>{{ old('description', $attachment) }}</textarea>
            @error('description')
            <span class="help-block text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-info">Crear</button>
                <a href="{{ route('attachments.index') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</div>