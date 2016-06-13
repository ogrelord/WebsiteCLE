<button name="ChangeColor">Rood</button>
<button name="ChangeColor">Blauw</button>
<button name="ChangeColor">Geel</button>
<button name="ChangeColor">Groen</button>

<script>
    var buttons = document.getElementsByName("ChangeColor");
    console.log(buttons);

    for (var i = 0; i <buttons.length; i++ ) {
        buttons[i].addEventListener('click', clickedItem);
    }

    function clickedItem(e) {
        var currentColor = e.target.innerHTML;
        console.log(currentColor);

        var x;
        var y;

        switch (currentColor) {
            case 'Rood':
                x = 0.7;
                y = 0.2986;
                break;
            case 'Blauw':
                x = 0.1649;
                y = 0.1338;
                break;
            case 'Geel':
                x = 0.4432;
                y = 0.5154;
                break;
            case 'Groen':
                x = 0.214;
                y = 0.709;
                break;
        }

        console.log(x);
        console.log(y);

        $.ajax({
            url: "http://192.168.11.42/api/aef57d3159cdcb470169d0c6f090b75/lights/1/state",
            type: "PUT",
            dataType: "json",
            data: '{"on":true, "xy":['+x+','+y+']}',


            success: function(data) {
                console.log(data);
            },
            error:function(){
                alert("Cannot get data");
            }

        });
    }
</script>


