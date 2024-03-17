const logout = document.getElementById('btn_logout')
    
    logout.addEventListener('click',()=> {
        window.location.href = "../login/logout_view.php" 
    })

const progress = document.querySelectorAll('.tracking .tracking_card .progress');
progress.forEach(item => {
    item.style.setProperty('--value', item.dataset.value)
})


//  function to toggle dark and light mode
function toggleColorScheme() 
{
    const body = document.body;
    body.classList.toggle('light-mode');
    body.classList.toggle('dark-mode');

    // Toggle logo image source
    const logo = document.getElementById('logo');
    if (!body.classList.contains('dark-mode')) 
    {
            console.log('light')
            logo.src = '../assets/blogo.png'; // Change to dark mode logo
            document.getElementById('toggle').src = '../assets/moon.png'; // Change toggle image to moon
    } 
    else 
    {
            console.log('dark')
            logo.src = '../assets/logo.png'; // Change back to light mode logo
            document.getElementById('toggle').src = '../assets/sun.png'; // Change toggle image to sun
    }
}

let data = document.querySelector('#data_access_section');
let analytics = document.querySelector('#analytics_section');
let goals = document.querySelector('#goals_section');

function openRecording()
{
  window.location.href = "../view/recording_view.php" 
}

function openDataAccess() 
{
    // move to the data access section
    window.location.href = "#data";

    data.style.display = 'flex';
    // Hide the analytics and goals sections
    analytics.style.display = 'none';
    goals.style.display = 'none';
}

function openAnalytics() 
{
  // move to the analytics section
  window.location.href = "#analytics";

  analytics.style.display = 'grid';
  // Hide the data acesss and goals sections
  data.style.display = 'none';
  goals.style.display = 'none';
}

function openGoals() 
{
  // move to the analytics section
  window.location.href = "#goals";

 goals.style.display = 'flex';
  // Hide the data acesss and analytics sections
  data.style.display = 'none';
  analytics.style.display = 'none';
}

// ------- Charts for Data Access --------

