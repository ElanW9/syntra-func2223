<?php
require("data.php");
?>
<html>

<body>
    <ul>

        <?php foreach ($movies as $key => $movie) {
            echo "<li><a href=\"detail.php?id=$key\">$movie[0]</a>($movie[1])</li>";
        } ?>

    </ul>
</body>

</html>