@extends('layouts.layout')

@section('content')

<h1>REPORT</h1>
<p>TEST REPORT1</p>
<table class="table" style="margin: 30px; width: 80%">
<thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">TITLE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($val['item'] as $row)
            <tr>
                <td>{{ $row['id'] }}</td>
                <td>{{ $row['name'] }}</td>
                <td>{{ $row['title'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
