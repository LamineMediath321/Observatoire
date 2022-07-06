<x-guest-layout>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

       
        
        <div class="content-form-log">
            <h1 class="connexion"> Connexion </h1>
            <p class="versLogin">
               Pas encore de compte? <a href="{{ route('register') }}"> Créez en un !</a>
            </p>
             <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('login') }}">
                @csrf

            <!-- Email Address -->
                <div class="mt-4 d-flex">
                    <input type="email" name="email" id="email" class="outpout mt-1" placeholder="Email" :value="old('email')" required>
                   
                </div>
               

            <!-- Password -->
                <div class="mt-4 d-flex">
                    <input type="password" name="password" id="password" class="outpout mt-1" placeholder="Mot de passe" required autocomplete="current-password">
                </div>

            <!-- Remember Me -->
                <div class="block mt-4 ml-1 remember">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="items-center mt-4">
                    <input type="submit" class="seConnecter mt-1" value="Se connecter">
                 
                </div>
                <div class="mt-2 ">
                @if (Route::has('password.request'))
                    <a class="forgot text-sm" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
                </div>
                
            </form>
        </div>
    
</x-guest-layout>
