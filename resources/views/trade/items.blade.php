<!DOCTYPE html>
<html lang="en">
<body>

@include('templates.nav')


<div class="wrapper">
    <!-- Item Showcase -->
    <div class="inventory-container">
        <div class="my-inventory">
            <div data-v-5399655d="" data-v-8b4a8cb3=""
                 class="inventory-grid d-flex flex-column overflow-hidden flex-grow-1 p-relative">
                <div data-v-5399655d="" class="cart-expander-wrapper mb-4 gray-700">
                    <div data-v-5399655d="" class="cart-expander__header p-relative gray-700"><!---->
                        <div data-v-4c6a924e="" data-v-5399655d="" class="trade-status-wrapper">
                            <div data-v-4c6a924e="" class="d-flex h-100 align-center justify-space-between pl-4">
                                <div data-v-4c6a924e=""
                                     class="d-flex align-center justify-space-between subtitle-2 font-weight-bold gray-200--text">
                                    <i data-v-4c6a924e="" class="toggle-open font-size-14 fas fa-angle-up mr-2"></i>
                                    <div data-v-4c6a924e="" class="cursor-pointer d-inline-block"><span
                                            data-v-4c6a924e="" class="font-size-14">You offer</span></div><!----></div>
                                <div data-v-4c6a924e="" class="user-cart-total">
                                    <div data-v-4c6a924e="" class="d-flex align-center flex-nowrap"><!----><!---->
                                        <div data-v-4c6a924e="" class="d-flex align-center pr-4"><span
                                                data-v-4c6a924e="" id="m63vh4xg"
                                                class="font-weight-bold gray-300--text">0</span><i data-v-4c6a924e=""
                                                                                                   class="font-size-14 fas fa-shopping-cart pl-2 gray-300--text"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-5399655d="" class="cart-row-wrapper px-0">
                        <div data-v-67a78be0="" data-v-5399655d="" class="cart-expander p-relative">
                            <div data-v-67a78be0="" class="cart-box p-relative pt-1 pb-5">
                                <div data-v-67a78be0="" class="cart-desc">
                                    <div data-v-67a78be0=""
                                         class="p-absolute left-0 right-0 top-0 bottom-0 d-flex flex-column align-center justify-center gray-300--text font-weight-medium pa-3 center_icon">
                                        <div class="gray-100--text font-size-18">You offer</div>
                                        <div class="font-size-16">What items do you offer</div>
                                        <i class="secondary-green-500--text font-size-18 fa-solid fa-angles-down"></i>
                                    </div>
                                </div><!----></div><!----></div>
                    </div>
                </div>
                <div data-v-5399655d="" class="inventory-card d-flex flex-column flex-grow-1 p-relative" outlined="">
                    <div data-v-5399655d="" class="filter-container-wrapper pb-4 pb-md-1">
                        <div data-v-95f29951="" data-v-5399655d=""
                             class="rounded rounded-b-0 filter-container p-relative pa-0 pa-md-3">
                            <div data-v-95f29951="" class="filter-wrapper d-flex align-center justify-space-between">
                                <div data-v-95f29951=""
                                     class="search-game-control-wrapper d-flex align-center flex-grow-1 mr-2">
                                    <div data-v-9422eb2c="" data-v-95f29951=""
                                         class="custom-input search-input font-size-14 font-weight-bold gray-600 gray-200--text rounded d-flex align-center w-100"
                                         id="userInventory-search"><!---->
                                        <div data-v-9422eb2c=""
                                             class="v-input v-input--horizontal v-input--center-affix v-input--density-compact v-theme--tradeit v-locale--is-ltr v-text-field search-input font-size-14 font-weight-bold gray-600 gray-200--text rounded d-flex align-center w-100"
                                             style="--v-input-height: 36px;"><!---->
                                            <div class="v-input__control">
                                                <div
                                                    class="v-field v-field--appended v-field--center-affix v-field--flat v-field--has-background v-field--prepended v-field--no-label v-field--variant-solo v-theme--tradeit bg-gray-600 v-locale--is-ltr">
                                                    <div class="v-field__overlay"></div>
                                                    <div class="v-field__loader">
                                                        <div class="v-progress-linear v-theme--tradeit v-locale--is-ltr"
                                                             role="progressbar" aria-hidden="true" aria-valuemin="0"
                                                             aria-valuemax="100"
                                                             style="top: 0px; height: 0px; --v-progress-linear-height: 2px;">
                                                            <!---->
                                                            <div class="v-progress-linear__background"></div>
                                                            <div class="v-progress-linear__buffer"
                                                                 style="width: 0%;"></div>
                                                            <div class="v-progress-linear__indeterminate">
                                                                <div
                                                                    class="v-progress-linear__indeterminate long"></div>
                                                                <div
                                                                    class="v-progress-linear__indeterminate short"></div>
                                                            </div><!----></div>
                                                    </div>
                                                    <div class="v-field__prepend-inner"><i
                                                            class="fas fa-solid fa-magnifying-glass font-size-14 gray-300--text v-icon notranslate v-theme--tradeit v-icon--size-default"
                                                            aria-hidden="true"></i><!----></div>
                                                    <div class="v-field__field" data-no-activator=""><!---->
                                                        <!----><input placeholder="Search inventory" size="1"
                                                                      type="text" id="userInventory-search"
                                                                      aria-describedby="userInventory-search-messages"
                                                                      class="v-field__input" value=""><!----></div>
                                                    <div class="v-field__clearable" style="display: none;"><i
                                                            class="fas fa-xmark v-icon notranslate v-theme--tradeit v-icon--size-default v-icon--clickable"
                                                            role="button" aria-hidden="false" tabindex="0"
                                                            aria-label="Clear "></i></div>
                                                    <div class="v-field__append-inner"><!----></div>
                                                    <div class="v-field__outline"><!----><!----></div>
                                                </div>
                                            </div><!----><!----></div><!----></div>
                                    <div data-v-e03dd618="" data-v-7730ab81="" data-v-95f29951=""
                                         class="dropdown-wrapper p-relative pl-3 game-select d-none d-md-block">
                                        <div data-v-e03dd618=""
                                             class="cursor-pointer select-wrapper p-relative selected-text pl-2 pr-4"
                                             aria-haspopup="menu" aria-expanded="false" aria-owns="v-menu-1849">
                                            <div data-v-7730ab81="" class="d-flex justify-center align-center"><img
                                                    data-v-7730ab81="" width="24" height="24" src="/images/all.png"
                                                    title="ALL" alt="ALL">
                                                <div data-v-7730ab81=""
                                                     class="inner-text ml-2 mr-1 d-none d-md-block text-uppercase">ALL
                                                </div>
                                            </div>
                                            <div data-v-e03dd618=""
                                                 class="arrow p-absolute right-0 d-flex align-center"><i
                                                    data-v-7730ab81=""
                                                    class="fa fa-angle-down font-size-14 d-none d-md-block"></i></div>
                                        </div><!---->
                                        <div data-v-e03dd618=""
                                             class="mobile-click p-absolute left-0 right-0 top-0 bottom-0 d-md-none"></div>
                                        <!----><!----></div>
                                </div>
                                <div data-v-95f29951=""
                                     class="filter-control-wrapper d-flex align-center justify-space-between">
                                    <div data-v-e03dd618="" data-v-7730ab81="" data-v-95f29951=""
                                         class="dropdown-wrapper p-relative pl-2 game-select d-block d-md-none">
                                        <div data-v-e03dd618=""
                                             class="cursor-pointer select-wrapper p-relative selected-text pl-2 pr-4"
                                             aria-haspopup="menu" aria-expanded="false" aria-owns="v-menu-1850">
                                            <div data-v-7730ab81="" class="d-flex justify-center align-center"><img
                                                    data-v-7730ab81="" width="24" height="24" src="/images/all.png"
                                                    title="ALL" alt="ALL">
                                                <div data-v-7730ab81=""
                                                     class="inner-text ml-2 mr-1 d-none d-md-block text-uppercase">ALL
                                                </div>
                                            </div>
                                            <div data-v-e03dd618=""
                                                 class="arrow p-absolute right-0 d-flex align-center"><i
                                                    data-v-7730ab81=""
                                                    class="fa fa-angle-down font-size-14 d-none d-md-block"></i></div>
                                        </div><!---->
                                        <div data-v-e03dd618=""
                                             class="mobile-click p-absolute left-0 right-0 top-0 bottom-0 d-md-none"></div>
                                        <!----><!----></div><!----><!----><!---->
                                    <button data-v-0db0963b="" data-v-95f29951=""
                                            class="v-btn cursor-pointer rounded-md variant-tertiary700 disabled text-capitalize like-filter-btn d-none d-md-inline-flex pa-0 rounded-0"
                                            title="reload" disabled="" type="button" rel="" color="gray-600"
                                            aria-label="Refresh inventory" style="height: 40px; min-width: 123px;">
                                        <!----><span data-v-0db0963b="" class="v-btn__content" style="opacity: 1;"><i
                                                data-v-95f29951=""
                                                class="far fa-rotate-right v-icon notranslate v-theme--tradeit text-gray-300"
                                                aria-hidden="true"
                                                style="font-size: 12px; height: 12px; width: 12px;"></i></span></button>
                                    <!----></div>
                            </div>
                        </div>
                    </div>
                    <div data-v-5399655d="" class="v-row grid-wrapper pb-0 my-0">
                        <div data-v-5399655d=""
                             class="v-col items-container user-container align-content-start py-0 px-4 px-md-6 overflow-y-auto md">
                            <div data-v-e4203738="" data-v-5399655d=""
                                 class="user-inv-login d-flex align-center justify-center pa-2 h-100 p-relative"><img
                                    data-v-e4203738="" src="/images/pattern.svg" alt="tradeit" class="img-bg p-absolute"
                                    fetchpriority="high">
                                <div data-v-e4203738="" class="d-flex flex-column p-relative">
                                    <div data-v-e4203738="" class="text-center"><img data-v-e4203738="" width="40"
                                                                                     height="40" data-nuxt-img=""
                                                                                     srcset="/_ipx/s_40x40/images/logo-icon.svg 1x, /_ipx/s_80x80/images/logo-icon.svg 2x"
                                                                                     src="/_ipx/s_40x40/images/logo-icon.svg">
                                        <p data-v-e4203738="" class="gray-200--text font-weight-bold mb-2 font-size-24">
                                            Trade Your CS2 Skins Instantly</p>
                                        <p data-v-e4203738="" class="please-login w-100 font-weight-medium mx-auto">Log
                                            in to view your Steam items and trade your skins for over 800,000 options
                                            from our bot's inventory.</p>
                                        <button data-v-0db0963b="" data-v-e4203738=""
                                                class="v-btn cursor-pointer rounded-md variant-primary text-capitalize my-4"
                                                title="Sign in with steam" type="button" rel="" max-width="452px"
                                                style="height: 40px; min-width: 123px; width: min-content;"><!----><span
                                                data-v-0db0963b="" class="v-btn__content" style="opacity: 1;"><i
                                                    data-v-e4203738=""
                                                    class="fa-brands fa-steam font-size-16 font-weight-medium mr-2"></i> Sign in with steam</span>
                                        </button>
                                    </div>
                                    <div data-v-c6d19478="">
                                        <div data-v-c6d19478="">
                                            <div data-v-c6d19478="" id="1737306568251" class="trustpilot-widget"
                                                 data-locale="en-US" data-template-id="5419b6a8b0d04a076446a9ad"
                                                 data-businessunit-id="5d5ad62798cae8000130fcf7"
                                                 data-style-height="24px" data-style-width="100%" data-theme="dark"
                                                 data-style-alignment="center" style="position: relative;">
                                                <iframe title="Customer reviews powered by Trustpilot" loading="auto"
                                                        src="https://widget.trustpilot.com/trustboxes/5419b6a8b0d04a076446a9ad/index.html?templateId=5419b6a8b0d04a076446a9ad&amp;businessunitId=5d5ad62798cae8000130fcf7#vC6d19478=&amp;locale=en-US&amp;styleHeight=24px&amp;styleWidth=100%25&amp;theme=dark&amp;styleAlignment=center"
                                                        style="position: relative; height: 24px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-5399655d=""
                             class="items-container align-content-start pt-0 pb-8 px-3 overflow-y-auto md"
                             style="display: none;"><!---->
                            <div data-v-d260cda5="" data-v-5399655d="" id="userInventoryContainer">
                                <div data-v-d260cda5="" class="grid-items">
                                    <div data-v-d260cda5=""><!----><!----></div>
                                    <div data-v-d260cda5="" class="grid-row">
                                        <div data-v-5399655d="" class="grid-col topup-shortcut">
                                            <div data-v-5399655d="" class="item-cell item h-100">
                                                <div data-v-5399655d="" class="item-container h-100">
                                                    <div data-v-5399655d=""
                                                         class="item-details gray-600 d-flex flex-column justify-center align-center h-100">
                                                        <img data-v-5399655d="" class="w-100 h-100"
                                                             src="/images/multiple-methods.webp" alt="multiple method">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!----><!----></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-5399655d="" class="items-container align-content-start py-0 px-3 overflow-y-auto md"
                             style="display: none;">
                            <div data-v-5399655d="" class="grid-skeleton-items">
                                <div data-v-5399655d="" class="grid-skeleton-row gap-1"><!---->
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                    <div data-v-5399655d="" class="grid-col">
                                        <div data-v-5399655d=""
                                             class="skeleton-wrapper item-wrapper d-flex flex-column justify-space-between gray-600 rounded pa-3"
                                             style="height: 206px;">
                                            <div class="d-flex justify-space-between"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-left-skeletor"
                                                    style="width: 69px; height: 16px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded top-right-skeletor"
                                                    style="width: 32px; height: 16px;"><!----></span></div>
                                            <div class="d-flex flex-column"><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded mb-2"
                                                    style="width: 25%; height: 12px;"><!----></span><span
                                                    class="vue-skeletor vue-skeletor--rect gray-400 rounded"
                                                    style="width: 70%; height: 14px;"><!----></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!---->
                        <div data-v-5399655d=""
                             class="bottom-actions p-fixed p-md-absolute left-4 left-md-0 right-4 right-md-0 bottom-2">
                            <!----><!----></div><!----></div><!----></div>
            </div>
        </div>
        <div class="filterbox">
            <div data-v-660ebe28="" data-v-8b4a8cb3=""
                 class="v-card v-theme--tradeit v-card--density-default v-card--variant-elevated rounded advanced-filters d-flex flex-column py-0 gray-800 p-relative w-100"
                 id="advanced-filter" outlined=""><!---->
                <div class="v-card__loader">
                    <div class="v-progress-linear v-theme--tradeit v-locale--is-ltr" role="progressbar"
                         aria-hidden="true" aria-valuemin="0" aria-valuemax="100"
                         style="top: 0px; height: 0px; --v-progress-linear-height: 2px;"><!---->
                        <div class="v-progress-linear__background"></div>
                        <div class="v-progress-linear__buffer" style="width: 0%;"></div>
                        <div class="v-progress-linear__indeterminate">
                            <div class="v-progress-linear__indeterminate long"></div>
                            <div class="v-progress-linear__indeterminate short"></div>
                        </div><!----></div>
                </div><!----><!----><!---->
                <div data-v-660ebe28=""><!----></div>
                <div data-v-660ebe28="" class="v-card-title pa-0 mb-4">
                    <div data-v-660ebe28="" class="filter-title font-size-20 font-weight-bold gray-200--text pb-3"
                         style="display: none;">Filters
                    </div>
                    <div data-v-660ebe28="" class="trade-button w-100 d-none d-md-block">
                        <button data-v-0db0963b="" data-v-69ef550f="" data-v-660ebe28=""
                                class="v-btn cursor-pointer rounded-md variant-primary text-capitalize trade-btn ma-0 rounded text-capitalize"
                                title="trade" type="button" rel="" block="" style="height: 48px; min-width: 123px;">
                            <!----><span data-v-0db0963b="" class="v-btn__content" style="opacity: 1;"><span
                                    data-v-69ef550f="" class="button-text font-size-16 text-capitalize">trade</span><i
                                    data-v-69ef550f=""
                                    class="icon font-size-12 fas fa-exchange-alt d-block pl-2"></i></span></button>
                        <div data-v-660ebe28="" class="pb-1" style="display: none;">
                            <div
                                class="gray-600 rounded rounded-t-0 p-relative text-center gray-300--text cursor-pointer pa-3"
                                aria-describedby="v-tooltip-1851">
                                <div class="d-flex justify-center align-center">
                                    <div class="font-size-14 font-size-md-12 font-weight-medium mr-1">Needed for trade
                                    </div>
                                    <div class="d-flex"><i
                                            class="far fa-circle-info v-icon notranslate v-theme--tradeit gray-300--text"
                                            aria-hidden="true" style="font-size: 12px; height: 12px; width: 12px;"></i>
                                    </div>
                                </div>
                                <div class="font-size-18 gray-200--text font-weight-bold text-center mt-1"><span
                                        id="m63vh4yv">$0.00</span></div>
                            </div><!----></div>
                    </div>
                    <div data-v-660ebe28=""><!----><!----><!----></div>
                </div>
                <div data-v-660ebe28="" class="v-card-text filters overflow-auto mb-md-4 py-0 px-0">
                    <div data-v-660ebe28="" class="d-none window-grid-wrapper mb-4">
                        <div data-v-660ebe28="" class="d-flex justify-space-between align-center">
                            <div class="font-size-16 font-weight-medium text-capitalize gray-300--text">Window grid
                            </div>
                            <div class="rounded gray-600 pa-1">
                                <button type="button"
                                        class="v-btn v-btn--icon v-theme--tradeit v-btn--density-default v-btn--size-default v-btn--variant-plain rounded gray-400"
                                        style="height: 24px; width: 24px;"><span class="v-btn__overlay"></span><span
                                        class="v-btn__underlay"></span><!----><span class="v-btn__content"
                                                                                    data-no-activator=""><img width="18"
                                                                                                              alt="window-grid"
                                                                                                              data-nuxt-img=""
                                                                                                              srcset="/_ipx/w_18/images/filter/left-half-active.svg 1x, /_ipx/w_36/images/filter/left-half-active.svg 2x"
                                                                                                              src="/_ipx/w_18/images/filter/left-half-active.svg"></span>
                                    <!----><!----></button>
                                <button type="button"
                                        class="v-btn v-btn--icon v-theme--tradeit v-btn--density-default v-btn--size-default v-btn--variant-plain rounded gray-600"
                                        style="height: 24px; width: 24px;"><span class="v-btn__overlay"></span><span
                                        class="v-btn__underlay"></span><!----><span class="v-btn__content"
                                                                                    data-no-activator=""><img width="18"
                                                                                                              alt="window-grid"
                                                                                                              data-nuxt-img=""
                                                                                                              srcset="/_ipx/w_18/images/filter/half-half.svg 1x, /_ipx/w_36/images/filter/half-half.svg 2x"
                                                                                                              src="/_ipx/w_18/images/filter/half-half.svg"></span>
                                    <!----><!----></button>
                            </div>
                        </div>
                    </div>
                    <div data-v-660ebe28="" class="d-flex price-inputs flex-column"><span data-v-660ebe28=""
                                                                                          class="gray-300--text font-size-16 mb-2">Price ($)</span>
                        <div data-v-660ebe28="" class="d-flex align-center">
                            <div data-v-9422eb2c="" data-v-660ebe28=""
                                 class="custom-input text-capitalize text-center flex-grow-1 mr-2"
                                 id="siteInventory-min"><!---->
                                <div data-v-9422eb2c=""
                                     class="v-input v-input--horizontal v-input--center-affix v-input--density-compact v-theme--tradeit v-locale--is-ltr v-text-field text-capitalize text-center flex-grow-1 mr-2"
                                     style="--v-input-height: 36px;"><!---->
                                    <div class="v-input__control">
                                        <div
                                            class="v-field v-field--center-affix v-field--flat v-field--no-label v-field--variant-solo v-theme--tradeit v-locale--is-ltr">
                                            <div class="v-field__overlay"></div>
                                            <div class="v-field__loader">
                                                <div class="v-progress-linear v-theme--tradeit v-locale--is-ltr"
                                                     role="progressbar" aria-hidden="true" aria-valuemin="0"
                                                     aria-valuemax="100"
                                                     style="top: 0px; height: 0px; --v-progress-linear-height: 2px;">
                                                    <!---->
                                                    <div class="v-progress-linear__background"></div>
                                                    <div class="v-progress-linear__buffer" style="width: 0%;"></div>
                                                    <div class="v-progress-linear__indeterminate">
                                                        <div class="v-progress-linear__indeterminate long"></div>
                                                        <div class="v-progress-linear__indeterminate short"></div>
                                                    </div><!----></div>
                                            </div><!---->
                                            <div class="v-field__field" data-no-activator=""><!----><!----><input
                                                    placeholder="Min" size="1" type="number" id="siteInventory-min"
                                                    aria-describedby="siteInventory-min-messages"
                                                    class="v-field__input"><!----></div><!----><!---->
                                            <div class="v-field__outline"><!----><!----></div>
                                        </div>
                                    </div><!----><!----></div><!----></div>
                            <i data-v-660ebe28="" class="v-icon font-size-18 gray-300--text far fa-minus"></i>
                            <div data-v-9422eb2c="" data-v-660ebe28="" class="custom-input ml-2 flex-grow-1 text-center"
                                 id="siteInventory-max" solo=""><!---->
                                <div data-v-9422eb2c=""
                                     class="v-input v-input--horizontal v-input--center-affix v-input--density-compact v-theme--tradeit v-locale--is-ltr v-text-field ml-2 flex-grow-1 text-center"
                                     style="--v-input-height: 36px;"><!---->
                                    <div class="v-input__control">
                                        <div
                                            class="v-field v-field--center-affix v-field--flat v-field--no-label v-field--variant-solo v-theme--tradeit v-locale--is-ltr">
                                            <div class="v-field__overlay"></div>
                                            <div class="v-field__loader">
                                                <div class="v-progress-linear v-theme--tradeit v-locale--is-ltr"
                                                     role="progressbar" aria-hidden="true" aria-valuemin="0"
                                                     aria-valuemax="100"
                                                     style="top: 0px; height: 0px; --v-progress-linear-height: 2px;">
                                                    <!---->
                                                    <div class="v-progress-linear__background"></div>
                                                    <div class="v-progress-linear__buffer" style="width: 0%;"></div>
                                                    <div class="v-progress-linear__indeterminate">
                                                        <div class="v-progress-linear__indeterminate long"></div>
                                                        <div class="v-progress-linear__indeterminate short"></div>
                                                    </div><!----></div>
                                            </div><!---->
                                            <div class="v-field__field" data-no-activator=""><!----><!----><input
                                                    placeholder="Max" size="1" type="number" id="siteInventory-max"
                                                    aria-describedby="siteInventory-max-messages" solo=""
                                                    class="v-field__input"><!----></div><!----><!---->
                                            <div class="v-field__outline"><!----><!----></div>
                                        </div>
                                    </div><!----><!----></div><!----></div>
                        </div>
                    </div>
                    <div data-v-660ebe28="" class="mt-4 overflow-hidden"><!---->
                        <div data-v-cd51acc6="" data-v-fa8dc906="" data-v-660ebe28=""
                             class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0"
                             accordion="">
                            <div data-v-cd51acc6="" class="v-expansion-panel">
                                <div class="v-expansion-panel__shadow"></div><!----><!---->
                                <button data-v-cd51acc6=""
                                        class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                        type="button" aria-expanded="false"><span
                                        class="v-expansion-panel-title__overlay"></span>Type
                                    <div data-v-cd51acc6="" class="v-spacer"></div>
                                    <div data-v-cd51acc6="" class="hover-action"></div>
                                    <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                   class="v-icon fas fa-angle-down"></i></span>
                                </button>
                                <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                     style="display: none;"><!----></div>
                            </div>
                        </div>
                        <div data-v-660ebe28="">
                            <div data-v-cd51acc6="" data-v-12130151="" data-v-660ebe28=""
                                 class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0"
                                 accordion="">
                                <div data-v-cd51acc6="" class="v-expansion-panel">
                                    <div class="v-expansion-panel__shadow"></div><!----><!---->
                                    <button data-v-cd51acc6=""
                                            class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                            type="button" aria-expanded="false"><span
                                            class="v-expansion-panel-title__overlay"></span>Trade lock
                                        <div data-v-cd51acc6="" class="v-spacer"></div>
                                        <div data-v-cd51acc6="" class="hover-action"></div>
                                        <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                       class="v-icon fas fa-angle-down"></i></span>
                                    </button>
                                    <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                         style="display: none;"><!----></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-cd51acc6="" data-v-6d0be664="" data-v-660ebe28=""
                             class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0"
                             accordion="">
                            <div data-v-cd51acc6="" class="v-expansion-panel">
                                <div class="v-expansion-panel__shadow"></div><!----><!---->
                                <button data-v-cd51acc6=""
                                        class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                        type="button" aria-expanded="false"><span
                                        class="v-expansion-panel-title__overlay"></span>Sticker
                                    <div data-v-cd51acc6="" class="v-spacer"></div>
                                    <div data-v-cd51acc6="" class="hover-action"></div>
                                    <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                   class="v-icon fas fa-angle-down"></i></span>
                                </button>
                                <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                     style="display: none;"><!----></div>
                            </div>
                        </div>
                        <div data-v-660ebe28="">
                            <div data-v-660ebe28=""><!----><!----><!---->
                                <div data-v-cd51acc6="" data-v-660ebe28=""
                                     class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0 rounded-0"
                                     accordion="">
                                    <div data-v-cd51acc6="" class="v-expansion-panel">
                                        <div class="v-expansion-panel__shadow"></div><!----><!---->
                                        <button data-v-cd51acc6=""
                                                class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                                type="button" aria-expanded="false"><span
                                                class="v-expansion-panel-title__overlay"></span>Exterior
                                            <div data-v-cd51acc6="" class="v-spacer"></div>
                                            <div data-v-cd51acc6="" class="hover-action"></div>
                                            <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                           class="v-icon fas fa-angle-down"></i></span>
                                        </button>
                                        <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                             style="display: none;"><!----></div>
                                    </div>
                                </div><!----><!----><!----><!----><!----><!---->
                                <div data-v-cd51acc6="" data-v-02f545f0="" data-v-660ebe28=""
                                     class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0"
                                     accordion="" expand="true">
                                    <div data-v-cd51acc6="" class="v-expansion-panel">
                                        <div class="v-expansion-panel__shadow"></div><!----><!---->
                                        <button data-v-cd51acc6=""
                                                class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                                type="button" aria-expanded="false"><span
                                                class="v-expansion-panel-title__overlay"></span>Colors
                                            <div data-v-cd51acc6="" class="v-spacer"></div>
                                            <div data-v-cd51acc6="" class="hover-action"></div>
                                            <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                           class="v-icon fas fa-angle-down"></i></span>
                                        </button>
                                        <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                             style="display: none;"><!----></div>
                                    </div>
                                </div><!----><!----><!----><!----><!----><!---->
                                <div data-v-cd51acc6="" data-v-660ebe28=""
                                     class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0"
                                     accordion="">
                                    <div data-v-cd51acc6="" class="v-expansion-panel">
                                        <div class="v-expansion-panel__shadow"></div><!----><!---->
                                        <button data-v-cd51acc6=""
                                                class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                                type="button" aria-expanded="false"><span
                                                class="v-expansion-panel-title__overlay"></span>StatTrak
                                            <div data-v-cd51acc6="" class="v-spacer"></div>
                                            <div data-v-cd51acc6="" class="hover-action"></div>
                                            <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                           class="v-icon fas fa-angle-down"></i></span>
                                        </button>
                                        <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                             style="display: none;"><!----></div>
                                    </div>
                                </div><!----><!----><!---->
                                <div data-v-cd51acc6="" data-v-660ebe28=""
                                     class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0 rounded-0"
                                     accordion="">
                                    <div data-v-cd51acc6="" class="v-expansion-panel">
                                        <div class="v-expansion-panel__shadow"></div><!----><!---->
                                        <button data-v-cd51acc6=""
                                                class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                                type="button" aria-expanded="false"><span
                                                class="v-expansion-panel-title__overlay"></span>Rarity
                                            <div data-v-cd51acc6="" class="v-spacer"></div>
                                            <div data-v-cd51acc6="" class="hover-action"></div>
                                            <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                           class="v-icon fas fa-angle-down"></i></span>
                                        </button>
                                        <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                             style="display: none;"><!----></div>
                                    </div>
                                </div><!----><!----><!----><!----><!---->
                                <div data-v-cd51acc6="" data-v-660ebe28=""
                                     class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0 rounded-0"
                                     accordion="">
                                    <div data-v-cd51acc6="" class="v-expansion-panel">
                                        <div class="v-expansion-panel__shadow"></div><!----><!---->
                                        <button data-v-cd51acc6=""
                                                class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                                type="button" aria-expanded="false"><span
                                                class="v-expansion-panel-title__overlay"></span>Collection
                                            <div data-v-cd51acc6="" class="v-spacer"></div>
                                            <div data-v-cd51acc6="" class="hover-action"></div>
                                            <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                           class="v-icon fas fa-angle-down"></i></span>
                                        </button>
                                        <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                             style="display: none;"><!----></div>
                                    </div>
                                </div><!----><!----><!----><!----><!----><!----><!----><!----></div>
                        </div>
                        <div data-v-cd51acc6="" data-v-660ebe28=""
                             class="v-expansion-panels v-theme--tradeit v-expansion-panels--variant-default common-panel rounded-0"
                             accordion="">
                            <div data-v-cd51acc6="" class="v-expansion-panel">
                                <div class="v-expansion-panel__shadow"></div><!----><!---->
                                <button data-v-cd51acc6=""
                                        class="v-expansion-panel-title font-size-16 text-capitalize font-weight-medium align-center"
                                        type="button" aria-expanded="false"><span
                                        class="v-expansion-panel-title__overlay"></span><span data-v-660ebe28=""
                                                                                              class="text-capitalize">Float</span>
                                    <div data-v-cd51acc6="" class="v-spacer"></div>
                                    <div data-v-cd51acc6="" class="hover-action"></div>
                                    <span class="v-expansion-panel-title__icon"><i data-v-cd51acc6=""
                                                                                   class="v-icon fas fa-angle-down"></i></span>
                                </button>
                                <div data-v-cd51acc6="" class="v-expansion-panel-text gray-300--text"
                                     style="display: none;"><!----></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-v-660ebe28="" class="v-card-actions card-actions py-4 py-md-0 px-0">
                    <button data-v-0db0963b="" data-v-660ebe28=""
                            class="v-btn cursor-pointer rounded-md variant-tertiaryColor disabled text-capitalize rounded ma-0 pa-0 mr-2 ma-md-0 w-md-100 mr-2 mr-md-0 flex-grow-1 flex-md-grow-0"
                            title="Reset Filters" disabled="" type="button" rel=""
                            style="height: 40px; min-width: unset;"><!----><span data-v-0db0963b=""
                                                                                 class="v-btn__content"
                                                                                 style="opacity: 1;">Reset Filters</span>
                    </button>
                    <button data-v-0db0963b="" data-v-660ebe28=""
                            class="v-btn cursor-pointer rounded-md variant-primary text-capitalize rounded flex-grow-1 d-md-none"
                            title="Show Results" type="button" rel="" style="height: 40px; min-width: unset;">
                        <!----><span data-v-0db0963b="" class="v-btn__content" style="opacity: 1;">Show Results</span>
                    </button>
                </div><!----><!----><span class="v-card__underlay"></span></div>
        </div>
        <div class="site-inventory">
            @if($all_items->count())
                <div class="items-grid">
                    @foreach($all_items as $item)
                        <div class="item">
                            <div class="item-image">
                                <img class="item-icon" src="{{$item->icon_url}}" alt="icon.png"/>
                            </div>
                            <h3>{{ $item->item_name }}</h3>
                            <p>Game: {{ $item->game }}</p>
                            <p>Rarity: {{ $item->rarity }}</p>
                            <p>Status: {{ $item->status }}</p>
                            <p>Sold by: {{ $item->user->name }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No items found.</p>
            @endif
        </div>
    </div>
</div>

@include('templates.footer')
</body>
</html>

