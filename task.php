<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Characters Lines And Words</title>
</head>

<body>
    <form>
        <center>
            <h1>ENTER THE INPUT TEXT</h1><br /><br />
            <textarea id='text' cols="50" rows="5"></textarea><br /><br />
            <!-- <input type="submit" name="Submit" value="SUBMIT" onclick="count()"></input> -->
            <button type="button" name="submit" class="btn btn-primary" onclick="count()">SUBMIT</button>
            <br /><br />
        </center>
    </form>

    <script type="text/JavaScript">
        function count() {
            var str = document.getElementById('text').value;
            if(str == ""){
                alert('Please Enter Some Text');
            }
            else{
                var result = '';
                result += 'The number of characters are: ' + str.length + '\n';
                var a = str.split('\n');
                result += 'The number of lines are: ' + a.length + '\n';
                var arr = str.replace(/[\t\n\r\.\?\!]/gm, " ").split(' ');
                result += 'The number of words are: ' + arr.length + '\n';
                alert(result);
            }
        }
    </script>

</body>

</html>