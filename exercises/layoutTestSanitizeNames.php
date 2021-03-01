<?php
require "../case_study/sanitizeName/sanitizeName.php";

$dataset = [
    ['mario','Mario', __LINE__],
    ['mAriO','Mario', __LINE__],
    ['MARIO','Mario', __LINE__],
    ['De giovanni','De Giovanni', __LINE__],
    ['de giovanni','De Giovanni', __LINE__],
    ['de Giovanni','De Giovanni', __LINE__],
    ['    de    Giovanni    ','De Giovanni', __LINE__],
    ['de     Giovanni ','De Giovanni', __LINE__],
    ['de Giovanni ','De Giovanni', __LINE__],
    ['de    55     Giovanni','De Giovanni', __LINE__],
    ['Mario83','Mario', __LINE__],
    ['Mario@','Mario', __LINE__],
    ['Mario@ ','Mario', __LINE__],
    ['John        Romita     Sr.    ','John Romita Sr.', __LINE__],
    ['          John     Romita    Jr.    ','John Romita Jr.', __LINE__],
    ['John Romita Jr.   ','John Romita Jr.', __LINE__],
    ['<h1>John123456789</h1>','John', __LINE__],
    ['<script>alert("ciccio")</script>','', __LINE__],
    [' <h1> John123456789 </h1> ','John', __LINE__]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Name Test</title>
    <style>
        .cardPass {
            background-color: greenyellow;
            border: 2px solid green;
            box-sizing: border-box;
            margin: 10px 0; 
            color: green;
            font-weight: bold;
            width: 50vw;
        }

        .cardFail {
            background-color: rgb(255, 75, 0);
            border: 2px solid rgb(150, 30, 30);
            box-sizing: border-box;
            margin: 10px 0;
            color: rgb(150, 30, 30);
            font-weight: bold;
            width: 50vw;
        }

        p {
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
    foreach ($dataset as $row) {
        $text=$row[0];
        $expected=$row[1];
        $line = $row[2];

        $result=sanitizeName($text);

        //var_dump($result == $expected);

        if($result == $expected){ ?>
            <div class="cardPass">
                <p>Line <?php echo($line)?>: PASS</p>
                <p>Expected: <?php echo('&apos;'.$expected.'&apos; ('.gettype($expected).')')?></p>
                <p>Found: <?php echo('&apos;'.$result.'&apos; ('.gettype($result).')')?></p>
            </div> 
        <?php }else{ ?>
            <div class="cardFail">
                <p>Line <?php echo($line)?>: FAIL</p>
                <p>Expected: <?php echo('&apos;'.$expected.'&apos; ('.gettype($expected).')')?></p>
                <p>Found: <?php echo('&apos;'.$result.'&apos; ('.gettype($result).')')?></p>
            </div>
        <?php }
    } ?>
</body>
</html>