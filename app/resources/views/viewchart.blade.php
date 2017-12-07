<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script type="text/javascript">
            $(function () {
                var xAxis = {{json_encode($xAxis)}};
                var yAxis = {{json_encode($yAxis)}};

                var myChart = Highcharts.chart('container', {
                    title: {
                        text: 'Temper Onboarding Data'
                    },
                    xAxis: {
                        categories: xAxis
                    },
                    yAxis: {
                        title: {
                            text: 'Percentage of Users'
                        }
                    },
                    series: [{
                        name: 'Onboarding Step',
                        data: yAxis
                    }]
                });
            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="container" style="width:100%; height:400px;"></div>
            </div>
        </div>
    </body>
</html>
