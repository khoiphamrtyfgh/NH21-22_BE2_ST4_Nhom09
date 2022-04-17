@extends('layout')
@section('main-content')

	<table>

    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        </tr>
            @foreach($data as $row)
       
        <tr>
            <td>{{ $row->name }}</td>
           
        


    </tr>
    @endforeach
    </table>

@endsection
