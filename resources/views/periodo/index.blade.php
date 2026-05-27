<div>

    @if(session('success'))
        <h2>{{ session('success') }}</h2>
    @endif

    <form action="{{ route('periodo.add') }}" method="post">

        @csrf

        <label for="descricao">Descrição</label>

        <input type="text" name="descricao" id="descricao">

        <button type="submit">
            Salvar
        </button>

    </form>

    <hr>

    <h2>Períodos cadastrados</h2>

    @isset($periodos)

        @foreach($periodos as $periodo)

            <h3>{{ $periodo->descricao }}</h3>

        @endforeach

    @endisset

</div>