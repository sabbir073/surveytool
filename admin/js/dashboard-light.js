$(function() {
    'use strict'
  
  
  
    var colors = {
      primary        : "#6571ff",
      secondary      : "#7987a1",
      success        : "#05a34a",
      info           : "#66d1d1",
      warning        : "#fbbc06",
      danger         : "#ff3366",
      light          : "#e9ecef",
      dark           : "#060c17",
      muted          : "#7987a1",
      gridBorder     : "rgba(77, 138, 240, .15)",
      bodyColor      : "#000",
      cardBg         : "#fff"
    }
  
    var fontFamily = "'Roboto', Helvetica, sans-serif"
  
    var revenueChartData = [
      0,
      10,
      20,
      30,
      40,
      50,
      60,
      70,
      80,
      90,
      100,

    ];
  
    var revenueChartCategories = [
      "Jan 01 2022", "Jan 02 2022", "jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022", "Jan 12 2022", "Jan 13 2022", "Jan 14 2022", "Jan 15 2022", "Jan 16 2022", "Jan 17 2022", "Jan 18 2022", "Jan 19 2022", "Jan 20 2022","Jan 21 2022", "Jan 22 2022", "Jan 23 2022", "Jan 24 2022", "Jan 25 2022", "Jan 26 2022", "Jan 27 2022", "Jan 28 2022", "Jan 29 2022", "Jan 30 2022", "Jan 31 2022",
      "Feb 01 2022", "Feb 02 2022", "Feb 03 2022", "Feb 04 2022", "Feb 05 2022", "Feb 06 2022", "Feb 07 2022", "Feb 08 2022", "Feb 09 2022", "Feb 10 2022", "Feb 11 2022", "Feb 12 2022", "Feb 13 2022", "Feb 14 2022", "Feb 15 2022", "Feb 16 2022", "Feb 17 2022", "Feb 18 2022", "Feb 19 2022", "Feb 20 2022","Feb 21 2022", "Feb 22 2022", "Feb 23 2022", "Feb 24 2022", "Feb 25 2022", "Feb 26 2022", "Feb 27 2022", "Feb 28 2022",
      "Mar 01 2022", "Mar 02 2022", "Mar 03 2022", "Mar 04 2022", "Mar 05 2022", "Mar 06 2022", "Mar 07 2022", "Mar 08 2022", "Mar 09 2022", "Mar 10 2022", "Mar 11 2022", "Mar 12 2022", "Mar 13 2022", "Mar 14 2022", "Mar 15 2022", "Mar 16 2022", "Mar 17 2022", "Mar 18 2022", "Mar 19 2022", "Mar 20 2022","Mar 21 2022", "Mar 22 2022", "Mar 23 2022", "Mar 24 2022", "Mar 25 2022", "Mar 26 2022", "Mar 27 2022", "Mar 28 2022", "Mar 29 2022", "Mar 30 2022", "Mar 31 2022",
      "Apr 01 2022", "Apr 02 2022", "Apr 03 2022", "Apr 04 2022", "Apr 05 2022", "Apr 06 2022", "Apr 07 2022", "Apr 08 2022", "Apr 09 2022", "Apr 10 2022", "Apr 11 2022", "Apr 12 2022", "Apr 13 2022", "Apr 14 2022", "Apr 15 2022", "Apr 16 2022", "Apr 17 2022", "Apr 18 2022", "Apr 19 2022", "Apr 20 2022","Apr 21 2022", "Apr 22 2022", "Apr 23 2022", "Apr 24 2022", "Apr 25 2022", "Apr 26 2022", "Apr 27 2022", "Apr 28 2022", "Apr 29 2022", "Apr 30 2022",
      "May 01 2022", "May 02 2022", "May 03 2022", "May 04 2022", "May 05 2022", "May 06 2022", "May 07 2022", "May 08 2022", "May 09 2022", "May 10 2022", "May 11 2022", "May 12 2022", "May 13 2022", "May 14 2022", "May 15 2022", "May 16 2022", "May 17 2022", "May 18 2022", "May 19 2022", "May 20 2022","May 21 2022", "May 22 2022", "May 23 2022", "May 24 2022", "May 25 2022", "May 26 2022", "May 27 2022", "May 28 2022", "May 29 2022", "May 30 2022",
    ]
    
  
  
  
  
    // Date Picker
    if($('#dashboardDate').length) {
      var date = new Date();
      var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
      $('#dashboardDate').datepicker({
        format: "dd-MM-yyyy",
        todayHighlight: true,
        autoclose: true
      });
      $('#dashboardDate').datepicker('setDate', today);
    }
    // Date Picker - END
  
  
  
  
  
    // New Customers Chart
    if($('#customersChart').length) {
      var options1 = {
        chart: {
          type: "line",
          height: 60,
          sparkline: {
            enabled: !0
          }
        },
        series: [{
          name: '',
          data: [3844, 3855, 3841, 3867, 3822, 3843, 3821, 3841, 3856, 3827, 3843]
        }],
        xaxis: {
          type: 'datetime',
          categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022",],
        },
        stroke: {
          width: 2,
          curve: "smooth"
        },
        markers: {
          size: 0
        },
        colors: [colors.primary],
      };
      new ApexCharts(document.querySelector("#customersChart"),options1).render();
    }
    // New Customers Chart - END
  
  
  
  
    // Orders Chart
    if($('#ordersChart').length) {
      var options2 = {
        chart: {
          type: "bar",
          height: 60,
          sparkline: {
            enabled: !0
          }
        },
        plotOptions: {
          bar: {
            borderRadius: 2,
            columnWidth: "60%"
          }
        },
        colors: [colors.primary],
        series: [{
          name: '',
          data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63]
        }],
        xaxis: {
          type: 'datetime',
          categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022",],
        },
      };
      new ApexCharts(document.querySelector("#ordersChart"),options2).render();
    }
    // Orders Chart - END
  
  
  
  
    // Growth Chart
    if($('#growthChart').length) {
      var options3 = {
        chart: {
          type: "line",
          height: 60,
          sparkline: {
            enabled: !0
          }
        },
        series: [{
          name: '',
          data: [41, 45, 44, 46, 52, 54, 43, 74, 82, 82, 89]
        }],
        xaxis: {
          type: 'datetime',
          categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022",],
        },
        stroke: {
          width: 2,
          curve: "smooth"
        },
        markers: {
          size: 0
        },
        colors: [colors.primary],
      };
      new ApexCharts(document.querySelector("#growthChart"),options3).render();
    }
    // Growth Chart - END
  
  
  
  
  
    // Revenue Chart
    if ($('#revenueChart').length) {
      var lineChartOptions = {
        chart: {
          type: "line",
          height: '400',
          parentHeightOffset: 0,
          foreColor: colors.bodyColor,
          background: colors.cardBg,
          toolbar: {
            show: false
          },
        },
        theme: {
          mode: 'light'
        },
        tooltip: {
          theme: 'light'
        },
        colors: [colors.primary, colors.danger, colors.warning],
        grid: {
          padding: {
            bottom: -4,
          },
          borderColor: colors.gridBorder,
          xaxis: {
            lines: {
              show: true
            }
          }
        },
        series: [
          {
            name: "Answer Graph",
            data: revenueChartData
          },
        ],
        xaxis: {
          type: "datetime",
          categories: revenueChartCategories,
          lines: {
            show: true
          },
          axisBorder: {
            color: colors.gridBorder,
          },
          axisTicks: {
            color: colors.gridBorder,
          },
          crosshairs: {
            stroke: {
              color: colors.secondary,
            },
          },
        },
        yaxis: {
          title: {
            text: '',
            style:{
              size: 9,
              color: colors.muted
            }
          },
          tickAmount: 4,
          tooltip: {
            enabled: true
          },
          crosshairs: {
            stroke: {
              color: colors.secondary,
            },
          },
        },
        markers: {
          size: 0,
        },
        stroke: {
          width: 2,
          curve: "straight",
        },
      };
      var apexLineChart = new ApexCharts(document.querySelector("#revenueChart"), lineChartOptions);
      apexLineChart.render();
    }
    // Revenue Chart - END
  
  
  
  
  
    // Revenue Chart - RTL
    if ($('#revenueChartRTL').length) {
      var lineChartOptions = {
        chart: {
          type: "line",
          height: '400',
          parentHeightOffset: 0,
          foreColor: colors.bodyColor,
          background: colors.cardBg,
          toolbar: {
            show: false
          },
        },
        theme: {
          mode: 'light'
        },
        tooltip: {
          theme: 'light'
        },
        colors: [colors.primary, colors.danger, colors.warning],
        grid: {
          padding: {
            bottom: -4,
          },
          borderColor: colors.gridBorder,
          xaxis: {
            lines: {
              show: true
            }
          }
        },
        series: [
          {
            name: "Revenue",
            data: revenueChartData
          },
        ],
        xaxis: {
          type: "datetime",
          categories: revenueChartCategories,
          lines: {
            show: true
          },
          axisBorder: {
            color: colors.gridBorder,
          },
          axisTicks: {
            color: colors.gridBorder,
          },
          crosshairs: {
            stroke: {
              color: colors.secondary,
            },
          },
        },
        yaxis: {
          opposite: true,
          title: {
            text: 'Revenue ( $1000 x )',
            offsetX: -130,
            style:{
              size: 9,
              color: colors.muted
            }
          },
          labels: {
            align: 'left',
            offsetX: -20,
          },
          tickAmount: 4,
          tooltip: {
            enabled: true
          },
          crosshairs: {
            stroke: {
              color: colors.secondary,
            },
          },
        },
        markers: {
          size: 0,
        },
        stroke: {
          width: 2,
          curve: "straight",
        },
      };
      var apexLineChart = new ApexCharts(document.querySelector("#revenueChartRTL"), lineChartOptions);
      apexLineChart.render();
    }
    // Revenue Chart - RTL - END
  
  
  
  
  
    // Monthly Sales Chart
    if($('#monthlySalesChart').length) {
      var options = {
        chart: {
          type: 'bar',
          height: '318',
          parentHeightOffset: 0,
          foreColor: colors.bodyColor,
          background: colors.cardBg,
          toolbar: {
            show: false
          },
        },
        theme: {
          mode: 'light'
        },
        tooltip: {
          theme: 'light'
        },
        colors: [colors.primary],  
        fill: {
          opacity: .9
        } , 
        grid: {
          padding: {
            bottom: -4
          },
          borderColor: colors.gridBorder,
          xaxis: {
            lines: {
              show: true
            }
          }
        },
        series: [{
          name: 'Sales',
          data: [152,109,93,113,126,161,188,143,102,113,116,124]
        }],
        xaxis: {
          type: 'datetime',
          categories: ['01/01/2022','02/01/2022','03/01/2022','04/01/2022','05/01/2022','06/01/2022','07/01/2022', '08/01/2022','09/01/2022','10/01/2022', '11/01/2022', '12/01/2022'],
          axisBorder: {
            color: colors.gridBorder,
          },
          axisTicks: {
            color: colors.gridBorder,
          },
        },
        yaxis: {
          title: {
            text: 'Number of Sales',
            style:{
              size: 9,
              color: colors.muted
            }
          },
        },
        legend: {
          show: true,
          position: "top",
          horizontalAlign: 'center',
          fontFamily: fontFamily,
          itemMargin: {
            horizontal: 8,
            vertical: 0
          },
        },
        stroke: {
          width: 0
        },
        dataLabels: {
          enabled: true,
          style: {
            fontSize: '10px',
            fontFamily: fontFamily,
          },
          offsetY: -27
        },
        plotOptions: {
          bar: {
            columnWidth: "50%",
            borderRadius: 4,
            dataLabels: {
              position: 'top',
              orientation: 'vertical',
            }
          },
        },
      }
      
      var apexBarChart = new ApexCharts(document.querySelector("#monthlySalesChart"), options);
      apexBarChart.render();
    }
    // Monthly Sales Chart - END
  
  
  
  
    // Monthly Sales Chart - RTL
    if($('#monthlySalesChartRTL').length) {
      var options = {
        chart: {
          type: 'bar',
          height: '318',
          parentHeightOffset: 0,
          foreColor: colors.bodyColor,
          background: colors.cardBg,
          toolbar: {
            show: false
          },
        },
        theme: {
          mode: 'light'
        },
        tooltip: {
          theme: 'light'
        },
        colors: [colors.primary],  
        fill: {
          opacity: .9
        } , 
        grid: {
          padding: {
            bottom: -4
          },
          borderColor: colors.gridBorder,
          xaxis: {
            lines: {
              show: true
            }
          }
        },
        series: [{
          name: 'Sales',
          data: [152,109,93,113,126,161,188,143,102,113,116,124]
        }],
        xaxis: {
          type: 'datetime',
          categories: ['01/01/2022','02/01/2022','03/01/2022','04/01/2022','05/01/2022','06/01/2022','07/01/2022', '08/01/2022','09/01/2022','10/01/2022', '11/01/2022', '12/01/2022'],
          axisBorder: {
            color: colors.gridBorder,
          },
          axisTicks: {
            color: colors.gridBorder,
          },
        },
        yaxis: {
          opposite: true,
          title: {
            text: 'Number of Sales',
            offsetX: -100,
            style:{
              size: 9,
              color: colors.muted
            }
          },
          labels: {
            align: 'left',
            offsetX: -20,
          },
        },
        legend: {
          show: true,
          position: "top",
          horizontalAlign: 'center',
          fontFamily: fontFamily,
          itemMargin: {
            horizontal: 8,
            vertical: 0
          },
        },
        stroke: {
          width: 0
        },
        dataLabels: {
          enabled: true,
          style: {
            fontSize: '10px',
            fontFamily: fontFamily,
          },
          offsetY: -27
        },
        plotOptions: {
          bar: {
            columnWidth: "50%",
            borderRadius: 4,
            dataLabels: {
              position: 'top',
              orientation: 'vertical',
            }
          },
        },
      }
      
      var apexBarChart = new ApexCharts(document.querySelector("#monthlySalesChartRTL"), options);
      apexBarChart.render();
    }
    // Monthly Sales Chart - RTL - END
  
  
  
  
  
    // Cloud Storage Chart
    if ($('#storageChart').length) {
      var options = {
        chart: {
          height: 260,
          type: "radialBar"
        },
        series: [67],
        colors: [colors.primary],
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 15,
              size: "70%"
            },
            track: {
              show: true,
              background: colors.light,
              strokeWidth: '100%',
              opacity: 1,
              margin: 5, 
            },
            dataLabels: {
              showOn: "always",
              name: {
                offsetY: -11,
                show: true,
                color: colors.muted,
                fontSize: "13px"
              },
              value: {
                color: colors.bodyColor,
                fontSize: "30px",
                show: true
              }
            }
          }
        },
        fill: {
          opacity: 1
        },
        stroke: {
          lineCap: "round",
        },
        labels: ["Storage Used"]
      };
      
      var chart = new ApexCharts(document.querySelector("#storageChart"), options);
      chart.render();    
    }
    // Cloud Storage Chart - END
  
  
  });