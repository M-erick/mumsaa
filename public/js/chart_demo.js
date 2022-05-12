
    //The HTMLCanvasElement.getContext() method returns a drawing context on
    //the canvas, or null if the context identifier is not supported




    let myChart = document.getElementById('myChart').getContext('2d');

    //Global Options
    // Chart.defaults.global.defaultFontFamily = 'Lato';
    // Chart.defaults.global.defaultFontSize = 18;
    // Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
        type: 'line', //horizontalBar bar line ,doughnut
        data: {
            labels: ['January', 'February', 'March', 'Lowell', 'April', 'May','June','July','August','September','October','November','December'],
            datasets: [{
                label: 'Population',
                data: [
                    50000,
                    65000,
                    15000,
                    10000,
                    28000,
                    30000,
                    35000,
                    45000,
                    50000,
                    35000,
                    34000,
                    20000
                ],
                backgroundColor: [
                    'rgba(255,99,132,0.6)',
                    'rgba(54,162,235,0.6)',
                    'rgba(255,206,86,0.6)',
                    'rgba(75,192,192,0.6)',
                    'rgba(153,102,255,0.6)',
                    'rgba(255,159,64,0.6)',
                    'rgba(255,99,132,0.6)'






                ],
                borderWidth: 1,
                borderColor: '#777',
               // hoverBorderWidth: 3,
                //hoverBorderColor: '#000'

            }]
        },
        options: {
            responsive: true,
            scales:{
                yAxes:[{
                    gridLines:{
                        // drawBorder:false
                        display:false

                    }
                }],
                xAxes:[{
                    gridLines:{
                        // drawBorder:false
                        display:false

                    }
                }]


            },
            plugins: {
                title: {
                    display: true,
                    text: '2021 Payment Expenditure statistics',
                    fontSize: 25

                },
                legend: {
                    display: false,
                    position: 'right',
                    labels: {
                        fontColor: '#000'

                    }
                },


                layout: {
                    padding: {
                        left: 50,
                        right: 0,
                        bottom: 0,
                        top: 0
                    }
                },
                tooltips: {
                    enabled: false
                }
            }
        }
    });



