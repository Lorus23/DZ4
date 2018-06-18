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
    <p>Введите время аренды авто:</p>
    <input type="text" name="timeHour">::<input type="text" name="timeMin">
    <p>Введите возраст водителя:</p>
    <input type="text" name="age">
    <p>Дополнительные услуги:</p>
    <p><input type="checkbox" name="gps">GPS в салон - 15 рублей в час, минимум 1 час</p>
    <p><input type="checkbox" name="driver">Дополнительный водитель - 100 рублей единоразово</p>
    <input type="submit">
</form>
