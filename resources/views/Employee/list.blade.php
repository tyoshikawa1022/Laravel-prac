<h3>LaravelでDBから取って来た、簡単な社員一覧を作ってみる</h3>
@foreach ($employees as $employee)
    <tr>
        <td>{{$employee["name"]}}</td>
        <td>{{$employee["tel"]}}</td>
        <td>{{$employee["email"]}}</td>
    </tr>
@endforeach