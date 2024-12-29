<section class="mb-4">
    <header>
        <h2 class="text-lg font-bold text-primary mb-3">
            {{ __('Profile Information') }}
        </h2>
        <p class="text-muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')

        <div class="form-floating mb-3">
            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            <label for="name">{{ __('Name') }}</label>
            @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
            <label for="email">{{ __('Email') }}</label>
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Button updated -->
        <div class="text-end">
            <button type="submit" class="btn btn-primary px-4">{{ __('Save') }}</button>
        </div>
    </form>
</section>
