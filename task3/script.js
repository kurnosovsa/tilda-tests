const defaultNumber = '8-800-DIGITS';
let cities = {
    'Москва': '8-495-DIGITS',
    'Санкт-Петербург': '8-812-DIGITS',
    'Воронеж': '8-473-DIGITS',
    'Калинград': '8-4012-DIGITS'
};

window.onload = function () {
    try {
        let city = ymaps.geolocation.city;
        if (city in cities) {
            $(".telephone").text(cities[city]);
        } else {
            $(".telephone").text(defaultNumber);
        }
    } catch (e) {
        console.error('Ошибка получения города клиента');
        $(".telephone").text(defaultNumber);
    }
}