@extends('layouts.admin')
@section('title', __("admin/sidebar.{$title}"))

@section('content')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">الرئيسية</a>
              </li>
              <li class="breadcrumb-item"><a href="">طرق الشحن</a>
              </li>
              <li class="breadcrumb-item active">تحديث وسلة الشحن</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="basic-form-layouts">
        <div class="row match-height">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">تحديث وسلة الشحن</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              @include('dashboard.includes.alerts.success')
              @include('dashboard.includes.alerts.error')
              <div class="card-content collapse show">
                <div class="card-body">
                  <form class="form" action="{{ route('shipping.method.update', $shippingMethod->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $shippingMethod->id }}">

                    <div class="form-body">


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <x-form.input name="value" label="{{ __('admin/shipping.name') }}" value="{{ $shippingMethod->value }}" />
                          </div>
                        </div>


                        <div class="col-md-6 ">
                          <div class="form-group">
                            <x-form.input name="plain_value" type="number" label="{{ __('admin/shipping.cost') }}" value="{{ $shippingMethod->plain_value }}" />
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="form-actions">
                      <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                        <i class="ft-x"></i> تراجع
                      </button>
                      <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> حفظ
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- // Basic form layout section end -->
    </div>
  </div>
</div>

@endsection
