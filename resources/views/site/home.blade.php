<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>My Youtube</title>
        <meta charset="utf-8">
    </head>

    <body>
        <header>
            @component('layouts.header')
            @endcomponent
        </header>

        <div class="conteudo-destaque">

            <div class="esquerda">
                <div class="informacoes">
                    <h1>My Youtube</h1>
                    <p>Site para upload e streaming de vídeos<p>
                    <ul class="chamada">
                        <li class="texto-branco">Sistema completo e simples</li>
                        <li class="texto-branco">Feito em Laravel + BladePHP</li>
                    </ul>
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Vídeos</h1>
                    <p>Tabela que mostra os vídeos disponíveis.<p>
                    <div class="table-container">
                        <table class="table table-hover" id="tabela">
                            <thead>
                                <tr>
                                    <th class="text-center">Nome</th>
                                    <th class="text-center">Duração</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>teste 1</td>
                                    <td>teste 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            @component('layouts.footer')
            @endcomponent
        </footer>
    </body>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        p {
            color: #ffffff;
        }

        span {
            font-size: 12px;
            color: #000;
        }

        h1 {
            color: #ffffff;
            font-size: 28px;
        }

        h2 {
            color: #333333;
            font-size: 22px;
        }

        input, select, textarea, button {
            width: 100%;
            padding: 10px 15px;
            margin: 10px 0px 10px 0px;
            box-sizing: border-box;
            border-radius: 3px;
            background-color: transparent;
            color: #333;
        }

        .table-container {
            display: flex;
            justify-content: center;
        }

        #tabela {
            width: 100%;
            margin: 0 auto;
        }

        th, td {
            width: 50%;
            padding: 8px;
            text-align: center;
        }

        th {
            font-size: 18px;
            padding-right:20px;
        }

        td {
            padding-right:20px;
        }

        .texto-branco {
            color: #ffffff;
        }

        .borda-branca {
            border: solid 1px #fff;
        }

        .borda-preta {
            border: solid 1px #333;
        }

        button {
            background-color: #7ab829;
            cursor: pointer;
            color: #fff;
        }

        button:hover {
            background-color: #6ea22c;
        }

        ::placeholder {
            color: #333333;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #333333;
        }

        ::-ms-input-placeholder {
            color: #333333;
        }

        .logo {
            width: 50px;
            float: left;
            margin-left: 40px;
        }

        .conteudo-destaque {
            width: 100%;
            height: 100%;
            min-height: 800px;
        }

        .esquerda {
            float:left;
            background-color: #268fd0;
            width: 60%;
            height: 100%;
        }

        .direita {
            float:right;
            background-color: #2a9ee2;
            width: 40%;
            height: 100%;
        }

        .informacoes, .contato {
            margin: 100px 40px 40px 40px;
        }

        .contato-principal {
            margin: 0px 60px 60px 40px;
        }

        .chamada {
            margin-top: 30px;
            margin-left: 20px;
        }

        .video {
            margin: 40px;
        }

        .video img {
            max-width: 100%;
            max-height: 100%;
        }

        .conteudo-pagina {
            width: 100%;
            height: 100%;
            text-align: center;
            margin-bottom: 100px;
        }

        .titulo-pagina {
            padding: 100px 0px 60px 0px;
            background-color: #2a9ee2;
            text-align: center;
        }

        .informacao-pagina {
            text-align: center;
            margin-top: 30px;
        }

        .informacao-pagina p{
            color: #333;
        }

    </style>
</html>
