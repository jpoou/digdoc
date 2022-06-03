<x-layouts.app title="Crear">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Crear hospitales</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Inicio</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="">Hospitales</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Crear hospital</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Información basica</header>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('branches.store') }}" class="form-horizontal" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3" for="name">Nombre
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control input-height" required>
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
                                            <select name="type" id="type">
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
                                            <textarea name="address" id="address" class="form-control-textarea" rows="3" required>{{ old('address') }}</textarea>
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
                                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control input-height" required>
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
                                            <input type="text" name="schedule" id="schedule" value="{{ old('schedule') }}" class="form-control input-height" required>
                                            @error('schedule')
                                            <span class="help-block text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" class="btn btn-info">Crear</button>
                                                <a href="#" class="btn btn-default">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>