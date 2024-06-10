<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section class="head1">
            <img src="zad5.png" alt="logo lotnisko">
        </section>
        <section class="head2">
            <h1>Przyloty</h1>
        </section>
        <section class="head3">
            <h3>przydatne linki</h3>
            <a href="kwerendy.txt">Pobierz...</a>
        </section>
    </header>
    <main>
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
            <?php
                $db = mysqli_connect('localhost', 'root', '', 'egzamin');
                $query = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM `przyloty` ORDER BY czas ASC";
                $res = mysqli_query($db, $query);

                while($row = mysqli_fetch_row($res))
                {
                    echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    </tr>";
                }
            ?>
        </table>
    </main>
    <footer>
        <section class="footer1">
            <?php
                if(!isset($_COOKIE['cookie'])) {
                    setcookie('cookie', 'time', time() + (2), "/");
                    echo "<p><i>Dzień dobry! Strona lotniska używa ciasteczek</i></p>";
                    } else {
                      echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
                  }
            ?>
        </section>
        <section class="footer2">
            Autor: 000000000
        </section>
    </footer>
</body>
</html>