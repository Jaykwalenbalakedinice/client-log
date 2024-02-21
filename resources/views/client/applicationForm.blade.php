<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
        .form-control {
            background-color: #ebecee;
            border-color:
        }

        strong {
            margin-left: 10px;
        }

        @media (max-width: 1024px) and (max-height: 1280px) {
            body {
                justify-content: center;
                align-items: center;
            }
        }


        .alert p {
            font-size: 18px;
            font-style: italic;
            color: #fff;
            padding-top: 10px;
            color: black;
            margin-left: 20px;
        }

        .alert a {
            font-weight: bold;
            text-decoration: none;
            color: skyblue;
        }

        .alert a:hover {
            font-weight: bold;
            text-decoration: underline;
            color: #380036;
        }

        .button-container {
            margin: 15px 0;
        }

        .btn {
            width: 100%;
            margin-right: 10px;
            display: block;
            font-size: 20px;
            color: #fff;
            border: none;
            border-radius: 5px;
            background-image: linear-gradient(to right, #aa076b, #61045f);
            cursor: pointer;
        }

        .btn:hover {
            background-image: linear-gradient(to right, #61045f, #aa076b);
        }

        .is-invalid2 {
            border-color: #dc3545;
        }
    </style>
</head>

<body style="background-image: linear-gradient(#8a0000, #0c2cba); height: auto;">
    <div>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    {{-- Data Privacy Modal --}}
    <div class="modal" id="myModal" tabindex="-1">
        <div class="modal-dialog" style="max-width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="padding-left: 39%;">Data Privacy Notice</h5>
                </div>
                <div class="modal-body">
                    <p>In accordance with the Department of Education’s (DepEd) mandate to protect and promote the
                        right to and access to quality basic education, DepEd collects various data and information,
                        including personal information, from various subjects using different systems.<br><br>

                        In the processing of these data and information, DepEd is committed to ensure the free flow
                        of information as required under the Freedom of Information Act (Executive Order No. 2, s.
                        2016) and to protect and respect the confidentiality and privacy of these data and
                        information as required under the Data Privacy Act of 2012 (Republic Act No. 10173).<br><br>

                        Request for data and information, unless access is denied when such data and information
                        fall under any of the exceptions enshrined in the Constitution, existing law or
                        jurisprudence, shall be guided by the DepEd Freedom of Information Manual (Department Order
                        No. 72, s. 2016).<br><br>

                        Only authorized DepEd personnel have access to personal information collected, the exchange
                        of which will be facilitated through email and web applications. These will be stored in a
                        database in accordance with government policies, rules, regulations, and guidelines.<br><br>

                        You have the right to ask for a copy of any personal information DepEd holds about you, as
                        well as the right to ask for its correction, if found erroneous, or deletion on reasonable
                        grounds.
                        You may contact region4a@deped.gov.ph
                        legal.calabarzon@deped.gov.ph
                        ict.calabarzon@deped.gov.ph
                        pau.calabarzon@deped.gov.ph</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="agreeButton">I understand</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <img src="https://depedcalabarzon.ph/wp-content/uploads/2023/09/website-banner-4.png"
                    style="width: 60%; height: 100px">
                <h4 class="text-white mb-1" style="margin-top: 10px;"><strong>HELP US SERVE YOU BETTER!</strong>
                </h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('client.reviewForm') }}"
                class="card-body rounded-3 text-dark p-4 mt-3 mb-5 overflow-auto"
                style="border-radius: 10px;
            overflow: hidden;
            background: rgba(247, 247, 247, 0.26);
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.6);">
                @csrf
                @method('post')
                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-center">
                                <h4 class="text-black mb-1"><strong>Application Form</strong></h4>
                            </div>
                        </div>
                    </div>


                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="emailAddress"> <strong>Active Email Address</strong></label>
                        <input type="email" id="emailAddress" class="form-control" name="emailAddress" maxlength="254"
                            placeholder="example@gmail.com" onfocus="clearPlaceholder(this)"
                            onblur="restorePlaceholder(this)" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="homeAddress"><strong>Home Address</strong> </label>
                        <input type="text" name="homeAddress" id="homeAddress" maxlength="100" class="form-control"
                            placeholder="Brgy. Sto Domingo Cainta Rizal" onfocus="clearPlaceholder(this)"
                            onblur="restorePlaceholder(this)" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="clientType"> <strong>Client Type</strong> </label>
                        <select class="form-control" id="clientType" name="clientType">
                            <option value="Citizen">Citizen</option>
                            <option value="Business">Business</option>
                            <option value="Government">Government(Employee or another agency)</option>
                        </select>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="firstName"><strong>First Name</strong> </label>
                        <input type="text" name="firstName" id="firstName" value="" maxlength="50"
                            class="form-control" placeholder="Juan" onfocus="clearPlaceholder(this)"
                            onblur="restorePlaceholder(this)" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="middleName"> <strong>Middle Name</strong> </label>
                        <input type="text" name="middleName" id="middleName" value="" maxlength="50"
                            class="form-control" placeholder="Dela Cruz" onfocus="clearPlaceholder(this)"
                            onblur="restorePlaceholder(this)">
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="lastName"> <strong>Last Name</strong> </label>
                        <input type="text" name="lastName" id="lastName" value="" maxlength="50"
                            class="form-control" placeholder="Santos" onfocus="clearPlaceholder(this)"
                            onblur="restorePlaceholder(this)" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="gender"> <strong>Gender</strong> </label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="birthDate"> <strong>Birth Date</strong> </label>
                        <input type="date" name="birthDate" id="birthDate" value="" maxlength="50"
                            class="form-control" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-4 col-md-4">
                        <label class="label" for="contact"> <strong>Mobile Number</strong> </label>
                        <input type="tel" id="contact" class="form-control" name="contact" value=""
                            pattern="[0]{1}[9]{1}[0-9]{9}" placeholder="Ex. 09638445701"
                            onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-3 col-md-3">
                        <label class="label" for="divisionOfResidence" style="font-size: 13px;"> <strong>Division of
                                Residence</strong>
                        </label>
                        <input type="text" name="divisionOfResidence" id="divisionOfResidence" value=""
                            maxlength="50" class="form-control" placeholder="Division of Residence"
                            onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-3 col-md-3">
                        <label class="label" for="officeConcerned"> <strong>Office Concerned</strong> </label>
                        <select class="form-control" id="officeConcerned" name="officeConcerned">
                            <option value="ICT Unit">ICT Unit</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Legal Unit">Legal Unit</option>
                        </select>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-3 col-md-3">
                        <label class="label" for="purposeId"> <strong>Purpose</strong> </label>
                        <input type="id" name="purposeId" id="purposeId" value="" maxlength="50"
                            class="form-control" placeholder="Purpose" onfocus="clearPlaceholder(this)"
                            onblur="restorePlaceholder(this)" required>
                    </div>

                    <div class="form-group mt-3 col-sm-12 col-lg-3 col-md-3">
                        <label class="label" for="virtualIdNumber"> <strong>Virtual ID Number</strong> </label>
                        <input type="id" name="virtualIdNumber" id="virtualIdNumber" value=""
                            maxlength="50" class="form-control" placeholder="ID Number"
                            onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
                    </div>
                    <div class="container-responsive">
                        <div class="row align-items-center">

                            <div class="col-8 mt-3 mt-sm-4">
                                <button type="submit" class="btn btn-active bg-dark text-white"
                                    style="font-weight: bold;">Submit</button>
                            </div>

            </form>

            <div class="col-4 mt-3 mt-sm-4">
                <button class="btn btn-primary"><a href="{{ route('client.clientLogs') }}"
                        style="text-decoration: none; color: white; font-weight: bold;">Go to Logs</a></button>
            </div>
        </div>
    </div>
    </div> required

    </div>
    </div>
    <script>

        function clearPlaceholder(input) {
            input.setAttribute('data-original-placeholder', input.placeholder);
            input.placeholder = '';
        }

        function restorePlaceholder(input) {
            if (!input.value.trim()) { // Check if the input field is empty
                input.placeholder = input.getAttribute('data-original-placeholder'); // Restore the placeholder text
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                backdrop: 'static',
                keyboard: false
            });
            myModal.show();

            document.getElementById('agreeButton').addEventListener('click', function() {
                // Add your logic for what happens when the user agrees
                // For example, you might close the modal or redirect to another page
                myModal.hide();
            });
        });
    </script>
</body>

</html>
