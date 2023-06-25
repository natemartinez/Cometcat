const api = '7f9751cf98a049dd805170718232803';
$(document).ready(function() {
// weather geolocation
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
              let location = data.location.name + ', ' + data.location.region;
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

              $('#cur_location').append(location)
              $('#cur_condition_icon').append(conditionImg);
              $('#cur_condition').append(conditionNow);
              $('#cur_degrees').append(degrees + '°');

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
              $('#hour_one').append(hourlyTempArr[0].time);
              $('#temp_one').append(hourlyTempArr[0].temp);
              $('#condition_one').append(hourlyTempArr[0].condition);
              $('#icon_one').append(hourlyTempArr[0].icon);

              $('#hour_two').append(hourlyTempArr[1].time);
              $('#temp_two').append(hourlyTempArr[1].temp);
              $('#condition_two').append(hourlyTempArr[1].condition);
              $('#icon_two').append(hourlyTempArr[1].icon);

              $('#hour_three').append(hourlyTempArr[2].time);
              $('#temp_three').append(hourlyTempArr[2].temp);
              $('#condition_three').append(hourlyTempArr[2].condition);
              $('#icon_three').append(hourlyTempArr[2].icon);

              $('#hour_four').append(hourlyTempArr[3].time);
              $('#temp_four').append(hourlyTempArr[3].temp);
              $('#condition_four').append(hourlyTempArr[3].condition);
              $('#icon_four').append(hourlyTempArr[3].icon);
            };

       });
    };
   
  
  $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#sidebarCollapse').toggleClass('active');
        $('#logo').toggleClass('push');
        $('.earth-container').toggleClass('move');
        $('.intro_text').toggleClass('sidebar_move');
        $('#comet').toggleClass('sidebar_move_img');
        $('#catOnShip').toggleClass('sidebar_move_img');
        $('#planetCat').toggleClass('sidebar_move_img');
        $('#rec_text').toggleClass('sidebar_move_img');
        $('#telescope').css('width', '40em');

    });

  $('.planet_menu_btn').on('click', function(){
    let background = $(this).siblings('img'); 
    let title = $(this).prevAll('.planet_main_title');
    let planet_main = $(this).prevAll('.planet_main').children();
    
    $(this).children().toggleClass('disappear appear');
    planet_main.toggleClass('disappear appear');
    background.toggleClass('menu_appear');
    title.toggleClass('disappear appear');

    $(this).toggleClass('btn_fade btn_move');
  });

  $('#weather_btn').on('click', function(){
      $(this).toggleClass('btn_turn');
      let weather_content = $(this).siblings();
      weather_content.toggleClass('disappear appear');
  });

  var signupModel = document.getElementById('signup_bkgrd');
  var profileModel = document.getElementById('profile');

   window.onclick = function(event) {
    if (event.target == signupModel || event.target == profileModel) {
        signupModel.style.display = "none";
        profileModel.style.display = "none";
    }
}

//Space Neighbors page functionality
  var slides = $('.slide');
  var nextButton = $('.next_button');
  var currentSlide = 0; 
  nextButton.click(function() {
    let parent = $(this).parent();
    let div = $(this).parents('.planet_sec');
    let divTitle = div.children().filter('.planet_main_title').children();

    slides = parent.children().filter('.slide');
    currentSlide++;

    if (currentSlide >= slides.length) {
      currentSlide = 0;
    }
    showSlide(currentSlide, slides);
    if(currentSlide > 0){
      divTitle.text('Fun Facts')
    } else{
      divTitle.text('Stats') 
    };
  });
  function showSlide(index,location) {
    location.removeClass('active');
    location.eq(index).addClass('active');
  }

  //client-side profile verification
const form = document.getElementById('form');  
const emailInput = document.getElementById('email_input');
const emailErr = document.getElementById('email_err');
const pswdInput = document.getElementById('pswd_input');
const pswdErr = document.getElementById('pswd_err');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  const email = emailInput.value;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  const pswd = pswdInput.value;
  const pswdPattern = /^(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

  const pswdErrMsg = `
        <strong>Password must contain:<strong>
        <ul>
          <li>At least 8 characters</li>
          <li>Uppercase</li>
          <li>Lowercase</li>
        </ul>
      `

  if (!emailPattern.test(email)) {
    // Display an error message or apply a visual indicator
    emailErr.innerText = 'Invalid email';
    return;
  }
  if (!pswdPattern.test(pswd)) {
    // Display an error message or apply a visual indicator
    pswdErr.innerHTML = pswdErrMsg;
    return;
  }

  // If the email is valid, you can proceed with form submission
  form.submit();
});
  
});