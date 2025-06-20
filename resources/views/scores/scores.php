<style>
    .row-even{
        background-color: grey;
    }
</style>

<h1>Scores</h1>

<?php 
    $scores = [4, 8, 5, 6, 2, 1, 9, 10, 7];
?>

<table border="1">
    <tr>
        <th>STT</th>
        <th>Score</th>
        <th>Result</th>
    </tr>
    <?php 
        $stt = 1;
        foreach($scores as $score) : 
    ?>
        <?php $class = $stt % 2 === 0 ? 'row-even' : '' ?>
        <tr class="<?= $class ?>">
            <td><?= $stt++ ?></td>
            <td><?= $score ?></td>
            <td><?= $score > 6 ? 'passed' : 'failed' ?></td>
        </tr>
    <?php endforeach ?>
</table>
