<div
    class="fixed bottom-0 w-full bg-white/90 dark:bg-background-dark/90 backdrop-blur-lg border-t border-gray-200 dark:border-gray-800 pb-5 pt-2 px-4 z-20">
    <div class="flex justify-around items-center">
        <a href="{{ route('user.dashboard') }}" class="flex flex-col items-center gap-1 p-2 text-primary">
            <span class="material-symbols-outlined filled text-[26px]"
                style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="text-[10px] font-bold">Home</span>
        </a>
        <a href="{{ route('user.transactions') }}"
            class="flex flex-col items-center gap-1 p-2 text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
            <span class="material-symbols-outlined text-[26px]">bar_chart</span>
            <span class="text-[10px] font-medium">Transactions</span>
        </a>
        <a href="{{ route('user.account-details') }}"
            class="flex items-center justify-center -mt-8 size-14 rounded-full bg-primary text-white shadow-lg shadow-primary/40">
            <span class="material-symbols-outlined text-3xl">qr_code_scanner</span>
        </a>
        <a href="{{ route('user.card') }}"
            class="flex flex-col items-center gap-1 p-2 text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
            <span class="material-symbols-outlined text-[26px]">credit_card</span>
            <span class="text-[10px] font-medium">Cards</span>
        </a>
        <a href="{{ route('user.profile') }}"
            class="flex flex-col items-center gap-1 p-2 text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
            <span class="material-symbols-outlined text-[26px]">settings</span>
            <span class="text-[10px] font-medium">Settings</span>
        </a>
    </div>
</div>
