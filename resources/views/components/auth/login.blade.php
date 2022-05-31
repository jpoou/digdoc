<x-layouts.guest>

    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ route('login') }}" method="post">
                    @csrf
					<span class="login100-form-logo">
						<img alt="" src="{{ asset('/assets/img/hospital.png') }}">
					</span>
                    <span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="email" name="email" id="email" placeholder="Correo electronico" value="{{ old('email') }}">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @error('email')
                        <ul class="parsley-errors-list filled" id="parsley-id-29">
                            <li class="parsley-required">
                                {{ $message }}
                            </li>
                        </ul>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Contraseña">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @error('password')
                        <ul class="parsley-errors-list filled" id="parsley-id-29">
                            <li class="parsley-required">
                                {{ $message }}
                            </li>
                        </ul>
                        @enderror
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="remember" type="checkbox" name="remember">
                        <label class="label-checkbox100" for="remember">
                            Recordarme
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Iniciar
                        </button>
                    </div>
                    <div class="text-center p-t-30">
                        <a class="txt1" href="#">
                            ¿Has olvidado tu contraseña?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guest>