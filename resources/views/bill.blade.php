{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Phiếu mua hàng')

@section('content_header')
@stop

@section('content')
<style type="text/css">
	.table-wrapper-scroll-y {
  display: block;
  max-height: 250px;
  height: 250px;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;

  
}
</style>
<style>
#img1{
	width: 90%;
	border: 1px  solid ;
}
#aaa{
	height: 265px;
}
</style>
<form id="contact" action="{{ route('addBill') }}" method="POST" >
	<input class="form-control" id="bill" type="text" name="bill" style="width: 20%; display: none;" readonly>
	<div class="row">
		<div class="col-sm-8">
			<div class="box box-danger" data-widget="box-widget">
				<div class="box-header with-border">
						<div class="box-title header-title">Sản phẩm</div>
						<div class="box-tools pull-right"><input type="text" style=" border: none;" name="" id="myInput" placeholder="Tìm kiếm ..." class="form-control"></div>
				</div>
				<div class="box-body">
					<table class="table table-hover" id="table-product">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên sản phẩm</th>
								<th>Tên nhà sản xuất</th>
								<th>Đơn giá</th>
								<th>Đơn vị</th>
								<th>Số Lượng</th>
							</tr>
						</thead>
						<tbody id="myTable">
							@foreach($data as $item)
							<tr id="line_{{ $item->ma_san_pham }}" style="cursor: pointer;">
								<td>{{ $index++ }}</td>
								<td>{{ $item->ten_san_pham }}</td>
								<td>{{ $item->ten_nha_san_xuat }}</td>
								<td>{{ $item->don_gia }}</td>
								<td>{{ $item->don_vi }}</td>
								<td>{{ $item->so_luong }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!---------------------------------------------------------------------------------------------------------------------->
		<div class="col-sm-4">
			<div class="box box-warning" data-widget="box-widget">
				<div class="box-header with-border">
					<div class="box-title">Thông tin nhân viên</div>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>	
				<div class="box-body" id="aaa">
					<div class="col-sm-5">
						<div><img src="{{$dataUser->path_hinh_anh}}" alt="" id="img1"></div>
					</div>
					<div class="col-sm-7" >
						<input id="user" name="user" value="{{ $dataUser->ten_tai_khoan }}" style="width: 20%; display: none;" readonly>
						
						<b>Tên nhân viên:</b> {{ $dataUser->ten_nhan_vien }}<br><br>
						<b>Chức vụ:</b> {{ $dataUser->chuc_vu }}<br><br>
						<b>Giới tính:</b> {{ $dataUser->gioi_tinh }}<br><br>
					</div>
				</div>
			</div>
		</div>
		<!---------------------------------------------------------------------------------------------------------------------->
		
	</div>
	
<div class=""></div>
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">Phiếu mua hàng</h3>
		</div>
		<div class="box-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Tên sản phẩm</th>
						<th>Tên nhà sản xuất</th>
						<th>Đơn giá</th>
						<th>Đơn vị</th>
						<th>Số Lượng</th>
						<th>Thành tiền</th>
						<th></th>
					</tr>
				</thead>
				<tbody class="product">
					{{ csrf_field() }}
					<tr id="display_none">
						<td><input class="form-control " type="text"  readonly ></td>
						<td><input class="form-control" type="text" readonly></td>
						<td><input class="form-control price" type=""  readonly></td>
						<td><input class="form-control" type="" readonly></td>
						<td><input  style="width: 70px" type="number"  class="form-control quantity" max="'+quantity+'" min="1" readonly  ></td>
						<td><input class="form-control amount" type="text" readonly></td>
						<td></td>
					</tr>
				</tbody>
				<tfoot>
					<th><button type="submit" class="btn btn-success add-bill">Lưu</button></th>
					<th></th>
					<th></th>
					<th>Số loại sản phẩm</th>
					<th><input style="width: 70px" class="form-control products" type="text" name="products"  readonly></th>
					<th>Tổng tiền (VND):</th>
					<th><input style="width: 100px" class="form-control total" type="text" name="total"  readonly=""></th>
					<th></th>
				</tfoot>
			</table>
		</div>
	</div>
	<div>

	</div>
</form>
<div id=""></div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> console.log('Hi!'); </script>
<script type="text/javascript">
	var i;
	var n = ($('.product tr').length-0);
	var arrays = [];
	$(document).ready(function(){
	    $("#bill").val(makeid());
	    $("input[name=products]").val(0);
	    $("input[name=total]").val(0);
	    $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
	});
	
	$('#table-product tbody tr').click(function(){
		var no = $(this).find('td:eq(0)').text();
		var name = $(this).find('td:eq(1)').text();
		var producer = $(this).find('td:eq(2)').text();
		var price = $(this).find('td:eq(3)').text();
		var unit = $(this).find('td:eq(4)').text();
		var quantity = $(this).find('td:eq(5)').text();
		var alias = convertToSlug(name+'-'+producer);
		var array = [name, producer];
		var total = 0;
		$('#display_none').css('display', 'none');
		if(!isItemInArray(arrays, array)) {		
			arrays.push([name, producer]);
			$('.product').append('<tr>'+
				'<td><input class="form-control " type="text" name="name[]" value="'+name+'"  readonly>'+'</td>'+
				'<td><input class="form-control" type="text" name="producer[]" value="'+producer+'" readonly>'+'</td>'+
				'<td><input class="form-control price" type="" name="price[]" value="'+price+'" readonly>'+'</td>'+
				'<td><input class="form-control " type="" name="unit[]" value="'+unit+'" readonly>'+'</td>'+
				'<td><input  style="width: 70px" type="number" class="form-control quantity" name="quantity[]" id="qtt'+no+'" max="'+quantity+'" min="1" value="1" >'+'</td>'+
				'<td style="display:none;"><input class="form-control" type="text" name="alias[]" value="'+alias+'">'+'</td>'+
				'<td><input class="form-control amount" type="text" name="amount[]" value="'+price+'" readonly></td>'+
				'<td class="remove"><button class="btn btn-danger">Xóa</button></td>'+
				'</tr>');
			var products = $('.products').val();
			products++;
			$('.products').val(products);
			swal({
			  title: "Đã chọn sản phẩm " +name,
			  icon: "success",
			  timer: 1000,
			  button:false,
              
			});
			$("input[name=total]").val(parseInt($("input[name=total]").val())+parseInt(price));
		} else {
			swal({
			  title: "Sản phẩm đã được chọn ",
			  icon: "warning",
			  timer: 1000,
			  button:false,
              
			});
		}
		// console.log(price*quantity);
		});
	function convertToSlug(Text)
	{
		return Text.toLowerCase().replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a').replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e').replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i').replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o').replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u').replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y').replace(/đ/gi, 'd').replace(/[^\w-]+/g,'-').replace(/ /g,'-');
	}
	$('body').delegate('.quantity','change',function()  
	{  
		var tr=$(this).parent().parent();  
		var qty=tr.find('.quantity').val();  
		var price=tr.find('.price').val();  
		var amt =(qty * price);
		tr.find('.amount').val(amt);  
		total();
	}); 
	$('body').delegate('.remove','click',function()  
	{  
		$(this).parent().remove();
		var amount = $(this).parent().find('td:eq(6)').find('input').val();
		var name = $(this).parent().find('td:eq(0)').find('input').val();
		var producer = $(this).parent().find('td:eq(1)').find('input').val();
		var total = $('.total').val();
		var last_total = (total-0) - (amount-0);
		$('.total').val(last_total);
		var products = $('.products').val();
		products--;
		$('.products').val(products);
		var array = [name, producer];
		var x = 0;
		for (var i = 0; i < arrays.length; i++) {
	        if (arrays[i][0] == array[0] && arrays[i][1] == array[1]) {
		            x = i;
		        }
	    }
		swal({
			  title: "Đã xóa sản phẩm " +name+' '+producer ,
			  icon: "success",
			  timer: 1000,
			  button:false,
              
			});
		arrays.splice(x,1);
		console.log(arrays);
	});  
	function total()  
	{  
		var t = 0;  
		$('.amount').each(function(i,e)   
		{  
			var amt = $(this).val()-0;
			t += amt;  
		});  
		$('.total').val(t);  
	}
	function makeid() {
	  var text = "";
	  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

	  for (var i = 0; i < 10; i++)
	    text += possible.charAt(Math.floor(Math.random() * possible.length));

	  return text;
	}
	function isItemInArray(array, item) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][0] == item[0] && array[i][1] == item[1]) {
            return true;
        }
    }
    return false;
}

 
 
       $('.add-bill').click(function(){
       	if ($.trim($('.products').val()) == 0) {
       		swal({
			  title: "Chưa chọn sản phẩm" ,
			  icon: "error",
         });
            return false;
       	}
		 $('.contact').submit();
		 
		       })
        
        


</script>
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
	$(document).ready(function() {
		// $('#table-product').DataTable({
		// 	"filter":false,
		// 	"length":false,
		// 	"info":false,
		// 	"paging":false
		// });
			$('#table-product').DataTable( {
			"scrollY":        "200px",
			"scrollCollapse": true,
			"paging":         false,
			"info":false,
			"filter":	false
		} );
	} );
</script>
@stop