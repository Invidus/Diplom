function calculateIndexM() { //Расчет индекса массы тела 
    var height = document.getElementById("height").value;
    var weight = document.getElementById("weight").value;
    var age = document.getElementById("age").value;
    var indexM = weight / ((height / 100) * (height / 100));
    var s = document.getElementById("indexM");
    s.innerText = indexM.toFixed(1);

    function PFCCount () {
        var cal = document.getElementById('Cal').textContent;
        var protein = cal * 0.3 / 4.1;
        var carbohydrates = cal * 0.3 / 4.1;
        var fat = cal * 0.3 / 9.29;
        document.getElementById('normalP').innerText = protein.toFixed(1);
        document.getElementById('normalC').innerText = carbohydrates.toFixed(1);
        document.getElementById('normalF').innerText = fat.toFixed(1);
    }


    if (document.getElementById("W").checked) {
        $("#fillFilds").addClass("hidden");
        var height = document.getElementById("height").value;
        var normalW = height * height * 0.00225;
        var f = document.getElementById("normalW");
        f.innerText = normalW.toFixed(1);
        var selection = document.getElementById('inputGroupSelect04').selectedIndex;
        var indexB = 1;
        var selectionGoal = document.getElementById('goalMain').selectedIndex;
        switch (selectionGoal) {
            case 0:
                indexB = 0.7;
                PFCCount();break;
            case 1:
                indexB = 1.5;
                PFCCount();break;
            case 2:
                indexB = 1;
                PFCCount();break;
            case 3:
                indexB = 1.3;
                PFCCount();break;
        }
        switch (selection) {
            case 0:
                debugger;
                var cal = (447.593 + 9.247 * weight + 3.098 * height - 4.330 * age) * 1.2 * indexB;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                PFCCount();break;

            case 1:
                var cal = (447.593 + 9.247 * weight + 3.098 * height - 4.330 * age) * 1.25 * indexB;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                PFCCount();break;

            case 2:
                var cal = (447.593 + 9.247 * weight + 3.098 * height - 4.330 * age) * 1.4 * indexB;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);

                PFCCount();break;

            case 3:
                var cal = (447.593 + 9.247 * weight + 3.098 * height - 4.330 * age) * 1.5 * indexB;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                PFCCount();break;

            case 4:
                var cal = (447.593 + 9.247 * weight + 3.098 * height - 4.330 * age) * 1.7 * indexB;
                var c = document.getElementById("Cal");
                c.innerText = cal.toFixed(1);
                PFCCount();break;
        }

        PFCCount();
    } else {
        if (document.getElementById("M").checked) {
            $("#fillFilds").addClass("hidden");
            var height = document.getElementById("height").value;
            var normalW = height * height * 0.00225 + 10;
            var f = document.getElementById("normalW");
            f.innerText = normalW.toFixed(1);
            var selection = document.getElementById('inputGroupSelect04').selectedIndex;
            var indexB = 1;
            var selectionGoal = document.getElementById('goalMain').selectedIndex;
            switch (selectionGoal) {
                case 0:
                    indexB = 0.7;
                    break;
                case 1:
                    indexB = 1.5;
                    PFCCount();break;
                case 2:
                    indexB = 1;
                    PFCCount();break;
                case 3:
                    indexB = 1.3;
                    PFCCount();break;
            }
            switch (selection) {
                case 0:
                    var cal = (88.362 + 13.397 * weight + 4.799 * height - 5.677 * age) * 1.2 * indexB;
                    var c = document.getElementById("Cal");
                    c.innerText = cal.toFixed(1);
                    PFCCount();break;

                case 1:
                    var cal = (88.362 + 13.397 * weight + 4.799 * height - 5.677 * age) * 1.375 * indexB;
                    var c = document.getElementById("Cal");
                    c.innerText = cal.toFixed(1);
                    PFCCount();break;

                case 2:
                    var cal = (88.362 + 13.397 * weight + 4.799 * height - 5.677 * age) * 1.55 * indexB;
                    var c = document.getElementById("Cal");
                    c.innerText = cal.toFixed(1);
                    PFCCount();break;

                case 3:
                    var cal = (88.362 + 13.397 * weight + 4.799 * height - 5.677 * age) * 1.725 * indexB;
                    var c = document.getElementById("Cal");
                    c.innerText = cal.toFixed(1);
                    PFCCount();break;


                case 4:
                    var cal = (88.362 + 13.397 * weight + 4.799 * height - 5.677 * age) * 1.9 * indexB;
                    var c = document.getElementById("Cal");
                    c.innerText = cal.toFixed(1);
                    PFCCount();break;

            }
        }
        PFCCount();
    }
}
