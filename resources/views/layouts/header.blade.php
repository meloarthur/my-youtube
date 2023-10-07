<style>
    .topo {
        width: 100%;
        background-color: #f8f8f8;
        position: absolute;
        padding: 20px 0px 10px 0px;
    }

    .menu {
        float: right;
        margin-right: 40px;
    }

    .menu li {
        display: inline;
        float: left;
    }

    .menu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .menu a {
        text-decoration: none;
        padding: 14px 16px;
        color: #333;
    }

    .menu a:hover {
        color: #268fd0;
    }
</style>

<div class="topo">

    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index') }}">Principal</a></li>
            <li><a href="{{ route('site.videos') }}">Vídeos</a></li>
        </ul>
    </div>

</div>