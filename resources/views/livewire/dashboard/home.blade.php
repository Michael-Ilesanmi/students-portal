<div>
    <h1 class="border-l-4 border-blue-500 py-2 px-2 mb-3">
        <strong>Good {{ $greeting }},</strong> {{ $user->first_name." ".$user->last_name }}
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 rounded-lg overflow-clip bg-white shadow-md [&>a]:p-6 [&>a]:space-y-8 [&>a]:border [&>a:hover]:bg-gray-50 [&>a]:transition [&>a]:ease-linear [&>a]:duration-150">
        <a href="{{ route('profile') }}">
            <div class="flex justify-between items-start">
                <button class="flex p-3 items-center justify-center rounded bg-[#EDFAFA] text-[#036672] text-2xl font-bold">
                    <span class="iconify" data-icon="gg:profile"></span>
                </button>
                <button class="text-2xl text-gray-500">
                    <span class="iconify" data-icon="fluent:arrow-up-right-24-regular"></span>
                </button>
            </div>
            <div class="space-y-2">
                <p class="font-medium">My Account</p>
                <p class="text-sm text-gray-500 font-light">View your full account information</p>
            </div>
        </a>
        <a href="">
            <div class="flex justify-between items-start">
                <button class="flex p-3 items-center justify-center rounded bg-[#F6F5FF] text-[#6C2BD9] text-2xl font-bold">
                    <span class="iconify" data-icon="la:id-card-solid"></span>
                </button>
                <button class="text-2xl text-gray-500">
                    <span class="iconify" data-icon="fluent:arrow-up-right-24-regular"></span>
                </button>
            </div>
            <div class="space-y-2">
                <p class="font-medium">ID Card(s)</p>
                <p class="text-sm text-gray-500 font-light">Manage and check your ID card(s) status</p>
            </div>
        </a>
        <a href="{{ route('profile') . '#change-password'}}">
            <div class="flex justify-between items-start">
                <button class="flex p-3 items-center justify-center rounded bg-[#FDFDEA] text-[#BA9266] text-2xl font-bold">
                    <span class="iconify" data-icon="heroicons:key"></span>
                </button>
                <button class="text-2xl text-gray-500">
                    <span class="iconify" data-icon="fluent:arrow-up-right-24-regular"></span>
                </button>
            </div>
            <div class="space-y-2">
                <p class="font-medium">Change Password</p>
                <p class="text-sm text-gray-500 font-light">Change your password instantly</p>
            </div>
        </a>
        <a href="">
            <div class="flex justify-between items-start">
                <button class="flex p-3 items-center justify-center rounded bg-[#F0F5FF] text-[#5145CD] text-2xl font-bold">
                    <span class="iconify" data-icon="clarity:help-line"></span>
                </button>
                <button class="text-2xl text-gray-500">
                    <span class="iconify" data-icon="fluent:arrow-up-right-24-regular"></span>
                </button>
            </div>
            <div class="space-y-2">
                <p class="font-medium">Help</p>
                <p class="text-sm text-gray-500 font-light">You don't understand? Let us assist</p>
            </div>
        </a>
        
    </div>
</div>
