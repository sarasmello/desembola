$(function () {
  // -----------------------------------------------------------------------
  // Traffic Overview
  // -----------------------------------------------------------------------

  var chart = {
    series: [
      {
        name: "Atividades Geradas",
        data: [1750, 2225, 2741, 2563, 2641, 2934, 2389, 2110, 3174, 1976, 2854, 3593], // Dados para cada mês
      },
      {
        name: "Atividades Aplicadas",
        data: [1433, 1743, 2358, 2310, 2215, 2642, 2051, 1945, 2963, 1896, 2741, 3285],
      },
    ],
    chart: {
      toolbar: {
        show: false,
      },
      type: "line", // Tipo de gráfico
      fontFamily: "inherit",
      foreColor: "#050259", // Cor do texto
      height: 320,
      stacked: false,
    },
    colors: ["#A1A4F3", "#3DDA73"],
    plotOptions: {},
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: false,
    },
    stroke: {
      width: 2,
      curve: "smooth", // Curva suave
      dashArray: [8, 0],
    },
    grid: {
      borderColor: "rgba(0,0,0,0.1)",
      strokeDashArray: 3,
      xaxis: {
        lines: {
          show: false,
        },
      },
    },
    xaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      categories: [
        "Jan", "Fev", "Mar", "Abr", "Mai", "Jun", 
        "Jul", "Ago", "Set", "Out", "Nov", "Dez"
      ], // Meses em português
    },
    yaxis: {
      tickAmount: 4,
    },
    markers: {
      strokeColor: ["var(--bs-gray-300)", "var(--bs-primary)"],
      strokeWidth: 2,
    },
    tooltip: {
      theme: "dark",
    },
  };

  var chart = new ApexCharts(
    document.querySelector("#traffic-overview"),
    chart
  );
  chart.render();
});
