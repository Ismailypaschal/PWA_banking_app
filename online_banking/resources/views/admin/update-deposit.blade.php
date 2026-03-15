<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin User Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen text-slate-900 dark:text-white">
    <header
        class="sticky top-0 z-50 bg-background-light dark:bg-background-dark border-b border-slate-200 dark:border-slate-800">
        <div class="flex items-center p-4 pb-2 justify-between">
            <button type="button" id="backBtn"
                class="flex size-10 shrink-0 items-center justify-center cursor-pointer">
                <span class="material-symbols-outlined text-2xl">arrow_back_ios</span>
            </button>
            <h2 class="text-lg font-bold leading-tight tracking-tight flex-1 text-center">User Deposits History 💰</h2>
            <div class="flex w-10 items-center justify-end">
                <a href="{{ route('admin.users') }}" target="_blank"
                    class="flex items-center justify-center rounded-lg h-10 w-10 bg-primary text-white">
                    <span class="material-symbols-outlined text-xl">person_add</span>
                </a>
            </div>
        </div>

        <main class="p-4 space-y-8 pb-24">
            <div>
                {{-- <h2 class="text-xl font-semibold text-slate-900 dark:text-white mb-5">
                    Deposits History of
                    <span class="text-slate-500 dark:text-slate-400">
                        Hold Eko
                    </span>
                </h2> --}}
                <!-- Deposits Card -->
                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 overflow-hidden">
                    {{-- <div
                        class="px-6 py-6 border-b border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50">
                        <h6 class="font-semibold text-lg text-center text-slate-900 dark:text-white">User Deposits 💰
                        </h6>
                    </div> --}}

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr
                                    class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-100 dark:border-slate-800">
                                    <th
                                        class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-slate-500">
                                        ID</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-slate-500">
                                        Amount</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-slate-500">
                                        Payment Method</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-slate-500">
                                        Sender</th>
                                    <th
                                        class="px-6 py-4 text-right text-xs font-bold uppercase tracking-widest text-slate-500">
                                        Sender bank</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                {{-- Fetch deposits for the user --}}
                                @forelse ($deposits as $deposit)
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/70 transition-colors">
                                        <form method="POST" action="">
                                            <input type="hidden" name="deposit_id" value="">

                                            <td class="px-6 py-5 font-medium text-slate-900 dark:text-white">
                                                {{ $deposit->id }}
                                            </td>
                                            <td class="px-6 py-5 font-semibold text-emerald-600 dark:text-emerald-500">
                                                ${{ $deposit->amount }}
                                            </td>
                                            <td class="px-6 py-5 text-slate-600 dark:text-slate-400">
                                                {{ $deposit->deposit_type }}
                                            </td>
                                            <td class="px-6 py-5">
                                                <span class="inline-flex items-center gap-1.5 text-sm">

                                                    <span class="text-lg">{{ $deposit->sender_name }}</span>
                                                </span>
                                            </td>
                                            <td class="px-6 py-5">
                                                <div class="flex justify-end">
                                                    <div class="flex items-center gap-3">
                                                        <span class="inline-flex items-center gap-1.5 text-sm">

                                                            <span class="text-lg">{{ $deposit->bank_name }}</span>
                                                        </span>
                                                        {{-- <select name="status"
                                                            class="bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl px-4 py-2.5 text-sm focus:border-primary focus:ring-0 min-w-[140px]">

                                                            <option value="pending">Pending ⏳</option>
                                                            <option value="success">Success ⏳</option>
                                                            <option value="pending">Pending ⏳</option>
                                                        </select>
                                                        <button type="submit"
                                                            class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-2xl text-sm font-medium transition-all active:scale-95 whitespace-nowrap">
                                                            Update
                                                        </button> --}}
                                                    </div>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                @empty

                                    <tr>
                                        <td colspan="5" class="px-6 py-16 text-center">
                                            <div class="text-5xl mb-3">😔</div>
                                            <p class="text-slate-500 dark:text-slate-400 font-medium">No deposits found
                                            </p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        @include('admin.admin-footer')
        <div class="fixed bottom-1 left-1/2 -translate-x-1/2 w-32 h-1 bg-slate-300 dark:bg-slate-700 rounded-full z-50">
        </div>
        <script>
            document.getElementById('backBtn').addEventListener('click', function() {
                window.history.back();
            });
        </script>
</body>

</html>
