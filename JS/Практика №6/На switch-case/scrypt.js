let num = prompt('Введите значение от 1 до 4');
    switch (num) {
        case 1:
            result = "Зима";
            break;
        case 2:
            result = "Весна";
            break;
        case 3:
            result = "Лето";
            break;
        case 4:
            result = "Осень";
            break;
        default: 
            result = "Неверное значение";
            break;
    }
    alert(`Значение num - ${result}.`);