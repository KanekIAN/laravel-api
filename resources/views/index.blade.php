<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Sensor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-light">
    <main class="container">

        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-4">Suhu</th>
                        <th class="col-md-3">Kelembapan</th>
                        <th class="col-md-2">Api</th>
                        <th class="col-md-2">Asap</th>
                        <th class="col-md-2">Motion</th>
                        <th class="col-md-2">Pintu</th>
                        <th class="col-md-2">Buzzer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item['suhu' ] }}</td>
                        <td>{{ $item['kelembapan' ] }}</td>
                        <td>{{ $item['api' ] }}</td>
                        <td>{{ $item['asap' ] }}</td>
                        <td>{{ $item['motion' ] }}</td>
                        <td>{{ $item['pintu' ] }}</td>
                        <td>{{ $item['buzzer' ] }}</td>

                    </tr>
                    <?php $i++ ?>
                    @endforeach
                    
                </tbody>
            </table>

        </div>
        <!-- AKHIR DATA -->








        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</body>

</html>