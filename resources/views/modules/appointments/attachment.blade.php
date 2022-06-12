<x-layouts.app>

    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:613px">

            <x-pages.page-bar title="Ajuntar">
                <li>
                    <a class="parent-item" href="{{ route('appointments.index') }}">Citas</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Ajuntar información</li>
            </x-pages.page-bar>

            <div class="col-md-12">

                <x-pages.plofile-patient :patient="$appointment->patient"/>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Adjuntar</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <textarea name="formsummernote" id="summernote" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END PROFILE CONTENT -->

            </div>

        </div>
    </div>

</x-layouts.app>