@extends('layouts.backend')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">{{ __('Dashboard') }}</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">App</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">{{ __('Dashboard') }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ App\Models\Master::count() }}</dt>
                        <dd class="text-muted mb-0">{{ __('Me encanta programar') }}</dd>
                    </dl>
                    <!--                    <div class="item item-rounded bg-body">
                                            <i class="fa fa-shopping-cart font-size-h3 text-primary"></i>
                                        </div>-->
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{ route('master.index') }}">
                        {{ __('View masters') }}
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ App\Models\Workshop::count() }}</dt>
                        <dd class="text-muted mb-0">{{ __('Workshop') }}</dd>
                    </dl>
                    <!--                    <div class="item item-rounded bg-body">
                                            <i class="fa fa-users font-size-h3 text-primary"></i>
                                        </div>-->
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{ route('workshop.index') }}">
                        {{ __('View Workshop') }}
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ App\Models\WorkshopRegistration::count() }}</dt>
                        <dd class="text-muted mb-0"></dd>
                    </dl>
                    <!--                    <div class="item item-rounded bg-body">
                                            <i class="fa fa-inbox font-size-h3 text-primary"></i>
                                        </div>-->
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{ route('workshopRegistration.index') }}">
                        {{ __('View registrations') }}
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
<!--            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">4.5%</dt>
                        <dd class="text-muted mb-0">Conversion Rate</dd>
                    </dl>
                                        <div class="item item-rounded bg-body">
                                            <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                                        </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                        View statistics
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
