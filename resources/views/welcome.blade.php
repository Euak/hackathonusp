<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LicitUSP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css"  rel="stylesheet" type="text/css">
        <!-- Scripts' -->
        <script src=/js/components/countUp.js></script>
        <script src=/js/components/Chart.min.js></script>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Header -->
            <div class="row bg-dark sticky-top" id="navbar">
                <div class="col">
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark d-flex align-items-end flex-column">
                        <!-- Links -->
                        <ul class="navbar-nav text-right">
                            <li class="nav-item">
                                <a class="nav-link" href="#sobre">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#big_numbers">Licitações Abertas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#lic_totais">Licitações Totais/Unidade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#big_numbers2">Licitações Encerradas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-success" href="/platform">Acesse a Plataforma</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Content -->

            <div class="row section" id="sobre">
                <div class="col">
                    <div class="row text-center mb-6">
                        <div class="col text-center">
                            <img src="img/logo.png" class="img-fluid text-center" style="height: -webkit-fill-available!important;" alt="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 text-center">
                            <p>
                                Nosso objetivo é trazer mais transparência e recomendações para dentro da Universidade de São Paulo.
                            </p>
                            <p>
                            Auxiliando tomadas de decisões que garantam um controle de gastos mais eficientes todos os dias a partir de evidências e comparações entre institutos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section" id="big_numbers">
                <div class="col">
                    <div class="row">
                      <div class="col text-center" style="font-family: BebasKai;!important">
                        <h1 class="display-1 mb-0" id="num_li_aberta" style="font-size: 15rem!important;">643</h1>
                        <h3>Licitações abertas</h3>
                      </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-4 text-center unidade-container">
                            <a href="/platform/poli">
                                <img src="/img/unidades/poli2.png" class="unidade-image" alt="">
                                <div class="unidade-middle">
                                    <div class="unidade-text">
                                        1.4%
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <a href="/platform/eesc">
                                <img src="/img/unidades/eesc.png" class="unidade-image" alt="">
                                <div class="unidade-middle">
                                    <div class="unidade-text">
                                        3.9%
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <a href="/platform/esalq">
                                <img src="/img/unidades/ESALQ.png" class="unidade-image" alt="">
                                <div class="unidade-middle">
                                    <div class="unidade-text">
                                        4.5%
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center unidade-container">
                            <a href="/platform/fflch">
                                <img src="/img/unidades/FFLCH.png" class="unidade-image" alt="">
                                <div class="unidade-middle">
                                    <div class="unidade-text">
                                        2%
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <a href="/platform/fmvz">
                                <img src="/img/unidades/fmvz.png" class="unidade-image" alt="">
                                <div class="unidade-middle">
                                    <div class="unidade-text">
                                        1.9%
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <a href="/platform/if">
                                <img src="/img/unidades/if.png" class="unidade-image" alt="">
                                <div class="unidade-middle">
                                    <div class="unidade-text">
                                        1%
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section" id="big_numbers2">
                <div class="col">
                    <div class="row">
                      <div class="col text-center" style="font-family: BebasKai;!important">
                        <h1 class="display-1 mb-0" id="num_li_enc" style="font-size: 15rem!important;">1324</h1>
                        <h3>Licitações encerradas</h3>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row section" id="lic_totais">
              <div class="col">
                  <canvas id="myChart" width="400" height="100"></canvas>
                  <script>

                  var barChartData = {
                      labels: ['FFLCH', 'IF', 'EESC', 'Poli'],
          datasets: [{
              label: '2017',
              backgroundColor: "#c9c9ff",
              borderWidth: 1,
              data: [
                  55,
                  62,
                  62,
                  113
              ]
          }, {
              label: '2018',
              backgroundColor: "#e1f7d5",
              borderWidth: 1,
              data: [
                  39,
                  33,
                  66,
                  88
              ]
          }]

      };

                    new Chart(document.getElementById("myChart"), {
                        type: 'bar',
                        data: barChartData,
                        options: {
                          title: {
                            display: true,
                            text: 'Licitações Totais/Unidade',
                            fontSize: 24
                          }
                        }
                    });
                  </script>
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

        let li_aberta = document.getElementById("big_numbers");
        let li_enc = document.getElementById("big_numbers2");
        let user_pos = window.innerHeight;
        addEventListener("scroll", function(){

            if(user_pos + window.pageYOffset > li_aberta.offsetTop){
                numAnim.start();
            }
            if(user_pos + window.pageYOffset > li_enc.offsetTop){
                numAnim2.start();
            }
        });
    </script>
</html>
