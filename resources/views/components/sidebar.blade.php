<aside id="logo-sidebar"
    class="sidebar fixed top-0 left-0 h-full z-50 transition-all ease-in-out duration-500 bg-[#1C75BC] border-r border-gray-200"
    aria-label="Sidebar">
    <div class="flex justify-end p-3">
        <button class="sidebar-toggler" id="toggle-sidebar">
            <span>
                <svg id="chevron-icon" class="w-8 h-8 text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m10 16 4-4-4-4" />
                </svg>
            </span>
        </button>
    </div>
    <div class="h-full px-3 pb-4 pt-3 overflow-y-auto bg-[#1C75BC]">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 group
                @if (Route::currentRouteName() == 'dashboard') bg-white text-[#1C75BC] @else text-white @endif"
                    data-tooltip-target="tooltip-dashboard" data-tooltip-placement="right" type="button">
                    <svg class="flex-shrink-0 w-6 h-6 @if (Route::currentRouteName() == 'dashboard') text-[#1C75BC] @else text-white @endif transition duration-300 group-hover:text-[#1C75BC]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="flex-1 ms-5 whitespace-nowrap hover:text-[#1C75BC]">Dashboard</span>
                </a>
                <div id="tooltip-dashboard" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-[#1C75BC] rounded-lg shadow-sm opacity-0 tooltip">
                    Dashboard
                </div>
            </li>
            <li>
                <a href="{{ route('report') }}"
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 group @if (Route::currentRouteName() == 'report') bg-white text-[#1C75BC] @else text-white @endif"
                    data-tooltip-target="tooltip-report" data-tooltip-placement="right" type="button">
                    <svg class="flex-shrink-0 w-6 h-6 @if (Route::currentRouteName() == 'report') text-[#1C75BC] @else text-white @endif transition duration-300 group-hover:text-[#1C75BC]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 3v4a1 1 0 0 1-1 1H5m8-2h3m-3 3h3m-4 3v6m4-3H8M19 4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1ZM8 12v6h8v-6H8Z" />
                    </svg>
                    <span class="flex-1 ms-5 whitespace-nowrap hover:text-[#1C75BC]">Report</span>
                </a>
                <div id="tooltip-report" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-[#1C75BC] rounded-lg shadow-sm opacity-0 tooltip">
                    Report
                </div>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group"
                    data-tooltip-target="tooltip-users" data-tooltip-placement="right" type="button">
                    <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-300 group-hover:text-[#1C75BC]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-5 whitespace-nowrap hover:text-[#1C75BC]">Users</span>
                </a>
                <div id="tooltip-users" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-[#1C75BC] rounded-lg shadow-sm opacity-0 tooltip">
                    Users
                </div>
            </li>
            <li>
                <a href="#" class="flex items-center p-1 text-white rounded-lg hover:bg-gray-100 group"
                    data-tooltip-target="tooltip-branch" data-tooltip-placement="right" type="button">
                    <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-300 group-hover:text-[#1C75BC]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-5 whitespace-nowrap hover:text-[#1C75BC]">Branch Office</span>
                </a>
                <div id="tooltip-branch" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-[#1C75BC] rounded-lg shadow-sm opacity-0 tooltip">
                    Branch Office
                </div>
            </li>
        </ul>
    </div>
</aside>

@push('after-script')
    <script>
        let btn = document.querySelector("#toggle-sidebar")
        let sidebar = document.querySelector(".sidebar");
        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
@endpush
