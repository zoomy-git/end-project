<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.import')

    <title>Landing Page</title>
    
<style>
    body{
        
        height: 100vh;
    }
</style>

</head>
<body>
    <div class="d-flex">
        <div class="container-sm">
            <span>
                
            <h1><strong>One for All App</strong></h1>
            <h4>some persuasive words to make<br> you want to use this web app</h4> 
            </span>
        </div>

        
            <x-jet-authentication-card>
                
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                

                <form method="POST" action="{{ route('login') }}">
                    
                    <h1>Login</h1>
                    @csrf

                    <div class="mb-3">
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="email"/>
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="password" />

                        <div class="d-flex align-self-end ">
                            
                            @if (Route::has('password.request'))
                                <a class="dark text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('lupa password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="block">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4 ">
                        

                        <x-jet-button class="d-grid gap-2 light">
                            {{ __('login') }}
                        </x-jet-button>

                        <div id="labelRegister" class="form-text dark">
                            {{ __('belum punya akun? klik') }}
                            <a href='/register' style="color: #57443E;">disini</a>
                        </div>
                    </div>
                </form>
            </x-jet-authentication-card>

        

</body>
