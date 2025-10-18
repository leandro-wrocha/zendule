@extends('layouts.app')

@section('content')
    <!-- ===== Page Wrapper Start ===== -->
        <div class="flex h-screen overflow-hidden">
            <!-- ===== Sidebar Start ===== -->
                @include('partials.private.sidebar')
            <!-- ===== Sidebar End ===== -->

            <!-- ===== Content Area Start ===== -->
                <div
                    class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
                    <!-- Small Device Overlay Start -->
                        @include('partials.overlay')
                    <!-- Small Device Overlay End -->

                    <!-- ===== Header Start ===== -->
                        @include('partials.header')
                    <!-- ===== Header End ===== -->

                    <!-- ===== Main Content Start ===== -->
                        <main>
                            @yield('main')
                        </main>
                    <!-- ===== Main Content End ===== -->
                </div>
            <!-- ===== Content Area End ===== -->
        </div>
    <!-- ===== Page Wrapper End ===== -->
@endSection
