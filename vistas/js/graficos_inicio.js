  $(function () {

      var barCanvas = $('#barChart').get(0).getContext('2d')

      // ------------------------- INICIO GRAFICO DE BARRAS VENTA Y NO VENTAS------------------------------------

      opcion = 5;

      var v_ene;
      var v_feb;
      var v_mar;
      var v_abr;
      var v_may;
      var v_jun;
      var v_jul;
      var v_ago;
      var v_sep;
      var v_oct;
      var v_nov;
      var v_dic;

      $.ajax({
          url: "modelos/include/procesa_datos_inicio.php",
          type: "POST",
          datatype: "json",
          async: false,
          data: {
              opcion: opcion
          },

          success: function (data) {
            console.log(data)
              var datos = JSON.parse(data);
              v_ene = datos[0].total_mes;
              v_feb = datos[1].total_mes;
              v_mar = datos[2].total_mes;
              v_abr = datos[3].total_mes;
              v_may = datos[4].total_mes;
              v_jun = datos[5].total_mes;
              v_jul = datos[6].total_mes;
              v_ago = datos[7].total_mes;
              v_sep = datos[8].total_mes;
              v_oct = datos[9].total_mes;
              v_nov = datos[10].total_mes;
              v_dic = datos[11].total_mes;
          }
      });

      opcion = 6;

      var nv_ene;
      var nv_feb;
      var nv_mar;
      var nv_abr;
      var nv_may;
      var nv_jun;
      var nv_jul;
      var nv_ago;
      var nv_sep;
      var nv_oct;
      var nv_nov;
      var nv_dic;

      $.ajax({
          url: "modelos/include/procesa_datos_inicio.php",
          type: "POST",
          datatype: "json",
          async: false,
          data: {
              opcion: opcion
          },

          success: function (data) {
              var datos = JSON.parse(data);
              nv_ene = datos[0].total_mes;
              nv_feb = datos[1].total_mes;
              nv_mar = datos[2].total_mes;
              nv_abr = datos[3].total_mes;
              nv_may = datos[4].total_mes;
              nv_jun = datos[5].total_mes;
              nv_jul = datos[6].total_mes;
              nv_ago = datos[7].total_mes;
              nv_sep = datos[8].total_mes;
              nv_oct = datos[9].total_mes;
              nv_nov = datos[10].total_mes;
              nv_dic = datos[11].total_mes;

          }
      });

      var barData = {
          labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
          datasets: [{
                  label: 'No Cobranza',
                  backgroundColor: '#198754',
                  borderColor: '#C70039',
                  pointRadius: false,
                  pointColor: '#3b8bba',
                  pointStrokeColor: '#C70039',
                  pointHighlightFill: '#fff',
                  pointHighlightStroke: 'rgba(60,141,188,1)',
                  data: [nv_ene, nv_feb, nv_mar, nv_abr, nv_may, nv_jun, nv_jul, nv_ago, nv_sep, nv_oct, nv_nov, nv_dic]
                  

              },
              {
                  label: 'Cobranza',
                  backgroundColor: '#DC3545',
                  borderColor: '#94CA2E',
                  pointRadius: false,
                  pointColor: 'rgba(210, 214, 222, 1)',
                  pointStrokeColor: '#c1c7d1',
                  pointHighlightFill: '#fff',
                  pointHighlightStroke: '#94CA2E',
                  data: [v_ene, v_feb, v_mar, v_abr, v_may, v_jun, v_jul, v_ago, v_sep, v_oct, v_nov, v_dic]
                  
                 
              },

          ]
      }

      var barData = {
          labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
          datasets: [{
                  label: 'No Cobranza',
                  backgroundColor: '#198754',
                  borderColor: '#C70039',
                  pointRadius: false,
                  pointColor: '#3b8bba',
                  pointStrokeColor: '#C70039',
                  pointHighlightFill: '#fff',
                  pointHighlightStroke: 'rgba(60,141,188,1)',
                  data: [nv_ene, nv_feb, nv_mar, nv_abr, nv_may, nv_jun, nv_jul, nv_ago, nv_sep, nv_oct, nv_nov, nv_dic]
                  
              },
              {
                  label: 'Cobranza',
                  backgroundColor: '#DC3545',
                  borderColor: '#94CA2E',
                  pointRadius: false,
                  pointColor: 'rgba(210, 214, 222, 1)',
                  pointStrokeColor: '#c1c7d1',
                  pointHighlightFill: '#fff',
                  pointHighlightStroke: '#94CA2E',
                  data: [v_ene, v_feb, v_mar, v_abr, v_may, v_jun, v_jul, v_ago, v_sep, v_oct, v_nov, v_dic]
                  
              },

          ]
      }

      // barra ventas
      var temp0 = barData.datasets[0]
      // barra no ventas  
      var temp1 = barData.datasets[1]

      barData.datasets[0] = temp1
      barData.datasets[1] = temp0

      var barOptions = {
          responsive: true,
          maintainAspectRatio: false,
          datasetFill: false
      }

      new Chart(barCanvas, {
          type: 'bar',
          data: barData,
          options: barOptions
      })


      // ------------------------INICIO GRAFICO DE TORTA--------------------------------------------------------

      opcion = 7;

      $.ajax({
          url: "modelos/include/procesa_datos_inicio.php",
          type: "POST",
          datatype: "json",
          data: {
              opcion: opcion
          },

          success: function (result) {

              var data = JSON.parse(result);

              var item_cobranza = [];
              var total_item_cobranza = [];


              for (var i = 0; i < data.length; i++) {

                  item_cobranza.push(data[i].item_cobranza);
                  total_item_cobranza.push(data[i].total_item_cobranza);

              }


              var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
              var donutData = {
                  labels: item_cobranza,
                  datasets: [{
                      data: total_item_cobranza,
                      backgroundColor: ['#2A31FF', '#00ff11'],
                  }]
              }
              var donutOptions = {
                  maintainAspectRatio: false,
                  responsive: true,
                 
                    legend: {
                        display: true // mostrar y ocultar leyenda
                        
                        }
                      
              }

              new Chart(donutChartCanvas, {
                  type: 'doughnut',
                  data: donutData,
                  options: donutOptions
              })

          }

      });

      
  })


  $(function () {
      $("#example1").DataTable({
          "language": {
              "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
          },
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "bPaginate": false,
          "bInfo": false,
          "bFilter": false
      })

  });


  //---------INICIO GRAFICO CONTACTABILIDAD--------------

