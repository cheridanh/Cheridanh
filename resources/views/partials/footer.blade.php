<footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0">Copyright &copy; {{ config('app.name') }} &middot; {{ date('Y') }}</div></div>
            <div class="col-auto">
                <a class="small" href="{{ route('about') }}">À propos</a>
            </div>
        </div>
    </div>
</footer>
