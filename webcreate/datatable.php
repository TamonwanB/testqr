<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=" initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #navbar {
            width: 100%;
            overflow: hidden;
            background-color: #FF3333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        h2 {
            text-align: center;
            padding: 30px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr {
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #E8E8E8;
        }

        .edit-button {
            padding-left: 1px;
            padding-right: 1px;
        }

        .button {
            border: none;
            color: #f5f5f5;
            padding: 8px 16px;
            background-color: #FF6666;
            border-radius: 5px;
            margin: 10px;
            margin-right: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button:hover {
            background: #FFB5B5;
        }

        .top-right {
            width: 150px;
            height: 40px;
            border: none;
            color: #f5f5f5;
            padding: 8px 16px;
            background-color: #FA8072;
            border-radius: 5px;
            margin: 10px;
            margin-right: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .top-right:hover {
            background: #FFA07A;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2>Information Red Rubber</h2>
            <a href="adddata.php">
                <button class="top-right">Add data</button>
            </a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Assort</th>
                        <th>Name</th>
                        <th>Nest_Sealing</th>
                        <th>Quantity</th>
                        <th>PET</th>
                        <th>TEMP</th>
                        <th>TIME</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("dbconnect.php");
                    $all = "SELECT * FROM Data ORDER BY ID";
                    $data = mysqli_query($con, $all);

                    foreach ($data as $data) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $data['ID']; ?>
                            </td>
                            <td>
                                <?php echo $data['Assort']; ?>
                            </td>
                            <td>
                                <?php echo $data['Name']; ?>
                            </td>
                            <td>
                                <?php echo $data['Nest_Sealing']; ?>
                            </td>
                            <td>
                                <?php echo $data['Quantity']; ?>
                            </td>
                            <td>
                                <?php echo $data['PET']; ?>
                            </td>
                            <td>
                                <?php echo $data['TEMP']; ?>
                            </td>
                            <td>
                                <?php echo $data['TIME']; ?>
                            </td>
                            <td class="edit-button">
                                <a href="index.php?id=<?php echo $data['ID']; ?>">
                                    <button class="button">View more</button>
                                </a>
                            </td>
                            <td class="edit-button">
                                <a href="edit.php?id=<?php echo $data['ID']; ?>">
                                    <button class="button">Edit Date</button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>