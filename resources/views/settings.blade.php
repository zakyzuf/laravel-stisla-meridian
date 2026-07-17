<x-layouts.app>
    <header class="page__header">
        <div class="page__headline">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb__item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb__item" aria-current="page">Settings</li>
                </ol>
            </nav>
            <h1 class="page__title">Settings</h1>
            <p class="page__description">
                Manage your profile and account preferences.
            </p>
        </div>
    </header>

    <div class="page__body">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-3">
                <aside class="sidebar sidebar--setting" aria-label="Settings sections">
                    <div class="sidebar__content">
                        <nav class="sidebar__menu">
                            <div class="sidebar__group">
                                <ul class="sidebar__list">
                                    <li class="sidebar__item">
                                        <button type="button" class="sidebar__button" aria-controls="settingsTabs"
                                            data-stisla-tabs-value="profile" aria-current="page">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" aria-hidden="true">
                                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <circle cx="12" cy="9" r="3" />
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path stroke-linecap="round"
                                                        d="M17.97 20c-.16-2.892-1.045-5-5.97-5s-5.81 2.108-5.97 5" />
                                                </g>
                                            </svg><span>Profile</span>
                                        </button>
                                    </li>

                                    <li class="sidebar__item">
                                        <button type="button" class="sidebar__button" aria-controls="settingsTabs"
                                            data-stisla-tabs-value="security">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" aria-hidden="true">
                                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <path
                                                        d="M3 10.417c0-3.198 0-4.797.378-5.335c.377-.537 1.88-1.052 4.887-2.081l.573-.196C10.405 2.268 11.188 2 12 2s1.595.268 3.162.805l.573.196c3.007 1.029 4.51 1.544 4.887 2.081C21 5.62 21 7.22 21 10.417v1.574c0 5.638-4.239 8.375-6.899 9.536C13.38 21.842 13.02 22 12 22s-1.38-.158-2.101-.473C7.239 20.365 3 17.63 3 11.991z" />
                                                    <path stroke-linejoin="round"
                                                        d="M11.5 16h1a1 1 0 0 0 1-1v-1.401A2.999 2.999 0 0 0 12 8a3 3 0 0 0-1.5 5.599V15a1 1 0 0 0 1 1Z" />
                                                </g>
                                            </svg><span>Security</span>
                                        </button>
                                    </li>

                                    <li class="sidebar__item">
                                        <button type="button" class="sidebar__button" aria-controls="settingsTabs"
                                            data-stisla-tabs-value="danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" aria-hidden="true">
                                                <g fill="none">
                                                    <path stroke="currentColor" stroke-width="1.5"
                                                        d="M5.312 10.762C8.23 5.587 9.689 3 12 3s3.77 2.587 6.688 7.762l.364.644c2.425 4.3 3.638 6.45 2.542 8.022S17.786 21 12.364 21h-.728c-5.422 0-8.134 0-9.23-1.572s.117-3.722 2.542-8.022z" />
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="1.5" d="M12 8v5" />
                                                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                                                </g>
                                            </svg><span>Danger zone</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <footer class="sidebar__footer">
                        <hr class="separator mb-2" />
                        <ul class="sidebar__list">
                            <li class="sidebar__item">
                                <a class="sidebar__button" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    style="--sidebar-button-color: var(--color-danger)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24" aria-hidden="true">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-width="1.5">
                                            <path
                                                d="M9.002 7c.012-2.175.109-3.353.877-4.121C10.758 2 12.172 2 15 2h1c2.829 0 4.243 0 5.122.879C22 3.757 22 5.172 22 8v8c0 2.828 0 4.243-.878 5.121C20.242 22 18.829 22 16 22h-1c-2.828 0-4.242 0-5.121-.879c-.768-.768-.865-1.946-.877-4.121" />
                                            <path stroke-linejoin="round" d="M15 12H2m0 0l3.5-3M2 12l3.5 3" />
                                        </g>
                                    </svg><span>Sign out</span>
                                </a>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </footer>
                </aside>
            </div>

            <div class="col-span-12 lg:col-span-9">
                <div class="tabs" id="settingsTabs" data-stisla-tabs>

                    {{-- ===================== PROFILE ===================== --}}
                    <div class="tabs__panel" data-value="profile" data-state="active">
                        <div class="flex flex-col gap-6">
                            <section class="flex flex-col gap-3">
                                <div class="flex flex-col gap-1">
                                    <h2 class="page__section-title">Profile</h2>
                                    <p class="page__section-description">
                                        Update your account's profile information and email address.
                                    </p>
                                </div>
                                <div class="card">
                                    <div class="card__body">

                                        <form id="send-verification" method="post"
                                            action="{{ route('verification.send') }}">
                                            @csrf
                                        </form>

                                        <form method="post" action="{{ route('profile.update') }}"
                                            class="flex flex-col gap-4">
                                            @csrf
                                            @method('patch')

                                            <div class="field">
                                                <label for="name" class="field__label">Name</label>
                                                <input type="text" class="input" id="name" name="name"
                                                    value="{{ old('name', $user->name) }}" required autofocus
                                                    autocomplete="name" />
                                                @error('name')
                                                    <small class="field__error">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="field">
                                                <label for="email" class="field__label">Email</label>
                                                <input type="email" class="input" id="email" name="email"
                                                    value="{{ old('email', $user->email) }}" required
                                                    autocomplete="username" />
                                                @error('email')
                                                    <small class="field__error">{{ $message }}</small>
                                                @enderror

                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                    <p class="text-sm mt-2 text-gray-600">
                                                        Your email address is unverified.
                                                        <button form="send-verification"
                                                            class="underline text-sm text-gray-600 hover:text-gray-900">
                                                            Click here to re-send the verification email.
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                        <p class="mt-2 font-medium text-sm text-green-600">
                                                            A new verification link has been sent to your email address.
                                                        </p>
                                                    @endif
                                                @endif
                                            </div>

                                            <div class="flex items-center gap-4 justify-end mt-2">
                                                @if (session('status') === 'profile-updated')
                                                    <p class="text-sm text-gray-600">Saved.</p>
                                                @endif
                                                <button type="submit" class="button button--primary">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    {{-- ===================== SECURITY ===================== --}}
                    <div class="tabs__panel" data-value="security" data-state="inactive">
                        <div class="flex flex-col gap-6">
                            <section class="flex flex-col gap-3">
                                <div class="flex flex-col gap-1">
                                    <h2 class="page__section-title">Update Password</h2>
                                    <p class="page__section-description">
                                        Ensure your account is using a long, random password to stay secure.
                                    </p>
                                </div>
                                <div class="card">
                                    <div class="card__body">
                                        <form method="post" action="{{ route('password.update') }}"
                                            class="flex flex-col gap-4">
                                            @csrf
                                            @method('put')

                                            <div class="field">
                                                <label for="update_password_current_password"
                                                    class="field__label">Current Password</label>
                                                <input type="password" class="input"
                                                    id="update_password_current_password" name="current_password" />
                                                @error('current_password', 'updatePassword')
                                                    <small class="field__error">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="field">
                                                <label for="update_password_password" class="field__label">New
                                                    Password</label>
                                                <input type="password" class="input" id="update_password_password"
                                                    name="password" autocomplete="new-password" />
                                                @error('password', 'updatePassword')
                                                    <small class="field__error">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="field">
                                                <label for="update_password_password_confirmation"
                                                    class="field__label">Confirm Password</label>
                                                <input type="password" class="input"
                                                    id="update_password_password_confirmation"
                                                    name="password_confirmation" autocomplete="new-password" />
                                                @error('password_confirmation', 'updatePassword')
                                                    <small class="field__error">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="flex items-center gap-4 justify-end mt-2">
                                                @if (session('status') === 'password-updated')
                                                    <p class="text-sm text-gray-600">Saved.</p>
                                                @endif
                                                <button type="submit" class="button button--primary">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>

                            <section class="flex flex-col gap-3">
                                <div class="flex flex-col gap-1">
                                    <h2 class="page__section-title">Login methods</h2>
                                </div>
                                <div class="card">
                                    <ul class="list-group list-group--seamless">
                                        <li class="media">
                                            <span class="media__figure">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 24 24" aria-hidden="true">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path
                                                            d="M2 16c0-2.828 0-4.243.879-5.121C3.757 10 5.172 10 8 10h8c2.828 0 4.243 0 5.121.879C22 11.757 22 13.172 22 16s0 4.243-.879 5.121C20.243 22 18.828 22 16 22H8c-2.828 0-4.243 0-5.121-.879C2 20.243 2 18.828 2 16Z" />
                                                        <circle cx="12" cy="16" r="2" />
                                                        <path stroke-linecap="round" d="M6 10V8a6 6 0 1 1 12 0v2" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <div class="media__content">
                                                <div class="media__title">Password</div>
                                                <small class="media__description">Keep this long and unique.</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>

                    {{-- ===================== DANGER ZONE ===================== --}}
                    <div class="tabs__panel" data-value="danger" data-state="inactive">
                        <section class="flex flex-col gap-3">
                            <div class="flex flex-col gap-1">
                                <h2 class="page__section-title">Delete Account</h2>
                                <p class="page__section-description">
                                    Once your account is deleted, all of its resources and data will be permanently
                                    deleted. Before deleting your account, please download any data or information
                                    that you wish to retain.
                                </p>
                            </div>
                            <div class="card">
                                <div class="card__body">
                                    <button type="button" class="button button--outline button--danger button--sm"
                                        data-stisla-dialog-trigger="deleteAccount">
                                        Delete account
                                    </button>
                                </div>
                            </div>
                        </section>

                        {{-- Modal konfirmasi hapus akun --}}
                        <div class="dialog dialog--sm" id="deleteAccount" data-stisla-dialog data-state="closed"
                            role="alertdialog" aria-modal="true" aria-labelledby="deleteAccountLabel"
                            aria-describedby="deleteAccountDesc" aria-hidden="true" tabindex="-1">
                            <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
                            <div class="dialog__panel">
                                <form method="post" action="{{ route('profile.destroy') }}"
                                    class="dialog__content">
                                    @csrf
                                    @method('delete')

                                    <button type="button" class="dialog__close" data-stisla-dialog-dismiss
                                        aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                                            <path d="M6 6l12 12M18 6L6 18" />
                                        </svg>
                                    </button>

                                    <div class="dialog__body text-center pt-6">
                                        <span class="icon-box icon-box--danger icon-box--circle icon-box--lg mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" aria-hidden="true">
                                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round"
                                                        d="M20.5 6h-17m15.333 2.5l-.46 6.9c-.177 2.654-.265 3.981-1.13 4.79s-2.196.81-4.856.81h-.774c-2.66 0-3.991 0-4.856-.81c-.865-.809-.954-2.136-1.13-4.79l-.46-6.9M9.5 11l.5 5m4.5-5l-.5 5" />
                                                    <path
                                                        d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                </g>
                                            </svg>
                                        </span>
                                        <h3 class="dialog__title mb-1" id="deleteAccountLabel">Delete your account?
                                        </h3>
                                        <p class="text-muted-foreground" id="deleteAccountDesc">
                                            This permanently removes your account, store, and all data. This can't be
                                            undone.
                                        </p>

                                        <div class="field mt-4 text-left">
                                            <label for="password" class="field__label sr-only">Password</label>
                                            <input id="password" name="password" type="password" class="input"
                                                placeholder="Enter your password to confirm" autocomplete="off" />
                                            @error('password', 'userDeletion')
                                                <small class="field__error">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="dialog__footer justify-center">
                                        <button type="button" class="button button--ghost button--neutral"
                                            data-stisla-dialog-dismiss>
                                            Cancel
                                        </button>
                                        <button type="submit" class="button button--danger">
                                            Delete account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
