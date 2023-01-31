<html lang="en">
    <h1>
        <?php
        date_default_timezone_set('America/Phoenix');
            echo "Today is: " . date("Y/m/d") . "<br>";
            echo "The time is: " . date("h:i:sa") . "<br>";
            echo "In one week it will be: " . date('Y-m-d H:i:s', strtotime("+7 day \n")) . "<br>";
            echo "The semester will end in: Error: User does not know when the semester will end :<" . "<br>";

            echo("I really have no idea how im supposed to upload this to GIT!!") . "<br>";

        ?>
    </h1>
</html>
