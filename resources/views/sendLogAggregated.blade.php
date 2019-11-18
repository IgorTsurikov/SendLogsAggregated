<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Send Log Aggregated</title>
    </head>
    <body>
        <div>
            <div>
                <h1>Send Log Aggregated</h1>
            </div>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form method="POST" action="/">
                {{ csrf_field() }}
            <div>
                <div>
                    Country: {{ Form::select('country', [null => 'Select country'] + $countries, isset($selectedCountry) ? $selectedCountry : '') }}
                </div>
                <div>
                    User: {{ Form::select('user', [null => 'Select user'] + $users, isset($selectedUser) ? $selectedUser : '') }}
                </div>
                <div>
                    From:<input type="date" name="date-from"
                                value="{{ isset($fromDateValue) ? $fromDateValue: $startDate }}"
                                min="{{ $startDate }}"
                                max="{{ $endDate }}">
                </div>
                <div>
                    To:<input type="date" name="date-to"
                              value="{{ isset($toDateValue) ? $toDateValue: $endDate }}"
                              min="{{ $startDate }}"
                              max="{{ $endDate }}">
                </div>
                <div>
                    <input type="submit">
                </div>
                <div>
                    @if(! empty($sendLogAggregated))
                        <table border="1" cellpadding="5">
                            <tr>
                                <th>Date</th>
                                <th>Successfully sent</th>
                                <th>Failed</th>
                            </tr>
                            @foreach ($sendLogAggregated as $log)
                            <tr>
                                <td>{{ $log->log_created }}</td>
                                <td>{{ $log->sent_success }}</td>
                                <td>{{ $log->sent_fail }}</td>
                            </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
