<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Data</title>
    <style>
        table {
            width: 500px;
            border: 0;
            padding-top: 50px;
        }

        .top-left {
            width: 100px;
            height: 30px;
            border: none;
            color: #f5f5f5;
            padding: 4px 8px;
            background-color: darkblue;
            border-radius: 5px;
            margin: 10px;
            margin-right: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: absolute;
            top: 30px;
            left: 10px;
        }

        .top-left:hover {
            background: #004C99;
        }

        td {
            background-color: #EBEBEB;
            text-align: left;
            padding: 8px;
        }

        tr {
            border-bottom: 1px solid #ddd;
        }

        .custom-input {
            width: 400px;
            height: 30px;
        }

        #button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        #button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <table class="navbar">
        <a href="datatable.php">
            <button class="top-left">Back</button>
        </a>
    </table>
    <form action="insert.php" method="POST" enctype="multipart/form-data" name="form1">
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <th height="50" colspan="2" align="center" style="font-size: 24px;" bgcolor="#D6D5D6">Insert Data</th>
            </tr>
            <tr>
                <td>Assort</td>
                <td>
                    <label for="assort"></label>
                    <input type="text" name="assort" class="custom-input" />
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                    <label for="name"></label>
                    <input type="text" name="name" class="custom-input" />
                </td>
            </tr>
            <tr>
                <td>Nest_Sealing</td>
                <td>
                    <label for="nest_sealing"></label>
                    <input type="text" name="nest_sealing" class="custom-input" />
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>
                    <label for="num"></label>
                    <input type="text" name="quantity" class="custom-input" />
                </td>
            </tr>
            <tr>
                <td>PET</td>
                <td>
                    <label for="pet"></label>
                    <input type="text" name="pet" class="custom-input" />
                </td>
            </tr>
            <tr>
                <td>TEMP</td>
                <td>
                    <label for="temp"></label>
                    <input type="text" name="temp" class="custom-input" />
                </td>
            </tr>
            <tr>
                <td>TIME</td>
                <td>
                    <label for="time"></label>
                    <input type="text" name="time" class="custom-input" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="button" id="button" value="save" />
                </td>
            </tr>
        </table>
    </form>

</body>

</html>