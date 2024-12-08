// Data Jumlah Total Kasus Kekerasan ( Overall Inforgrafis Bar)
Highcharts.chart('data-jumlahtotal', {
  chart: {
    type: 'column',
    options3d: {
      enabled: true,
      alpha: 0,
      beta: 5,
      depth: 100
    }
  },
  title: {
    text: 'Jumlah Kasus Kekerasan setiap bulan'
  },
  plotOptions: {
    column: {
      depth: 45
    }
  },
  xAxis: {
    type: 'category',
    labels: {
      skew3d: true,
      style: {
        fontSize: '14px'
      }
    }
  },
  yAxis: {
    title: {
      text: 'Jumlah Kasus',
      margin: 5
    }
  },
  tooltip: {
    valueSuffix: ' Kasus'
  },
  series: [{
    name: 'Total Kasus Kekerasan',
    data: [
      ['Januari', 32],
      ['Februari', 24],
      ['Maret', 29],
      ['April', 24],
      ['Mei', 27],
      ['Juni', 26],
      ['Juli', 17],
      ['Agustus', 29],
      ['September', 22],
      ['Oktober', 27],
      ['November', 26],
      ['Desember', 39]
    ],
    colorByPoint: true
  }]
});





// asdsd
Highcharts.chart('data-jumlahtotal-pie', {
  chart: {
    type: 'pie',
    options3d: {
      enabled: true,
      alpha: 45,
      beta: 0
    }
  },
  title: {
    text: 'Jumlah Kasus Berdasarkan Jenis Kasusnya'
  },
  plotOptions: {
    pie: {
      depth: 35
    }
  },
  series: [{
    name: 'Jumlah Kasus di Tahun 2024',
    data: [
      ['Kekerasan Fisik', 60],
      ['Kekerasan Psikis', 39],
      ['Kekerasan Seksual', 146],
      ['Perundungan', 34],
      ['Kekerasan lainnya', 43],
    ]
  }]
});


Highcharts.chart('data-alldetail', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Detail Jumlah Kasus Kekerasan yang terjadi setiap bulan'
  },
  subtitle: {
    text: 'berdasarkan setiap jenis kasus kekerasan'
  },
  accessibility: {
    point: {
      valueDescriptionFormat: '{index}. {point.category}, {point.y:,' +
        '.1f} billions, {point.percentage:.1f}%.'
    }
  },
  xAxis: {
    categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
  },
  yAxis: {
    labels: {
      allowDecimal: false,
      min: 0,
    },
    title: {
      enabled: false
    }
  },
  tooltip: {
    shared: true,
    headerFormat: '<span style="font-size: 18px"><b>{point.key}</b></span><br><br>',
    pointFormat: '<span style="color:{series.color}"><b>{series.name}</b></span>' +
      ': <b>{point.y} Kasus</b><br/>',
  },
  // plotOptions: {
  //   column: {
  //     stacking: 'normal',
  //     dataLabels: {
  //       enabled: true
  //     }
  //   }
  // },
  series: [{
    name: 'Kekerasan Fisik',
    data: [5, 6, 4, 5, 6, 5, 4, 6, 5, 5, 4, 5]
  }, {
    name: 'Kekerasan Psikis',
    data: [4, 3, 2, 5, 3, 4, 2, 3, 2, 4, 3, 4]
  }, {
    name: 'Kekerasan Seksual',
    data: [17, 12, 15, 9, 11, 10, 8, 12, 11, 13, 12, 16]
  }, {
    name: 'Perundungan',
    data: [2, 1, 3, 2, 4, 5, 2, 4, 1, 3, 2, 5]
  }, {
    name: 'Kekerasan Lainnya',
    data: [4, 2, 5, 3, 3, 2, 1, 4, 3, 2, 5, 9]
  }]
});
