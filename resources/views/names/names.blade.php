@extends('layouts.master')

@section('content')

    @if  ($rtype == 1)
        <h1>Физически лица</h1>
    @elseif ($rtype == 2)
        <h1>Юридичеси лица</h1>
    @endif
    <table>
        <thead>
        <tr>
            <th>ID</th>
            @if ($rtype == 1)
                <th>Име</th>
            @elseif($rtype == 2)
                <th>Име юридическо лице</th>
            @endif
            @if($rtype == 1)
                <th>Презиме</th>
                <th>Фамилия</th>
            @endif
            <th>ЕГН(ЕИК)</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($names as $name)
                <tr>
                    <td>{{ $name->id }}</td>
                    <td>{{ $name->name }}</td>
                        @if($name->rtype == 1)
                            <td>{{ $name->surname }}</td>
                            <td>{{ $name->family }}</td>
                        @endif
                    <td>{{ $name->egn_eik }}</td>
                    <td>{{ $name->rtype }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection