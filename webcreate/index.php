<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test QR</title>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 400px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 14px;
            padding-top: 30px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .card-body {
            padding: 10px;
        }

        .button {
            border: none;
            color: #f5f5f5;
            padding: 8px 16px;
            background-color: #FF6666;
            border-radius: 5px;
            margin: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button:hover {
            background: #FFB5B5;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include("dbconnect.php");
            $id = $_GET['id'];
            $sql = "SELECT Assort,Name,Nest_Sealing,Quantity,PET,TEMP,TIME FROM Data WHERE ID = $id";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-4 mt-3">
                    <div class="card-wrapper">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $row['Assort']; ?>
                                </h4>
                                <ul>
                                    <p>
                                        <?php echo $row['Name']; ?>
                                    </p>
                                    <p>
                                        <?php echo $row['Nest_Sealing']; ?>
                                    </p>
                                    <p>
                                        <?php echo $row['Quantity']; ?>
                                    </p>
                                    <p>
                                        <?php echo $row['PET']; ?>
                                    </p>
                                    <p>
                                        <?php echo $row['TEMP']; ?>
                                    </p>
                                </ul>
                                <div class="card-content">
                                    <a href="edit.php?id=<?php echo $id; ?>">
                                        <button class="button">EDIT</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</body>

</html>