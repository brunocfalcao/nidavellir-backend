<x-app-layout title="CRM Analytics Dashboard" is-header-blur="true" has-sidebar="false">
    <style>
        .menu-toggle{
            display: none !important;
        }
    </style>
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="flex flex-col col-span-12 lg:col-span-8 gap-4 sm:gap-5 lg:gap-6">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-3 sm:gap-5 lg:grid-cols-3">

                    <!-- Your Balance -->
                    <div class="rounded-2xl bg-primary px-4 py-4 text-white dark:bg-accent sm:px-5">
                        <div>
                            <h2 class="text-lg font-medium tracking-wide line-clamp-1">
                                Your Balance
                            </h2>
                        </div>
                        
                        <div class="pt-4 grid grid-cols-6">
                            <div class="col-span-2 flex justify-center items-center">
                                <x-clarity-coin-bag-solid class="h-12"/>
                            </div>
                            <div class="col-span-4 flex flex-col gap-3 text-lg">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class="col-span-4 text-right font-bold font-mono">5.673,22</div>
                                    <div class="col-span-2 flex gap-2 items-center justify-end">USDT <x-cri-usdt class="h-4 w-4"/></div>
                                </div>
    
                                <div class="grid grid-cols-6 gap-4">
                                    <div class="col-span-4 text-right font-bold font-mono">312,50</div>
                                    <div class="col-span-2 flex gap-2 items-center justify-end">BnB <x-cri-bnb class="h-4 w-4"/></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Your PnL -->
                    <div class="card rounded-2xl px-4 py-4 sm:px-5">
                        <div>
                            <h2 class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Your PnL
                            </h2>
                        </div>
                        <div class="pt-2 flex justify-center items-center flex-grow gap-8">
                            <x-bi-graph-up-arrow class="text-success h-24 w-12"/>
                            <h3 class="text-4xl text-success font-mono">+547.22</h3>
                        </div>
                    </div>

                    <!-- Bullish / Bearish Market -->
                    <div class="card rounded-2xl px-4 py-4 sm:px-5 flex flex-cols justify-center items-center">
                        <div class="flex-grow flex justify-between items-center gap-4">
                            <div class="flex gap-1">
                                <x-heroicon-o-chevron-left class="text-gray-300 h-12 w-12 translate-x-16"/>
                                <x-heroicon-o-chevron-left class="text-gray-300 h-12 w-12 translate-x-8"/>
                                <x-heroicon-o-chevron-left class="text-error h-12 w-12 translate-x-0"/>
                            </div>
                            <div class="flex gap-1 text-3xl items-center font-medium flex-col">BTC</div>
                            <div class="flex gap-1">
                                <x-heroicon-o-chevron-right class="text-success h-12 w-12 -translate-x-0"/>
                                <x-heroicon-o-chevron-right class="text-success h-12 w-12 -translate-x-8"/>
                                <x-heroicon-o-chevron-right class="text-gray-300 h-12 w-12 -translate-x-16"/>
                            </div>
                        </div>
                        <div class="text-lg font-mono">63.871,77</div>
                    </div>
                </div>

		    <div>
                <h2 class="text-2xl font-bold mb-4">PRE-SELECTED TOKENS</h2>
 
                <div class="card rounded-2xl col-span-12 lg:col-span-8 border-4 border-transparent border-l-info">
                <div class="flex items-center justify-between py-3 px-4"></div>
                <div class="grid grid-cols-1 gap-y-4 pb-3 sm:grid-cols-3">
                    <div class="flex flex-col justify-between px-8">
                        <div>
                            <p class="text-base font-medium text-slate-600 dark:text-navy-100 flex items-center gap-2">
                                Entry
                                <button x-tooltip.interactive.content.right="'#help-entry'">
                                    <x-heroicon-o-question-mark-circle class="h-5 w-5 text-info"/>                                    
                                </button>

                                <template id="help-entry">
                                    <div class="flex space-x-3 rounded-lg bg-slate-150 p-3 dark:bg-navy-500">
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">Help</p>
                                        <p class="text-xs text-slate-500 dark:text-navy-200">Help comes here</p>
                                    </div>
                                    </div>
                                </template>
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                Control your automatic trading
                            </p>
                        </div>
                        <div class="pt-6 flex flex-col gap-3 text-md">
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>AUTO-ENTRY: </span>
                                <input
                                class="form-switch is-outline h-7 w-14 rounded-lg border border-slate-400/70 bg-transparent before:rounded-md before:bg-slate-300 checked:!border-info checked:before:!bg-info dark:border-navy-400 dark:before:bg-navy-300"
                                type="checkbox"
                                />
                            </label>
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>MAX-SHORTS:</span>
                                <select
                                class="form-select text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                >
                                @for($i=0; $i<=10; $i++)
                                <option>{{ $i }}</option>
                                @endfor
                                </select>
                            </label>
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>MAX-LONGS:</span>
                                <select
                                class="form-select text-base w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                >
                                @for($i=0; $i<=10; $i++)
                                <option>{{ $i }}</option>
                                @endfor
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between border-2 border-transparent border-l-slate-300 px-8">
                        <div>
                            <p class="text-base font-medium text-slate-600 dark:text-navy-100 flex items-center gap-2">
                                Take &ndash; Profit
                                <button x-tooltip.interactive.content.right="'#help-entry'">
                                    <x-heroicon-o-question-mark-circle class="h-5 w-5 text-info"/>                                    
                                </button>

                                <template id="help-entry">
                                    <div class="flex space-x-3 rounded-lg bg-slate-150 p-3 dark:bg-navy-500">
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">Help</p>
                                        <p class="text-xs text-slate-500 dark:text-navy-200">Help comes here</p>
                                    </div>
                                    </div>
                                </template>
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                Control actions on profit
                            </p>
                        </div>
                        <div class="pt-6 flex flex-col gap-3 text-md">
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>BY AMOUNT: </span>
                                <div class="flex -space-x-px">
                                    <input
                                    class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder=""
                                    type="number"
                                    />
                                    <div
                                        class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                    >
                                        <span>USDT</span>
                                    </div>
                                </div>
                            </label>
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>BY PERCENTAGE: </span>
                                <div class="flex _space-x-px">
                                    <input
                                    class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder=""
                                    type="number"
                                    />
                                    <div
                                        class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                    >
                                        <span>%</span>
                                    </div>
                                </div>
                            </label>
                            </label>
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>CLOSE ON NEXT EVENT: </span>
                                <input
                                class="form-switch is-outline h-7 w-14 rounded-lg border border-slate-400/70 bg-transparent before:rounded-md before:bg-slate-300 checked:!border-success checked:before:!bg-success dark:border-navy-400 dark:before:bg-navy-300"
                                type="checkbox"
                                />
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between border-2 border-transparent border-l-slate-300 px-4">
                        <div>
                            <p class="text-base font-medium text-slate-600 dark:text-navy-100 flex items-center gap-2">
                                Stop &ndash; Loss
                                <button x-tooltip.interactive.content.right="'#help-entry'">
                                    <x-heroicon-o-question-mark-circle class="h-5 w-5 text-info"/>                                    
                                </button>

                                <template id="help-entry">
                                    <div class="flex space-x-3 rounded-lg bg-slate-150 p-3 dark:bg-navy-500">
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">Help</p>
                                        <p class="text-xs text-slate-500 dark:text-navy-200">Help comes here</p>
                                    </div>
                                    </div>
                                </template>
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                Control actions on loss
                            </p>
                        </div>
                        <div class="pt-6 flex flex-col gap-3 text-md">
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>ON ENTRY: </span>
                                <div class="flex -space-x-px">
                                    <input
                                    class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder=""
                                    type="number"
                                    />
                                    <div
                                        class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                    >
                                        <span>%</span>
                                    </div>
                                </div>
                            </label>
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>BY AMOUNT: </span>
                                <div class="flex -space-x-px">
                                    <input
                                    class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder=""
                                    type="number"
                                    />
                                    <div
                                        class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                    >
                                        <span>USDT</span>
                                    </div>
                                </div>
                            </label>
                            <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                <span>BY PERCENTAGE: </span>
                                <div class="flex -space-x-px">
                                    <input
                                    class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder=""
                                    type="number"
                                    />
                                    <div
                                        class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                    >
                                        <span>%</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
	    </div>

            <div>
                <h2 class="text-2xl font-bold mb-4">PRE-SELECTED TOKENS</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @for($count=0; $count<2; $count++)
                    <div class="card rounded-2xl pb-1 border-4 border-transparent border-l-info px-4">
                        <div class="mt-3 mb-6 flex items-center justify-between px-4 sm:px-5">
                            <div class="flex flex-col gap-1">
                                <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                    @if($count == 0) LONGS @else SHORTS @endif
                                </h2>
                                <p class="pb-1 text-xs">6 items selected</p>
                            </div>
                            <div x-data="" class="inline-flex">
                                <label class="flex gap-2 text-xs items-center">
                                    <span class="whitespace-nowrap">Add new: </span>
                                    <select
                                        class="w-full"
                                        x-init="$el._tom = new Tom($el,{create: true})"
                                        multiple
                                        placeholder="Select coin"
                                        >
                                        <option>BTC</option>
                                        <option>LTC</option>
                                        <option>BNB</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="scrollbar-sm flex space-x-4 overflow-x-auto overflow-y-hidden px-4 pb-2 sm:px-5">
                            @php
                                $selectedTokens = [
                                    [
                                        'coin'   => 'btc',
                                        'name'   => 'Bitcoin',
                                        'value'  => 31566.11,
                                        'change' => 4.3,
                                    ],
                                    [
                                        'coin'   => 'eth',
                                        'name'   => 'Ethereum',
                                        'value'  => 7668.56,
                                        'change' => -6.53,
                                    ],
                                    [
                                        'coin'   => 'sol',
                                        'name'   => 'Solana',
                                        'value'  => 1956.11,
                                        'change' => 3.6,
                                    ],
                                    [
                                        'coin'   => 'ltc',
                                        'name'   => 'Litecoin',
                                        'value'  => 487.76,
                                        'change' => 7.98,
                                    ],
                                ];
                            @endphp
                            @foreach($selectedTokens as $token)
                            <div class="flex w-72 shrink-0 flex-col">
        
                                <div class="mt-4 flex justify-between rounded-lg bg-slate-50 py-3 pr-3 dark:bg-navy-600 px-4 gap-2 relative">
                                        <div class="flex items-center space-x-2">
                                            <img src="https://raw.githubusercontent.com/spothq/cryptocurrency-icons/master/32/color/{{ $token['coin'] }}.png" />
                                            <div>
                                                <span>{{ $token['name'] }}</span>
                                                <span class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                                    {{ $token['coin'] }}
                                                </span>
                                            </div>
                                        </div> 
                                        <div class="flex w-36 flex-col items-center rounded-lg bg-slate-100 py-2 font-inter dark:bg-navy-500">
                                            <p class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                                ${{ number_format($token['value'], 2) }}
                                            </p>
                                            <p class="mt-1 flex items-center space-x-0.5 text-xs @if($token['change'] > 0) text-success @else text-error @endif }}">
                                                @if($token['change'] > 0)
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                                </svg>
                                                @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6"></path>
                                                </svg>
                                                @endif
                                                <span>{{ abs($token['change']) }}%</span>
                                            </p>
                                        </div>
                                        <button class="absolute top-0 right-0 translate-x-3 -translate-y-3">
                                            <x-heroicon-s-x-circle class="text-red-300 hover:text-error transition-colors h-6 w-6"/>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endfor
                </div>
            </div>


            <div>
                <h2 class="text-2xl font-bold mb-4">OPEN ORDERS</h2>
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table class="is-zebra w-full text-left">
                        <thead>
                            <tr>
                            <th
                                class="whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                TOKEN
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                DIRECTION
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                AMOUNT
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                LEVERAGE
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                CURRENT PnL
                            </th>
                            <th
                                class="whitespace-nowrap rounded-r-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                ACTIONS
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5"><div class="flex items-center gap-2"><x-cri-btc class="h-4 w-4 text-amber-500" /><span>BTC</span></div></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><div flex items-center justify-center"><x-heroicon-o-arrow-up-right class="text-success h-3 w-3"/></div></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5 font-mono">1234,00</td>
                            <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5 font-mono"></td>
                            <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5 font-mono text-success">+123</td>
                            <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5 font-mono">
                                <div class="flex gap-2">
                                    <button
                                        class="btn border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                    >
                                        Action 1
                                    </button>
                                    <button
                                        class="btn border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                    >
                                        Action 2
                                    </button>

                                </div>
                            </td>
                            </tr>

                            <tr>
                            <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5"><div class="flex items-center gap-2"><x-cri-eth class="h-4 w-4 text-indigo-500" /><span>ETH</span></div></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><div flex items-center justify-center"><x-heroicon-o-arrow-down-right class="text-error h-3 w-3"/></div></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5 font-mono">1234,00</td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5 font-mono"></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5 font-mono text-error">-123</td>
                            <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5 font-mono">
                                <div class="flex gap-2">
                                    <button
                                        class="btn border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                    >
                                        Action 1
                                    </button>
                                    <button
                                        class="btn border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                    >
                                        Action 2
                                    </button>

                                </div>
                            </td>
                            </tr>
 
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-4 flex flex-col gap-6">
                <div class="card rounded-2xl px-4 py-4 sm:px-5">
                    <div>
                        <h2
                            class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                        >
                            Next Events
                        </h2>
                    </div>
                    <div class="w-full pt-4 flex justify-between">
                        <ol class="timeline line-space flex-grow-1 w-full [--size:1.5rem]">
                            <li class="mb-4 font-medium">
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6">
                                            <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                                
                                            </div>
                                        </div>
                                        <div class="col-span-6 grid grid-cols-3 text-center gap-1 text-xs xl:text-sm">
                                            <div class="hidden 2xl:block">Actual</div>
                                            <div class="hidden 2xl:block">Forecast</div>
                                            <div class="hidden 2xl:block">Previous</div>

                                            <div class="block 2xl:hidden">Act.</div>
                                            <div class="block 2xl:hidden">Fore.</div>
                                            <div class="block 2xl:hidden">Prev.</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-item-point rounded-full border border-current bg-white text-primary dark:bg-navy-700 dark:text-accent">
                                    <x-bi-calendar-event-fill class="h-[10px]"/>
                                </div>
                                <div class="timeline-item-content flex flex-col gap-1 flex-1 pl-4 sm:pl-8">
                                <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6">
                                            <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                            <p class="pb-1 text-xs">17 July 2:30pm</p>
                                            </div>
                                        </div>
                                        <div class="col-span-6 grid grid-cols-3 text-center gap-1 text-xs xl:text-sm">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6">
                                            <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                                <p
                                                    class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0"
                                                >
                                                    BOE Gov Bailey Speaks
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-span-6 grid grid-cols-3 text-center gap-1 text-xs xl:text-sm">
                                            <div>&ndash;</div>
                                            <div>1.4%</div>
                                            <div>1.3%</div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6">
                                            <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                                <p
                                                    class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0"
                                                >
                                                    Test event
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-span-6 grid grid-cols-3 text-center gap-1 text-xs xl:text-sm">
                                            <div>&ndash;</div>
                                            <div>1.4%</div>
                                            <div>1.3%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full bg-primary dark:bg-accent"
                                ></div>
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6">
                                            <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                                <p
                                                    class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0"
                                                >Final GDP q/q</p>
                                            </div>
                                            <p class="py-1 text-xs">2:30pm</p>
                                        </div>
                                        <div class="col-span-6 grid grid-cols-3 text-center gap-1 text-xs xl:text-sm">
                                            <div>
                                                <div class="badge rounded-full border border-warning text-warning animate-pulse text-xs 2lg:text-sm">Pending</div>
                                            </div>
                                            <div>236K</div>
                                            <div>238K</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="timeline-item">
                            <div class="timeline-item-point rounded-full bg-success">
                                <span
                                class="inline-flex h-full w-full animate-ping rounded-full bg-success opacity-80"
                                ></span>
                            </div>
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6">
                                            <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                                <p
                                                    class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0"
                                                >Pending Home Sales m/m</p>
                                            </div>
                                            <p class="py-1 text-xs">2:30pm</p>
                                        </div>
                                        <div class="col-span-6 grid grid-cols-3 text-center gap-1 text-xs xl:text-sm">
                                        <div>
                                            <div x-data="{time: 30}" x-init="()=>setInterval(() => {
                                                if(time == 0) time = 30;
                                                else time -= 1
                                            }
                                            , 1000)" class="badge rounded-full border border-info text-info" x-text="`${time}s`"></div>
                                        </div>
                                        <div>0.6%</div>
                                            <div>-7.7%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                            <div class="timeline-item-point rounded-full bg-slate-300 dark:bg-navy-400"></div>
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6">
                                            <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                                <p
                                                    class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0"
                                                >Bank Holiday</p>
                                            </div>
                                            <p class="py-1 text-xs">All Day</p>
                                        </div>
                                        <div class="col-span-6 grid grid-cols-3 text-center gap-1 text-xs xl:text-sm">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ol>
                    </div>
                </div>

                <div class="card rounded-2xl px-4 py-4 sm:px-5 bg-slate-150 dark:bg-navy-800">
                     <div>
                        <h2
                            class="text-2xl font-bold mb-4"
                        >
                            Trading Actions
                        </h2>
                    </div>

                    <div class="mt-4 flex flex-col gap-4">

                        <div class="card rounded-2xl px-4 py-4 sm:px-5">
                            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-8">
                                <button
                                    class="flex gap-2 justify-between btn col-span-1 h-12 bg-error font-medium text-white hover:bg-error focus:bg-error active:bg-error/25 dark:text-white dark:active:bg-accent-light/25"
                                >
                                    <x-mdi-sort-clock-ascending-outline class="h-8 w-8"/>

                                    <div class="flex-grow">OPEN SHORT</div>
                                </button>
                                <button
                                    class="flex gap-2 justify-between btn col-span-1 h-12 bg-success font-medium text-white hover:bg-success focus:bg-success active:bg-success/25 dark:bg-success-light dark:text-white dark:hover:bg-success-light dark:focus:bg-success-light dark:active:bg-success-light/25"
                                >
                                    <x-mdi-sort-clock-descending-outline class="h-8 w-8"/>
                                    <div class="flex-grow">OPEN LONG</div>
                                </button>
                                <button
                                    class="flex gap-2 justify-between btn col-span-1 h-12 bg-error font-medium text-white hover:bg-error focus:bg-error active:bg-error/25 dark:text-white dark:active:bg-accent-light/25"
                                >
                                    <x-mdi-cancel class="h-7 w-7"/>

                                    <div class="flex-grow">CLOSE ALL POSITIONS</div>
                                </button>
                                <button
                                    class="flex gap-2 justify-between btn col-span-1 h-12 bg-success font-medium text-white hover:bg-success focus:bg-success active:bg-success/25 dark:bg-success-light dark:text-white dark:hover:bg-success-light dark:focus:bg-success-light dark:active:bg-success-light/25"
                                >
                                    <x-bi-arrow-counterclockwise class="h-7 w-7"/>
                                    <div class="flex-grow">INVERT POSITION</div>
                                </button>
                            </div>
                        </div>
        
        
                        <div class="card rounded-2xl px-4 py-4 sm:px-5">
                            <div class="w-full pt-4 grid grid-cols-6 gap-8">
                                <h2
                                    class="col-span-6 text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                                >
                                    STOP-LOSS MANAGEMENT
                                </h2>
                               <div class="col-span-6 grid grid-cols-6 gap-2">
                                <div class="col-span-2 flex items-top">
                                    MAX PnL LOSS:
                                </div>
                                <div class="col-span-4 gap-2 flex flex-col items-end">
                                    <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                        <span>BY AMOUNT: </span>
                                        <div class="flex -space-x-px">
                                            <input
                                            class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder=""
                                            type="number"
                                            />
                                            <div
                                                class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                            >
                                                <span>USDT</span>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                        <span>BY PERCENTAGE: </span>
                                        <div class="flex -space-x-px">
                                            <input
                                            class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder=""
                                            type="number"
                                            />
                                            <div
                                                class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                            >
                                                <span>%</span>
                                            </div>
                                        </div>
                                    </label>
        
                                    <button
                                        class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                                    >
                                        APPLY
                                    </button>
                                </div>
                               </div> 
                            </div>
                        </div>

                        <div class="card rounded-2xl px-4 py-4 sm:px-5">
                            <div class="w-full pt-4 grid grid-cols-6 gap-8">
                                <h2
                                    class="col-span-6 text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                                >
                                    TAKE PROFIT MANAGEMENT
                                </h2>
                               <div class="col-span-6 grid grid-cols-6 gap-2">
                                <div class="col-span-2 flex items-top">
                                    MIN PnL WIN:
                                </div>
                                <div class="col-span-4 gap-2 flex flex-col items-end">
                                    <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                        <span>BY AMOUNT: </span>
                                        <div class="flex -space-x-px">
                                            <input
                                            class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder=""
                                            type="number"
                                            />
                                            <div
                                                class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                            >
                                                <span>USDT</span>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="grid grid-cols-1 2xl:grid-cols-2 items-start gap-x-2">
                                        <span>BY PERCENTAGE: </span>
                                        <div class="flex -space-x-px">
                                            <input
                                            class="form-input text-base w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder=""
                                            type="number"
                                            />
                                            <div
                                                class="text-xs flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                                            >
                                                <span>%</span>
                                            </div>
                                        </div>
                                    </label>
        
                                    <button
                                        class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                                    >
                                        APPLY
                                    </button>
                                </div>
                               </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </main>
</x-app-layout>
