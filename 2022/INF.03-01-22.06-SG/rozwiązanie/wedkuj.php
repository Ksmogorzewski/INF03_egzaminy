<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>Portal dla wędkarzy</h1>
        </div>
        <div class="middle">
            <div class="left">
                <div class="left1">
                    <h3>Ryby zamieszkujące rzeki</h3>
                    <ol>
                    <?php
                        $conn = mysqli_connect('localhost','root','','wedkowanie');
                        $query1= "SELECT nazwa,akwen,wojewodztwo FROM `ryby` INNER JOIN `lowisko` ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj=3";
                        $wynik = mysqli_query($conn, $query1);
                        while($row1 = mysqli_fetch_row($wynik)){
                            echo "<li>$row1[0] pływa w rzece $row1[1], $row1[2]</li>";
                        }

                    ?>
                    </ol>
                </div>
                <div class="left2">
                    <h3>Ryby drapieżne naszych wód</h3>
                    <table>
                        <tr>
                            <th>L.p</th>
                            <th>Gatunek</th>
                            <th>Występowanie</th>
                        </tr>
                        <?php
                            $query2= "SELECT id,nazwa,wystepowanie FROM ryby WHERE styl_zycia=1";
                            $wynik2 = mysqli_query($conn, $query2);
                            while($row2 = mysqli_fetch_row($wynik2)){
                                echo "<tr>
                                    <td>$row2[0]</td> 
                                    <td>$row2[1]</td>
                                    <td>$row2[2]</td>
                                </tr>";
                            }
                            mysqli_close($conn);
                        ?>
                    </table>
                </div>
            </div>
            <div class="right">
                <img src="ryba1.jpg" alt="Sum">
                <br>
                <a href="kwerendy.txt">Pobierz kwerendy</a>
            </div>
        </div>
        <div class="footer">
            <p>Stronę wykonał: 00000000000</p>
        </div>
    </div>
</body>
</html>