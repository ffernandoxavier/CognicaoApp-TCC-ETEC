<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="img/logo002.png" alt="" class="img-fluid b-logo">
               
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Sobrenome -->
            <div>
                <x-label for="sobrenome" :value="__('Sobrenome')" />

                <x-input id="sobrenome" class="block mt-1 w-full" type="text" name="sobrenome" :value="old('sobrenome')" required />
            </div>

            <!-- cpf -->
            <div>
                <x-label for="cpf" :value="__('CPF')" />

                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required />
            </div>

            <!-- sexo -->
            <div>
                <x-label for="sexo" :value="__('Sexo')" />
                <x-input id="sexo" class="block mt-1 w-full" type="text" name="sexo" :value="old('sexo')" required />

                            <!--<input type="radio" name="sexo" id="sexo" >
                            <label for ="sexo">Masculino</label><br>
                            <input type="radio" name="sexo" id="sexo">
                            <label for ="sexo">Feminino</label><br> -->
            </div>

            <!-- Escolaridade -->
            <div>
                <x-label for="escolaridade" :value="__('Escolaridade')" />
                <!-- <x-input id="escolaridade" class="block mt-1 w-full" type="text" name="escolaridade" :value="old('escolaridade')" required /> -->
                <select id="escolaridade" class="block mt-1 w-full" type="text" name="escolaridade" :value="old('escolaridade')" required >
                                <option value="1">Fundamental Completo</option>
                                <option value="2">Fundamental Incompleto</option>
                                <option value="3">Médio Completo</option>
                                <option value="4"> Médio Incompleto</option>
                                <option value="5">Superior Completo</option>
                                <option value="6">Superior Incompleto</option>
                            </select>
            </div>

                <!-- data nascimento -->
                <div>
                <x-label for="dtnasc" :value="__('Data Nascimento')" />
                <x-input id="dtnascimento" class="block mt-1 w-full" type="date" name="dtnascimento" :value="old('dtnascimento')" required />

            </div>



            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ja tem Cadastro?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Cadastrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
