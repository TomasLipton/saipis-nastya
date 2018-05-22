<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <title>Программное средство для принятия решений методом предпочтений</title>

    <?php require_once __DIR__ . '/parts/css.php' ?>
</head>
<body>
<header>
    <?php require_once __DIR__ . '/parts/navbar.php' ?>
</header>
<main>
    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">Добро пожаловать, <?php echo $this->user->username; ?>!</h1>
            <p class="lead">Программное средство для принятия решений методом предпочтени</p>
        </div>

        <h2 class="text-center mb-4 hiddenData">Работа с фирмой <span id="firmTitleBlock"></span></h2>

        <div id="calculation">

            <div class="card inputDataTable mb-5 hiddenData" id="inputDataTable">
                <div class="card-header">
                    Исходная матрица предпочтений
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="inputTable">

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

            <div class="card modificationDataTable mb-5 hiddenData" id="modificationDataTable">
                <div class="card-header">
                    Модифицированная матрица предпочтений
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="inputTable">
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

            <div class="card totalPreferenceScoreTable mb-5 hiddenData" id="totalPreferenceScoreTable">
                <div class="card-header">
                    Суммарные оценки предпочтения
                </div>
                <div class="card-body table-responsive">
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
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card goalsWeight mb-5 hiddenData" id="goalsWeight">
                <div class="card-header">
                    Искомые веса целей
                </div>
                <div class="card-body table-responsive">
                    <span class="bg-success text-white mostOptimalText"></span> — Наиболее оптимальный
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ω 1</th>
                            <th scope="col">ω 2</th>
                            <th scope="col">ω 3</th>
                            <th scope="col">ω 4</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="text-center " id="inputCompanyNameDiv">
            <h2 class="mb-3">Введите название вашей компании</h2>
            <form class="form" id="inputCompanyNameForm">
                <div class="form-group row">
                    <label for="inputCompanyName" class="col-sm-2 col-form-label col-form-label-lg">Компания</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="inputCompanyName" placeholder="Название" required autofocus>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" value="Продолжить">
                    </div>
                </div>
            </form>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/parts/footer.php' ?>

<script src="/assets/js/main.js"></script>

</body>
</html>