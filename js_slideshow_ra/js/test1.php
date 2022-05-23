<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p class="p1">p2</p>
    <p class="p1">p3</p>
    <p class="p1">p1</p>
    <script> 
    //onclick event
    document.getElementsByClassName("p1").onclick = function() {
        //change paragraph background color
        document.getElementById("p1").style.backgroundColor = "red";
    };
</script>
    
</body>
</html>