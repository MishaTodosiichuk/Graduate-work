@extends('layouts.admin')

@section('content')
    <div class="info-box-content">
        <canvas id="CountViews" width="600" height="200"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('CountViews').getContext('2d');

        var CountViews = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($labels_views); ?>,
                datasets: [{
                    label: 'Кількість переглядів',
                    data: <?php echo json_encode($count_views);?>,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
@endsection
