<?php
// Создание многомерного массива с расписанием уроков в школе
let schedule = {
    "Понедельник": ["Математика", "Русский язык", "Физика"],
  "Вторник": ["История", "Литература"],
  "Среда": ["Химия", "Английский язык", "Биология"],
  "Четверг": ["География", "Физкультура"],
  "Пятница": ["Информатика", "Музыка"]
};

// Вывод расписания на экран с использованием циклов
for (let day in schedule) {
    console.log(day + ":");
    for (let lesson of schedule[day]) {
        console.log(" - " + lesson);
    }
    console.log();
}
?>