<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <style>
        td{
            width: 20px;
            height: 20px;
            border: 1px solid black;
        }
        table tr:nth-child(even) td:nth-child(even),
        table tr:nth-child(odd) td:nth-child(odd) {
            background-color: silver;
        }
        table tr:nth-child(even) td:nth-child(odd),
        table tr:nth-child(odd) td:nth-child(even) {
            background-color: black;
            color:white;
        }

    </style>
</head>
<body>
    <table>
        <?php for ($j=0; $j < $sizeBoard; $j++):?>
            <tr>
                <?php for ($i=0; $i<$sizeBoard; $i++):?>
                    <td>
                        <?php echo $board->getCell($j,$i)->getPresence(); ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>