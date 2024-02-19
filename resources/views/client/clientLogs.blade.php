<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Client Logs</title>

</head>

<body class="bg-custom" style="background-color: rgb(197, 197, 197)">
    <h1 class="text-center text-white p2 bg-dark bg-gradient text-uppercase">Client Logs</h1>
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="container mt-5">
        <div class="row">
            <table
                class="table table-responsive table-striped table-hover table-sm table-bordered border-dark text-center">
                <thead>
                    <tr class="table-dark table-active text-uppercase text-white">
                        <th class="col-2">Virtual ID</th>
                        <th class="col-3">First Name</th>
                        <th class="col-3">Middle Name</th>
                        <th class="col-3">Last Name</th>
                        <th class="col-2"></th>
                    </tr>
                </thead>
                {{-- Data in clientLogs disappear when logout button clickeds --}}
                @foreach ($clients as $client)
                    @if (!$client->timeOut)
                        <tbody>
                            <tr>
                                <td>{{ $client->virtualIdNumber }}</td>
                                <td>{{ $client->firstName }}</td>
                                <td>{{ $client->middleName }}</td>
                                <td>{{ $client->lastName }}</td>
                                <td>

                                    <div class="col-4">
                                        <form method="POST"
                                            action="{{ route('client.logout', ['client' => $client->id]) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="submit" value="Log out" class="btn btn-success rounded-10"
                                                autocomplete="off">
                                        </form>
                                    </div>
                                    {{-- <div> Just used this for experimentation
                                        <div class="col-4">
                                            <form method="post"
                                                action="{{ route('client.destroy', ['client' => $client]) }}">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn btn-danger rounded-10"
                                                    autocomplete="off">
                                            </form>
                                        </div>
                                    </div> --}}
                                </td>
                            </tr>
                        </tbody>
                    @endif
                @endforeach
            </table>

        </div>
        <div>
            <button class="btn btn-primary" autocomplete="off"><a href="{{ route('client.applicationForm') }}"
                    style="text-decoration: none; color: white;">Create New Application</a></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
