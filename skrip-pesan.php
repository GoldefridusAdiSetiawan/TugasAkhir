<script type="text/javascript">
	    $(document).ready(function(){
	        $('#show').on('show.bs.modal', function (e) {
	            var getDetail = $(e.relatedTarget).data('id');
	            /* fungsi AJAX untuk melakukan fetch data */
	            $.ajax({
	                type : 'post',
	                url : 'isi_pesan.php',
	                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
	                data :  'getDetail='+ getDetail,
	                /* memanggil fungsi getDetail dan mengirimkannya */
	                success : function(data){
	                $('.modal-data').html(data);
	                /* menampilkan data dalam bentuk dokumen HTML */
	                }
	            });

	         });
	    });
  		</script>
  		
  		<script>
			function fungsi() {
			    window.location.reload();			   
			}
		</script>