<x-guest-layout>
    <!-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>




 

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div id="auth-container">
            <div id="auth-form" class = "col-md-6 offset-md-3"> 
                <h1>Recupere sua senha</h1>
                <h4 class="subtitle">Caso tenha esquecido sua senha informe seu e-mail e enviaremos uma nova senha!</h4>
            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email"  class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
                </div>
                @endif
                <x-jet-validation-errors class="mb-4 alert alert-danger error-forgot-pass" />
            </div>
        </div>
        </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
