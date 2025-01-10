<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Informasi Peserta QRIS</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Event</th>
                    <th>Jadwal Mulai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nama_event'] }}</td>
                        <td>{{ $item['jadwal_pelaksanaan_mulai']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <script type="module" src="../js/app.js"></script> --}}
    <script>
        // Ambil data dari API Laravel
        // fetch('/api/transaction')
        //     .then(response => response.json())
        //     .then(data => {
        //         console.log(data.data);
        //         const ctx = document.getElementById('myChart').getContext('2d');
        //         new Chart(ctx, {
        //             type: 'pie', // Tipe grafik (bar, line, pie, dll.)
        //             data: {
        //                 labels: data.data.map(row => row.peserta_id),
        //                 datasets: [
        //                 {
        //                     label: 'Total transaksi',
        //                     data: data.data.map(row => row.nama_produk)
        //                 }
        //                 ]
        //             },
        //             options: {
        //                 responsive: true,
        //                 plugins: {
        //                     legend: { position: 'top' },
        //                     title: { display: true, text: 'Top Event' }
        //                 }
        //             }
        //         });
        //     });
    </script>
</body>
</html>