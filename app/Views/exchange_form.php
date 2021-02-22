<canvas id="myChart" width=""></canvas>
<?php 
$labels = array_keys(get_object_vars($currencies));
$rates = array_values(get_object_vars($exchange->rates));
?>
<script> 
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: <?=json_encode($labels)?>,
        datasets: [{
            label: 'Rate',
            data: <?=json_encode($rates)?>,
            backgroundColor: 
                'rgba(191, 223, 255, 1)'
            ,
            borderColor: 
                'rgba(119, 192, 255, 1)'
            ,
            borderWidth: 1,
            barThickness: 20,
            maxBarThickness: 20,
            maxBarLength: 100,
            barPercentage: 1.0,
        }]
    },
    options: {
        responsive: true,
        aspectRatio: 0.3,
        tooltips: {
            positions: 'average'
        },
        scales: {
            xAxes: [{
                barPercentage: 0.2,
                display: true,
                ticks: {
                    beginAtZero: true,
                    stacked: true,
                    maxTicksLimit: 100,
                    stepSize: 0.5,
                    suggestedMax: 100,
                    showLabelBackdrop: true,
                    max:1000,
                    padding: 5
                },
                gridLines: {
                    offsetGridLines: true
                }
            }],
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true,
                    showLabelBackdrop: true,
                    padding: 5,
                },
            }],
        },
    },
    ticks: {
        max: 100
    }
});
</script>