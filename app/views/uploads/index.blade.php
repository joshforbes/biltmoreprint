@extends('layouts.admin')

@section('content')
<h1 class="page-header">Uploads</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Company Name</th>
                <th>Project Name</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($uploads as $upload)
            <tr>
                <td>{{ $upload->id }}</td>
                <td>{{ $upload->name }}</td>
                <td>{{ $upload->company }}</td>
                <td>{{ $upload->project }}</td>
                <td>{{ link_to_route('uploads.show', 'view', $upload->id) }}</td>
                <td>{{ link_to_route('uploads.destroy', 'delete', $upload->id) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@stop