<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <title>Mail from Company</title>
</head>

<body>
    <div class="container">
        <div>
            <h2 class="grey mt-5">INBOX</h2>
            <hr>
            <h3 class="greenColor mb-2">Thank you for your request! You have send your mail successfully!</h3>
            <ul>
                <li>Company email: {{$company['email']}}</li>
                <li>Company phone: {{$company['phone']}}</li>
                <li>Company name: {{$company['name']}}</li>
            </ul>
            <p class="mb-5">Best regards {{$company['name']}}.</p>
        </div>
        <div>
            <h5 class="mb-2">Do you want to continue to our page?</h5>
            <button class="btn btn-danger btn-md px-5"><a href="{{route('brainster.index')}}" class="logBtn px-3 text-light">Back</a>
            </button>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src=/js/main.js></script>

</html>