<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">САИПИС</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/?ctrl=calculating&act=all">История операций <span class="sr-only">(current)</span></a>
                </li>
                <?php if('admin' == $this->user->role): ?>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/?ctrl=index&act=AdminPanel">Панель администратора <span class="sr-only">(current)</span></a>
                </li>
                <?php endif; ?>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/?ctrl=user&act=logout">Выйти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>