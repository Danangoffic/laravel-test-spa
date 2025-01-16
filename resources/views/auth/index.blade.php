@extends('layouts.auth')

@section('content')
    <div class="flex min-h-screen">
        <!--LEFT CONTENT -->
        <div class="hidden w-1/2 lg:block">
            <img class="w-full h-full object-cover"
                src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Background Image">
        </div>

        <!-- MAIN CONTENT -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-12 bg-gray-200">
            <div class="max-w-md w-full">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img class="mx-auto h-14 w-auto mb-8"
                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                </div>
                {{-- FORM LOGIN --}}
                {{-- @include('pages.auth.login') --}}

                {{-- INPUT PIN --}}
                @include('pages.auth.pin')
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const pinInputs = document.querySelectorAll(".pin-input");
            const form = document.getElementById("pin-form");

            // Move cursor automatically to the next field
            pinInputs.forEach((input, index) => {
                input.addEventListener("input", (e) => {
                    const value = e.target.value;
                    if (value.length === 1 && index < pinInputs.length - 1) {
                        pinInputs[index + 1].focus();
                    }

                    // Prevent non-numeric input
                    if (!/^\d$/.test(value)) {
                        e.target.value = "";
                    }

                    // Submit when all fields are filled
                    if (Array.from(pinInputs).every((inp) => inp.value.length === 1)) {
                        form.submit();
                    }
                });

                // Handle backspace to go to the previous field
                input.addEventListener("keydown", (e) => {
                    if (e.key === "Backspace" && !e.target.value && index > 0) {
                        pinInputs[index - 1].focus();
                    }
                });
            });

            // Simulate form submission and navigate to dashboard
            form.addEventListener("submit", (e) => {
                e.preventDefault();
                alert("PIN Submitted Successfully!");
                window.location.href = "/";
            });
        });
    </script>
@endpush
