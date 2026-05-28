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

    <table border="1">

        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>CPF</td>
            <td>Usuário</td>
            <td>Status</td>
            <td colspan="2">Ações</td>
        </tr>

        @isset($administradores)

            @foreach($administradores as $administrador)

                <tr>

                    <td>
                        {{ $administrador->nome }}
                    </td>

                    <td>
                        {{ $administrador->email }}
                    </td>

                    <td>
                        {{ $administrador->telefone }}
                    </td>

                    <td>
                        {{ $administrador->cpf }}
                    </td>

                    <td>
                        {{ $administrador->usuario }}
                    </td>

                    <td>
                        {{ $administrador->status }}
                    </td>

                    <td>

                        <form action="{{ route('administrador.remove', ['id' => $administrador->id]) }}" method="GET">

                            <button type="submit">
                                Remover
                            </button>

                        </form>

                    </td>

                    <td>

                        <form action="{{ route('administrador.atualizar', ['id' => $administrador->id]) }}" method="GET">

                            <button type="submit">
                                Atualizar
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        @endisset

    </table>

</div>