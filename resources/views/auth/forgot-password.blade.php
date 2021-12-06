
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

    <x-jet-authentication-card>

        <div class="m-3 text-sm text-gray-600">
            {{ __('Lupa password? tidak masalah. Tinggal beri tahu kita alamat email anda dan kita akan mengirimkan email berisi link untuk reset password yang bisa digunakan untuk membuat password baru.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
                <x-jet-label for="email" class="fw-bold" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>

</body>
