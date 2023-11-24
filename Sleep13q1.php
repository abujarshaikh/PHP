<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* Define the styles for the chessboard */
        table.chessboard {
            border-collapse: collapse;
            width: 190px;
            height: 190px;
        }

        table.chessboard td {
            width: 23.75px;
            height: 23.75px;
            text-align: center;
        }

        .black {
            background-color: #888;
        }

        .white {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <h2>Chessboard | Abujar</h2>
    <table class="chessboard">
        <?php
        $rows = 8;
        $cols = 8;

        for ($i = 1; $i <= $rows; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $cols; $j++) {
                // Determine the class for each cell to alternate colors
                $class = ($i + $j) % 2 === 0 ? 'black' : 'white';
                echo "<td class=\"$class\"></td>";
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>