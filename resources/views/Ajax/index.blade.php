@extends('layouts.app')
@section('title', 'Welocme to Ajax index page')
@section('type', 'Index')
@section('content')
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Customer Name</th>
                <th>Customer Mobile</th>
                <th>Customer Gender</th>
                <th>Customer Type</th>
                <th>Customer Image</th>
                <th>Customer Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($datas as $key=>$data)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->mobile }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->type }}</td>
                <td>{{ $data->image }}</td>
                <td>{{ $data->customer_status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $datas->links()  }}
@endsection