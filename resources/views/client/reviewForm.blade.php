<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        height: 100%;
        width: 100%;
    }
</style>

<body>
    <div class="container-fluid" style="background-color: aliceblue">
        <div class="row text-center">
            <div class="col">
                <h1>Confirmation Page</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <p>Please review your entered data:</p>
            </div>
        </div>
        <div class="row text-center" style="padding-left: 20%; padding-right: 20%;">
            <div class="col">
                <h4><strong>Email Address:</strong> </h4>
                <h4><strong>Home Address:</strong> </h4>
                <h4><strong>Client Type:</strong> </h4>
                <h4><strong>First Name:</strong> </h4>
                <h4><strong>Middle Name:</strong> </h4>
                <h4><strong>Last Name:</strong> </h4>
                <h4><strong>Gender:</strong> </h4>
                <h4><strong>Birth Date:</strong> </h4>
                <h4><strong>Mobile Number:</strong> </h4>
                <h4><strong>Division of Residence:</strong> </h4>
                <h4><strong>Office Concerned:</strong> </h4>
                <h4><strong>Purpose:</strong> </h4>
                <h4><strong>Virtual Id Number:</strong> </h4>
            </div>
            <div class="col">
                <h4>{{ $data['emailAddress'] }}</h4>
                <h4>{{ $data['homeAddress'] }}</h4>
                <h4>{{ $data['clientType'] }}</h4>
                <h4>{{ $data['firstName'] }}</h4>
                <h4>{{ $data['middleName'] }}</h4>
                <h4>{{ $data['lastName'] }}</h4>
                <h4>{{ $data['gender'] }}</h4>
                <h4>{{ $data['birthDate'] }}</h4>
                <h4>{{ $data['contact'] }}</h4>
                <h4>{{ $data['divisionOfResidence'] }}</h4>
                <h4>{{ $data['officeConcerned'] }}</h4>
                <h4>{{ $data['purposeId'] }}</h4>
                <h4>{{ $data['virtualIdNumber'] }}</h4>
            </div>
            <div class="col col-1">
                <form method="GET"
                    action="{{ route('client.applicationForm') }}">
                    @csrf
                    <input type="Submit" value="Edit" class="btn btn-success rounded-10"
                        autocomplete="off">
                </form>
            </div>

            <div>
                <form method="POST" action="{{ route('client.store') }}">
                    @csrf
                    @method('post')
                    <input type="Submit" value="Submit" class="btn btn-success rounded-10"
                        autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    
    

    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
