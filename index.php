

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <main>
        <h1>Welkom op het netland beheerderspaneel</h1>
        <h2 >Series</h2>
        <table>
        <tr><th style='width:150px'><a href=<?php echo $series_title; ?>>Title</a></th>
        <th style='width:150px'><a href=<?php echo $series_rating; ?>>Rating</a></th></tr>
        <?php
while ($row_series = $result_series->fetch()) {
    echo '<tr><td><a href="series.php?id=' . $row_series['id'] . '">';
    echo ($row_series['title'] . '</a></td><td style="text-align:center;">' . $row_series['rating']);
    echo '</td></tr>';
}
?>
        </table>
        <h2>Films</h2>
        <table>
        <tr><th style='width:150px'><a href=<?php echo $films_title ?> >Title</a></th>
        <th style='width:150px'><a href=<?php echo $films_duration ?> >Duration</a></th></tr>
        <?php
while ($row_films = $result_films->fetch()) {
    echo '<tr><td><a href="films.php?id=' . $row_films['volgnummer'] . '">';
    echo ($row_films['titel'] . '</td><td style="text-align:center;">' . $row_films['duur_in_min']);
    echo '</td></tr>';
}
?>
        </table>
    </main>
</body>
</html>