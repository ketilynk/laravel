<div>

    <form action="{{ route('componente.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>

        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">

        <br><br>

        <label for="hora_inicio">Hora Início</label>

        <input type="time" name="hora_inicio" id="hora_inicio" value="{{ old('hora_inicio') }}">

        <br><br>

        <label for="hora_fim">Hora Fim</label>

        <input type="time" name="hora_fim" id="hora_fim" value="{{ old('hora_fim') }}">

        <br><br>

        <button type="submit">
            Salvar
        </button>

        @isset($success)

            <h1>{{ $success }}</h1>

        @endisset
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

    <table border="1">

        <tr>
            <td>Nome</td>
            <td>Hora Início</td>
            <td>Hora Fim</td>
            <td colspan="2">Ações</td>
        </tr>

        @isset($componentes)

            @foreach($componentes as $componente)

                <tr>

                    <td>
                        {{ $componente->nome }}
                    </td>

                    <td>
                        {{ $componente->hora_inicio }}
                    </td>

                    <td>
                        {{ $componente->hora_fim }}
                    </td>

                    <td>

                        <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">

                            <button type="submit">
                                Remover
                            </button>

                        </form>

                    </td>

                    <td>

                        <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">

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