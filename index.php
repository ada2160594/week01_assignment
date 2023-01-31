<html lang="en">
    <h1>
        <?php
            date_default_timezone_set("America/Arizona");

            echo "Today is " . date("Y/m/d") . "<br>";
            echo "The time is " . date("h:i:sa") . "<br>";
            echo date('Y-m-d H:i:s', strtotime("+7 day"));

            echo('I really have no idea how im supposed to upload this!')

        ?>
    </h1>
</html>
