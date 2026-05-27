<div>

    <form action="{{ route('componente.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>

        <input type="text" name="nome" id="nome">

        <br><br>

        <label for="hora_inicio">Hora Início</label>

        <input type="time" name="hora_inicio" id="hora_inicio">

        <br><br>

        <label for="hora_fim">Hora Fim</label>

        <input type="time" name="hora_fim" id="hora_fim">

        <br><br>

        <button type="submit">
            Salvar
        </button>

        @isset($success)

            <h1>{{ $success }}</h1>

        @endisset

    </form>

    @isset($componentes)

        @foreach($componentes as $componente)

            <h3>
                {{ $componente->nome }}
            </h3>

            <p>
                {{ $componente->hora_inicio }}
            </p>

            <p>
                {{ $componente->hora_fim }}
            </p>

            <hr>

        @endforeach

    @endisset

</div>