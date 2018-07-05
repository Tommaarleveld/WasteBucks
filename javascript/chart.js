var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["WasteBucks", "Charity", "Taxes"],
        datasets: [{
            label: 'In procenten',
            data: [80, 60, 50],
            backgroundColor: [
				'rgb(122, 212, 156)',
                'rgb(255, 203, 147)',
                'rgb(232, 133, 175)'
            ],
        }]
    },
    options: {
    legend: {
        display: false
    }
}
});