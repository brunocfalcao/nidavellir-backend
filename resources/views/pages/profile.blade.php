<x-app-layout title="CRM Analytics Dashboard" is-header-blur="true" has-sidebar="false">
    <style>
        .menu-toggle{
            display: none !important;
        }
    </style>
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="flex flex-col col-span-12 lg:col-span-6 gap-4 sm:gap-5 lg:gap-6">
                <h2 class="text-2xl font-bold">YOUR ACCOUNT DATA</h2>
                <div class="card px-4 py-4 sm:px-5">
                    <div class="pt-2 grid grid-cols-6 gap-2">
                        <div class="col-span-6 gap-2 flex flex-col">
                            <div class="grid grid-cols-2">
                                <div>NAME: </div>
                                <input
                                        class="form-input text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder=""
                                        type="text"
                                        />
                            </div>

                            <div class="grid grid-cols-2">
                                <div>EMAIL: </div>
                                <input
                                        class="form-input text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder=""
                                        type="email"
                                        />
                            </div>

                            <div class="grid grid-cols-2">
                                <div>PASSWORD: </div>
                                <input
                                        class="form-input text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder=""
                                        type="password"
                                        />
                            </div>

                            <div class="grid grid-cols-2">
                                <div>CONFIRM PASSWORD: </div>
                                <input
                                        class="form-input text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder=""
                                        type="password"
                                        />
                            </div>

                            <hr class="my-4"/>

                            <button
                                class="self-end btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                            >
                                UPDATE DETAILS
                            </button>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="flex flex-col col-span-12 lg:col-span-6 gap-4 sm:gap-5 lg:gap-6">
                <h2 class="text-2xl font-bold">YOUR BILLING ACTIVITY</h2>
                <div class="card px-4 py-4 sm:px-5 flex-grow flex flex-col">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table class="is-zebra w-full text-left">
                        <thead>
                            <tr>
                            <th
                                class="whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                REF. NO.
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                DATE
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                DESCRIPTION
                            </th>
                            <th
                                class="whitespace-nowrap rounded-r-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                AMOUNT
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">#1231212131</td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">2024-07-01</td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Top-Up account</td>
                                <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5">+500 USD</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">#1231212132</td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">2024-07-02</td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Purchase BTC</td>
                                <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5">-200 USD</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">#1231212133</td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">2024-07-02</td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Purchase ETH</td>
                                <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5">-300 USD</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>

                    <div class="flex-grow flex flex-col justify-end">
                        <hr class="my-4"/>
    
                        <button
                                class="self-end btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                            >
                                CANCEL SUBSCRIPTION
                            </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col col-span-12 lg:col-span-6 gap-4 sm:gap-5 lg:gap-6">
                <h2 class="text-2xl font-bold">YOUR EXCHANGE API DATA</h2>
                <div class="card px-4 py-4 sm:px-5">
                    <div class="pt-2 grid grid-cols-6 gap-2">
                        <div class="col-span-6 gap-2 flex flex-col">
                            <div class="grid grid-cols-2">
                                <div>EXCHANGE: </div>
                                <select
                                    class="w-full"
                                    x-init="$el._tom = new Tom($el,{create: false,sortField: {field: 'text',direction: 'asc'}})"
                                    >
                                    <option>Binance</option>
                                    <option>Coinbase Exchange</option>
                                    <option>OKX</option>
                                    <option>ByBit</option>
                                    <option>Upbit</option>
                                    <option>Kraken</option>
                                    <option>Gate.io</option>
                                    <option>HTX</option>
                                    <option>Bitfinex</option>
                                    <option>KuCoin</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-2">
                                <div>API KEY: </div>
                                <input
                                        class="form-input text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder=""
                                        type="text"
                                        />
                            </div>

                            <div class="grid grid-cols-2">
                                <div>API SECRET: </div>
                                <input
                                        class="form-input text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder=""
                                        type="text"
                                        />
                            </div>


                            <hr class="my-4"/>

                            <button
                                class="self-end btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                            >
                                UPDATE
                            </button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