// Workout data chart
var workoutoptions = {
    series: [{
    name: 'Workout recorded',
    data: [2, 1, 3, 4, 0, 0, 0]
  }],
    chart: {
    height: 350,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function (val) {
      return val;
    },
    offsetY: -20,
    style: {
      fontSize: '12px',
      colors: ["var(--primary-color)"]
    }
  },
  
  xaxis: {
    categories: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
    position: 'top',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
        gradient: {
          colorFrom: '#BED1E6',
          colorTo: '#BED1E6',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    labels:{
        style: {
            color: 'var(--primary-color)'
        }
    },
    tooltip: {
      enabled: true,
    },
        
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val;
      }
    }
  
  },
  title: {
    text: 'Workouts in the last week',
    floating: true,
    offsetY: 330,
    align: 'center',
    style: {
      color: 'var(--primary-color)'
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#workout_bar_chart"), workoutoptions);
  chart.render();

// Nutrition Data Chart
var nutritionoptions = {
    series: [{
    name: 'Meals recorded',
    data: [2, 1, 3, 4, 2, 4, 1]
  }],
    chart: {
    height: 350,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function (val) {
      return val;
    },
    offsetY: -20,
    style: {
      fontSize: '12px',
      colors: ["var(--primary-color)"]
    }
  },
  
  xaxis: {
    categories: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
    position: 'top',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
        gradient: {
          colorFrom: '#BED1E6',
          colorTo: '#BED1E6',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    labels:{
        style: {
            color: 'var(--primary-color)'
        }
    },
    tooltip: {
      enabled: true,
    },
        
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val;
      }
    }
  
  },
  title: {
    text: 'Meals eaten in the last week',
    floating: true,
    offsetY: 330,
    align: 'center',
    style: {
      color: 'var(--primary-color)'
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#nutrition_bar_chart"), nutritionoptions);
  chart.render();

// Sleep Data Chart
  var sleepoptions = {
    series: [{
    name: 'Sleep recorded',
    data: [2.5, 1.1, 3, 5.2, 2.5, 6, 1.5]
  }],
    chart: {
    height: 350,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function (val) {
      return val;
    },
    offsetY: -20,
    style: {
      fontSize: '12px',
      colors: ["var(--primary-color)"]
    }
  },
  
  xaxis: {
    categories: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
    position: 'top',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
        gradient: {
          colorFrom: '#BED1E6',
          colorTo: '#BED1E6',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    labels:{
        style: {
            color: 'var(--primary-color)'
        }
    },
    tooltip: {
      enabled: true,
    },
        
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val;
      }
    }
  
  },
  title: {
    text: 'Sleep hours in the last week',
    floating: true,
    offsetY: 330,
    align: 'center',
    style: {
      color: 'var(--primary-color)'
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#sleep_bar_chart"), sleepoptions);
  chart.render();

// Weight data chart
  var weightoptions = {
    series: [{
    name: 'Weight recorded',
    data: [50.5, 50.5, 50, 50, 50, 50, 50]
  }],
    chart: {
    height: 350,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function (val) {
      return val;
    },
    offsetY: -20,
    style: {
      fontSize: '12px',
      colors: ["var(--primary-color)"]
    }
  },
  
  xaxis: {
    categories: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
    position: 'top',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
        gradient: {
          colorFrom: '#BED1E6',
          colorTo: '#BED1E6',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    labels:{
        style: {
            color: 'var(--primary-color)'
        }
    },
    tooltip: {
      enabled: true,
    },
        
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val;
      }
    }
  
  },
  title: {
    text: 'Weight in the last week',
    floating: true,
    offsetY: 330,
    align: 'center',
    style: {
      color: 'var(--primary-color)'
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#weight_bar_chart"), weightoptions);
  chart.render();


// ------- Data Analytics --------
var sleepqual = {
    series: [{
    name: 'Actual Data',
    type: 'area',
    data: [7, 5.5, 3.1, 4.7, 6, 5, 4.6, 7.5, 6, 4.7, 5.3]
  }, {
    name: 'Goals',
    type: 'line',
    data: [8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8]
  }],
    chart: {
    height: 350,
    type: 'line',
  },
  stroke: {
    curve: 'smooth'
  },
  fill: {
    type:'solid',
    opacity: [0.35, 1],
  },
  labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Series A',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Series B',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if(typeof y !== "undefined") {
          return  y.toFixed(0) + " points";
        }
        return y;
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#sleep_trend"), sleepqual);
  chart.render();

  var caloriesintake = {
    series: [{
    name: 'Actual Data',
    type: 'area',
    data: [2500, 3000, 3100, 1007, 1310, 2000, 2000, 2000, 3000, 2000, 2000]
  }, {
    name: 'Goals',
    type: 'line',
    data: [2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000]
  }],
    chart: {
    height: 350,
    type: 'line',
  },
  stroke: {
    curve: 'smooth'
  },
  fill: {
    type:'solid',
    opacity: [0.35, 1],
  },
  labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Series A',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Series B',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if(typeof y !== "undefined") {
          return  y.toFixed(0) + " points";
        }
        return y;
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#caloric_trend"), caloriesintake);
  chart.render();


  var weightchanges = {
    series: [{
    name: 'Actual Data',
    type: 'area',
    data: [53, 52, 51, 51, 51, 51, 51, 50, 50, 50, 50]

  }, {
    name: 'Goals',
    type: 'line',
    data: [50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50]
  }],
    chart: {
    height: 350,
    type: 'line',
  },
  stroke: {
    curve: 'smooth'
  },
  fill: {
    type:'solid',
    opacity: [0.35, 1],
  },
  labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Series A',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Series B',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if(typeof y !== "undefined") {
          return  y.toFixed(0) + " points";
        }
        return y;
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#weight_trend"), weightchanges);
  chart.render();


  var workoutcount = {
    series: [{
    name: 'Actual Data',
    type: 'area',
    data: [3, 2, 1, 1, 1, 1, 1, 0, 0, 5, 2]
  }, {
    name: 'Goals',
    type: 'line',
    data: [4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4]
  }],
    chart: {
    height: 350,
    type: 'line',
  },
  stroke: {
    curve: 'smooth'
  },
  fill: {
    type:'solid',
    opacity: [0.35, 1],
  },
  labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Series A',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Series B',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if(typeof y !== "undefined") {
          return  y.toFixed(0) + " points";
        }
        return y;
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#workout_trend"), workoutcount);
  chart.render();
