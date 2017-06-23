
    //TEMA
    Highcharts.theme = {
        colors: ['#9739F4', '#F44439', '#777777', '#F4C145', '#86DA54', '#45BFF4'],
        chart: {
            marginTop: 60,
            backgroundColor: 'transparent'
        },
        title: {
            style: {
                color: '#333333',
                font: '400 18px "Open Sans", sans-serif;'
            }
        },
    }
    Highcharts.setOptions(Highcharts.theme);

    
    // AGENDA - PIZZA
    $(function () {

        $(document).ready(function () {

            // Build the chart
            Highcharts.chart('studyhours-chart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Horas de Estudo',
                    style: {
                        display: 'none'
                    }
                },
                subtitle: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                tooltip: {
                    pointFormat: '<b>{point.name}</b>: {point.y:.1f} horas'
                },
                legend: {
                    itemStyle: {
                        width: 200
                    },
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Administração e planejamento de Saúde',
                        y: 7
                    }, {
                        name: 'Anatomia M1',
                        y: 5
                    }, {
                        name: 'Pediatria',
                        y: 4
                    }, {
                        name: 'Bioquímica médica',
                        y: 4
                    }, {
                        name: 'Genética e Evolução para a Medicina',
                        y: 3
                    }, {
                        name: 'Saúde e Trabalho',
                        y: 0
                    }]
                }]
            });
        });
    }); 
