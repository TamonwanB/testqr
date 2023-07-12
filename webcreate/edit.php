<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>EDIT INFORMATION</title>
    <style>
        table {
            width: 500px;
            border: 0;
            padding-top: 50px;
        }

       /* .navbar {
            background-color: #FF3333;
            width: 100%;
            height: 100px;
        } */

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

        #Update {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        #Update:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    include('dbconnect.php');

    $user_id = mysqli_real_escape_string($con, $_GET['id']);
    $sql = "SELECT * FROM Data WHERE ID= $user_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <table class="navbar">
        <a href="datatable.php">
            <button class="top-left">Back</button>
        </a>
    </table>

    <form action="userupdate.php" method="POST">

        <table align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="70" colspan="2" align="center" style="font-size: 24px;" bgcolor="#D6D5D6">
                    <b>Information</b>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $row['ID']; ?>"></td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">&nbsp;</td>
                <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">
                    <label for="assort">Assort:</label>
                </td>
                <td bgcolor="#EBEBEB" style="padding: 10px;">
                    <input type="text" name="assort" value="<?php echo $row['Assort']; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">&nbsp;</td>
                <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>

            <tr>
                <td align="center" bgcolor="#EBEBEB">
                    <label for="name">Name:</label>
                </td>
                <td bgcolor="#EBEBEB" style="padding: 10px;">
                    <input type="text" name="name" value="<?php echo $row['Name']; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">&nbsp;</td>
                <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">
                    <label for="nest_sealing">Nest_Sealing:</label>
                </td>
                <td bgcolor="#EBEBEB" style="padding: 10px;">
                    <input type="text" name="nest_sealing" value="<?php echo $row['Nest_Sealing']; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">&nbsp;</td>
                <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">
                    <label for="num">Quantity:</label>
                </td>
                <td bgcolor="#EBEBEB" style="padding: 10px;">
                    <input type="text" name="quantity" value="<?php echo $row['Quantity']; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">&nbsp;</td>
                <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">
                    <label for="pet">PET:</label>
                </td>
                <td bgcolor="#EBEBEB" style="padding: 10px;">
                    <input type="text" name="pet" value="<?php echo $row['PET']; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">&nbsp;</td>
                <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">
                    <label for="temp">TEMP:</label>
                </td>
                <td bgcolor="#EBEBEB" style="padding: 10px;">
                    <input type="text" name="temp" value="<?php echo $row['TEMP']; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">&nbsp;</td>
                <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB">
                    <label for="time">TIME:</label>
                </td>
                <td bgcolor="#EBEBEB" style="padding: 10px;">
                    <input type="text" name="time" value="<?php echo $row['TIME']; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EBEBEB" style="padding: 10px; text-align: center;">
                    <input type="submit" name="Update" id="Update" value="Update">
                </td>
                <td bgcolor="#EBEBEB"></td>
            </tr>
        </table>
    </form>
</body>

</html>