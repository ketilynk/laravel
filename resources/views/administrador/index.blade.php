<div>

    <form action="{{ route('administrador.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>

        <input type="text" name="nome" id="nome">

        <br><br>

        <label for="email">Email</label>

        <input type="email" name="email" id="email">

        <br><br>

        <label for="telefone">Telefone</label>

        <input type="text" name="telefone" id="telefone">

        <br><br>

        <label for="cpf">CPF</label>

        <input type="text" name="cpf" id="cpf">

        <br><br>

        <label for="usuario">Usuário</label>

        <input type="text" name="usuario" id="usuario">

        <br><br>

        <label for="senha">Senha</label>

        <input type="password" name="senha" id="senha">

        <br><br>

        <label for="status">Status</label>

        <input type="text" name="status" id="status">

        <br><br>

        <button type="submit">
            Salvar
        </button>

        @isset($success)

            <h1>{{ $success }}</h1>

        @endisset

    </form>

    @isset($administradores)

        @foreach($administradores as $administrador)

            <h3>{{ $administrador->nome }}</h3>

            <p>{{ $administrador->email }}</p>

            <p>{{ $administrador->telefone }}</p>

            <p>{{ $administrador->cpf }}</p>

            <p>{{ $administrador->usuario }}</p>

            <p>{{ $administrador->status }}</p>

            <hr>

        @endforeach

    @endisset

</div>