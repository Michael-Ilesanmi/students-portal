<div>
    <form wire:submit="updatePassword" class="[&>div:not(:last-child)]:border-b [&>div]:grid [&>div]:grid-cols-1 [&>div]:md:grid-cols-2 [&>div]:p-6 rounded-lg overflow-clip text-gray-500 bg-white shadow-md">
        <div>
            <h1>Account Information</h1>
            <fieldset class="w-full md:w-4/5 space-y-3 flex flex-col">
                <label for="first_name" class="text-sm text-gray-400">
                    First Name
                    <br />
                    <div class="bg-gray-200 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500">
                        {{ $user->first_name }}
                    </div>
                </label>
                <label for="last_name" class="text-sm text-gray-400">
                    Last Name
                    <br />
                    <div class="bg-gray-200 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500">
                        {{ $user->last_name }}
                    </div>
                </label>
                <label for="other_name" class="text-sm text-gray-400">
                    Other Name
                    <br />
                    <div class="bg-gray-200 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500">
                        {{ $user->other_name ?? "-"}}
                    </div>
                </label>
                <label for="registration_id" class="text-sm text-gray-400">
                    Student Registration ID
                    <br />
                    <div class="bg-gray-200 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500">
                        {{ $user->registration_id ?? " " }}
                    </div>
                </label>
                <label for="email" class="text-sm text-gray-400">
                    Email
                    <br />
                    <div class="bg-gray-200 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500">
                        {{ $user->email }}
                    </div>
                </label>
            </fieldset>
        </div>
        <div id="change-password">
            <h1>Change Password</h1>
            <fieldset class="w-full md:w-4/5 space-y-3 flex flex-col">
                <label for="password" class="text-sm text-gray-400">
                    Password
                    <br />
                    <input autocomplete="current-password" type="password" class="bg-gray-50 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500" name="password" id="password" wire:model="password"  />
                    @error('password') <p class="text-xs font-medium text-red-600">{{ $message }}</p> @enderror 
                </label>
                <label for="new_password" class="text-sm text-gray-400">
                    New Password
                    <br />
                    <input autocomplete="new-password" type="password" class="bg-gray-50 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500" name="new_password" id="new_password" wire:model="new_password"  />
                    @error('new_password') <p class="text-xs font-medium text-red-600">{{ $message }}</p> @enderror 
                </label>
                <label for="new_password_confirmation" class="text-sm text-gray-400">
                    Confirm New Password
                    <br />
                    <input autocomplete="new-password" type="password" class="bg-gray-50 w-full px-3 py-2 border border-gray-300 font-medium text-base text-gray-500" name="new_password_confirmation" id="new_password_confirmation" wire:model="new_password_confirmation"  />
                    @error('new_password_confirmation') <p class="text-xs font-medium text-red-600">{{ $message }}</p> @enderror 
                </label>
                <button class="whitespace-nowrap font-medium text-white bg-blue-500 hover:bg-blue-600 transition ease-linear duration-150 rounded-md py-2 px-12 w-fit">
                    <span class="iconify text-xl" data-icon="tabler:logout-2" data-rotate="90deg"></span>
                    Update Password
                </button>
            </fieldset>
        </div>
    </form>
</div>
