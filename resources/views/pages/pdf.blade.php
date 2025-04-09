<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Questions & Answers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }
        .event-info {
            margin-bottom: 20px;
        }
        .questions-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        .questions-table th, .questions-table td {
            border: 1px solid #000;
            padding: 12px;
            font-size: 14px;
            text-align: center;
        }
        .questions-table th {
            background-color: #f0f0f0;
        }
        .footer {
            position: fixed;
            bottom: 20px;
            text-align: center;
            font-size: 12px;
            color: #555;
            width: 100%;
        }
    </style>
</head>
<body>

   

    @foreach ($groupedEvents as $eventGroup)
    <div class="header">
        <strong>Event Name:</strong> {{ $eventGroup->first()->event_name }} <br>

    </div>
        <div class="event-info">
            <strong>Description:</strong> {{ $eventGroup->first()->event_description }}
        </div>

        <table class="questions-table">
            <thead>
                <tr>
                    @foreach ($eventGroup as $event)
                        <th>{{ $event->questions }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($eventGroup as $event)
                        <td>{{ $event->answer ?? 'N/A' }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <br><br>
    @endforeach

    <div class="footer">
        Generated on: {{ now()->format('Y-m-d H:i:s') }}
    </div>

</body>
</html>
