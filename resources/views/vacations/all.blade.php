<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
@if ($vacations !== '')
    <div class="table-container">
    <table class="table">
        <!-- Your table content -->
        <tr>
            <th>From</th>
            <th>To</th>
            <th>Employee</th>
            <th>Status</th>
        </tr>
        @foreach ($vacations as $vacation)
            <tr>
            <td> {{ $vacation->from}}</td>
            <td> {{ $vacation->to}}</td>
            <td> {{ $vacation->empolyee}}</td>
            <td> {{ $vacation->status}}</td>
            </tr>
        @endforeach
    </table>
    </div>
@else
    no data to show
@endif
</body>
</html>