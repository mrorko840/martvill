<div class="card">
    <div class="card-header">
        <h5 class="font-weight-600 c-gray-5">{{ __('ORDER STATUS THIS MONTH') }}</h5>
    </div>
    <div class="card-block h-360">
        @if (max($orderStatus['count']))
            <canvas id="chart-donut-1" class="w-100 h-300px"></canvas>
        @else
            <h6 class="text-secondary">{{ __('No data found.') }}</h6>
        @endif
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var bar = document.getElementById("chart-donut-1").getContext('2d');
        var data = {
            labels: @json($orderStatus['status'] ?? null),
            datasets: [{
                data: @json($orderStatus['count'] ?? 0),
                backgroundColor: [
                    "#fcca19",
                    "#FFA826",
                    "#E393FF",
                    "#00DFFF",
                    "#33C172"
                ],
                hoverBackgroundColor: [
                    "#fcca19",
                    "#FFA826",
                    "#E393FF",
                    "#00DFFF",
                    "#33C172"
                ]
            }]
        };
        var myPieChart = new Chart(bar, {
            type: 'doughnut',
            data: data,
            responsive: true,
            options: {
                maintainAspectRatio: false,
            }
        });
    });
</script>
