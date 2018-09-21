<html>
    <head>
        <title>Calculator</title>
    </head>

    <body>
        <input type="text" id="fistnumber" placeholder="put fistnumber">
        <input type="text" id="secondnumber" placeholder="put secondnumber">

        <button id="sumBotton" onclick="getSum()">+</button>

        <div id="output"></div>
        <script>
        var fistnumber = document.getElementById("fistnumber");
        var secondnumber = document.getElementById("secondnumber");
        var output = document.getElementById("output");

        function getSum() {
            let sum = parseInt(fistnumber.value) + parseInt(secondnumber.value);
            showResult(sum);
        }

        function showResult(result) {
            output.innerHTML = "answer: " + result;
        }
        </script>
    </body>
</html>