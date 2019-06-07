<?php
include "StopWatch.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrayLength = $_POST['arrayLength'];
    if ($arrayLength <= 0 || empty($arrayLength)) {
        echo "Array Length must be more than 0";
    } else {
        // Create a random Array and Sort Array
        function createArray($arrayLength){
            $arrayNumber = [];
            for ($index = 0; $index < $arrayLength; $index++) {
                // Add random number from 0 - 100
                $arrayNumber[] = mt_rand(0, 100);
            }
            return $arrayNumber;
        }

        // Extends class
        $stopwatch = new StopWatch(microtime(true));
        echo "Current System Time: " . $stopwatch->getStartTime() . "<br>" . "<br>";
        // Sleep 1s after create Array
        $arrayNumber = createArray($arrayLength);
        sleep(1);
        // Set start time
        $stopwatch->start(microtime(true));
        echo "Start time to sort Array: " . $stopwatch->getStartTime() . "<br>" . "<br>";
        // Time to sort array
        usleep(sort($arrayNumber));
        // Set end time
        $stopwatch->stop(microtime(true));
        echo "End Time: " . $stopwatch->getEndTime() . "<br>" . "<br>";
        echo "Elapsed Time to Sort Array " . $arrayLength . " elements is: " . $stopwatch->ElapsedTime() . " millisecond" . "<br>" . "<br>";
        // Display Array after sort
        echo "Array after sort: ";
        print_r($arrayNumber);
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Xây dựng lớp StopWatch</title>
    <style>
        form{
            margin-left: 35%;
        }
        h2{
            color: blue;
            margin-left: 30%;
        }
        .display{
            width: 270px;
            height: 120px;
            margin: 0;
            padding: 10px;
            border: 1px #dd33dd solid;
        }
        input[type=submit]{
            color: darkgoldenrod;
            margin-left: 10%;
            width: 50%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>StopWatch</h2>
        <fieldset>
            Input:
            <input type="text" name="arrayLength" placeholder="Enter Array Length" size="30">
            <br>Display:
            <input type="submit" value="result" size="30">
        </fieldset>
    </div>
</form>
</body>
</html>
