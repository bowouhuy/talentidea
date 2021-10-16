@extends('mitra.layouts.main')

@section('body')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6"><h4 class="mt-0 header-title">List {{ $title }}</h4></div>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">id</th>
                            <th class="text-center">Nama Jasa</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Status Transaksi</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Datatable -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- MODAL -->
<!-- <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{url('mitra/jasa/form_images_store')}}" class="dropzone" id="dropzone" method="post">
                        @csrf
                        <input type="hidden" name="jasa_id" value="">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                        </form> 
            </div>
            <div class="modal-footer">
                <form action="{{url('admin/transaksi/store')}}" method="post">
                @csrf
                    <input type="hidden" name="confirm_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div> -->

<script src="{{ asset('admin_template/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin_template/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('admin_template/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_template/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('user_template/assets/plugins/sweet-alert2/sweetalert2.min.js')}} "></script>
<script src="{{ asset('user_template/assets/pages/sweet-alert.init.js')}} "></script>
<script>
    $(document).ready(function() {
        var dataTable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: "{{ url('mitra/order/list') }}",
            "order": [[ 0, "desc" ]],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'jasa.nama', name: 'jasa.nama'},
                {data: 'tanggal_transaksi', name: 'tanggal_transaksi'},
                {data: 'status_transaksi', name: 'status_transaksi'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });

    function confirm_transaksi(image_url, id_transaksi){
        console.log(image_url)
        console.log(id_transaksi)
        $('.show-image').html('<img src='+ image_url +' class="rounded" width="100%">')
        $('[name="confirm_id"]').val(id_transaksi); 
        $('#imageModal').modal('show'); 
    }
    function upload(id_transaksi){
        console.log(id_transaksi)
        $('[name="transaksi_id"]').val(id_transaksi); 
        $('#imageModal').modal('show'); 
    }
    function delete_jasa(jasa_id){
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result) {
                $.ajax({
                    type: 'GET',
                    url: '{{ url("mitra/jasa/delete_jasa")}}' + '/' + jasa_id,
                    success: function (data){
                        swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        ).then(()=> {
                            window.location.replace("{{ url('mitra/jasa')}}")
                        })
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
            }
        })
    };

    var myDropzone = new Dropzone(".dropzone", { 
        maxFilesize: 12,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) 
        {
            var name = file.name;
            $.ajax({
                type: 'GET',
                url: '{{ url("admin/jasa/delete_files")}}' + '/' + name,
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }
            });
            var fileRef;
            return (fileRef = file.previewElement) != null ? 
            fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function(file, response) 
        {
            console.log(response)
        },
        error: function(file, response)
        {
            return false;
        },
        
    });
</script>

@endsection