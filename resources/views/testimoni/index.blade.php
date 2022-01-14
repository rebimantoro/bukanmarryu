@extends('layouts.adminLayout')
@section('konten')
@section ('testimoni')
active
@endsection
<div class="container">
    <h3 align="center" class="mt-5">Testimoni List</h3>
<hr>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Timestamp</th>
                <th>Testimoni</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
    
            @foreach ($feedback as $key)
            <tr>
                <td>{{ $key->id }}</td>
                <td>{{ $key->name }}</td>
                <td>{{ $key->created_at }}</td>
                <td width="400px">{{ $key->desc }}</td>
                <td>{{ $key->show }}</td>
                <td>
                    <div>
                        @if ($key->show =="no")
                        <a href='/admin/testimoni/show/{{ $key->id }}' type="button" class="btn btn-success" >Show</a>
                        @else
                        <a href='/admin/testimoni/hide/{{ $key->id }}' type="button" class="btn btn-warning" >Hide</a>
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-1"></div>
</div>

</div>

@endsection