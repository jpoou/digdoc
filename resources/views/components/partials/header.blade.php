<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            <a href="/">
                <span class="logo-default" >{{ config('app.name') }}</span> </a>
        </div>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a href="#" class="menu-toggler sidebar-toggler font-size-20"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left in">
            <li class="dropdown dropdown-extended dropdown-notification" >
                <a href="javascript:;" class="dropdown-toggle app-list-icon font-size-20" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-th" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu app-icon">
                    <li class="app-dropdown-header">
                        <p><span class="bold">Applications</span></p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list app-icon-dropdown" data-handle-color="#637283">
                            <li>
                                <a href="{{ route('appointments.index') }}" class="patient-icon">
                                    <i class="material-icons">local_hotel</i>
                                    <span class="block">Citas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-left in">
            <!-- start full screen button -->
            <li><a href="javascript:;" class="fullscreen-click font-size-20"><i class="fa fa-arrows-alt"></i></a></li>
            <!-- end full screen button -->
        </ul>
        <!-- start mobile menu -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle " src="../assets/img/dp.jpg" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-default" title="{{ __('Logout') }}">
                                    <span class="sr-only">{{ __('Logout') }}</span>
                                    <i class="fa fa-sign-out"></i>
                                    Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                        <i class="material-icons">settings</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end header -->
