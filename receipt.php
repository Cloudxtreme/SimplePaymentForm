<!----------------------------
| Name: Suyash Lakhotia      |
| Matric No. U1423096J       |
| Lab Group: TS1             |
------------------------------>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Suyash Lakhotia">

    <!-- Title -->
    <title>Payment Receipt</title>

    <!-- Bootstrap CSS -->
    <link href="bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <!-- Jumbotron -->
    <div class="container">
        <div class="jumbotron">
            <h2>Payment Receipt</h2>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h3 style="text-align: center; margin-bottom: 30px;"><strong>Customer Name:</strong> <?php print($_GET["name"])?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered">
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Rate ($)</th>
                        <th>Cost ($)</th>
                    </tr>
                    <tr>
                        <td>Apples</td>
                        <td>
                            <?php print($_GET["a"]) ?>
                        </td>
                        <td>
                            0.69
                        </td>
                        <td>
                            <?php
                                $X = number_format((float)($_GET["a"]*0.69), 2, '.', '');
                                print($X);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Oranges</td>
                        <td>
                            <?php print($_GET["o"]) ?>
                        </td>
                        <td>
                            0.59
                        </td>
                        <td>
                            <?php
                                $X = number_format((float)($_GET["o"]*0.59), 2, '.', '');
                                print($X);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Bananas</td>
                        <td>
                            <?php print($_GET["b"]) ?>
                        </td>
                        <td>
                            0.39
                        </td>
                        <td>
                            <?php
                                $X = number_format((float)($_GET["b"]*0.39), 2, '.', '');
                                print($X);
                            ?>
                        </td>
                    </tr>
                    <tr class="bigger">
                        <td colspan="3" style="text-align: center;"><strong>TOTAL COST</strong></td>
                        <td>
                            <strong><?php print($_GET["total"]) ?></strong>
                        </td>
                    </tr>
                    <tr style="text-align: center;">
                        <td colspan="4"><strong>Payment by <?php print($_GET["payment"]) ?></strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>