<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3" for="appointment_at">Fecha de cita
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <div class="input-group date form_date">
                <input class="form-control input-height" type="date"
                       id="appointment_at" name="appointment_at"
                       value="{{ old('appointment_at', $appointment) }}" min="{{ date('Y-m-d') }}">
                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
            </div>
            @error('appointment_at')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="from">De</label>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-5">
                    <input class="form-control input-height" type="time" id="from" name="from" value="{{ old('from', $appointment) }}">
                </div>
                <label class="control-label small-label col-md-2" for="to">A</label>
                <div class="col-md-5">
                    <input class="form-control input-height" type="time" id="to" name="to" value="{{ old('to', $appointment) }}">
                </div>
            </div>
            @error('from')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('to')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="branch_id">Lugar
            <span class="required" aria-required="true"> * </span>
        </label>
        <div class="col-md-5">
            <select class="form-control input-height" name="branch_id" id="branch_id">
                <option value="">Seleccione el lugar</option>
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}" @selected(old('branch_id', $appointment) == $branch->id)>{{ $branch->name }}</option>
                @endforeach
            </select>
            @error('branch_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="doctor_id">Doctor consultor</label>
        <div class="col-md-5">
            <select class="form-control input-height" name="doctor_id" id="doctor_id">
                <option value="">Seleccione un doctor</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" @selected(old('doctor_id', $appointment) == $doctor->id)>{{ $doctor->title }} {{ $doctor->name }}</option>
                @endforeach
            </select>
            @error('doctor_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3" for="reason">Motivos</label>
        <div class="col-md-5">
            <textarea name="reason" class="form-control-textarea" rows="5" id="reason">{{ old('reason', optional($appointment)->reason) }}</textarea>
        </div>
        @error('reason')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
