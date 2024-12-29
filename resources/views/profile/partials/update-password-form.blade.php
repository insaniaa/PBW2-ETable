<section class="mb-4">
    <header>
        <h2 class="text-lg font-bold text-primary mb-3">
            {{ __('Update Password') }}
        </h2>
        <p class="text-muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <div class="form-floating mb-3">
            <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
            <label for="current_password">{{ __('Current Password') }}</label>
            @error('current_password')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input id="password" name="password" type="password" class="form-control" autocomplete="new-password">
            <label for="password">{{ __('New Password') }}</label>
            @error('password')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            @error('password_confirmation')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Button aligned to the right -->
        <div class="text-end">
            <button type="submit" class="btn btn-primary px-4">{{ __('Save') }}</button>
        </div>
    </form>
</section>
