<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/chart.umd.js"></script>
<!-- <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script> -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js"
  integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-4.0.0.slim.min.js" integrity="sha256-8DGpv13HIm+5iDNWw1XqxgFB4mj+yOKFNb+tHBZOowc=" crossorigin="anonymous"></script>
<script src="https://jscolor.com/releases/2.5.2/jscolor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/6.0.0/echarts.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



<script>
  $(document).ready(function() {
    $(".navbarToggleButton").click(function(e) {
      e.preventDefault();
      $(".miniLogo").toggleClass("d-none");
    });
  });


  const picker = document.getElementById("picker");
  window.addEventListener("DOMContentLoaded", () => {
    const savedColor = localStorage.getItem("themeColor");

    if (savedColor) {
      const hex = savedColor.replace("#", "");
      document.documentElement.style.setProperty('--color', savedColor);
      picker.value = hex;
      if (picker.jscolor) {
        picker.jscolor.fromString(hex);
      }
    }
  });
  picker.addEventListener("input", () => {
    const selectedColor = "#" + picker.value.replace("#", "");
    document.documentElement.style.setProperty('--color', selectedColor);
    localStorage.setItem("themeColor", selectedColor);
  });

  // charts code 

  // pie-legend
  document.addEventListener("DOMContentLoaded", () => {
    var chartDom = document.getElementById('pie-legend');
    var myChart = echarts.init(chartDom);

    // Generate data for 10 entries
    const data = genData(10);

    var option = {
      title: {
        text: 'Single Name Statistics',
        subtext: 'Fictional Data',
        left: 'start'
      },
      tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b} : {c} ({d}%)'
      },
      legend: {
        type: 'scroll',
        orient: 'vertical',
        right: 10,
        top: 20,
        bottom: 20,
        data: data.legendData
      },
      series: [{
        name: 'Name',
        type: 'pie',
        radius: '55%',
        center: ['40%', '50%'],
        data: data.seriesData,
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }]
    };

    // Set the options to render the chart
    myChart.setOption(option);

    function genData(count) {
      const nameList = [
        'Smith', 'Johnson', 'Williams', 'Brown', 'Jones',
        'Garcia', 'Miller', 'Davis', 'Rodriguez', 'Martinez',
        'Hernandez', 'Lopez', 'Gonzalez', 'Wilson', 'Anderson',
        'Thomas', 'Taylor', 'Moore', 'Jackson', 'Martin'
      ];

      const legendData = [];
      const seriesData = [];

      // Shuffle the list to ensure we don't pick the same name twice
      const shuffled = nameList.sort(() => 0.5 - Math.random());

      for (var i = 0; i < count; i++) {
        // Pick exactly one name from the shuffled list
        var name = shuffled[i];

        legendData.push(name);
        seriesData.push({
          name: name,
          value: Math.round(Math.random() * 100000)
        });
      }

      return {
        legendData: legendData,
        seriesData: seriesData
      };
    }

    // Handle window resizing
    window.addEventListener('resize', function() {
      myChart.resize();
    });
  });


  // pie-nest
  document.addEventListener("DOMContentLoaded", () => {
    var chartDom = document.getElementById('pie-nest');
    var myChart = echarts.init(chartDom);

    var option = {
      tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b}: {c} ({d}%)'
      },
      legend: {
        top: '5%',
        left: 'center'
      },
      series: [{
          name: 'Access From',
          type: 'pie',
          selectedMode: 'single',
          radius: [0, '30%'],
          label: {
            position: 'inner',
            fontSize: 14
          },
          labelLine: {
            show: false
          },
          data: [{
              value: 1548,
              name: 'Search Engine'
            },
            {
              value: 775,
              name: 'Direct'
            },
            {
              value: 679,
              name: 'Marketing',
              selected: true
            }
          ]
        },
        {
          name: 'Access From',
          type: 'pie',
          radius: ['45%', '65%'],
          labelLine: {
            length: 30
          },
          label: {
            formatter: '{b}: {c} ({d}%)'
          },
          data: [{
              value: 1048,
              name: 'Baidu'
            },
            {
              value: 335,
              name: 'Direct'
            },
            {
              value: 310,
              name: 'Email'
            },
            {
              value: 251,
              name: 'Google'
            },
            {
              value: 234,
              name: 'Union Ads'
            },
            {
              value: 147,
              name: 'Bing'
            },
            {
              value: 135,
              name: 'Video Ads'
            },
            {
              value: 102,
              name: 'Others'
            }
          ]
        }
      ]
    };
    myChart.setOption(option);
    window.addEventListener('resize', function() {
      myChart.resize();
    });
  });

  // matrix-grid-layout
  document.addEventListener("DOMContentLoaded", () => {
    const chartDom = document.getElementById('matrix-grid-layout');
    const myChart = echarts.init(chartDom);

    function generateData(count, inverse = false) {
      let base = +new Date(2025, 4, 5);
      let oneDay = 24 * 3600 * 1000 * 7;
      let data = [];
      let value = Math.random() * 300;
      for (let i = 0; i < count; i++) {
        value = Math.max(0, value + (Math.random() - 0.5) * 50);
        let date = echarts.format.formatTime('yyyy-MM-dd', base += oneDay);
        inverse ? data.push([value, date]) : data.push([date, value]);
      }
      return data;
    }
    const option = {
      title: [{
          id: 't1',
          text: '',
          left: 'center',
          top: 1
        },
        {
          id: 't_header',
          text: 'Month Wise Expense',
          left: '55%',
          top: '5%',
          textStyle: {
            fontSize: 16
          }
        },
        {
          id: 't_sidebar',
          text: 'Date Wise Expense',
          left: '5%',
          top: '8%',
          textStyle: {
            fontSize: 16
          }
        },
        {
          id: 't_main',
          text: 'Year Wise Expense',
          left: '55%',
          top: '30%',
          textStyle: {
            fontSize: 16
          }
        },
        {
          id: 't_footer',
          text: 'Week Wise Expense',
          left: '55%',
          top: '78%',
          textStyle: {
            fontSize: 16
          }
        }
      ],
      tooltip: {
        trigger: 'axis'
      },

      grid: [{
          id: 'header',
          top: '12%',
          left: '30%',
          right: '5%',
          height: '15%' // Header Height
        },
        {
          id: 'sidebar',
          top: '100',
          left: '5%',
          width: '20%',
          bottom: '100'
        },
        {
          id: 'main',
          top: '35%',
          left: '30%',
          right: '5%',
          bottom: '25%'
        },
        {
          id: 'footer',
          top: '82%',
          left: '30%',
          right: '5%',
          bottom: '5%'
        }
      ],
      xAxis: [{
          gridIndex: 0,
          type: 'time'
        },
        {
          gridIndex: 1,
          type: 'value',
          axisLabel: {
            hideOverlap: true
          }
        },
        {
          gridIndex: 2,
          type: 'time'
        },
        {
          gridIndex: 3,
          type: 'time'
        }
      ],
      yAxis: [{
          gridIndex: 0,
          type: 'value',
          splitNumber: 2
        },
        {
          gridIndex: 1,
          type: 'category'
        },
        {
          gridIndex: 2,
          type: 'value'
        },
        {
          gridIndex: 3,
          type: 'value',
          splitNumber: 2
        }
      ],
      series: [{
          name: 'Header',
          type: 'line',
          xAxisIndex: 0,
          yAxisIndex: 0,
          data: generateData(50),
          symbol: 'none',
          itemStyle: {
            color: 'orangered'
          }
        },
        {
          name: 'Sidebar',
          type: 'bar',
          xAxisIndex: 1,
          yAxisIndex: 1,
          data: generateData(12, true),
          itemStyle: {
            color: '#5470c6'
          }
        },
        {
          name: 'Main',
          type: 'line',
          xAxisIndex: 2,
          yAxisIndex: 2,
          data: generateData(100),
          areaStyle: {
            opacity: 0.1
          }
        },
        {
          name: 'Footer',
          type: 'bar',
          xAxisIndex: 3,
          yAxisIndex: 3,
          data: generateData(20),
          itemStyle: {
            color: '#d658fc'
          }
        }
      ],

      media: [{
        query: {
          maxWidth: 600
        },
        option: {
          title: [{
              id: 't_header',
              left: 'center',
              top: '5%'
            },
            {
              id: 't_sidebar',
              left: 'center',
              top: '28%'
            },
            {
              id: 't_main',
              left: 'center',
              top: '51%'
            },
            {
              id: 't_footer',
              left: 'center',
              top: '74%'
            }
          ],
          grid: [{
              id: 'header',
              left: '10%',
              right: '10%',
              top: '10%',
              height: '15%'
            },
            {
              id: 'sidebar',
              left: '10%',
              right: '10%',
              top: '33%',
              height: '15%'
            },
            {
              id: 'main',
              left: '10%',
              right: '10%',
              top: '56%',
              height: '15%'
            },
            {
              id: 'footer',
              left: '10%',
              right: '10%',
              top: '79%',
              height: '15%'
            }
          ]
        }
      }]
    };

    myChart.setOption(option);
    window.addEventListener('resize', () => myChart.resize());
  })
</script>

<!-- google charts -->

<script>
  // Pie Chart
  google.charts.load('current', {
    'packages': ['corechart', 'bar']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work', 11],
      ['Eat', 2],
      ['Commute', 2],
      ['Watch TV', 2],
      ['Sleep', 7]
    ]);

    var options = {
      title: 'My Daily Activities'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }

  // Bar Chart

  google.charts.load('current', {
    'packages': ['bar']
  });
  google.charts.setOnLoadCallback(drawChart1);

  function drawChart1() {
    var data = google.visualization.arrayToDataTable([
      ['Months', 'Sales', 'Expenses', 'Profit'],
      ['may', 1000, 400, 200],
      ['june', 1170, 460, 250],
      ['jully', 660, 1120, 300],
      ['janewary', 1030, 540, 350]
    ]);
    var options = {
      chart: {
        title: 'Company Performance',
        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
      }
    };
    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>