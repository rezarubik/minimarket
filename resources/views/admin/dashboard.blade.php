@extends('layouts.admin')
@section('headTitle')
<h4 class="page-title pull-left">Dashboard</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('admin.dashboard')}}">Home</a></li>
  <li><span>Dashboard</span></li>
</ul>
@stop

@section('content')

<!-- sales report area start -->
<div class="sales-report-area mt-5 mb-5">
  <div class="row">
    <div class="col-md-4">
      <div class="single-report mb-xs-30">
        <div class="s-report-inner pr--20 pt--30 mb-3">
          <div class="icon"><i class="fa fa-btc"></i></div>
          <div class="s-report-title d-flex justify-content-between">
            <h4 class="header-title mb-0">Bitcoin</h4>
            <p>24 H</p>
          </div>
          <div class="d-flex justify-content-between pb-2">
            <h2>$ 4567809,987</h2>
            <span>- 45.87</span>
          </div>
        </div>
        <canvas id="coin_sales1" height="100"></canvas>
      </div>
    </div>
    <div class="col-md-4">
      <div class="single-report mb-xs-30">
        <div class="s-report-inner pr--20 pt--30 mb-3">
          <div class="icon"><i class="fa fa-btc"></i></div>
          <div class="s-report-title d-flex justify-content-between">
            <h4 class="header-title mb-0">Bitcoin Dash</h4>
            <p>24 H</p>
          </div>
          <div class="d-flex justify-content-between pb-2">
            <h2>$ 4567809,987</h2>
            <span>- 45.87</span>
          </div>
        </div>
        <canvas id="coin_sales2" height="100"></canvas>
      </div>
    </div>
    <div class="col-md-4">
      <div class="single-report">
        <div class="s-report-inner pr--20 pt--30 mb-3">
          <div class="icon"><i class="fa fa-eur"></i></div>
          <div class="s-report-title d-flex justify-content-between">
            <h4 class="header-title mb-0">Euthorium</h4>
            <p>24 H</p>
          </div>
          <div class="d-flex justify-content-between pb-2">
            <h2>$ 4567809,987</h2>
            <span>- 45.87</span>
          </div>
        </div>
        <canvas id="coin_sales3" height="100"></canvas>
      </div>
    </div>
  </div>
</div>
<!-- sales report area end -->
<!-- overview area start -->
<div class="row">
  <div class="col-xl-9 col-lg-8">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <h4 class="header-title mb-0">Overview</h4>
          <select class="custome-select border-0 pr-3">
            <option selected>Last 24 Hours</option>
            <option value="0">01 July 2018</option>
          </select>
        </div>
        <div id="verview-shart"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 coin-distribution">
    <div class="card h-full">
      <div class="card-body">
        <h4 class="header-title mb-0">Coin Distribution</h4>
        <div id="coin_distribution"></div>
      </div>
    </div>
  </div>
</div>
<!-- overview area end -->

@stop
@section('javascriptForThisPage')
<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
  zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
  ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>
<!-- all line chart activation -->
<script src="{{asset('assets/js/line-chart.js')}}"></script>
<!-- all pie chart -->
<script src="{{asset('assets/js/pie-chart.js')}}"></script>
@stop