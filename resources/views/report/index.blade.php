@extends('layouts.app')

@section('content')
    <div class="absolute h-full pt-14 custom_content transition-all ease-in-out duration-500 bg-[#EBF4FA]">
        <div class="px-6 pt-4">
            <div class="flex flex-col lg:flex-row space-y-8 lg:space-x-16">
                {{-- LEFT CONTENT --}}
                @include('pages.report.left-content')
                {{-- MAIN CONTENT --}}
                @include('pages.report.main-content')
            </div>
        </div>
    </div>
@endsection
