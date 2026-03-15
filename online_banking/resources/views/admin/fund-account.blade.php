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
             <div id="backBtn" class="flex size-10 shrink-0 items-center justify-center cursor-pointer">
                 <span class="material-symbols-outlined text-2xl">arrow_back_ios</span>
             </div>
             <h2 class="text-lg font-bold leading-tight tracking-tight flex-1 text-center">Deposit User Account</h2>
             <div class="flex w-10 items-center justify-end">
                 <a href="{{ route('admin.user.update.deposits', request()->route('id')) }}" target="_blank"
                     class="flex items-center justify-center rounded-lg h-10 w-10 bg-primary text-white">
                     <span class="material-symbols-outlined text-xl">update</span>
                 </a>
             </div>
         </div>

         <form class="flex flex-col gap-4" id="transfer-form" method="POST"
             action="{{ route('admin.user.deposits.store', request()->route('id')) }}">
             @csrf

             <div id="upper" class="flex flex-col gap-4 mt-2">
                 <h3 class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 px-1">
                     Deposit
                     Details</h3>
                 <div
                     class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                     <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                         for="bank_name">Bank
                         Name</label>
                     <input
                         class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium"
                         id="bankname" name="bank_name" placeholder="Full name of recipient" type="text" />
                     <div class="flex items-center">

                     </div>
                 </div>
                 <div
                     class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                     <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                         for="sender_name">Sender Name</label>
                     <input
                         class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium"
                         id="sendername" placeholder="Full name of recipient" type="text" name="sender_name" />
                 </div>
                 <div
                     class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                     <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                         for="accountnumber">Account Number</label>
                     <input
                         class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 font-medium tracking-wide"
                         id="accountnumber" inputmode="numeric" placeholder="0000 0000 0000" type="number"
                         name="deposit_address" />
                 </div>
                 {{-- description --}}
                 <div
                     class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                     <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                         for="purpose">Purpose
                         of Transfer</label>
                     <select
                         class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white font-medium appearance-none mb-1"
                         id="purpose" name="description">
                         <option value="family">Family &amp; Friends</option>
                         <option value="rent">Rent &amp; Bills</option>
                         <option value="business">Business Service</option>
                         <option value="investment">Investment</option>
                         <option value="food">Food</option>
                         <option value="other">Other</option>
                     </select>
                 </div>
                 {{-- deposit type --}}
                 <div
                     class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                     <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1"
                         for="deposit_type">Deposit
                         type</label>
                     <select
                         class="w-full bg-transparent border-none p-0 text-base focus:ring-0 text-slate-900 dark:text-white font-medium appearance-none mb-1"
                         id="deposit_type" name="deposit_type">
                         <option value="Bank Transfer">Bank Transfer</option>
                         <option value="Crypto">Crypto</option>
                         <option value="Paypal">Paypal</option>
                         <option value="CashApp">CashApp</option>
                         <option value="Wire Transfer">Wire Transfer</option>
                     </select>
                 </div>
                 {{-- <h3
                     class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 px-1 mt-2">
                     Deposit Information</h3> --}}
                 <div
                     class="relative bg-surface-light dark:bg-surface-dark-transfer rounded-xl border border-border-light dark:border-transparent px-4 py-4 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-sm">
                     <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-2"
                         for="amount">Amount</label>
                     <div class="flex items-center gap-2">
                         <span class="text-2xl font-bold text-slate-400">$</span>
                         <input
                             class="w-full bg-transparent border-none p-0 text-3xl font-bold focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-300 dark:placeholder:text-slate-700"
                             id="amount" inputmode="decimal" placeholder="0.00" type="number" name="amount"
                             required />
                     </div>
                 </div>
                 <!-- Add this spacer -->
                 <div class="h-48 md:h-64 lg:h-80"></div>
             </div>
             <div id="confirm" type="submit"
                 class="fixed bottom-0 left-0 w-full bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-xl border-t border-border-light dark:border-border-dark p-4 pb-8 z-40">
                 <button id="confirm"
                     class="w-full bg-primary hover:bg-blue-700 text-white font-bold text-lg py-4 rounded-xl shadow-lg shadow-primary/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                     Confirm Transfer
                     <span class="material-symbols-outlined" style="font-size: 20px;">check_circle</span>
                 </button>
             </div>
         </form>

         {{-- @include('admin.admin-footer') --}}
         <div
             class="fixed bottom-1 left-1/2 -translate-x-1/2 w-32 h-1 bg-slate-300 dark:bg-slate-700 rounded-full z-50">
         </div>
         {{-- Global Alert Modal --}}
         <div id="alertModal"
             class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">

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
