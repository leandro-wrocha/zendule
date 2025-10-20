@extends('layouts.app')

@section('content')
<!-- ===== Page Wrapper Start ===== -->
    <div class="relative flex flex-col items-center justify-center min-h-screen p-6 overflow-hidden z-1">
        <!-- ===== Common Grid Shape Start ===== -->
            <div class="absolute right-0 top-0 -z-1 w-full max-w-[250px] xl:max-w-[450px]">
                <img src="{{ asset('shape/grid-01.svg') }}" alt="grid">
            </div>

            <div class="absolute bottom-0 left-0 -z-1 w-full max-w-[250px] rotate-180 xl:max-w-[450px]">
            <img src="{{ asset('shape/grid-01.svg') }}" alt="grid">
            </div>
        <!-- ===== Common Grid Shape End ===== -->

        <div class="mx-auto w-full max-w-[242px] text-center sm:max-w-[562px]">
            <h1 class="mb-8 font-bold text-gray-800 text-title-md dark:text-white/90 xl:text-title-2xl">
                ERROR
            </h1>

            <img src="{{ asset('error/500.svg') }}" alt="500" class="dark:hidden">
            <img src="{{ asset('error/500-dark.svg') }}" alt="500" class="hidden dark:block">

            <p class="mt-10 mb-6 text-base text-gray-700 dark:text-gray-400 sm:text-lg">
                We can’t seem to find the page you are looking for!
            </p>

            <a href="/" class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3.5 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                Back to Home Page
            </a>
        </div>

        <!-- Footer Start -->
            <p class="absolute text-sm text-center text-gray-500 -translate-x-1/2 bottom-6 left-1/2 dark:text-gray-400">
                © <span id="year">2025</span> - TailAdmin
            </p>
        <!-- Footer End -->
    </div>
<!-- ===== Page Wrapper End ===== -->
@endSection
