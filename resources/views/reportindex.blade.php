@extends('layouts.layout')

@section('content')
    <a href="{{ route('user.report.show') }}" style="margin: 30px;">download report</a>

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

    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ route('logout') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login/Signup</a>
        @endauth
    </div>
@endif
@endsection
