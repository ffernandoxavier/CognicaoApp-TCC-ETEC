<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <link rel="st">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-blue-500">
                Estamos quase lá!!.Complete seu perfil para realizar os testes!
                </div><br>
                <div class=" border ">
                    <form id="registro">
                        <div class="half-box">
                            <label for ="name">Nome </label>
                            <input type="text" name="name" id="name" placeholder="Digite seu nome">
                        </div><br>
                        
                        <div class="half-box">
                            <label for ="lastname">Sobrenome</label>
                            <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome">
                        </div><br>

                        <div class="half-box">
                            <label for ="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
                        </div><br>

                        <div class="half-box">
                            <label for ="escolaridade">Escolaridade</label><br>
                            <input type="date" name="escolaridade" id="escolaridade" placeholder="Digite seu sobrenome">
                        </div>

                        <div class="half-box">
                            <label for ="datanasc">Data de Nascimento</label><br>
                            <input type="date" name="datanasc" id="datanasc" >
                        </div><br>

                        <div class="half-box">
                            <input type="submit" value="Enviar" id="btnEnviar" >
                        </div>

                    </form>

                </div>
            
            </div>
        </div>
    </div>
</x-app-layout>
