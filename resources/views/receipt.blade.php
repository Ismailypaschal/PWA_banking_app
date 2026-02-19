<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Official Downloadable Receipt</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/output.css">
    <script type="module" src="/js/general-theme.js"></script>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen font-display text-white selection:bg-primary/30">
    <div
        class="max-w-[430px] mx-auto min-h-screen flex flex-col bg-background-light dark:bg-background-dark shadow-2xl relative">
        <!-- <nav
            class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 sticky top-0 z-10 border-b border-white/5">
            <div class="text-slate-900 dark:text-white flex size-12 shrink-0 items-center justify-start cursor-pointer">
                <span class="material-symbols-outlined">chevron_left</span>
            </div>
            <h2
                class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center">
                Official Receipt</h2>
            <div class="text-slate-900 dark:text-white flex size-12 shrink-0 items-center justify-end cursor-pointer">
                <span class="material-symbols-outlined">more_vert</span>
            </div>
        </nav> -->
        <div class="flex-1 overflow-y-auto px-6 pt-6 pb-44">
            <div class="receipt-paper rounded-3xl shadow-xl overflow-hidden flex flex-col border border-slate-200">
                <div class="p-8 pb-4 relative">
                    <div class="flex justify-between items-start mb-8">
                        <div class="flex items-center gap-2">
                            <div class="size-10 rounded-lg bg-primary flex items-center justify-center">
                                <span class="material-symbols-outlined text-white">account_balance</span>
                            </div>
                            <div class="leading-tight">
                                <p class="text-slate-900 font-extrabold text-sm uppercase tracking-tight">ApexBank</p>
                                <p class="text-slate-500 text-[10px] font-bold">Transaction Record</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div
                                class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-bold uppercase tracking-wider">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                Successful
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-8">
                        <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">Amount Transferred
                        </p>
                        <h2 class="text-slate-900 text-4xl font-extrabold tracking-tight">$5000.00</h2>
                    </div>
                </div>
                <div class="px-8 pb-8 space-y-5">
                    <div class="space-y-4">
                        <div class="flex justify-between items-start gap-x-4">
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wide">Sender Name</p>
                            <p class="text-slate-900 text-sm font-bold text-right"> Eugene Jack</p>
                        </div>
                        <div class="flex justify-between items-start gap-x-4">
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wide">Sender Account</p>
                            <p class="text-slate-900 text-sm font-mono font-medium text-right">•••• •••• 8829</p>
                        </div>
                        <div class="h-px border-t border-dashed border-slate-200 w-full my-2"></div>

                        <div class="flex justify-between items-start gap-x-4">
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wide">Recipient Bank</p>
                            <p class="text-slate-900 text-sm font-bold text-right">Wesfago</p>
                        </div>
                        <div class="flex justify-between items-start gap-x-4">
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wide">Account Number</p>
                            <p class="text-slate-900 text-sm font-mono font-medium text-right">9477484303</p>
                        </div>
                        <div class="h-px border-t border-dashed border-slate-200 w-full my-2"></div>
                        <div class="flex justify-between items-start gap-x-4">
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wide">Reference</p>
                            <p class="text-slate-900 text-sm font-semibold text-right">TRX-9482-1055</p>
                        </div>
                        <div class="flex justify-between items-start gap-x-4">
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wide">Date &amp; Time</p>
                            <p class="text-slate-900 text-sm font-semibold text-right">Oct 24, 2023 • 14:32:05</p>
                        </div>
                    </div>
                    <div class="pt-8 mt-4 border-t border-slate-100 relative">
                        <div class="flex flex-col items-center justify-center">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-10 pointer-events-none rotate-[-15deg]">
                                    <span class="material-symbols-outlined text-7xl text-slate-900">verified_user</span>
                                </div>
                                <div class="relative z-10 flex flex-col items-center">
                                    <div class="mb-1">
                                        <span
                                            class="material-symbols-outlined text-primary text-3xl opacity-60">gesture</span>
                                    </div>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-[0.2em]">Official
                                        Digital Signature</p>
                                    <p class="text-[9px] text-slate-300 mt-0.5">ApexBank Certified Secure Transaction
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 space-y-3">
                <div class="grid grid-cols-2 gap-3">
                    <button
                        class="flex items-center justify-center gap-2 bg-[#1e293b] hover:bg-slate-800 text-white font-bold py-4 rounded-xl border border-white/5 transition-all active:scale-[0.98]">
                        <span class="material-symbols-outlined text-[20px]">download</span>
                        <span class="text-sm">Download</span>
                    </button>
                    <button
                        class="flex items-center justify-center gap-2 bg-[#1e293b] hover:bg-slate-800 text-white font-bold py-4 rounded-xl border border-white/5 transition-all active:scale-[0.98]">
                        <span class="material-symbols-outlined text-[20px]">share</span>
                        <span class="text-sm">Share PDF</span>
                    </button>
                </div>
            </div>
        </div>
        <div
            class="fixed bottom-0 left-0 right-0 max-w-[430px] mx-auto p-4 bg-background-light/90 dark:bg-background-dark/80 backdrop-blur-lg border-t border-slate-200 dark:border-white/5 pb-8">
            <a href="{{ route('user.dashboard') }}"
                class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 active:scale-[0.98]">
                <span class="material-symbols-outlined text-[20px]">home</span>
                <span>Back to Home</span>
            </a>
            <div class="h-1.5 w-32 bg-slate-300 dark:bg-white/20 rounded-full mx-auto mt-6"></div>
        </div>
    </div>

</body>

</html>
