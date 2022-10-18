<x-layouts.app title="{{ config('app.name') }} | Receta">
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Recetar">
                <li>
                    <a class="parent-item" href="{{ route('appointments.index') }}">Citas</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Recetar</li>
            </x-pages.page-bar>


            <div class="col-md-12">

                <x-pages.profile-patient :patient="$appointment->patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Recetar</header>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>

                </div>
                <!-- END PROFILE CONTENT -->
            </div>

        </div>
    </div>
</x-layouts.app>
