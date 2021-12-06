
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
    <div class="card p-4 dark">

        <form method="POST" action="{{ route('register') }}">
            
            <h1>Register</h1>

            
            <x-jet-validation-errors class="mb-4" />
            @csrf

            <div class="row mb-3">
                <x-jet-label for="name" value="{{ __('Username') }}" />
                <div class="col-sm-10 w-auto">
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div> 
            </div>

            <div class="row mb-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <div class="col-sm-10 w-auto">
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
            </div>

            <div class="row mb-3">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <div class="col-sm-10 w-auto">
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
            </div>

            <div class="row mb-3">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <div class="col-sm-10 w-auto">
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="row mb-3">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="dark" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="mt-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </div>

        
</body>
