<canvas id="myRadarChart"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js" ;></script>

<script>
  var ctx = document.getElementById("myRadarChart");
  var myChart = new Chart(ctx, {
    type: 'radar',
    data: {

      labels: ["Web Design", "DTP Design", "Development", "Direction", "Other"],
      datasets: [{
        //label: '経験年数',
        data: [14, 15, 14, 7, 14],
        borderColor: "#1793b6",
        borderWidth: 3,
        fill: "rgba(23,147,182,0.5)",
        lineTension: 0
      }, ]
    },
    options: {
      scales: {
        r: {
          min: 0,
          max: 15,
          backgroundColor: '#fff',
          grid: {
            color: '#ccc',
          },
          angleLines: {
            color: '#ccc',
          },
          pointLabels: {
            color: '#333',
          },
          ticks: {
            stepSize: 3,
            color: '#ccc'
          }
        },
      },
      plugins: {
        legend: {
          display: false
        },
        title: {
          display: true,
          text: 'Years of experience',
          font: {
            size: 16 // fontsize for title
          }
        }
      }
    },
  });
</script>