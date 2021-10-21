function getSexValue() {
    if (document.getElementById('height').value == ''
        && document.getElementById('weight').value == ''
        && document.getElementById('age').value == '') {
        alert('Заполните все поля характеристик!');
        return;
    }
}