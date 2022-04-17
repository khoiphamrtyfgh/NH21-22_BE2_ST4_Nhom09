@extends('layout')
@section('main-content')

	<table>

    <tr>
        <th>Name</th>
        <th>manu_name</th>
        <th>Description</th>
        </tr>
            @foreach($data as $row)
       
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->manufacture->manu_name }}</td>
            <td>{{ $row->protype->type_name }}</td>
           
        


    </tr>
    @endforeach
    </table>

@endsection
