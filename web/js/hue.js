var buttons = document.getElementsByClassName("circle");
console.log(buttons);

for (var i = 0; i <buttons.length; i++ ) {
    buttons[i].addEventListener('click', clickedItem);
}

function clickedItem(e) {
    var currentColor = e.target.id;
    console.log(currentColor);

    var x1;
    var y1;
    var x2;
    var y2;

    switch (currentColor) {
        case '1':
            x1 = 0.46599;
            y1 = 0.31507;

            x2 = 0.44381;
            y2 = 0.33692;

            break;
        case '2':
            x1 = 0.27408;
            y1 = 0.16924;

            x2 = 0.19465;
            y2 = 0.19854;

            break;
        case '3':
            x1 = 0.20157;
            y1 = 0.23101;

            x2 = 0.3631;
            y2 = 0.4275;

            break;
    }



    console.log(x1);
    console.log(y1);
    console.log(x2);
    console.log(y2);

    $.ajax({
        url: "http://192.168.11.42/api/aef57d3159cdcb470169d0c6f090b75/lights/1/state",
        type: "PUT",
        dataType: "json",
        data: '{"on":true, "bri":254, "xy":['+x1+','+y1+']}',


        success: function(data) {
            console.log(data);
        },
        error:function(){
            alert("Cannot get data");
        }

    });

    $.ajax({
        url: "http://192.168.11.42/api/aef57d3159cdcb470169d0c6f090b75/lights/2/state",
        type: "PUT",
        dataType: "json",
        data: '{"on":true, "bri":254, "xy":['+x2+','+y2+']}',


        success: function(data) {
            console.log(data);
        },
        error:function(){
            alert("Cannot get data");
        }

    });
}

