<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container">
    <img class="ax-center my-10 w-24" src="https://yorkshirehairandskinsolutions.co.uk/assets/img/yorkshirelogo_2.png" />
    <div class="card p-6 p-lg-10 space-y-4">
      <h1 class="h3 fw-700">
        Thank you for contacting Yorkshire Hair & Skin Solutions
      </h1>
      <p>
        Dear {{ $contact->name }},
      </p>
      <p>
        We have received your message:<br>
        <strong>Subject:</strong> {{ $contact->subject }}<br>
        <strong>Message:</strong> {{ $contact->Message }}
      </p>
      <p>
        Our team will get back to you soon.
      </p>
      <a class="btn btn-primary p-3 fw-700" href="https://yorkshirehairandskinsolutions.co.uk">Visit Website</a>
    </div>
    <img class="ax-center mt-10 w-40" src="https://yorkshirehairandskinsolutions.co.uk/assets/img/yorkshirelogo_2.png" />
    <div class="text-muted text-center my-6">
      Sent with &lt;3 from Yorkshire Hair & Skin Solutions<br>
      175 Dewsbury Roads <br>
      Leeds LS11 5EG <br>
    </div>
  </div>
</body>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<html>
