@extends('layouts.adminLayout')
@section('konten')
<br> <br><br> <br>
<div class="container">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Timestamp</th>
            <th>Testimoni</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>No</td>
            <td>Tasya Lu'Lu Armina</td>
            <td>timestamp</td>
            <td width="800px">website ini memberikan saya pilihan dekorasi yang sangat
                cantik membuat pernikahan saya terlihat menyenangkan dan
                tidak terlupakan!</td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="">
                Delete
            </button></td>
        </tr>

            <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>WARNING !!!</b> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Are you sure to delete <b></b> ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <form action="" method="post">
                        <button type="submit" class="btn btn-danger" value="">Yes</button>
                    </form>
                    
                    </div>
                </div>
                </div>
            </div>

    </table>
    

</div>

@endsection