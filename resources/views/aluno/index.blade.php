<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: #4facfe;
            box-shadow: 0 0 5px rgba(79,172,254,0.5);
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #4facfe;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #00c6ff;
        }

        .sucesso {
            margin-top: 15px;
            padding: 10px;
            background: #d4edda;
            color: #155724;
            border-radius: 6px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Cadastro de Aluno</h2>

    <form action="{{route('aluno.adicionar')}}" method="post">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail">

        <button type="submit">Salvar</button>

        @isset($sucesso)
            <div class="sucesso">
                {{$sucesso}}
            </div>
        @endisset
    </form>
</div>

</body>
</html>