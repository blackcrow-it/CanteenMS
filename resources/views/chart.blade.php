{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Thống kê')

@section('content_header')
	<script src="{{asset('bower_components/chart.js/Chart.min.js')}}"></script>
	<script src="https://codepen.io/anon/pen/aWapBE.js"></script>
@stop

@section('content')
<style type="text/css">
	.table-wrapper-scroll-y {
  display: block;
  max-height: 350px;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;

	
}
</style>
<div class="col-sm-6">
    <div class="box box-success" data-widget="box-widget">
		<div class="box-header">
			<h3 class="box-title header-title">Thống kê theo ngày</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
		<canvas id="myChartForDay" width="400" height="400"></canvas>
		
		</div>
	</div>
</div>
<div class="col-sm-6">
    <div class="box box-success" data-widget="box-widget">
		<div class="box-header">
			<h3 class="box-title header-title">Thống kê theo tuần</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<canvas id="myChartForWeek" width="400" height="400"></canvas>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="box box-success" data-widget="box-widget">
		<div class="box-header">
			<h3 class="box-title header-title">Thống kê theo tuần</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<canvas id="myChartForWeek" width="400" height="400"></canvas>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="box box-success" data-widget="box-widget">
		<div class="box-header">
			<h3 class="box-title header-title">Thống kê theo tuần</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<canvas id="myChartForWeek" width="400" height="400"></canvas>
		</div>
	</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript">
    	$(document).ready(function(){
		    $("#myInput").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#myTable tr").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
		});
    </script>
    <script type="text/javascript">
    	jQuery(document).ready(function($) {
		    $(".clickable-row").click(function() {
		        window.location = $(this).data("href");
		    });
		});
    </script>
	<script type="text/javascript">
		var ctx = document.getElementById("myChartForDay");
		Chart.defaults.scale.ticks.beginAtZero = true;
		var myData =  [ 
						@foreach($sumForDay as $item)
							{{$item->tong_so_luong_xuat}},
						@endforeach
					];
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: [
					@foreach($sumForDay as $item)
						"{{$item->ten_san_pham}} {{$item->ten_nha_san_xuat}}",
					@endforeach
				],
				datasets: [{
					label: 'Ponits',
					data: myData,
					backgroundColor: palette('tol', myData.length).map(function(hex) {
						return '#' + hex;
					}),
				}]
			},
			options: {
				animation: {
					animateScale:true
				}
			}
		});
	</script>
	<script type="text/javascript">
		var ctx = document.getElementById("myChartForWeek");
		Chart.defaults.scale.ticks.beginAtZero = true;
		var myData =  [ 
						@foreach($sumForWeek as $item)
							{{$item->tong_so_luong_xuat}},
						@endforeach
					];
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: [
					@foreach($sumForWeek as $item)
						"{{$item->ten_san_pham}} {{$item->ten_nha_san_xuat}}",
					@endforeach
				],
				datasets: [{
					label: 'Ponits',
					data: myData,
					backgroundColor: palette('tol', myData.length).map(function(hex) {
						return '#' + hex;
					}),
				}]
			},
			options: {
				animation: {
					animateScale:true
				}
			}
		});
	</script>
@stop