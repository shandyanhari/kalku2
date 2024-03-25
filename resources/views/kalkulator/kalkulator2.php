<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: lightgray;
        }

        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            background-color: darkcyan;
            outline: 1px solid black;
        }

        td {
            width: 50px;
            padding: 15px;
            outline: 1px solid white;
            color: whitesmoke;
            font-size: larger;
            font-style: inherit;
        }

        tr {
            width: 50px;
            padding: 15px;
        }

        input[type="button"] {
            width: 100%;
            padding: 10px 20px;
            background-color: gold;
            color: black;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: large;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
        }

        input[type="text"] {
            width: 75%;
            padding: 10px 20px;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
            border-radius: 5px;
            border: 1px solid black;
            align-items: center;
            outline: 1px solid white;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
        }

        input[type="button"]:hover {
            background-color: whitesmoke;
        }

        h1 {
            color: whitesmoke;
            font-weight: bolder;
            font-size: xx-large;
        }
    </style>
</head>

<body>

    <center>
        <form name="form1" action="" method="post">
            <table border=1 width=450 height=200>
    </center><br>

    <tr>
        <td colspan="3">
            <center>KALKULATOR SHANDY2</center>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <center><input type="text" name="txt1" id=""><br></center>
            <center>
        </td>
    </tr>

    <tr>
        <td><input type="button" value="1" onClick="form1.txt1.value+='1'">
        <td><input type="button" value="2" onClick="form1.txt1.value+='2'">
        <td><input type="button" value="3" onClick="form1.txt1.value+='3'">
    </tr>

    <tr>
        <td><input type="button" value="4" onClick="form1.txt1.value+='4'">
        <td><input type="button" value="5" onClick="form1.txt1.value+='5'">
        <td><input type="button" value="6" onClick="form1.txt1.value+='6'">
    </tr>

    <tr>
        <td><input type="button" value="7" onClick="form1.txt1.value+='7'">
        <td><input type="button" value="8" onClick="form1.txt1.value+='8'">
        <td><input type="button" value="9" onClick="form1.txt1.value+='9'">
    </tr>


    <tr>
        <td><input type="button" value="C" onClick="form1.txt1.value=''">
        <td><input type="button" value="0" onClick="form1.txt1.value+='0'">
        <td><input type="button" value="+" onClick="form1.txt1.value+='+'">
    </tr>


    <tr>
        <td><input type="button" value="-" onClick="form1.txt1.value+='-'">
        <td><input type="button" value="x" onClick="form1.txt1.value+='x'">
        <td><input type="button" value="/" onClick="form1.txt1.value+='/'">
    </tr>

    <tr>
        <td colspan="3">
            <center><input type="button" value="=" onClick="form1.txt1.value=eval(form1.txt1.value)"></center>
        </td>
    </tr>
    </form>
</body>

</html>