$(function () {
    'use strict'

    
    opcion = 8;

    var c_ene;
    var c_feb;
    var c_mar;
    var c_abr;
    var c_may;
    var c_jun;
    var c_jul;
    var c_ago;
    var c_sep;
    var c_oct;
    var c_nov;
    var c_dic;

    $.ajax({
        url: "modelos/include/procesa_datos_inicio.php",
        type: "POST",
        datatype: "json",
        async: false,
        data: {
            opcion: opcion
        },

        success: function (data) {
            var datos = JSON.parse(data);
            c_ene = datos[0].total_mes;
            c_feb = datos[1].total_mes;
            c_mar = datos[2].total_mes;
            c_abr = datos[3].total_mes;
            c_may = datos[4].total_mes;
            c_jun = datos[5].total_mes;
            c_jul = datos[6].total_mes;
            c_ago = datos[7].total_mes;
            c_sep = datos[8].total_mes;
            c_oct = datos[9].total_mes;
            c_nov = datos[10].total_mes;
            c_dic = datos[11].total_mes;
        }
    });

var total = Math.max(c_ene, c_feb, c_mar, c_abr, c_may, c_jun, c_jul, c_ago, c_sep, c_oct, c_nov,c_dic);

console.log(total)
  
    var ticksStyle = {
      fontColor: '#495057',
      fontStyle: 'bold'
    }
  
    var mode = 'index'
    var intersect = true
  
  
    var $visitorsChart = $('#visitors-chart')
    // eslint-disable-next-line no-unused-vars
    var visitorsChart = new Chart($visitorsChart, {
      data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        datasets: [{
          type: 'line',
          data: [c_ene, c_feb, c_mar, c_abr, c_may, c_jun, c_jul, c_ago, c_sep, c_oct, c_nov, c_dic],
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          pointBorderColor: '#007bff',
          pointBackgroundColor: '#007bff',
          fill: false

        },
        {
          type: 'line',
          data: [c_dic, c_ene, c_feb, c_mar, c_abr, c_may, c_jun, c_jul, c_ago, c_sep, c_oct, c_nov],
          backgroundColor: 'tansparent',
          borderColor: '#ced4da',
          pointBorderColor: '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill: false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,
              suggestedMax: (total + parseInt(10))
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })

  })
  


      //-----------------------