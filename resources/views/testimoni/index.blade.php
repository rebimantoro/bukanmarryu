@extends('layouts.adminLayout')
@section('konten')
@section ('testimoni')
active
@endsection
<div class="container">
    <h3 align="center" class="mt-5">Testimoni List</h3>
<hr>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Timestamp</th>
            <th>Testimoni</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Tasya Lu'Lu Armina</td>
            <td>timestamp</td>
            <td width="800px">website ini memberikan saya pilihan dekorasi yang sangat
                cantik membuat pernikahan saya terlihat menyenangkan dan
                tidak terlupakan!</td>
            <td>
                <button type="button" class="btn btn-success" >Show</button>
            </td>
        </tr>
    </table>
</div>

@endsection