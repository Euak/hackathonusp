<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css"  rel="stylesheet" type="text/css">
        <!-- Scripts' -->
        <script src=/js/components/countUp.js></script>

        </script>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Header -->
            <div class="row bg-secondary">
                <div class="col">
                    <nav class="navbar navbar-expand-sm justify-content-center">
                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#unidades">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tabelas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gráficos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Content -->
            <div class="row" id="big_numbers">
                <div class="col">
                <div class="row">
                  <div class="col text-center">
                    <h2 class="display-1 mb-0" id="num_li_aberta">643</h2>
                    <h3>Licitações abertas</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-center">
                    <h2 class="display-1 mb-0" id="num_li_enc">1324</h2>
                    <h3>Licitações encerradas</h3>
                  </div>
                </div>
            </div>
            </div>

            <div class="row mt-5" id="unidades">
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/img/unidades/1.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>



          <!-- Footer -->
          <div class="row">
            <div class="col">
            </div>
          </div>
        </div>
    </body>
    <script>
        var numAnim = new CountUp("num_li_aberta", 0, 643);
        var numAnim2 = new CountUp("num_li_enc", 0, 1324);
        if (!numAnim.error) {
            numAnim.start();
            numAnim2.start();
        } else {
            console.error(numAnim.error);
        }
    </script>
</html>
