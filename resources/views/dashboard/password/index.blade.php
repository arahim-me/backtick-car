@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <div class="tfcl-dashboard">
                        <h1 class="admin-title mb-3">Change Password</h1>

                        <div class="tfcl-add-listing profile-inner">

                            <h3>Change passwords</h3>
                            <form action="{{ route('profile.update.password') }}" method="POST" class="">
                                @csrf

                                <div class="tfcl-add-listing profile-password">
                                    <div class="form-group">
                                        <label for="c_pass">Current password</label>

                                        <div class="input-gorup d-flex align-items-center">
                                            <input id="c_pass" type="password" class="form-control" name="c_pass"
                                                placeholder="Current password">
                                            <i class="fas fa-eye-slash" id="cPassShowHideIcon" style="margin-left: -28px"
                                                onclick="showHide('c_pass', 'cPassShowHideIcon')"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New password</label>

                                        <div class="input-gorup d-flex align-items-center">
                                            <input id="password" type="password" class="form-control" name="password"
                                                placeholder="New password">
                                            <i class="fas fa-eye-slash" id="passShowHideIcon" style="margin-left: -28px"
                                                onclick="showHide('password', 'passShowHideIcon')"></i>
                                        </div>
                                    </div>

                                    <ul class="list-check-req mb-3">
                                        <li class="check"><span>One number</span></li>
                                        <li><span>One lowercase character</span></li>
                                        <li><span>One uppercase character</span></li>
                                        <li><span>8 characters minimum</span></li>
                                    </ul>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm password</label>

                                        <div class="input-gorup d-flex align-items-center">
                                            <input id="password_confirmation" type="password" class="form-control"
                                                name="password_confirmation" placeholder="Confirm password">
                                            <i class="fas fa-eye-slash" id="conPassShowHideIcon" style="margin-left: -28px"
                                                onclick="showHide('password_confirmation', 'conPassShowHideIcon')"></i>
                                        </div>
                                    </div>
                                    <div class="group-button-submit left mb-0">
                                        <button class="pre-btn" type="submit">Change password</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        var a = 1;

        function showHide(input, icon) {
            if (a == 1) {
                document.getElementById(input).type = 'password';
                document.getElementById(icon).classList.replace("fa-eye", "fa-eye-slash", );
                a = 0;
            } else {
                document.getElementById(input).type = 'text';
                document.getElementById(icon).classList.replace("fa-eye-slash", "fa-eye");
                a = 1;
            }
        }
    </script>
@endsection
