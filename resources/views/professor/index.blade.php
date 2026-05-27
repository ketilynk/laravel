<div>

    <form action="{{ route('professor.add') }}" method="post">

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

        <button type="submit">
            Salvar
        </button>

        @isset($success)

            <h1>{{ $success }}</h1>

        @endisset

    </form>

    @isset($professores)

        @foreach($professores as $professor)

            <h3>
                {{ $professor->nome }}
            </h3>

            <p>
                {{ $professor->email }}
            </p>

            <p>
                {{ $professor->telefone }}
            </p>

            <hr>

        @endforeach

    @endisset

</div>