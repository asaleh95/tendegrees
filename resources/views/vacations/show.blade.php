<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
    <ul>
    <li>from : {{ $vacation->from}}</li>
    <li>To : {{ $vacation->to}}</li>
    <li>Employee : {{ $vacation->empolyee}}</li>
    <li>Status : {{ $vacation->status}}</li>
    <li>reason : {{ $vacation->reason}}</li>
    </ul>

    <br>
    @if($vacation->status == "pended")
    <form action="/vacations" method="POST">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input type="hidden"  name="vacation_id" value="{{$vacation->id}}">
    <input type="hidden"  name="emp_id" value="{{$vacation->emp_id}}">
    <input type="submit" class="button" value="Accept">
    </form>
    @endif
</body>
</html>