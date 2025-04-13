<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Questions & Answers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
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

    

    @foreach ($groupedEvents as $eventId => $eventGroup)
    <div class="header">
        <strong>{{ $eventGroup->first()->event_name }}</strong><br>
    </div>
    <div class="event-info">
        <strong>Description:</strong> {{ $eventGroup->first()->event_description }}
    </div>

    <table class="questions-table" border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                @foreach ($uniqueQuestions as $question)
                    <th>{{ $question }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($groupedResponses as $clientId => $answers)
                <tr>
                    @foreach ($uniqueQuestions->keys() as $formId)
                        @php
                            $answer = $answers->firstWhere('form_id', $formId)->answer ?? 'N/A';
                        @endphp
                        <td>{{ $answer }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>

    <br><br>
@endforeach

    <div class="footer">
        Generated on: {{ now()->format('Y-m-d H:i:s') }}
    </div>

</body>
</html>
