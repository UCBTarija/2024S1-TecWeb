<html>

<body>
    <h1>
        <?php
        echo "hola mundo...";
        print(" chau");
        ?>
    </h1>

    <?php

    echo "<p>esta es una linea</p>";
    echo "<p>y esta es otra</p>"
    ?>

    <table border="1">
        <?php
        for ($i = 0; $i < 10; $i++) {
            if($i == 5){
                continue;
            }

            echo "<tr>";
            echo "<td>Juan</td>"."<td>".$i."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>