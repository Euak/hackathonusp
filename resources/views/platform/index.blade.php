<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Análise - {{$title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css"  rel="stylesheet" type="text/css">
        <!-- Scripts' -->
        <script src=/js/components/Chart.min.js></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mb-5">
              <div class="col text-center">
                <h1>{{$title}}</h1>
              </div>
            </div>
            <div class="row text-center justify-content-md-center mb-5">
                <div class="col-sm-6 row text-center">
                    <table class="table table-striped justify-content-md-center text-center">
                        <thead>
                          <tr>
                            <th>Item</th>
                            <th>Valor por Unidade</th>
                            <th>Diferença em Relação à Média</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($json as $produto)
                            <tr>
                              <td>{{$produto->TIPO_PRODUTO}}</td>
                              <td>{{$produto->valor_unidade}}</td>
                              <td>{{$produto->diff_perc_media}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
              <div class="col">
                  <canvas id="myChart" width="400" height="100"></canvas>
                  <script>

                    var cores = Array();
                        cores["PAPEL SULFITE"] = "#c9c9ff";
                        cores["MICROCOMPUTADOR"] = "#e1f7d5";
                    new Chart(document.getElementById("myChart"), {
                    type: 'horizontalBar',
                    data: {
                      datasets: [
                        @foreach ($json as $produto)
                            {
                                data: [{{$produto->diff_perc_media}}],
                                label: "{{$produto->TIPO_PRODUTO}}",
                                backgroundColor: cores["{{$produto->TIPO_PRODUTO}}"],
                                fill: false
                            },
                        @endforeach
                      ]
                    },
                    options: {
                      title: {
                        display: true,
                        position: 'top',
                        fontSize: 24,
                        text: 'Diferença em Relação à Média (%)'
                      }
                    }
                    });
                  </script>
              </div>
            </div>
        </div>
    </body>
</html>
