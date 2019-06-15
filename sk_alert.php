<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>
    <script>
        jQuery(document).ready(function($){
            $('.hapus').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                       title: 'Hapus Data',
                       text: "Apakah anda yakin akan menghapus data ini?",
                       type: 'warning',
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'Yes ',
                       cancelButtonText: 'No',
                       confirmButtonClass: 'btn btn-success',
                       cancelButtonClass: 'btn btn-danger',
                       buttonsStyling: false
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($){
            $('.ubah').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                       title: 'Ubah Data',
                       text: "Apakah anda yakin akan mengubah data ini?",
                       type: 'warning',
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'Yes ',
                       cancelButtonText: 'No',
                       confirmButtonClass: 'btn btn-success',
                       cancelButtonClass: 'btn btn-danger',
                       buttonsStyling: false
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>