@extends('layouts.base')
@section('content')
    <div>
        Aquí podrás ver PERFIL
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ Auth::user()->id }}</td>
                    <td>{{ Auth::user()->email }}</td>
                    <td>{{ Auth::user()->username }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{ url('/home') }}">Ir a Home</a>
@endsection
