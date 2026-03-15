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
            <h2 class="text-lg font-bold leading-tight tracking-tight flex-1 text-center">User Transfers History 💰</h2>
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
                                        Transfer Method</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-slate-500">
                                        Receiver</th>
                                    <th
                                        class="px-6 py-4 text-right text-xs font-bold uppercase tracking-widest text-slate-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                {{-- Fetch deposits for the user --}}
                                @forelse ($transfers as $transfer)
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/70 transition-colors">
                                        <form method="POST" action="">
                                            <input type="hidden" name="deposit_id" value="">

                                            <td class="px-6 py-5 font-medium text-slate-900 dark:text-white">
                                                {{ $transfer->id }}
                                            </td>
                                            <td class="px-6 py-5 font-semibold text-red-600 dark:text-red-500">
                                                ${{ $transfer->amount }}
                                            </td>
                                            <td class="px-6 py-5 text-slate-600 dark:text-slate-400">
                                                {{ $transfer->transfer_type }}
                                            </td>
                                            <td class="px-6 py-5">
                                                <span class="inline-flex items-center gap-1.5 text-sm">
                                                    @if ($transfer->bene_account_name === null)
                                                        <span
                                                            class="text-lg">{{ $transfer->bene_account_number }}</span>
                                                    @else
                                                        <span class="text-lg">{{ $transfer->bene_account_name }}</span>
                                                    @endif
                                                </span>
                                            </td>
                                            <td class="px-6 py-5">
                                                <form method="POST"
                                                    action="{{ route('admin.user.transfers.store', $user->id) }}">
                                                    @csrf
                                                    <div class="flex justify-end">
                                                        <div class="flex items-center gap-3">
                                                            <select name="status"
                                                                class="bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl px-4 py-2.5 text-sm focus:border-primary focus:ring-0 min-w-[140px]">
                                                                <option value="pending"
                                                                    {{ $transfer->status == 'pending' ? 'selected' : '' }}>
                                                                    Pending ⏳
                                                                </option>

                                                                <option value="successful"
                                                                    {{ $transfer->status == 'successful' ? 'selected' : '' }}>
                                                                    Success ✅
                                                                </option>

                                                                <option value="failed"
                                                                    {{ $transfer->status == 'failed' ? 'selected' : '' }}>
                                                                    Failed ❌
                                                                </option>
                                                            </select>
                                                            <input class="hidden" name="transfer_id"
                                                                value="{{ $transfer->id }}" />
                                                            <input class="hidden" name="amount"
                                                                value="{{ $transfer->amount }}" />
                                                            <button type="submit"
                                                                class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-2xl text-sm font-medium transition-all active:scale-95 whitespace-nowrap">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
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
        {{-- Global Alert Modal --}}
        <div id="alertModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">

            <div
                class="bg-white dark:bg-[#1a2130] w-[90%] max-w-sm rounded-2xl p-6 shadow-2xl text-center animate-fadeIn">

                <div id="alertIcon" class="flex justify-center mb-4"></div>

                <h3 id="alertTitle" class="text-lg font-bold mb-2"></h3>

                <p id="alertMessage" class="text-sm text-slate-600 dark:text-slate-300 mb-6"></p>

                <button onclick="closeModal()"
                    class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition-all">
                    OK
                </button>
            </div>
        </div>
        <script>
            function showModal(type, message) {
                const modal = document.getElementById('alertModal');
                const title = document.getElementById('alertTitle');
                const text = document.getElementById('alertMessage');
                const icon = document.getElementById('alertIcon');

                modal.classList.remove('hidden');
                modal.classList.add('flex');

                if (type === 'success') {
                    title.textContent = "Success";
                    text.textContent = message;
                    icon.innerHTML = `<span class="material-symbols-outlined text-green-500 text-5xl">check_circle</span>`;
                }

                if (type === 'error') {
                    title.textContent = "Error";
                    text.textContent = message;
                    icon.innerHTML = `<span class="material-symbols-outlined text-red-500 text-5xl">cancel</span>`;
                }
            }

            function closeModal() {
                const modal = document.getElementById('alertModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            document.addEventListener('DOMContentLoaded', function() {

                @if (session('success'))
                    showModal('success', @json(session('success')));
                @endif

                @if (session('error'))
                    showModal('error', @json(session('error')));
                @endif

                @if ($errors->any())
                    showModal('error', @json($errors->first()));
                @endif

            });
        </script>
        <script>
            document.getElementById('backBtn').addEventListener('click', function() {
                window.history.back();
            });
        </script>
</body>

</html>
