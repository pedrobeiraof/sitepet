
    //TEMA
    Highcharts.theme = {
        colors: ['#31708F', '#3C763D', '#A94442', '#8A6D3B'],
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



    // VISAO GERAL

    // PIZZA 01 
    $(function () {
        $(document).ready(function () {
            Highcharts.chart('pizza01', {
                chart: {
                    type: 'pie',
                    marginTop: 40
                },
                title: {
                    text: 'Desempenho',
                    style: {
                        color: '#666666',
                        font: '600 14px "Open Sans", sans-serif;'
                    }
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        dataLabels: {
                            distance: -10,
                            color: 'white',
                            formatter: function() {
                                return this.y + '%'
                            }
                        }
                    }
                },
                series: [{
                    name: 'porcentagem',
                    colorByPoint: true,
                    data: [{
                        name: 'Acertos',
                        y: 25.55,
                        sliced: true,
                        selected: true,
                        color: '#3C763D'
                    }, {
                        name: 'Erros',
                        y: 75.45,
                        color: '#A94442'
                    }]
                }]
            });
        });
    });

    // PIZZA 02 
    $(function () {
        $(document).ready(function () {
            Highcharts.chart('pizza02', {
                chart: {
                    type: 'pie',
                    marginTop: 40
                },
                title: {
                    text: 'Desempenho',
                    style: {
                        color: '#666666',
                        font: '600 14px "Open Sans", sans-serif;'
                    }
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        dataLabels: {
                            distance: -10,
                            color: 'white',
                            formatter: function() {
                                return this.y + '%'
                            }
                        }
                    }
                },
                series: [{
                    name: 'porcentagem',
                    colorByPoint: true,
                    data: [{
                        name: 'Acertos',
                        y: 32.72,
                        sliced: true,
                        selected: true,
                        color: '#3C763D'
                    }, {
                        name: 'Erros',
                        y: 67.28,
                        color: '#A94442'
                    }]
                }]
            });
        });
    });

    // PIZZA 03 
    $(function () {
        $(document).ready(function () {
            Highcharts.chart('pizza03', {
                chart: {
                    type: 'pie',
                    marginTop: 40
                },
                title: {
                    text: 'Desempenho',
                    style: {
                        color: '#666666',
                        font: '600 14px "Open Sans", sans-serif;'
                    }
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        dataLabels: {
                            distance: -10,
                            color: 'white',
                            formatter: function() {
                                return this.y + '%'
                            }
                        }
                    }
                },
                series: [{
                    name: 'porcentagem',
                    colorByPoint: true,
                    data: [{
                        name: 'Acertos',
                        y: 9.09,
                        sliced: true,
                        selected: true,
                        color: '#3C763D'
                    }, {
                        name: 'Erros',
                        y: 90.91,
                        color: '#A94442'
                    }]
                }]
            });
        });
    });

    //DESEMPENHO POR ITEM

    // INSUFFICIENT ITEMS
    $(function () {

        var options = {
            data: {
                table: document.getElementById('insufficient-items-table'),
                endColumn: 1,
            },
            chart: {
                type: 'column',
                marginTop: 80,
            },
            yAxis: {
                allowDecimals: true,
                title: {
                    text: 'Porcentagem de acertos'
                }
            },
            xAxis: {
                title: {
                    text: 'Itens'
                }
            },
            title: {
                text: 'Desempenho insuficiente',
                align: 'center',
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    dataLabels: {
                        enabled: true,
                    },
                    enableMouseTracking: false
                }
            },
        };

        $('#insufficient-items-chart').highcharts(Highcharts.merge(options));
    });

    // MEDIUM ITEMS
    $(function () {

        var options = {
            data: {
                table: document.getElementById('medium-items-table'),
                endColumn: 1,
            },
            chart: {
                type: 'column',
                marginTop: 80,
            },
            yAxis: {
                allowDecimals: true,
                title: {
                    text: 'Porcentagem de acertos'
                }
            },
            xAxis: {
                title: {
                    text: 'Itens'
                }
            },
            title: {
                text: 'Desempenho',
                align: 'center',
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    dataLabels: {
                        enabled: true,
                    },
                    enableMouseTracking: false
                }
            },
        };

        $('#medium-items-chart').highcharts(Highcharts.merge(options));
    });

    // GOOD ITEMS
    $(function () {

        var options = {
            data: {
                table: document.getElementById('good-items-table'),
                endColumn: 1,
            },
            chart: {
                type: 'column',
                marginTop: 80,
            },
            yAxis: {
                allowDecimals: true,
                title: {
                    text: 'Porcentagem de acertos'
                }
            },
            xAxis: {
                title: {
                    text: 'Itens'
                }
            },
            title: {
                text: 'Desempenho bom',
                align: 'center',
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    dataLabels: {
                        enabled: true,
                    },
                    enableMouseTracking: false
                }
            },
        };

        $('#good-items-chart').highcharts(Highcharts.merge(options));
    });



    //ANÁLISE POR ITEM

    // LINE CHART
    $(function () {

        var options = {
            data: {
                table: document.getElementById('linechart-table'),
            },
            chart: {
                type: 'line',
                marginTop: 80,
            },
            title: {
                text: 'Alternativa Escolhida por grupo de respondentes',
                align: 'center',
            },
            xAxis: {
                title: {
                    text: 'Grupos'
                }
            },
            yAxis: {
                allowDecimals: true,
                title: {
                    text: 'Porcentagem'
                }
            }
        };

        $('#line-chart').highcharts(Highcharts.merge(options));
    });


    // BAR CHART
    $(function () {

        var options = {
            data: {
                table: document.getElementById('barchart-table'),
                endColumn: 1,
            },
            chart: {
                type: 'column',
                marginTop: 80,
            },
            yAxis: {
                allowDecimals: true,
                title: {
                    text: 'Proporção de respondentes'
                }
            },
            xAxis: {
                title: {
                    text: 'Alternativas escolhidas'
                }
            },
            title: {
                text: 'Porcentagem de respondentes que escolheram cada alternativa',
                align: 'center',
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    dataLabels: {
                        enabled: true,
                    },
                    enableMouseTracking: false
                }
            },
        };

        $('#bar-chart').highcharts(Highcharts.merge(options));
    });

    //tabs
    jQuery(document).on( 'shown.bs.tab', 'a[data-toggle="tab"]', function () { 
        $( '.chart-container' ).each(function() { 
            $(this).highcharts().reflow();
        });
    })
