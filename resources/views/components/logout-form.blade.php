<form method="POST" action="{{ route('logout') }}" class="float-start">
    @csrf
    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="btn-danger btn-sm ">
            {{ __('Log out') }}
        </x-primary-button>
    </div>
</form>
