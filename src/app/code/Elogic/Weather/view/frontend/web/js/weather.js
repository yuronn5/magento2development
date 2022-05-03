require(['jquery', 'jquery/ui'], function($) {

const weatherBlock = document.querySelector('#weather');

async function loadWeather(e) {

    const server = 'https://api.openweathermap.org/data/2.5/weather?units=metric&q=Ternopil&appid=a194075a6a3fc52b38673223dbffb7a6';
    const response = await fetch(server, {
        method: 'GET',
    });
    const responseResult = await response.json();

    if(response.ok) {
        getWeather(responseResult);
    } else {
        weatherBlock.innerHTML = responseResult.message;
    }
}

function getWeather(data) {
    const location = data.name;
    const temp = Math.round(data.main.temp);
    const feelsLike = Math.round(data.main.feels_like);
    const weatherStatus = data.weather[0].main;
    const weatherIcon = data.weather[0].icon;

    const template = `
<div class="weather_header">
        <div class="weather_main">
            <div class="weather_city">${location}</div>
            <div class="weather_status">${weatherStatus}</div>
        </div>
        <div class="weather_icon">
            <img src="http://openweathermap.org/img/w/${weatherIcon}.png" alt="${weatherStatus}">
        </div>
    </div>
    <div class="weather_temp">${temp}</div>
    <div class="weather_feels-like">Feels like: ${feelsLike}</div>`

    weatherBlock.innerHTML = template;
}

if (weatherBlock) {
    loadWeather();
}

})
