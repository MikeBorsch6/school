<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                <?php include app_path() . '/views/<path_to_layout/login>/file.html'; ?>
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
                <body>
                <<h2>Login</h2><br>
                <div class="login">
                    <form id="login" method="get" action="login.php">
                        <label><b>User Name
                            </b>
                        </label>
                        <input type="text" name="Uname" id="Uname" placeholder="Username">
                        <br><br>
                        <label><b>Password
                            </b>
                        </label>
                        <input type="Password" name="Pass" id="Pass" placeholder="Password">
                        <br><br>
                        <input type="button" name="log" id="log" value="Log In Here">
                        <br><br>
                        <input type="checkbox" id="check">
                        <span>Remember me</span>
                        <br><br>
                        <a href="#">Forgot Password</a>
                    </form>
                </div>
                </body>

                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
