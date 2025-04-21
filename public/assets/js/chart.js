import Chart from 'chart.js/auto';
import { getRelativePosition } from 'chart.js/helpers';

document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('myChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Penjualan Bulanan',
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            },
        });
    }
});