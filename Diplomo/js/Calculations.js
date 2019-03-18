function calculateIndexM() { //Расчет индекса массы тела 
    var height = document.getElementById("height").value;
    var weight = document.getElementById("weight").value;
    var age = document.getElementById("age").value;
    var indexM = weight / ((height / 100) * (height / 100));
    var s = document.getElementById("indexM");
    s.innerText = indexM.toFixed(1);
    if (document.getElementById("W").checked) {
        var height = document.getElementById("height").value;
        var normalW = height * height * 0.00225;
        var f = document.getElementById("normalW");
        f.innerText = normalW.toFixed(1);
        var selection = document.getElementById('inputGroupSelect04').selectedIndex;
        switch(selection){
            case 0:
            var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*0.9;
            var c = document.getElementById("Cal");
            c.innerText = cal.toFixed(1);
            break;

            case 1:
            var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*1.38;
            var c = document.getElementById("Cal");
            c.innerText = cal.toFixed(1);
            break;

            case 2:
            var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*1.55;
            var c = document.getElementById("Cal");
            c.innerText = cal.toFixed(1);
            break;

            case 3:
            var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*1.73;
            var c = document.getElementById("Cal");
            c.innerText = cal.toFixed(1);
            break;

            case 4:
            var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*0.8;
            var c = document.getElementById("Cal");
            c.innerText = cal.toFixed(1);
            break;
        }
        
    } else {
        if (document.getElementById("M").checked) {
            var height = document.getElementById("height").value;
            var normalW = height * height * 0.00225 + 10;
            var f = document.getElementById("normalW");
            f.innerText = normalW.toFixed(1);
            var selection = document.getElementById('inputGroupSelect04').selectedIndex;
            switch(selection){
                case 0:
                var cal = 655 + 9.6* weight + 1.8 * height - 4.7 * age;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                break;
    
                case 1:
                var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*1.48;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                break;
    
                case 2:
                var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*1.65;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                break;
    
                case 3:
                var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*1.83;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                break;
    
                case 4:
                var cal = (655 + 9.6* weight + 1.8 * height - 4.7 * age)*0.9;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                break;
            }
        }
    }
}
