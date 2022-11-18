<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('assets/img/new_logo.jpeg') }}" class="img-circle user-img-circle"
                                 alt="User Image"/>
                        </div>
                        <div class="pull-left info">
                            <p>{{ auth()->user()->name }}</p>
                            <small>Admin</small>
                        </div>
                    </div>
                </li>
                <li class="nav-item active open">
                    <a href="{{ route('dashboard') }}" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item active open">
                    <a href="{{ route('patients.graphics.index') }}" class="nav-link nav-toggle">
                        <i class="material-icons">insert_chart</i>
                        <span class="title">Gráficas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">home</i>
                        <span class="title">Sucursales</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @can('branch a index')
                            <li class="nav-item  ">
                                <a href="{{ route('branches.index') }}" class="nav-link ">
                                    <span class="title">Hospitales</span>
                                </a>
                            </li>
                        @endcan
                        @can('staff a index')
                            <li class="nav-item  ">
                                <a href="{{ route('staffs.index') }}" class="nav-link ">
                                    <span class="title">Personal</span>
                                </a>
                            </li>
                        @endcan
                        @can('department a index')
                            <li class="nav-item  ">
                                <a href="{{ route('departments.index') }}" class="nav-link ">
                                    <span class="title">Departamentos</span>
                                </a>
                            </li>
                        @endcan
                        @can('branch a create')
                            <li class="nav-item  ">
                                <a href="{{ route('branches.create') }}" class="nav-link ">
                                    <span class="title">Crear hospital</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">perm_contact_calendar</i>
                        <span class="title">Pacientes</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @can('patient a index')
                            <li class="nav-item  ">
                                <a href="{{ route('patients.index') }}" class="nav-link ">
                                    <span class="title">Pacientes</span>
                                </a>
                            </li>
                        @endcan
                        @can('attachment a index')
                            <li class="nav-item  ">
                                <a href="{{ route('appointments.index') }}" class="nav-link ">
                                    <span class="title">Citas</span>
                                </a>
                            </li>
                        @endcan
                        @can('attachment a create')
                            <li class="nav-item  ">
                                <a href="{{ route('appointment.patient.find') }}" class="nav-link ">
                                    <span class="title">Crear cita</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">verified_user</i>
                        <span class="title">Usuarios</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @can('user a index')
                            <li class="nav-item  ">
                                <a href="{{ route('users.index') }}" class="nav-link ">
                                    <span class="title">Usuarios</span>
                                </a>
                            </li>
                        @endcan
                        @can('role a index')
                            <li class="nav-item  ">
                                <a href="{{ route('roles.index') }}" class="nav-link ">
                                    <span class="title">Roles</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">settings</i>
                        <span class="title">Otros</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @can('attachment a index')
                            <li class="nav-item  ">
                                <a href="{{ route('attachments.index') }}" class="nav-link ">
                                    <span class="title">Adjuntos</span>
                                </a>
                            </li>
                        @endcan
                        @can('disease a index')
                            <li class="nav-item  ">
                                <a href="{{ route('diseases.index') }}" class="nav-link ">
                                    <span class="title">Enfermedades</span>
                                </a>
                            </li>
                        @endcan
                        @can('medicine a index')
                            <li class="nav-item  ">
                                <a href="{{ route('medicines.index') }}" class="nav-link ">
                                    <span class="title">Medicamentos</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
