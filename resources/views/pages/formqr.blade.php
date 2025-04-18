<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .form-wrapper {
      width: 100%;
      max-width: 600px;
      padding: 2rem;
      background-color: #fff;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="form-wrapper">
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@elseif(session('success'))
    <div class="alert alert-succes alert-dismissible fade show">
        <ul>
            <li>{{ session('success') }}</li>
        </ul>
    </div>
@endif
<form  method="POST" action="{{ route('questionsresponse')}}" id="responseForm">
      {{-- <form action="" method="post"></form> --}}
      @csrf

      <h3 class="text-center mb-4">{{ $event->event_name ?? 'Event' }}</h3>
      <p class="text-center mb-4">{{ $event->event_description ?? '' }}</p>
      
      
      {{-- <input type="hidden" name="event_id" value="{{ $event->first()->id }}"> --}}

      @foreach ($questions as $item)
        <div class="mb-3">
          <label class="form-label">{{ $item->questions }}</label>
          <input type="text" class="form-control"         name="answers[{{ $item->id }}]"
          placeholder="Your answer..." required />
        </div>
      @endforeach

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      document.getElementById('responseForm').addEventListener('submit', function(event) {
       event.preventDefault(); // ✅ This prevents the form from submitting normally

  const form = this;
  const formData = new FormData(form);

  fetch("{{ route('questionsresponse') }}", {
    method: "POST",
    headers: {
      'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
      'Accept': 'application/json'
    },
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: data.message,
      });
      form.reset();
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops!',
        text: data.message || 'Something went wrong!',
      });
    }
  })
  .catch(error => {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Something went wrong while submitting your responses.',
    });
    console.error(error);
  });
});

    </script>
</body>
</html>
