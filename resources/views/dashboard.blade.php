@extends('layouts.app')

@section('content')
    <div class="absolute h-full pt-14 custom_content transition-all ease-in-out duration-500 bg-[#EBF4FA]">
        <div class="px-6 pt-4">
            <h1 class="text-3xl font-bold primary-text tracking-tight mb-4">DASHBOARD</h1>
            <div class="bg-white p-4 max-w-xs rounded-lg border-l-8 border-[#1C75BC]">
                <div class="flex flex-row items-center space-x-4">
                    <div class="w-16 h-16 bg-[#EBF4FA] rounded-full flex items-center justify-center ">
                        <svg class="w-10 h-10 text-[#1C75BC]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="1.5"
                                d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Users</span>
                        <h5 class="text-3xl font-semibold primary-text">383</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
