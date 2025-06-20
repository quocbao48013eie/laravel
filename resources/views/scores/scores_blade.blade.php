<style>
    .row-even{
        background-color: grey;
    }
</style>

<h1>Scores</h1>

@php 
    $name = 'Nguyen Van A';
    $title = '<h1>Title</h1>';
    $scores = [4, 8, 5, 6, 2, 1, 9, 10, 7];
    // $scores = [];
@endphp

<?= $name ?>
{{ $name }}

<?= htmlspecialchars($title) ?>

{{ $title }}
{!! $title !!}

<table border="1">
    <tr>
        <th>STT</th>
        <th>Score</th>
        <th>Result</th>
    </tr>
    @forelse ( $scores as $score )
        <tr class="{{ $loop->odd ? 'row-even' : '' }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $score }}</td>
            <td>{{ $score > 6 ? 'passed' : 'failed' }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="3">No data</td>
        </tr>
    @endforelse
</table>
