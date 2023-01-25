<div class="card mt-4">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Update Your Password') }}</h6>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success bg-green-400 text-white px-3 py-2">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert bg-red-600 text-white px-3 py-2">
            {{ session('error') }}
        </div>
    @endif

    <div class="card-body pt-4 p-3">
        @if ($showDemoNotification)
            <div wire:model="showDemoNotification" class="mt-3 alert alert-primary alert-dismissible fade show"
                role="alert">
                <span class="alert-text text-white">
                    {{ __('You are in a demo version, you can\'t update the profile.') }}</span>
                <button wire:click="$set('showDemoNotification', false)" type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        @if ($showSuccesNotification)
            <div wire:model="showSuccesNotification" class="mt-3 alert alert-primary alert-dismissible fade show"
                role="alert">
                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                <span
                    class="alert-text text-white">{{ __('Your profile information have been successfuly saved!') }}</span>
                <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        <form wire:submit.prevent="updateUserPassword({{ Auth::user() }})" action="#" method="POST"
            role="form text-left">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="current_password" class="form-control-label">{{ __('Current Password') }}</label>
                        <div class="@error('current_password')border border-danger rounded-3 @enderror">
                            <input wire:model="current_password" class="form-control" type="password"
                                placeholder="Current Password" id="current_password">
                        </div>
                        @error('current_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="new_password" class="form-control-label">{{ __('New Password') }}</label>
                        <div class="@error('new_password')border border-danger rounded-3 @enderror">
                            <input wire:model="new_password" class="form-control" type="password"
                                placeholder="New Password" id="new_password">
                        </div>
                        @error('new_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="password_confirmation"
                            class="form-control-label">{{ __('Password Confirmation') }}</label>
                        <div class="@error('password_confirmation')border border-danger rounded-3 @enderror">
                            <input wire:model="password_confirmation" class="form-control" type="password"
                                placeholder="Password Confirmation" id="password_confirmation">
                        </div>
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
