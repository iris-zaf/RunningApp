@extends('frontend.layouts.master')


@section('content')
    <section class="fp__breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>user dashboard</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=========================
                                                                                DASHBOARD START
                                                                            ==========================-->

    <section class="fp__dashboard mt_120 xs_mt_90 mb_100 xs_mb_70">
        <div class="container">
            <div class="fp__dashboard_area">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__dashboard_menu">
                            <div class="dasboard_header">
                                <div class="dasboard_header_img">
                                    <img src="images/comment_img_2.png" alt="user" class="img-fluid w-100">
                                    <label for="upload"><i class="far fa-camera"></i></label>
                                    <input type="file" id="upload" hidden>
                                </div>
                                <h2>Iris Kalogirou</h2>
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true"><span><i
                                            class="fas fa-user"></i></span> Personal Info</button>

                                <button class="nav-link" id="v-pills-address-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-address" type="button" role="tab"
                                    aria-controls="v-pills-address" aria-selected="true"><span><i
                                            class="fas fa-user"></i></span>address</button>

                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false"><span><i
                                            class="fas fa-bags-shopping"></i></span> Order</button>

                                <button class="nav-link" id="v-pills-messages-tab2" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages2" type="button" role="tab"
                                    aria-controls="v-pills-messages2" aria-selected="false"><span><i
                                            class="far fa-heart"></i></span> wishlist</button>

                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false"><span><i
                                            class="fas fa-star"></i></span> Reviews</button>

                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false"><span><i
                                            class="fas fa-user-lock"></i></span> Change Password </button>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="nav-link"
                                        onclick="event.preventDefault();
                                this.closest('form').submit();"
                                        type="button">
                                        <span><i class="fas fa-sign-out-alt"></i></span> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__dashboard_content">
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="fp_dashboard_body">
                                        <h3>Welcome to your Profile</h3>
                                        <div class="fp_dash_personal_info">
                                            <h4>Personal Information
                                                <a class="dash_info_btn">
                                                    <span class="edit">edit</span>
                                                    <span class="cancel">cancel</span>
                                                </a>
                                            </h4>

                                            <div class="personal_info_text">
                                                <p><span>Name:</span> Iris Kalogirou</p>
                                                <p><span>Email:</span> iriskalogirou1@gmail.com</p>
                                                <p><span>Phone:</span> </p>
                                                <p><span>Address:</span>Fairy Land </p>
                                            </div>
                                            <div class="fp_dash_personal_info_edit comment_input p-0">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="fp__comment_imput_single">
                                                                <label>name</label>
                                                                <input type="text" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="fp__comment_imput_single">
                                                                <label>email</label>
                                                                <input type="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="fp__comment_imput_single">
                                                                <label>phone</label>
                                                                <input type="text" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="fp__comment_imput_single">
                                                                <label>address</label>
                                                                <textarea rows="4" placeholder="Address"></textarea>
                                                            </div>
                                                            <button type="submit" class="common_btn">submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                                    aria-labelledby="v-pills-address-tab">
                                    <div class="fp_dashboard_body address_body">
                                        <h3>address <a class="dash_add_new_address"><i class="far fa-plus"></i> add new
                                            </a>
                                        </h3>
                                        <div class="fp_dashboard_address">
                                            <div class="fp_dashboard_existing_address">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i class="fas fa-home"></i>
                                                                        home</span>
                                                                    <span class="address"> FairyLand 2
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i
                                                                            class="far fa-car-building"></i>
                                                                        office</span>
                                                                    <span class="address">Fairy Land 3
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i
                                                                            class="far fa-car-building"></i>
                                                                        office
                                                                        2</span>
                                                                    <span class="address">Fairy Land 5
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i class="fas fa-home"></i> home
                                                                        2</span>
                                                                    <span class="address">Fairy Land 6
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fp_dashboard_new_address ">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>add new address</h4>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Company Name (Optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <select id="select_js3">
                                                                    <option value="">select city</option>
                                                                    <option value="">utopia</option>
                                                                    <option value="">heaven</option>
                                                                    <option value="">unicornland</option>
                                                                    <option value="">fairytopia</option>
                                                                    <option value="">imaginerytopia</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Street Address *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Town / City *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="State *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Zip *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Phone *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="email" placeholder="Email *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <textarea cols="3" rows="4" placeholder="Address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="fp__check_single_form check_area">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        home
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault2">
                                                                        office
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button"
                                                                class="common_btn cancel_new_address">cancel</button>
                                                            <button type="submit" class="common_btn">save
                                                                address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="fp_dashboard_edit_address ">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>edit address </h4>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Company Name (Optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <select id="select_js4">
                                                                    <option value="">select city</option>
                                                                    <option value="">utopia</option>
                                                                    <option value="">heaven</option>
                                                                    <option value="">unicornland</option>
                                                                    <option value="">fairytopia</option>
                                                                    <option value="">imaginerytopia</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Street Address *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Town / City *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="State *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Zip *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Phone *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="email" placeholder="Email *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <textarea cols="3" rows="4" placeholder="Address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="fp__check_single_form check_area">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault2" id="flexRadioDefault12">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault12">
                                                                        home
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault2" id="flexRadioDefault22">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault22">
                                                                        office
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button"
                                                                class="common_btn cancel_edit_address">cancel</button>

                                                            <button type="submit" class="common_btn">update
                                                                address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="fp_dashboard_body">
                                        <h3>order list</h3>
                                        <div class="fp_dashboard_order">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="t_header">
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Amount</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#2545758745</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 16, 2022</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">Complated</span>
                                                            </td>
                                                            <td>
                                                                <h5>$560</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#2457945235</h5>
                                                            </td>
                                                            <td>
                                                                <p>jan 21, 2021</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">complete</span>
                                                            </td>
                                                            <td>
                                                                <h5>$654</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#2456875648</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 11, 2020</p>
                                                            </td>
                                                            <td>
                                                                <span class="active">active</span>
                                                            </td>
                                                            <td>
                                                                <h5>$440</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#7896542130</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 16, 2022</p>
                                                            </td>
                                                            <td>
                                                                <span class="active">active</span>
                                                            </td>
                                                            <td>
                                                                <h5>$225</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#4587964125</h5>
                                                            </td>
                                                            <td>
                                                                <p>jan 21, 2021</p>
                                                            </td>
                                                            <td>
                                                                <span class="cancel">cancel</span>
                                                            </td>
                                                            <td>
                                                                <h5>$335</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#4579654153</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 11, 2020</p>
                                                            </td>
                                                            <td>
                                                                <span class="cancel">cancel</span>
                                                            </td>
                                                            <td>
                                                                <h5>$550</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#12547965423</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 16, 2022</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">Complated</span>
                                                            </td>
                                                            <td>
                                                                <h5>$545</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#4589635878</h5>
                                                            </td>
                                                            <td>
                                                                <p>jan 21, 2021</p>
                                                            </td>
                                                            <td>
                                                                <span class="cancel">cancel</span>
                                                            </td>
                                                            <td>
                                                                <h5>$600</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#89698745895</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 11, 2020</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">complete</span>
                                                            </td>
                                                            <td>
                                                                <h5>$200</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <div class="fp_dashboard_body fp__change_password">
                                        <div class="fp__review_input">
                                            <h3>change password</h3>
                                            <div class="comment_input pt-0">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="fp__comment_imput_single">
                                                                <label>Current Password</label>
                                                                <input type="password" placeholder="Current Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="fp__comment_imput_single">
                                                                <label>New Password</label>
                                                                <input type="password" placeholder="New Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="fp__comment_imput_single">
                                                                <label>confirm Password</label>
                                                                <input type="password" placeholder="Confirm Password">
                                                            </div>
                                                            <button type="submit"
                                                                class="common_btn mt_20">submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========================
                                                                                DASHBOARD END
                                                                            ==========================-->
@endsection
