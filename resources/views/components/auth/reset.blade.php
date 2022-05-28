<x-layouts.guest>
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img alt="" src="../assets/img/hospital.png">
					</span>
                    <!-- <span class="login100-form-title  p-t-27">
                        Forgot Your Password?
                    </span> -->
                    <p class="text-center txt-small-heading">
                        ¿Olvidaste tu contraseña? Dejanos ayudarte
                    </p>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="email" name="username" placeholder="Ingrese su dirección de correo electrónico">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Enviar
                        </button>
                    </div>
                    <div class="text-center p-t-27">
                        <a class="txt1" href="{{ route('login') }}">
                            Login?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guest>