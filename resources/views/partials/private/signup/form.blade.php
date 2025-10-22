<form>
    <div class="space-y-5">

    <div class="custom-scrollbar max-w-full overflow-x-auto pb-3 xsm:pb-0 mb-10">
        <div class="min-w-[309px] flex justify-center">
            <div class="inline-flex items-center justify-center shadow-theme-xs">
                @if ($days_of_week)
                    @foreach ($days_of_week as $day)
                        <button id="{{ $day }}" type="button" class="-ml-px inline-flex items-center gap-2 bg-transparent px-6 py-4 text-sm font-medium text-brand-500 ring-1 ring-inset ring-brand-500 first:rounded-l-lg last:rounded-r-lg hover:bg-brand-500 hover:text-white uppercase">
                            {{ $day }}
                        </button>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="m-0">
        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
            WORK TIME
        </label>
    </div>
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
        <!-- First Name -->
        <div class="sm:col-span-1">
            <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
            >
                Start <span class="text-error-500">*</span>
            </label>
            <select
                id="fname"
                name="fname"
                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            >
                <option value="" disabled selected>Select your first name</option>
                <option value="John">John</option>
                <option value="Jane">Jane</option>
                <option value="Doe">Doe</option>
            </select>
        </div>
        <!-- Last Name -->
        <div class="sm:col-span-1">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                End <span class="text-error-500">*</span>
            </label>
            <select
                id="lname"
                name="lname"
                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            >
                <option value="" disabled selected>Select your last name</option>
                <option value="Smith">Smith</option>
                <option value="Johnson">Johnson</option>
                <option value="Williams">Williams</option>
            </select>
        </div>

        <div class="sm:col-span-1">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Number of Tokens <span class="text-error-500">*</span>
            </label>
            <input 
                type="number" 
                min="0" 
                max="100" 
                value="0"
                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            />
        </div>
    </div>

    <div class="m-0">
        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
            BREAK TIME
        </label>
    </div>
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
        <!-- First Name -->
        <div class="sm:col-span-1">
            <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
            >
                Start <span class="text-error-500">*</span>
            </label>
            <select
                id="fname"
                name="fname"
                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            >
                <option value="" disabled selected>Select your first name</option>
                <option value="John">John</option>
                <option value="Jane">Jane</option>
                <option value="Doe">Doe</option>
            </select>
        </div>
        <!-- Last Name -->
        <div class="sm:col-span-1">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                End <span class="text-error-500">*</span>
            </label>
            <select
                id="lname"
                name="lname"
                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            >
                <option value="" disabled selected>Select your last name</option>
                <option value="Smith">Smith</option>
                <option value="Johnson">Johnson</option>
                <option value="Williams">Williams</option>
            </select>
        </div>
    </div>

    <!-- Button -->
    <div>
        <button 
        class="flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600"
        >
            SAVE
        </button>
    </div>
    </div>
</form>