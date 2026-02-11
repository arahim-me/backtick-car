<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}|| INTEK LLC || A Car Dealer Site || A Trusted Car Seller in Japan || https://intekcar.com
    </title>

    <meta name="INTEK LLC" content="intekcar.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{--
    <link rel="stylesheet" href="{{ asset('resources') }}/app/css/font-awesome.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('resources') }}/app/css/styles.css">
    <link rel="stylesheet" href="{{ asset('resources') }}/app/css/custom.css">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('resources') }}/assets/images/logo/logo.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('resources') }}/assets/images/logo/logo.png">

</head>

<body class="body header-fixed">
    <div class="login-form" id="seller-register"
        style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100vh;;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="register-form">
                <div class="modal-body">
                    <div class="wrap-modal flex">
                        {{-- <div class="images flex-none relative" style="max-height: 100vh">
                            <img class="lazyload" style="height: 100vh; width: 100%; overflow: hidden; position: fixed; z-index: -99;"
                                data-src="{{ asset('resources') }}/assets/images/section/register.jpg"
                                src="{{ asset('resources') }}/assets/images/section/register.jpg" alt="images">
                        </div> --}}
                        <div class="content" style="display: flex; flex-direction: column; justify-content: center;">
                            <h1 class="title-login">{{ $title }}</h1>
                            <x-error></x-error>
                            <div class="comments">
                                <div class="respond-comment">
                                    <form method="POST" class="comment-form form-submit"
                                        action="{{ route('seller.store') }}" accept-charset="utf-8"
                                        novalidate="novalidate">
                                        @method('POST')
                                        @csrf
                                        <fieldset class="">
                                            <label class="fw-6">Shop Name</label>
                                            <input type="text" class="tb-my-input" name="name"
                                                placeholder="Your shop name">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Shop Email</label>
                                            <input type="email" class="tb-my-input" name="email"
                                                placeholder="Email address">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Shop Phone</label>
                                            <input type="tel" class="tb-my-input" name="phone"
                                                placeholder="Phone number">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Shop fax</label>
                                            <input type="tel" class="tb-my-input" name="fax"
                                                placeholder="Fax number">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Shop Website URL (Optional)</label>
                                            <input type="url" class="tb-my-input" name="website"
                                                placeholder="Website URL">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Social Media Link (Optional)</label>
                                            <input type="url" class="tb-my-input" name="social_media"
                                                placeholder="Facebook, Twitter, Instagram, etc.">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Shop Registration Number</label>
                                            <input type="text" class="tb-my-input" name="registration_number"
                                                placeholder="Shop registration number">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Shop Tax Number</label>
                                            <input type="text" class="tb-my-input" name="tax_number"
                                                placeholder="Shop tax number">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Used Cars License Number</label>
                                            <input type="text" class="tb-my-input" name="used_cars_license_number"
                                                placeholder="Used cars license number">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <fieldset class="t">
                                            <label class="fw-6">Shop Description</label>
                                            <input type="tel" class="tb-my-input" name="description"
                                                placeholder="Shop description">
                                            <div class="icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                        stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </fieldset>
                                        <div class="col mt-4">
                                            <div class="title my-3">
                                                <h3 class="title">Bank Information</h3>
                                            </div>
                                            <fieldset class="t">
                                                <label class="fw-6">Bank Name</label>
                                                <div class="form-group">
                                                    <input type="text" class="tb-my-input" name="bank[name]"
                                                        placeholder="Bank Name">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-money-check-dollar"></i>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="t">
                                                <label class="fw-6">Bank Account Number</label>
                                                <div class="form-group">
                                                    <input type="text" class="tb-my-input"
                                                        name="bank[account_number]" placeholder="Account Number">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-money-check-dollar"></i>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="t">
                                                <label class="fw-6">Bank Branch</label>
                                                <div class="form-group">
                                                    <input type="text" class="tb-my-input" name="bank[branch]"
                                                        placeholder="Branch Name">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-money-check-dollar"></i>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <button class="sc-button" name="submit" type="submit">
                                            <span>Register</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            {{-- <p class="texts line fs-12 text-center">or Register with</p>
                            <div class="button-box flex">
                                <a href="#" class="flex align-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z"
                                            fill="#FBBB00"></path>
                                        <path
                                            d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z"
                                            fill="#518EF8"></path>
                                        <path
                                            d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z"
                                            fill="#28B446"></path>
                                        <path
                                            d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z"
                                            fill="#F14336"></path>
                                    </svg>
                                    <span class="fw-6">Google</span>
                                </a>
                                <a href="#" class="flex align-center">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z"
                                            fill="#1877F2"></path>
                                        <path
                                            d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z"
                                            fill="white"></path>
                                    </svg>
                                    <span class="fw-6">Facebook</span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Javascript -->
    <script src="{{ asset('resources') }}/app/js/jquery.min.js"></script>
    <script src="{{ asset('resources') }}/app/js/jquery.easing.js"></script>
    <script src="{{ asset('resources') }}/app/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('resources') }}/app/js/bootstrap.min.js"></script>
    <script src="{{ asset('resources') }}/app/js/plugin.js"></script>
    <script src="{{ asset('resources') }}/app/js/shortcodes.js"></script>
    <script src="{{ asset('resources') }}/app/js/main.js"></script>

    <!-- Javascript -->
    <script src="{{ asset('resources') }}/app/js/swiper-bundle.min.js"></script>
    <!-- <script src="{{ asset('resources') }}/app/js/owl.js"></script> -->
    <script src="{{ asset('resources') }}/app/js/swiper.js"></script>
    <script src="{{ asset('resources') }}/app/js/jquery-validate.js"></script>
    <!-- <script src="{{ asset('resources') }}/app/js/countto.js"></script>
    <script src="{{ asset('resources') }}/app/js/curved.js"></script> -->
    <script src="{{ asset('resources') }}/app/js/price-ranger.js"></script>
    <!-- <script src="{{ asset('resources') }}/app/js/lazysize.min.js"></script> -->



</body>

</html>
