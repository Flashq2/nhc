<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Title -->
    <title>NFT MAX - NFT Dashboard Template</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/img/favicon.png">


    <!-- NFTMax Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/charts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slickslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

</head>

<body>

    <div class="body-bg" style="background-image:url('assets/img/body-bg.jpg')">

        <!-- NFTMax Admin Menu -->
        <div class="nftmax-smenu">
            <!-- Admin Menu -->
            <div class="admin-menu">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img class="nftmax-logo__main" src="assets/img/logo-white.png" alt="#">
                    </a>
                    <div class="nftmax__sicon close-icon"><img src="assets/img/menu-toggle.svg" alt="#"></div>
                </div>
                <!-- Author Details -->
                <div class="admin-menu__one">
                    <h4 class="admin-menu__title nftmax-scolor">Menu</h4>
                    <!-- Nav Menu -->
                    <div class="menu-bar">
                        <ul class="menu-bar__one">
                            <li class="active"><a href="{{ url('/') }}"><span class="menu-bar__name">Room</span></span></a></li>
                            <li class="active"><a href="{{ url('/table') }}"><span class="menu-bar__name">Table</span></span></a></li>
                        </ul>
                    </div>
                    <!-- End Nav Menu -->
                </div>

                <div class="admin-menu__two mg-top-50">
                    <h4 class="admin-menu__title nftmax-scolor">Settings</h4>
                    <!-- Nav Menu -->
                    <div class="menu-bar">
                        <ul class="menu-bar__one">
                            <li><a href="{{ url('/my-profile') }}"><span class="menu-bar__text"><span
                                            class="nftmax-menu-icon nftmax-svg-icon__v10"><svg class="nftmax-svg-icon"
                                                viewBox="0 0 15 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.8692 11.6667H4.13085C3.03569 11.668 1.98576 12.1036 1.21136 12.878C0.436961 13.6524 0.00132319 14.7023 0 15.7975V20H15.0001V15.7975C14.9987 14.7023 14.5631 13.6524 13.7887 12.878C13.0143 12.1036 11.9644 11.668 10.8692 11.6667Z">
                                                </path>
                                                <path
                                                    d="M7.49953 10C10.261 10 12.4995 7.76145 12.4995 5.00002C12.4995 2.23858 10.261 0 7.49953 0C4.7381 0 2.49951 2.23858 2.49951 5.00002C2.49951 7.76145 4.7381 10 7.49953 10Z">
                                                </path>
                                            </svg></span><span class="menu-bar__name">My Profile</span> </span></a></li>
                            <li><a href="{{ url('/setting') }}"><span class="menu-bar__text"><span
                                            class="nftmax-menu-icon nftmax-svg-icon__v11"><svg class="nftmax-svg-icon"
                                                viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.259306 11.548C0.789972 12.469 1.96681 12.7854 2.88783 12.2548C2.88846 12.2544 2.88906 12.254 2.88969 12.2537L3.17517 12.0888C3.71408 12.5499 4.33352 12.9074 5.00231 13.1435V13.4727C5.00231 14.5356 5.86402 15.3973 6.92698 15.3973C7.98993 15.3973 8.85164 14.5356 8.85164 13.4727V13.1435C9.52052 12.9071 10.14 12.5491 10.6788 12.0875L10.9656 12.253C11.8868 12.7845 13.0645 12.4686 13.5959 11.5473C14.1274 10.6261 13.8115 9.44842 12.8902 8.91694L12.6054 8.75271C12.7336 8.05499 12.7336 7.33974 12.6054 6.64199L12.8902 6.47776C13.8114 5.94628 14.1274 4.76863 13.5959 3.84738C13.0645 2.92615 11.8868 2.61018 10.9656 3.14165L10.6801 3.30654C10.1406 2.84604 9.52076 2.48913 8.85164 2.25378V1.92467C8.85164 0.861709 7.98993 0 6.92698 0C5.86402 0 5.00231 0.861709 5.00231 1.92467V2.25378C4.33343 2.49025 3.71396 2.84823 3.17517 3.30979L2.8884 3.14364C1.96715 2.61213 0.789491 2.92811 0.258013 3.84933C-0.273465 4.77055 0.0424806 5.94824 0.963734 6.47972L1.24858 6.64394C1.12035 7.34166 1.12035 8.05692 1.24858 8.75467L0.963734 8.9189C0.0450368 9.45179 -0.269887 10.6272 0.259306 11.548ZM6.92698 5.13245C8.34425 5.13245 9.49319 6.28139 9.49319 7.69866C9.49319 9.11594 8.34425 10.2649 6.92698 10.2649C5.5097 10.2649 4.36077 9.11594 4.36077 7.69866C4.36077 6.28139 5.5097 5.13245 6.92698 5.13245Z">
                                                </path>
                                            </svg></span><span class="menu-bar__name">Settings</span></span></a></li>
                        </ul>
                    </div>
                    <!-- End Nav Menu -->
                </div>

                <!-- Logout Button -->
                <div class="logout-button">
                    <a class="nftmax-btn primary" data-bs-toggle="modal" data-bs-target="#logout_modal">
                        <div class="logo-button__icon"><img src="assets/img/logout.png" alt="#"></div><span
                            class="menu-bar__name">Signout</span>
                    </a>
                </div>
            </div>
            <!-- End Admin Menu -->
        </div>
        <!-- End NFTMax Admin Menu -->

        <!-- Logout Modal  -->
        <div class="nftmax-preview__modal modal fade" id="logout_modal" tabindex="-1" aria-labelledby="logoutmodal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered nftmax-close__modal-close">
                <div class="modal-content nftmax-preview__modal-content">
                    <div class="modal-header nftmax__modal__header">
                        <h4 class="modal-title nftmax-preview__modal-title" id="logoutmodal">Confirm</h4>
                        <button type="button" class="nftmax-preview__modal--close btn-close" data-bs-dismiss="modal"
                            aria-label="Close"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M36 16.16C36 17.4399 36 18.7199 36 20.0001C35.7911 20.0709 35.8636 20.2554 35.8385 20.4001C34.5321 27.9453 30.246 32.9248 22.9603 35.2822C21.9006 35.6251 20.7753 35.7657 19.6802 35.9997C18.4003 35.9997 17.1204 35.9997 15.8401 35.9997C15.5896 35.7086 15.2189 35.7732 14.9034 35.7093C7.77231 34.2621 3.08728 30.0725 0.769671 23.187C0.435002 22.1926 0.445997 21.1199 0 20.1599C0 18.7198 0 17.2798 0 15.8398C0.291376 15.6195 0.214408 15.2656 0.270759 14.9808C1.71321 7.69774 6.02611 2.99691 13.0428 0.700951C14.0118 0.383805 15.0509 0.386897 15.9999 0C17.2265 0 18.4532 0 19.6799 0C19.7156 0.124041 19.8125 0.136067 19.9225 0.146719C27.3 0.868973 33.5322 6.21922 35.3801 13.427C35.6121 14.3313 35.7945 15.2484 36 16.16ZM33.011 18.0787C33.0433 9.77105 26.3423 3.00309 18.077 2.9945C9.78479 2.98626 3.00344 9.658 2.98523 17.8426C2.96667 26.1633 9.58859 32.9601 17.7602 33.0079C26.197 33.0577 32.9787 26.4186 33.011 18.0787Z"
                                    fill="#374557" fill-opacity="0.6"></path>
                                <path
                                    d="M15.9309 18.023C13.9329 16.037 12.007 14.1207 10.0787 12.2072C9.60071 11.733 9.26398 11.2162 9.51996 10.506C9.945 9.32677 11.1954 9.0811 12.1437 10.0174C13.9067 11.7585 15.6766 13.494 17.385 15.2879C17.9108 15.8401 18.1633 15.7487 18.6375 15.258C20.3586 13.4761 22.1199 11.7327 23.8822 9.99096C24.8175 9.06632 26.1095 9.33639 26.4967 10.517C26.7286 11.2241 26.3919 11.7413 25.9133 12.2178C24.1757 13.9472 22.4477 15.6855 20.7104 17.4148C20.5228 17.6018 20.2964 17.7495 20.0466 17.9485C22.0831 19.974 24.0372 21.8992 25.9689 23.8468C26.9262 24.8119 26.6489 26.1101 25.4336 26.4987C24.712 26.7292 24.2131 26.3441 23.7455 25.8757C21.9945 24.1227 20.2232 22.3892 18.5045 20.6049C18.0698 20.1534 17.8716 20.2269 17.4802 20.6282C15.732 22.4215 13.9493 24.1807 12.1777 25.951C11.7022 26.4262 11.193 26.7471 10.4738 26.4537C9.31345 25.9798 9.06881 24.8398 9.98589 23.8952C11.285 22.5576 12.6138 21.2484 13.9387 19.9355C14.5792 19.3005 15.2399 18.6852 15.9309 18.023Z"
                                    fill="#374557" fill-opacity="0.6"></path>
                            </svg></button>
                    </div>
                    <div class="modal-body nftmax-modal__body modal-body nftmax-close__body">
                        <div class="nftmax-preview__close">
                            <div class="nftmax-preview__close-img"><img src="assets/img/close.png" alt="#">
                            </div>
                            <h2 class="nftmax-preview__close-title">Are you sure you want to Logout <span>NETMAX admin
                                    Penal?</span></h2>
                            <div class="nftmax__item-button--group">
                                <a href="{{ url('/load-login') }}"
                                    class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius "
                                    type="submit">Yes Logout
                                </a>
                                <button
                                    class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered--plus radius"
                                    data-bs-dismiss="modal"><span class="ntfmax__btn-textgr">Not Now</span> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Logout Modal -->

        <!-- Connect to Wallet -->
        <div class="nftmax-preview__modal modal fade" id="add_wallet" tabindex="-1"
            aria-labelledby="addWalletlLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered nftmax-followers__modal">
                <div class="modal-content nftmax-preview__connect">
                    <div class="modal-header nftmax__modal__header">
                        <h4 class="modal-title nftmax-preview__modal-title" id="addWalletlLabel">Connect to a wallet
                        </h4>
                        <button type="button" class="nftmax-preview__modal--close btn-close" data-bs-dismiss="modal"
                            aria-label="Close"><svg width="36" height="36" viewBox="0 0 36 36"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M36 16.16C36 17.4399 36 18.7199 36 20.0001C35.7911 20.0709 35.8636 20.2554 35.8385 20.4001C34.5321 27.9453 30.246 32.9248 22.9603 35.2822C21.9006 35.6251 20.7753 35.7657 19.6802 35.9997C18.4003 35.9997 17.1204 35.9997 15.8401 35.9997C15.5896 35.7086 15.2189 35.7732 14.9034 35.7093C7.77231 34.2621 3.08728 30.0725 0.769671 23.187C0.435002 22.1926 0.445997 21.1199 0 20.1599C0 18.7198 0 17.2798 0 15.8398C0.291376 15.6195 0.214408 15.2656 0.270759 14.9808C1.71321 7.69774 6.02611 2.99691 13.0428 0.700951C14.0118 0.383805 15.0509 0.386897 15.9999 0C17.2265 0 18.4532 0 19.6799 0C19.7156 0.124041 19.8125 0.136067 19.9225 0.146719C27.3 0.868973 33.5322 6.21922 35.3801 13.427C35.6121 14.3313 35.7945 15.2484 36 16.16ZM33.011 18.0787C33.0433 9.77105 26.3423 3.00309 18.077 2.9945C9.78479 2.98626 3.00344 9.658 2.98523 17.8426C2.96667 26.1633 9.58859 32.9601 17.7602 33.0079C26.197 33.0577 32.9787 26.4186 33.011 18.0787Z"
                                    fill="#374557" fill-opacity="0.6"></path>
                                <path
                                    d="M15.9309 18.023C13.9329 16.037 12.007 14.1207 10.0787 12.2072C9.60071 11.733 9.26398 11.2162 9.51996 10.506C9.945 9.32677 11.1954 9.0811 12.1437 10.0174C13.9067 11.7585 15.6766 13.494 17.385 15.2879C17.9108 15.8401 18.1633 15.7487 18.6375 15.258C20.3586 13.4761 22.1199 11.7327 23.8822 9.99096C24.8175 9.06632 26.1095 9.33639 26.4967 10.517C26.7286 11.2241 26.3919 11.7413 25.9133 12.2178C24.1757 13.9472 22.4477 15.6855 20.7104 17.4148C20.5228 17.6018 20.2964 17.7495 20.0466 17.9485C22.0831 19.974 24.0372 21.8992 25.9689 23.8468C26.9262 24.8119 26.6489 26.1101 25.4336 26.4987C24.712 26.7292 24.2131 26.3441 23.7455 25.8757C21.9945 24.1227 20.2232 22.3892 18.5045 20.6049C18.0698 20.1534 17.8716 20.2269 17.4802 20.6282C15.732 22.4215 13.9493 24.1807 12.1777 25.951C11.7022 26.4262 11.193 26.7471 10.4738 26.4537C9.31345 25.9798 9.06881 24.8398 9.98589 23.8952C11.285 22.5576 12.6138 21.2484 13.9387 19.9355C14.5792 19.3005 15.2399 18.6852 15.9309 18.023Z"
                                    fill="#374557" fill-opacity="0.6"></path>
                            </svg></button>
                    </div>
                    <div class="modal-body nftmax-modal__body">
                        <!-- Treadning Action Single -->
                        <ul class="nftmax-wallet__list">
                            <!-- Single Wallet -->
                            @foreach ($Addmoney as $Addmoney)
                                <li class="nftmax-wallet__list-single">
                                    <div class="nftmax-balance-info">
                                        <div class="nftmax-balance__img"><img src="{{ asset($Addmoney['0']) }}"
                                                alt="#"></div>
                                        <h4 class="nftmax-balance-name">{{ $Addmoney['1'] }}</h4>
                                    </div>
                                    @if ($Addmoney['2'] == 1)
                                        <a class="nftmax-btn nftmax-btn__bordered--plus radius" tabindex="-1"
                                            role="button" aria-disabled="true"><span
                                                class="ntfmax__btn-textgr">Connected</span></a>
                                    @else
                                        <a class="nftmax-btn nftmax-btn__bordered bg radius" tabindex="-1"
                                            role="button" aria-disabled="true">Connect</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <div class="view-wallet__btn"><a href="{{ url('/my-wallet') }}">View All Wallet</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Connect to Wallet -->

        <!-- Start Header -->
        <header class="nftmax-header">
            <div class="container">
                <div class="row g-50">
                    <div class="col-12">
                        <!-- Dashboard Header -->
                        <div class="nftmax-header__inner">
                            <div class="nftmax__sicon close-icon d-xl-none"><img src="assets/img/menu-toggle.svg"
                                    alt="#"></div>
                            <div class="nftmax-header__left">
                                <!-- Search Form -->
                                <div class="nftmax-header__form">
                                    <form class="nftmax-header__form-inner" action="#">
                                        <button class="search-btn" type="submit"><img src="assets/img/search.png"
                                                alt="#"></button>
                                        <input name="s" value="" type="text"
                                            placeholder="Search items, collections...">
                                    </form>
                                </div>
                                <!-- End Search Form -->
                            </div>
                            <div class="nftmax-header__right">
                                <div class="nftmax-header__group">
                                    <!-- Search Form -->
                                    <div class="nftmax-header__amount">
                                        <div class="nftmax-amount__icon"><img src="assets/img/bag-icon.svg"
                                                alt="#"></div>
                                        <div class="nftmax-amount__digit"><span>$</span> 234,435.34</div>
                                        <div class="nftmax-header__plus"><a href="#"><img
                                                    src="assets/img/plus-icon.svg" alt="#"></a></div>
                                        <!-- NFTMax Balance Hover -->
                                        <div class="nftmax-balance">
                                            <h3 class="nftmax-balance__title">Your Balance</h3>
                                            <!-- NFTMax Balance List -->
                                            <ul class="nftmax-balance_list">
                                                @foreach ($Balance as $Balance)
                                                    <li>
                                                        <div class="nftmax-balance-info">
                                                            <div class="nftmax-balance__img"><img
                                                                    src="{{ asset($Balance['0']) }}" alt="#">
                                                            </div>
                                                            <h4 class="nftmax-balance-name">{{ $Balance['1'] }}</h4>
                                                        </div>
                                                        <div class="nftmax-balance-amount">
                                                            <h4 class="nftmax-balance-amount nftmax-scolor">
                                                                {{ $Balance['2'] }} ETH <span
                                                                    class="nftmax-balance-usd">({{ $Balance['3'] }}
                                                                    USD)</span></h4>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <!-- NFTMax Balance Button -->
                                            <div class="nftmax-balance__button" data-bs-toggle="modal"
                                                data-bs-target="#add_wallet"><a href="#"
                                                    class="nftmax-btn nftmax-btn__bordered bg radius">Add Money</a>
                                            </div>

                                        </div>
                                        <!-- End NFTMax Balance Hover -->
                                    </div>
                                    <!-- End Search Form -->
                                    <div class="nftmax-header__group-two">
                                        <div class="nftmax-header__right">
                                            <div class="nftmax-header__alarm"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="22" height="24" viewBox="0 0 22 24"
                                                    fill="none">
                                                    <path
                                                        d="M3.27336 17.6123H18.3622C18.8266 17.6123 19.2841 17.5005 19.6961 17.2863C20.1081 17.072 20.4625 16.7617 20.7292 16.3815C20.9959 16.0014 21.1671 15.5626 21.2283 15.1023C21.2896 14.6419 21.239 14.1736 21.081 13.737L18.3323 6.13763C17.8629 4.44882 16.8532 2.96026 15.4577 1.89961C14.0621 0.838957 12.3576 0.264609 10.6048 0.264404V0.264404C8.78009 0.264376 7.00995 0.886604 5.58662 2.02836C4.16328 3.17011 3.17186 4.76311 2.77605 6.54435L0.511187 13.869C0.377839 14.3015 0.347861 14.7592 0.423665 15.2053C0.49947 15.6515 0.678939 16.0736 0.947633 16.4377C1.21633 16.8018 1.56674 17.0978 1.97069 17.3018C2.37463 17.5058 2.82082 17.6122 3.27336 17.6123Z"
                                                        fill="#374557"></path>
                                                    <path
                                                        d="M6.19531 19.5398C6.41651 20.6291 7.00751 21.6085 7.86817 22.312C8.72883 23.0154 9.80622 23.3997 10.9178 23.3997C12.0294 23.3997 13.1068 23.0154 13.9674 22.312C14.8281 21.6085 15.4191 20.6291 15.6403 19.5398H6.19531Z"
                                                        fill="#374557"></path>
                                                </svg><span
                                                    class="nftmax-header__count">{{ count($RecentNotification) }}</span>
                                                <!-- NFTMax Alarm Hover -->
                                                <div class="nftmax-balance nftmax-alarm__hover">
                                                    <h3 class="nftmax-balance__title">Recent Notification</h3>
                                                    <!-- NFTMax Balance List -->
                                                    <ul class="nftmax-balance_list">
                                                        @foreach ($RecentNotification as $RecentNotification)
                                                            <li>
                                                                <div class="nftmax-balance-info">
                                                                    <div
                                                                        class="nftmax-balance__img nftmax-alarm__default">
                                                                        <img src="{{ asset($RecentNotification['0']) }}"
                                                                            alt="#"></div>
                                                                    <div class="nftmax-alarm__content">
                                                                        <h4 class="nftmax-balance-name">
                                                                            {{ $RecentNotification['1'] }} <strong
                                                                                class="nftmax-balance__second">{{ $RecentNotification['2'] }}</strong>
                                                                        </h4>
                                                                        <p class="nftmax-alarm__text">
                                                                            {{ $RecentNotification['3'] }}</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    <!-- NFTMax Balance Button -->
                                                    <div class="nftmax-balance__button"><a
                                                            href="{{ url('/notification') }}"
                                                            class="nftmax-balance__sell-all">See all Notification</a>
                                                    </div>
                                                </div>
                                                <!-- End NFTMax Balance Hover -->
                                            </div>
                                            <div class="nftmax-header__author">
                                                <div class="nftmax-header__author-img"><img
                                                        src="{{ asset($User_info_for_header['image']) }}"
                                                        alt="#"></div>
                                                <div class="nftmax-header__author-content">
                                                    <h4 class="nftmax-header__author-title">
                                                        {{ $User_info_for_header['name'] }}</h4>
                                                    <p class="nftmax-header__author-text v1"><a
                                                            href="#">{{ $User_info_for_header['user_name'] }}</a>
                                                    </p>
                                                </div>

                                                <!-- NFTMax Profile Hover -->
                                                <div class="nftmax-balance nftmax-profile__hover">
                                                    <h3 class="nftmax-balance__title">My Profile</h3>
                                                    <!-- NFTMax Balance List -->
                                                    <ul class="nftmax-balance_list">
                                                        <li>
                                                            <div class="nftmax-balance-info">
                                                                <div
                                                                    class="nftmax-balance__img nftmax-profile__img-one">
                                                                    <img src="assets/img/profile-1.png"
                                                                        alt="#"></div>
                                                                <h4 class="nftmax-balance-name"><a
                                                                        href="{{ url('/my-profile') }}">My Profile</a>
                                                                </h4>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="nftmax-balance-info">
                                                                <div
                                                                    class="nftmax-balance__img nftmax-profile__img-two">
                                                                    <img src="assets/img/profile-2.png"
                                                                        alt="#"></div>
                                                                <h4 class="nftmax-balance-name"><a
                                                                        href="{{ url('/message') }}">Message</a><span
                                                                        class="nftmax-profile__count">19</span></h4>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="nftmax-balance-info">
                                                                <div
                                                                    class="nftmax-balance__img nftmax-profile__img-three">
                                                                    <img src="assets/img/profile-3.png"
                                                                        alt="#"></div>
                                                                <h4 class="nftmax-balance-name"><a
                                                                        href="{{ url('/history') }}">History</a></h4>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="nftmax-balance-info">
                                                                <div
                                                                    class="nftmax-balance__img nftmax-profile__img-four">
                                                                    <img src="assets/img/profile-4.png"
                                                                        alt="#"></div>
                                                                <h4 class="nftmax-balance-name"><a
                                                                        href="{{ url('/setting') }}">Setting</a></h4>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="nftmax-balance-info">
                                                                <div
                                                                    class="nftmax-balance__img nftmax-profile__img-five">
                                                                    <img src="assets/img/profile-5.png"
                                                                        alt="#"></div>
                                                                <h4 class="nftmax-balance-name"><a
                                                                        href="{{ url('/load-login') }}">Log Out</a>
                                                                </h4>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- End NFTMax Balance Hover -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
