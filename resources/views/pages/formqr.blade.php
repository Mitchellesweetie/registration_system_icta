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
    <form  method="POST">
      @csrf

      <h3 class="text-center mb-4">{{ $event->first()->event_name ?? 'Event' }}</h3>
      <p class="text-center mb-4">{{ $event->first()->event_description ?? '' }}</p>
      
      {{-- <input type="hidden" name="event_id" value="{{ $event->first()->id }}"> --}}

      @foreach ($event as $item)
        <div class="mb-3">
          <label class="form-label">{{ $item->questions }}</label>
          <input type="text" class="form-control" name="answers" placeholder="Your answer..." required />
        </div>
      @endforeach

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
