<form method="post" action="functions.php">
    <p>Выберите тариф:
        <select name="tarif">
            <option value="1">Тариф базовый</option>
            <option value="2">Тариф почасовой</option>
            <option value="3">Тариф суточный</option>
            <option value="4">Тариф студенческий</option>
        </select></p>
    <p>Введите расстояние которые проехало авто:</p>
    <input type="text" name="distance">
    <p>Укажите количество дней аренды авто</p>
    <p><input type="text" name="daily"></p>
    <p>Укажите время аренды авто в часах и минутах:</p>
    <p><input type="time" name="cron" min="00:01" max="24:00"></p>

    <p>Введите возраст водителя:</p>
    <input type="text" name="age">
    <p>Дополнительные услуги:</p>
    <p><input type="checkbox" name="gps">GPS в салон - 15 рублей в час, минимум 1 час</p>
    <p><input type="checkbox" name="driver">Дополнительный водитель - 100 рублей единоразово</p>
    <input type="submit">
</form>
