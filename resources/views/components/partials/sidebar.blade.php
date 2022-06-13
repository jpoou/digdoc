<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('assets/img/new_logo.jpeg') }}" class="img-circle user-img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>{{ auth()->user()->name }}</p>
                            <small>Admin</small>
                        </div>
                    </div>
                </li>
                <li class="nav-item active open">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  active open">
                            <a href="{{ url('/home') }}" class="nav-link ">
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">hotel</i>
                        <span class="title">Hospitales</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{ route('branches.index') }}" class="nav-link ">
                                <span class="title">Hospitales</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ route('branches.create') }}" class="nav-link ">
                                <span class="title">Crear hospital</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">accessible</i>
                        <span class="title">Pacientes</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{ route('patients.index') }}" class="nav-link ">
                                <span class="title">Pacientes</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ route('appointments.index') }}" class="nav-link ">
                                <span class="title">Citas</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ route('patients.create') }}" class="nav-link ">
                                <span class="title">Crear paciente</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">settings</i>
                        <span class="title">Otros</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{ route('attachments.index') }}" class="nav-link ">
                                <span class="title">Adjuntos</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
