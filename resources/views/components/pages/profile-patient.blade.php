<!-- BEGIN PROFILE SIDEBAR -->
<div class="profile-sidebar">
    <div class="card card-topline-aqua">
        <div class="card-body no-padding height-9">
            <div class="row">
                <div class="profile-userpic">
                    <img src="{{ asset('/assets/img/dp.jpg') }}" class="img-responsive" alt=""> </div>
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"> {{ $patient->surname }} </div>
                <div class="profile-usertitle-job"> {{ $patient->name }} </div>
            </div>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Citas</b> <a class="pull-right">3</a>
                </li>
                <li class="list-group-item">
                    <b>DPI</b> <a class="pull-right">{{ $patient->identifier }}</a>
                </li>
                <li class="list-group-item">
                    <b>Correo</b> <a class="pull-right">{{ $patient->email }}</a>
                </li>
            </ul>
            <!-- END SIDEBAR USER TITLE -->
        </div>
    </div>
    <div class="card">
        <div class="card-head card-topline-aqua">
            <header>Acerca de</header>
        </div>
        <div class="card-body no-padding height-9">
            <div class="profile-desc">
                Hello I am James Smith a Gynaecologist in Sanjivni Hospital Surat. I love to work with all my hospital staff and seniour doctors.
            </div>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Genero </b>
                    <div class="profile-desc-item pull-right">{{ $patient->gender }}</div>
                </li>
                <li class="list-group-item">
                    <b>Edad </b>
                    <div class="profile-desc-item pull-right">{{ $patient->birth_at->diffForHumans() }}</div>
                </li>
                <li class="list-group-item">
                    <b>Teléfono </b>
                    <div class="profile-desc-item pull-right">{{ $patient->phone }}</div>
                </li>
                <li class="list-group-item">
                    <b>Tipo de sangre</b>
                    <div class="profile-desc-item pull-right">{{ $patient->blood_type }}</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-head card-topline-aqua">
            <header>Dirección</header>
        </div>
        <div class="card-body no-padding height-9">
            <div class="row text-center m-t-10">
                <div class="col-md-12">
                    <p>456, Pragri flat, varacha road, Surat
                        <br> Gujarat, India.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BEGIN PROFILE SIDEBAR -->