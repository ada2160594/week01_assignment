<html lang="en">
    <h1>
        <?php
            echo "Name: Adam Willoughby" . "<br>";
            date_default_timezone_set('America/Phoenix');
            echo "Today is: " . date("Y/n/d") . "<br>";
            echo "The time is: " . date("h:i:sa") . "<br>";
            echo "In one week it will be: " . date('Y/n/d', strtotime("+7 day \n")) . "<br>";

            $d1 = strtotime("01/01/2023");
            $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
            echo "January 1st of 2023 was " . $d2 . "<br>";

            echo "Weeks until semester end: " . "<br>";

        echo("I really have no idea how im supposed to upload this to GIT!! But I have tried!!!") . "<br>";

        ?>
    </h1>
</html>
