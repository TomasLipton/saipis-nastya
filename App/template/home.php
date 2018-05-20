<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <title>Программное средство для принятия решений методом предпочтений</title>

    <link rel="stylesheet" href="/assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/template.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/table_page.css" type="text/css"/>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">САИПИС</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <!--                    <li class="nav-item">-->
                    <!--                        <a class="nav-link" href="#">Features</a>-->
                    <!--                    </li>-->
                    <!--                    <li class="nav-item">-->
                    <!--                        <a class="nav-link" href="#">Pricing</a>-->
                    <!--                    </li>-->

                </ul>

            </div>
            <span class="navbar-text">
      <ul class="navbar-nav">
            <li class="nav-item">
                        <a class="nav-link" href="/?ctrl=user&act=logout">Выйти</a>
                    </li>
      </ul>
    </span>
        </div>
    </nav>
</header>
<main>
    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">Добро пожаловать, <?php echo $this->user->username; ?>!</h1>
            <p class="lead">Программное средство для принятия решений методом предпочтени</p>
        </div>

        <div class="card inputDataTable mb-5" id="inputDataTable">
            <div class="card-header">
                Исходная матрица предпочтений
            </div>
            <div class="card-body">
                <div id="inputTable">
                    <h2>Работа с фирмой <span id="firmTitleBlock"></span></h2>
                    <table class="table table-bordered">
                        <tr>
                            <td></td>
                            <td>Парамерт сравнения 1</td>
                            <td>Парамерт сравнения 2</td>
                            <td>Парамерт сравнения 3</td>
                            <td>Парамерт сравнения 4</td>
                        </tr>
                        <tr>
                            <td>Эксперт 1</td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                        </tr>
                        <tr>
                            <td>Эксперт 2</td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                        </tr>
                        <tr>
                            <td>Эксперт 3</td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                        </tr>
                        <tr>
                            <td>Эксперт 4</td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                            <td><input type="number" class="form-control" min="0" max="4" value="<?php echo rand(1, 4) ?>"></td>
                        </tr>
                    </table>

                    <div class="text-right">
                        <button type="button" id="startCalculating" class="btn btn-primary">Рассчитать</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="card modificationDataTable mb-5" id="#">
            <div class="card-header">
                Модифицированная матрица предпочтений
            </div>
            <div class="card-body">
                <div id="inputTable">
                    <table class="table table-bordered">
                        <tr>
                            <td></td>
                            <td>Парамерт сравнения 1</td>
                            <td>Парамерт сравнения 2</td>
                            <td>Парамерт сравнения 3</td>
                            <td>Парамерт сравнения 4</td>
                        </tr>
                        <tr>
                            <td>Эксперт 1</td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                        </tr>
                        <tr>
                            <td>Эксперт 2</td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                        </tr>
                        <tr>
                            <td>Эксперт 3</td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                        </tr>
                        <tr>
                            <td>Эксперт 4</td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                            <td><input type="number" class="form-control" min="0" max="4" readonly></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="card totalPreferenceScoreTable mb-5" id="#">
            <div class="card-header">
                Суммарные оценки предпочтения
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">K1</th>
                        <th scope="col">K2</th>
                        <th scope="col">K3</th>
                        <th scope="col">K4</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center" id="inputCompanyNameDiv">
            <h2 class="mb-3">Введите название вашей компании</h2>
            <form class="form" id="inputCompanyNameForm">
                <div class="form-group row">
                    <label for="inputCompanyName" class="col-sm-2 col-form-label col-form-label-lg">Название</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="inputCompanyName" placeholder="Название" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" value="Продолжить">
                    </div>
                </div>
            </form>
        </div>

    </div>
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted"> &copy; Анастасия Березюк, гр.672302</span>
    </div>
</footer>

<script src="/assets/js/main.js"></script>

</body>
</html>