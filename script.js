const api = '7f9751cf98a049dd805170718232803';
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#logo').toggleClass('push');
        $('.earth-container').toggleClass('move');
    });

    $('#ow-link').on('click', function(){
      $("#history-content").hide();
      $("#overview-content").show();

    });
    $('#history-link').on('click', function(){
      $("#overview-content").hide();
      $("#history-content").show();
  
    });
    let lat;
    let long;
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition((position) => {
            lat = position.coords.latitude;
            long = position.coords.longitude;
          const base = 'http://api.weatherapi.com/v1/forecast.json?key=7f9751cf98a049dd805170718232803&q=' + lat + ',' + long + 
         '&days=5&aqi=no&alerts=no';  
          let currentWeek;

         fetch(base)
           .then((response) => {
            return response.json();
          })
           .then(function(data) {
            currentWeek = data;
             return fetch('weather_conditions.json', {
             method: 'GET',
            });
          }).then(response => response.json())
            .then(response => 
             displayWeather(response, currentWeek)
            )

            function displayWeather(conditions, data){
              let current = data.current;             
              let degrees = current.temp_f;
              let currentHour = new Date().getHours();
              let curCode = current.condition.code;
              let conditionNow;
              let conditionNowIcon;
              let conditionImg = new Image();
              
              
              //if it's daytime, then show nighttime icon
              if(currentHour > 6 && currentHour < 20){
                for(let i=0; i<conditions.length;i++){
                  if(curCode == conditions[i].code){
                    conditionNowIcon = conditions[i].icon;
                    conditionNow = conditions[i].day;
                    conditionImg.src = 'images/weather_icons/day/' + conditionNowIcon + '.png';  
                  }
                }
              } 
              else{
                for(let i=0; i<conditions.length;i++){
                  if(curCode == conditions[i].code){
                    conditionNowIcon = conditions[i].icon;
                    conditionNow = conditions[i].night;                 
                    conditionImg.src = 'images/weather_icons/night/' + conditionNowIcon + '.png';
                  }
                }
              }
              
              $('#cur-condition-img').append(conditionImg);
              $('#cur-condition').append(conditionNow);
              $('#cur-degrees').append(degrees + '°');

              displayForecast(conditions, data)
            };

            function displayForecast(conditions,data){

              let currentHour = new Date().getHours();
              let hourlyTempArr = [];
              let nextDaySwitch = data.forecast.forecastday[0].hour.concat(data.forecast.forecastday[1].hour);
              let conditionImg = new Image();
              let curCode;
              for(let i = currentHour + 1; i <= currentHour + 4;i++){
                  let nextHourlyObject = {};
                  let nextHourTemp = nextDaySwitch[i].temp_f;
                  let nextHourly = i;
                  let timeOfDay = '';
                  let nextCondition = nextDaySwitch[i].condition.text;
                  console.log(nextCondition)
                  let nextConditionIcon = nextDaySwitch[i].condition.code;
                  
                  // iteration to match 'code' with icon to be outputted
                  for(let i=0; i< conditions.length;i++){
                    if(nextConditionIcon == conditions[i].code){
                      if(nextHourly >= 20 || nextHourly <= 7){
                        timeOfDay = 'night';
                      } else{
                        timeOfDay = 'day';
                      }
                      nextConditionIcon = conditions[i].icon;
                    }
                    
                  }
                
                  nextHourly = (nextHourly % 12 || 12) + ':00 ' + (nextHourly < 12 ? 'AM': 'PM');

                  nextHourlyObject.time = nextHourly;
                  nextHourlyObject.temp = nextHourTemp;
                  nextHourlyObject.condition = nextCondition;
                  
                  nextHourlyObject.icon = conditionImg ="<img src='images/weather_icons/" + timeOfDay + "/" + nextConditionIcon + ".png'>";
                  hourlyTempArr.push(nextHourlyObject);
                  
              }
              console.log(hourlyTempArr)

              //Try to D.R.Y, put them in a function with each spot as an argument
              $('#hour-one').append(hourlyTempArr[0].time);
              $('#temp-one').append(hourlyTempArr[0].temp);
              $('#condition-one').append(hourlyTempArr[0].condition);
              $('#icon-one').append(hourlyTempArr[0].icon);

              $('#hour-two').append(hourlyTempArr[1].time);
              $('#temp-two').append(hourlyTempArr[1].temp);
              $('#condition-two').append(hourlyTempArr[1].condition);
              $('#icon-two').append(hourlyTempArr[1].icon);

              $('#hour-three').append(hourlyTempArr[2].time);
              $('#temp-three').append(hourlyTempArr[2].temp);
              $('#condition-three').append(hourlyTempArr[2].condition);
              $('#icon-three').append(hourlyTempArr[2].icon);

              $('#hour-four').append(hourlyTempArr[3].time);
              $('#temp-four').append(hourlyTempArr[3].temp);
              $('#condition-four').append(hourlyTempArr[3].condition);
              $('#icon-four').append(hourlyTempArr[3].icon);
            };

       });
    };

    $('#land-btn').on('click', function(){
      $('#land-menu').slideToggle();
    })
    $('#sea-btn').on('click', function(){
      $('#sea-menu').slideToggle();
    })
    $('#air-btn').on('click', function(){
      $('#air-menu').slideToggle();
    })
    $('#beyond-btn').on('click', function(){
      $('#beyond-menu').slideToggle();
    })
     
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
});