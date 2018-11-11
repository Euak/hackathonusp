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
                                <a class="nav-link" href="#unidades">Licitações Totais/Unididade</a>
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
                    <div class="row text-center mb-4">
                        <div class="col text-center">
                            <img src="img/brasao.png" class="img-fluid text-center" style="height: -webkit-fill-available!important;" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>
                                Fusce eget magna gravida turpis pulvinar imperdiet. Praesent at ultricies turpis. Nulla eget aliquam massa. Donec sit amet ultrices justo. Duis tortor tellus, varius ac est vel, ornare feugiat neque. Proin ut mauris id tellus iaculis egestas sed ac ipsum. Ut facilisis tortor nec metus interdum, sed aliquam nisi interdum. In dignissim posuere aliquet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section" id="big_numbers">
                <div class="col">
                    <div class="row">
                      <div class="col text-center">
                        <h2 class="display-1 mb-0" id="num_li_aberta">643</h2>
                        <h3>Licitações abertas</h3>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top:95%;height: 10%">
                                <div class="unidade-text">
                                    6%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top:95%;height: 10%">
                                <div class="unidade-text">
                                    4%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top: 95%;height: 10%">
                                <div class="unidade-text">
                                    5%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top: 95%;height: 10%;">
                                <div class="unidade-text">
                                    5%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top: 95%;height: 10%;">
                                <div class="unidade-text">
                                    5%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top: 95%;height: 10%;">
                                <div class="unidade-text">
                                    5%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top: 95%;height: 10%;">
                                <div class="unidade-text">
                                    5%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top: 95%;height: 10%;">
                                <div class="unidade-text">
                                    5%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center unidade-container">
                            <img src="/img/unidades/1.jpeg" class="unidade-image" alt="">
                            <div class="unidade-middle" style="top: 95%;height: 10%;">
                                <div class="unidade-text">
                                    5%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section" id="big_numbers2">
                <div class="col">
                    <div class="row">
                      <div class="col text-center">
                        <h2 class="display-1 mb-0" id="num_li_enc">1324</h2>
                        <h3>Licitações encerradas</h3>
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

        let li_aberta = document.getElementById("big_numbers");
        let li_enc = document.getElementById("big_numbers2");
        let user_pos = window.innerHeight;
        addEventListener("scroll", function(){
            console.log(user_pos + window.pageYOffset);
            console.log(li_aberta.offsetTop);

            if(user_pos + window.pageYOffset > li_aberta.offsetTop){
                numAnim.start();
            }
            if(user_pos + window.pageYOffset > li_enc.offsetTop){
                numAnim2.start();
            }
        });
    </script>
</html>
