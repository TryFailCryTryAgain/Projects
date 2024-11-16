
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="profile-card">
    <?php
        $first_name = "Linnéa";
        $last_name = "Svensson";
        $age = 27;
        $city = "Uppsala";
        $hobbies = ["Reading", "Traveling", "Cooking", "Hiking", "Dancing"];

        function Greeting() {
            global $first_name, $last_name;
            echo "<h1>".$first_name." ".$last_name."</h1>";
            echo "<p>"."Hi ".$first_name.". Welcome back tillbaka!"."</p>";
        }

        function Age()  {
            global $age;
            echo "<p>"."Age:"."</p>";
            echo $age;
        }

        function City() {
            global $city;
            echo "<p>"."City:"."</p>";
            echo $city;
        }

        function Status() {
            global $age;
            echo "<p>"."Status:"."</p>";
            if ($age >= 18) {
                echo "Adult";
            } else {
                echo "Minor";
            }
        }

        function Hobbies() {
            global $hobbies;
            echo "<h2>"."Hobbies"."</h2>";

            echo "<ul>";
            foreach ($hobbies as $hobby) {
                echo "<li>".$hobby."</li>";
            }
            echo "</ul>";
        }

        Greeting();
        Age();
        City();
        Status();
        Hobbies();

    ?>
</div>
</body>
</html>
