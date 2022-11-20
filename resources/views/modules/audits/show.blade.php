<x-layouts.app title="{{ config('app.name') }} | Auditoría">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Detalle de Auditoría">
                <li>
                    <a class="parent-item" href="{{ route('audits.index') }}">Auditoría</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Detalle</li>
            </x-pages.page-bar>

            <div class="state-overview">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel purple">
                            <div class="symbol">
                                <i class="fa fa-users usr-clr"></i>
                            </div>
                            <div class="value white">
                                <span>Id</span><p class="sbold addr-font-h1" data-counter="counterup" data-value="{{ $audit->user->id }}">{{ $audit->user->id }}</p>
                                <p>{{ $audit->user->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel deepPink-bgcolor">
                            <div class="symbol">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{ $audit->ip_address }}">0</p>
                                <p>IP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel orange">
                            <div class="symbol">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{ $audit->created_at->format('Y-d-m') }}">{{ $audit->created_at }}</p>
                                <p>Fecha</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel blue-bgcolor">
                            <div class="symbol">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{ $audit->created_at->format('H:s') }}">{{ $audit->created_at->format('H:s') }}</p>
                                <p>Hora</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card card-topline-aqua">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="profile-userpic">
                                        <img src="{{ asset('assets/img/dp.jpg') }}" class="img-responsive" alt=""> </div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name"> {{ $audit->user->name }} </div>
                                    <div class="profile-usertitle-job"> {{ $audit->user->roles->first()->name }} </div>
                                </div>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Correos</b> <a class="pull-right">{{ $audit->user->email }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Fecha de creación</b> <a class="pull-right">{{ $audit->user->created_at }}</a>
                                    </li>
                                </ul>
                                <!-- END SIDEBAR USER TITLE -->
                            </div>
                        </div>
                        @if($audit->user->staff)
                            <div class="card">
                                <div class="card-head card-topline-aqua">
                                    <header>Acerca de</header>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="profile-desc">
                                        Hola, soy {{ $audit->user->staff->name }}, del {{ $audit->user->staff->branch->name }}.
                                    </div>
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Titulo </b>
                                            <div class="profile-desc-item pull-right">{{ $audit->user->staff->title }}</div>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Nombre </b>
                                            <div class="profile-desc-item pull-right">{{ $audit->user->staff->name }}</div>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Telefono </b>
                                            <div class="profile-desc-item pull-right">{{ $audit->user->staff->phone }}</div>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Hospital</b>
                                            <div class="profile-desc-item pull-right">{{ $audit->user->staff->branch->name }}</div>
                                        </li>
                                    </ul>
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-4 col-sm-4 col-6">
                                            <div class="uppercase profile-stat-title"> {{ $audit->user->staff->appointments->count() }} </div>
                                            <div class="uppercase profile-stat-text"> Citas </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="profile-tab-box">
                                <div class="p-l-20">
                                    <ul class="nav ">
                                        <li class="nav-item tab-all"><a class="nav-link active show" href="#tab1" data-toggle="tab">Meta data</a></li>
                                        <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab2" data-toggle="tab">Modificaciones</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="white-box">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fontawesome-demo active show" id="tab1">
                                        <div id="biography">
                                            <pre>{{ $audit->getMetadata(true, JSON_PRETTY_PRINT) }}</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div id="biography">
                                            <pre>{{ $audit->getModified(true, JSON_PRETTY_PRINT) }}</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="card-head">
                                                    <header>Password Change</header>
                                                    <button id="panel-button2" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                                        <i class="material-icons">more_vert</i>
                                                    </button>
                                                    <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" data-mdl-for="panel-button2" data-upgraded=",MaterialMenu,MaterialRipple">
                                                            <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">assistant_photo</i>Action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                                            <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">print</i>Another action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                                            <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">favorite</i>Something else here<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                                        </ul></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
