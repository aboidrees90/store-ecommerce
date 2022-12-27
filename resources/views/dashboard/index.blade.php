@extends('layouts.admin')
@section('title','لوحة التحكم')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>إجمالي المبيعات</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$9,980</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="btc-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>إجمالي الطلبات</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$944</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="eth-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>عدد المنتجات</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>200</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP success text-white font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>عدد العملاء</h4>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>2000</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="new-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Candlestick Multi Level Control Chart -->

            <!-- Sell Orders & Buy Order -->
            <div class="row match-height">
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">أحدث الطلبيات</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th>حالة الطلب</th>
                                            <th>العميل</th>
                                            <th>المبلغ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-success bg-lighten-5">
                                            <td>1</td>
                                            <td>مكتمل</td>
                                            <td>محمد أبوإدريس الطريفي</td>
                                            <td>$ 100.00</td>
                                        </tr>
                                        <tr class="bg-warning bg-lighten-5">
                                            <td>2</td>
                                            <td>قيد الإجراء</td>
                                            <td>محمد أبوإدريس الطريفي</td>
                                            <td>$ 200.00</td>
                                        </tr>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>3</td>
                                            <td>ملغي</td>
                                            <td>محمد أبوإدريس الطريفي</td>
                                            <td>$ 200.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">أخر التقييمات</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                        <tr>
                                            <th>العميل</th>
                                            <th>المنتج</th>
                                            <th>التقييم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>محمد أبوإدريس الطريفي</td>
                                            <td>ساعة ذكية</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>محمد أبوإدريس الطريفي</td>
                                            <td>لابتوب توشيبا</td>
                                            <td>4.5</td>
                                        </tr>
                                        <tr>
                                            <td>محمد أبوإدريس الطريفي</td>
                                            <td>أيفون 14</td>
                                            <td>5</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sell Orders & Buy Order -->

        </div>
    </div>
</div>
@endsection
