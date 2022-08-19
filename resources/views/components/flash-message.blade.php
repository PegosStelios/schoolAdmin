@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="bg-green-100 rounded-lg px-6 py-3 mb-4 text-base text-green-700 mb-3" role="alert">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
