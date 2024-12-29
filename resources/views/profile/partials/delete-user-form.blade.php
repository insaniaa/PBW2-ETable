<section class="mb-4">
    <header>
        <h2 class="text-lg font-bold text-danger mb-3">
            {{ __('Delete Account') }}
        </h2>
        <p class="text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="mt-4">
        @csrf
        @method('delete')

        <div class="form-floating mb-3">
            <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
            <label for="password">{{ __('Confirm Password') }}</label>
            @error('password')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Button aligned to the right -->
        <div class="text-end">
            <button type="submit" class="btn btn-danger px-4">{{ __('Delete Account') }}</button>
        </div>
    </form>
</section>
