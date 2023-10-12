<!DOCTYPE html>
<html>
<head>
    <title>Reprodução de Vídeo</title>
</head>
<body>

<video width="640" height="360" controls>
    <source src="/videos/{{$video->nome_arquivo}}" type="video/mp4">
    Seu navegador não suporta a reprodução de vídeo.
</video>

</body>

<style>
    /* CSS para centralizar o vídeo e adicionar um fundo escuro */
    body {
        background-color: #000; /* Cor de fundo escura */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
    video {
        max-width: 100%;
        max-height: 100%;
    }
</style>
</html>
