@extends('layouts.private')

@section('main')
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <div class="grid grid-cols-12 gap-4 md:gap-6">
            <div class="col-span-12 space-y-6">
                <!-- Metric Group One -->
                    @include('partials.private.metric.metric-group')
                <!-- Metric Group One -->

                <!-- ====== Chart One Start -->
                    @include('partials.private.chart.appointments')
                <!-- ====== Chart One End -->
            </div>
        </div>
    </div>
@endSection
