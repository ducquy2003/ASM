<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProTech - Specializing in Laptops, PCs, Monitors, Components, Genuine Gaming Gear</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="a.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/a.css')); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <script src="a.js"></script>
    <script src="<?php echo e(asset('js/a.js')); ?>"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="shortcut icon" href="<?php echo e(asset('images/designlogo.png')); ?>" type="image/x-icon">

    <!--refer-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>

    <!-- header -->
    <div class="header">
        <div class="header__main">
            <div class="header__img">
                <a href="/">
                    <img src="<?php echo e(asset('images/design logo1 - Copy.png')); ?>" alt="logo">
                </a>
            </div>
            <form method="get" action="<?php echo e(route('search')); ?>" class="header_input">
                <div class="header__input-search">
                    <input style="color: #55595c" type="text" title="search" name="header__search" id=""
                        placeholder="What products are you looking for?" value="<?php echo e($header__search); ?>"
                        autocomplete="off">
                </div>
                <button class="header__input-btn-search" type="submit" title="search">
                    <!-- <input type="submit" class="header__btn-search" value=""> -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

            <div class="header__other">
                <div class="header__other-a header__cart" id="avatarMargin">
                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(session('username')): ?>
                            <style>
                                #avatarMargin {
                                    margin-right: 75%;
                                }
                            </style>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- <span>3</span> -->
                    <i onclick="showCart()" class="fa-solid fa-bag-shopping"></i>

                    <!-- modal cart -->
                    <div class="modal__cart" id="cartModal">
                        <div class="modal__cart-inner">
                            <div class="cart__inner">
                                <div onclick="offModal()" class="elementor-menu-cart__close-button"></div>

                                <div class="cart__inner-pro">
                                    <?php if(!session('username') && !session('password')): ?>
                                        <!-- if have not product -->
                                        <div class="cart__inner-pro--not-have">
                                            <div class="cart__inner-pro--mess">
                                                No products in the cart.
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <!-- If have product -->
                                        
                                        <?php
                                            $productCount = 0;
                                            $totalPrice = 0;
                                            $countPro = 0;
                                        ?>


                                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $cart_pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($account->id == $cart->id_user): ?>
                                                            <?php if($cart->id == $cart_pro->id_cart && $product->id == $cart_pro->id_product): ?>
                                                                <?php if($account->cart && $cart->cart_pro && $product->cart_pro): ?>
                                                                    <?php if(session('id') == $cart->id_user): ?>
                                                                        <?php
                                                                            $productCount++;
                                                                            $totalPrice += $product->cost * $cart_pro->quantity;
                                                                            $countPro += $cart_pro->quantity;
                                                                        ?>

                                                                        <div class="cart__inner-pro--have">
                                                                            <a href="<?php echo e(route('details', [$product->id, str_replace('/', '-', $product->name)])); ?>"
                                                                                class="cart__inner-pro--mess">
                                                                                <div class="cart__inner-pro-img">
                                                                                    <img src="<?php echo e(asset('images/' . $product->image)); ?>"
                                                                                        alt="">
                                                                                </div>

                                                                                <div class="cart__inner-pro-details">
                                                                                    <div class="cart__ịnner-title">

                                                                                        <?php echo e($product->name); ?>


                                                                                    </div>

                                                                                    <div class="cart__ịnner-promotion">
                                                                                        <div>
                                                                                            Choose a promotional
                                                                                            package:
                                                                                        </div>

                                                                                        <div
                                                                                            class="cart__ịnner-promotion--select">
                                                                                            abc
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>

                                                                            <div class="cart__inner-price-product">
                                                                                <div class="price-product__quantity">
                                                                                    <?php echo e($cart_pro->quantity); ?>

                                                                                    x&nbsp;
                                                                                </div>

                                                                                <div class="price-product__cost">
                                                                                    <?php echo e(number_format($product->cost, 0, ',', ',')); ?>

                                                                                    <u>đ</u>
                                                                                </div>

                                                                                <div class="price-product__remove">
                                                                                    <a href="<?php echo e(route('removeProductFromCart', ['id' => $product->id])); ?>"
                                                                                        class="fa-regular fa-circle-xmark"></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cart__boder"></div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <style>
                                            .header__other-a.header__cart i::after {
                                                content: "<?php echo e($countPro); ?>";
                                            }
                                        </style>

                                        <?php if($productCount === 0): ?>
                                            <!-- if have not product -->
                                            <div class="cart__inner-pro--not-have">
                                                <div class="cart__inner-pro--mess">
                                                    No products in the cart.
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <!-- end -->

                                    <div class="elementor-menu-cart__subtotal">
                                        <span>Total Money:&nbsp;</span>
                                        <?php if(session('username') && session('password')): ?>
                                            <span><?php echo e(number_format($totalPrice, 0, ',', ',')); ?>

                                                <u>đ</u></span>
                                        <?php else: ?>
                                            <span>0 <u>đ</u></span>
                                        <?php endif; ?>

                                    </div>
                                    <div class="elementor-menu-cart__footer-buttons">
                                        <a href="<?php echo e(route('cart')); ?>" class="title__product-laptop-link">
                                            View Cart
                                        </a>

                                        <a href="##" onclick="updating()" class="title__product-laptop-link">
                                            Pay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- backModal() -->
                        <div onclick="offModal()" class="modal__overlay"></div>
                    </div>

                    <!-- end modal -->
                </div>

                <div class="header__other-a header__user">
                    <?php if(session('username')): ?>
                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(session('username') == $account->username): ?>
                                <?php if($account->avatar != null): ?>
                                    <img style="width: 28px; border-radius: 50%;" onclick="showModal()"
                                        class="fa-solid fa-user btn-user-click"
                                        src="<?php echo e(asset('images/' . $account->avatar)); ?>" alt=""
                                        title="<?php echo e(session('username')); ?>">
                                <?php else: ?>
                                    <img style="width: 28px; border-radius: 50%;" onclick="showModal()"
                                        class="fa-solid fa-user btn-user-click"
                                        src="<?php echo e(asset('images/avatarNull.jpg')); ?>" alt=""
                                        title="<?php echo e(session('username')); ?>">
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <a onclick="showModal()" href="###" class="fa-solid fa-user btn-user-click"></a>
                    <?php endif; ?>


                    <!-- test audio -->
                    <audio id="notificationSound">
                        <source src="<?php echo e(asset('audio/notify.mp3')); ?>" type="audio/mpeg">
                    </audio>

                    <audio id="notificationSound1">
                        <source src="<?php echo e(asset('audio/notify1.mp3')); ?>" type="audio/mpeg">
                    </audio>

                    <audio id="notificationSound2">
                        <source src="<?php echo e(asset('audio/notify2.mp3')); ?>" type="audio/mpeg">
                    </audio>

                    <audio id="notificationSound3">
                        <source src="<?php echo e(asset('audio/click.mp3')); ?>" type="audio/mpeg">
                    </audio>

                    <!-- modal sign in/up-->
                    <div id="myModal" class="modal">
                        <?php if(!session()->has('username') && !session()->has('password')): ?>
                            <div class="modal__main">
                                <div class="modal__inner">
                                    
                                    <!-- signup -->
                                    <form method="POST" action="<?php echo e(route('signup')); ?>"
                                        class="modal__inner-signin modal__inner-signin">
                                        <?php echo csrf_field(); ?>
                                        <div class="form__input--padding">
                                            <div class="inner__header">
                                                <h2>Sign Up</h2>
                                                <h4 onclick="changeToSignIn()">Sign In</h4>
                                            </div>

                                            <div class="inner__form">
                                                <div onclick="enbEffModal()" class="inner__form-row">
                                                    <input autocomplete="off" type="text" class="form__row"
                                                        title="Username" placeholder="" name="username"
                                                        class="phoneInput" required>
                                                    <span class="form__row-label">Enter Username</span>
                                                </div>

                                                <div onclick="enbEffModal()" class="inner__form-row">
                                                    <input autocomplete="off" type="password" class="form__row"
                                                        title="Password" placeholder="" name="password"
                                                        class="passwordInput" required>
                                                    <span class="form__row-label">Enter Password</span>
                                                </div>

                                                <div onclick="enbEffModal()" class="inner__form-row">
                                                    <input autocomplete="off" type="text" class="form__row"
                                                        title="Verification" placeholder="" class="verificationInput"
                                                        required>
                                                    <span class="form__row-label">Verification Code</span>
                                                </div>
                                            </div>

                                            <div class="inner__terms">
                                                By signup, you agree to ProTech's <a class="inner__terms-link"
                                                    href="##">Terms of Service</a> & <a class="inner__terms-link"
                                                    href="###">Privacy Policy</a>
                                            </div>

                                            <div class="inner__btn">
                                                <div onclick="backModal()" class="inner__btn-main inner__btn-back">
                                                    Back
                                                </div>
                                                <!--up-->
                                                <button ondblclick="showToast()" onclick="validateInputsAndSubmit();"
                                                    type="submit" class="inner__btn-main inner__btn-signup">Sign
                                                    Up</button>
                                                <!--up-->
                                            </div>

                                        </div>

                                        <div class="form__social-media">
                                            <div class="inner__media-signup">
                                                <a href=""
                                                    class="inner__media-signup--together inner__media-signup--fb">
                                                    <img src="<?php echo e(asset('images/fb.png')); ?>" class="media__fb-img">
                                                    <div class="media__fb-txt">Connect With Facebook</div>
                                                </a>
                                                <a href=""
                                                    class="inner__media-signup--together inner__media-signup--gg">
                                                    <img src="<?php echo e(asset('images/gg.png')); ?>" class="media__fb-img">
                                                    <div class="media__fb-txt">Connect With Google</div>
                                                </a>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- sign in -->
                                    <form method="POST" action="<?php echo e(route('login')); ?>"
                                        class="modal__inner-signup modal__inner-signin">
                                        <?php echo csrf_field(); ?>
                                        <div class="form__input--padding">
                                            <div class="inner__header">
                                                <h2>Sign In</h2>
                                                <h4 onclick="changeToSignUp()">Sign Up</h4>
                                            </div>

                                            <div class="inner__form">
                                                <div onclick="enbEffModal()" class="inner__form-row">
                                                    <input autocomplete="off" type="text" class="form__row"
                                                        title="Username" placeholder="" name="username"
                                                        class="phoneInput" required>
                                                    <span class="form__row-label">Enter Username</span>
                                                </div>

                                                <div onclick="enbEffModal()" class="inner__form-row">
                                                    <input autocomplete="off" type="password" class="form__row"
                                                        title="Password" placeholder="" name="password"
                                                        class="passwordInput" required>
                                                    <span class="form__row-label">Enter Password</span>
                                                </div>

                                                <div onclick="enbEffModal()" class="inner__form-row">
                                                    <input autocomplete="off" type="text" class="form__row"
                                                        title="Verification" placeholder="" class="verificationInput"
                                                        required>
                                                    <span class="form__row-label">Verification Code</span>
                                                </div>
                                            </div>

                                            <div class="inner__terms inner__terms--fogot">
                                                <a class="inner__terms-link" href="##">Forgot Password?</a>
                                                <a class="inner__terms-link" href="###">Login With SMS</a>
                                            </div>

                                            <div class="inner__btn">
                                                <div onclick="backModal()" class="inner__btn-main inner__btn-back">
                                                    Back
                                                </div>
                                                <!--up-->
                                                <button onclick="validateInputsAndSubmit()" type="submit"
                                                    class="inner__btn-main inner__btn-signup">Sign
                                                    In</button>
                                                <!--up-->
                                            </div>

                                        </div>

                                        <div class="form__social-media">
                                            <div class="inner__media-signup">
                                                <a href=""
                                                    class="inner__media-signup--together inner__media-signup--fb">
                                                    <img src="<?php echo e(asset('images/fb.png')); ?>" class="media__fb-img">
                                                    <div class="media__fb-txt">Connect With Facebook</div>
                                                </a>
                                                <a href=""
                                                    class="inner__media-signup--together inner__media-signup--gg">
                                                    <img src="<?php echo e(asset('images/gg.png')); ?>" class="media__fb-img">
                                                    <div class="media__fb-txt">Connect With Google</div>
                                                </a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        <?php else: ?>
                            <div class="modal__main modal__main-info">
                                <div class="modal__inner">
                                    <!-- edit profile -->
                                    <form method="POST" action="<?php echo e(route('logout')); ?>"
                                        class="modal__inner-signin modal__inner-signin">
                                        <?php echo csrf_field(); ?>
                                        <div class="form__input--padding">
                                            <div class="inner__header">
                                                <h2>Your Profile</h2>
                                                <a href="<?php echo e(route('logout')); ?>">Sign Out</a>
                                            </div>

                                            

                                            <div class="profile">
                                                <div class="profile__main">
                                                    <div class="profile__avatar">
                                                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if(session('username') == $account->username): ?>
                                                                <?php if($account->avatar != null): ?>
                                                                    <img src="<?php echo e(asset('images/' . $account->avatar)); ?>"
                                                                        alt="">
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('images/avatarNull.jpg')); ?>"
                                                                        alt="">
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                        <div class="profile__avatar-name">
                                                            <?php echo e(session('username')); ?>

                                                            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(session('id_user') == $account->id): ?>
                                                                    <?php if($account->is_admin == 1): ?>
                                                                        (ADMIN)
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>

                                                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($account->id == session('id_user')): ?>
                                                            <div class="profile__main-config profile__main-position">
                                                                Chairman of the board
                                                            </div>
                                                            <div class="profile__main-config profile__main-age">
                                                                Age:
                                                                <?php
                                                                    $dob = $account->dob;
                                                                    $currentDate = date('Y-m-d');
                                                                    $age = date_diff(date_create($dob), date_create($currentDate))->y;
                                                                ?>
                                                                <span><?php echo e($age); ?></span>

                                                            </div>
                                                            <div class="profile__main-config profile__main-edu">
                                                                Address:
                                                                <span>
                                                                    <?php echo e($account->address); ?>

                                                                </span>
                                                            </div>
                                                            <div class="profile__main-config profile__main-asset">
                                                                Total Assets:
                                                                <span><?php echo e(number_format($account->balance, 0, ',', ',')); ?>

                                                                    <u>đ</u></span>
                                                            </div>
                                                            <?php if(session('is_admin') == 1): ?>
                                                                <div
                                                                    class="profile__main-config profile__main-dashboard">
                                                                    <a class="profile__main-dashboard--change-form"
                                                                        href="<?php echo e(route('dashboard.home')); ?>"
                                                                        target="blank">MANAGE</a>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                                <div class="profile__info">
                                                    <div class="profile__info-nav">
                                                        <div class="btnProfile-first btnProfile" id="btn__info-1"
                                                            onclick="showFormProfile(1)">Profile</div>
                                                        <div class="btnProfile" id="btn__info-2"
                                                            onclick="showFormProfile(2)">Deals</div>
                                                        <div class="btnProfile" id="btn__info-3"
                                                            onclick="showFormProfile(3)">Info</div>
                                                        <div class="btnProfile" id="btn__info-4"
                                                            onclick="showFormProfile(4)">Community</div>
                                                    </div>

                                                    <div class="profile__info-details">
                                                        <div id="profile__info-num profile__info-1"
                                                            class="formProfile">
                                                            <span class="formProfile__title">Title:</span><br>
                                                            <span class="formProfile__txt">
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                elit.
                                                                Non consectetur veniam sed molestias commodi sunt
                                                                exercitationem,
                                                                nesciunt dignissimos cupiditate. Et, dolor. Nemo quod
                                                                distinctio enim,
                                                                impedit aperiam reprehenderit perferendis praesentium.
                                                            </span><br>
                                                            <span class="formProfile__title">Title:</span><br>
                                                            <span class="formProfile__txt">
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                elit.
                                                                Non consectetur veniam sed molestias commodi sunt
                                                                exercitationem,
                                                                nesciunt dignissimos cupiditate. Et, dolor. Nemo quod
                                                                distinctio enim,
                                                                impedit aperiam reprehenderit perferendis praesentium.
                                                            </span>
                                                        </div>
                                                        <div id="profile__info-num profile__info-2"
                                                            class="formProfile" style="display: none;">
                                                            442
                                                        </div>
                                                        <div id="profile__info-num profile__info-3"
                                                            class="formProfile" style="display: none;">
                                                            <div class="profile__info-update">
                                                                <div>
                                                                    <div class="profile__info-update-title">
                                                                        Name on invoice:
                                                                    </div>

                                                                    <div onclick="enbEffModal()"
                                                                        class="inner__form-row inner__form-row--flex">
                                                                        <input autocomplete="off" type="text"
                                                                            class="profile__info-update--trans form__row"
                                                                            title="Username" placeholder=""
                                                                            name="usernameUpdate" class="phoneInput"
                                                                            required>
                                                                        <span class="form__row-label">
                                                                            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($account->id == session('id_user')): ?>
                                                                                    <?php echo e($account->username); ?>

                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div>
                                                                    <div class="profile__info-update-title">
                                                                        Password:
                                                                    </div>

                                                                    <div onclick="enbEffModal()"
                                                                        class="inner__form-row inner__form-row--flex">
                                                                        <input autocomplete="off" type="text"
                                                                            class="profile__info-update--trans form__row"
                                                                            title="Gender" placeholder=""
                                                                            name="passwordUpdate" class="phoneInput"
                                                                            required>
                                                                        <span class="form__row-label">Change
                                                                            Password</span>
                                                                    </div>
                                                                </div>

                                                                <div style="margin: 10px 0">
                                                                    <div class="profile__info-update-title">
                                                                        Gender:

                                                                    </div>

                                                                    <div onclick="enbEffModal()"
                                                                        class="inner__form-row inner__form-row--flex">
                                                                        
                                                                        <span
                                                                            class="profile__info-update--trans form__row form__row-select-info">
                                                                            <select name="genderUpdate"
                                                                                id="">
                                                                                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($account->id == session('id_user')): ?>
                                                                                        <?php if($account->gender == ''): ?>
                                                                                            <option value=""
                                                                                                hidden>Select gender
                                                                                            </option>
                                                                                            <option value="male">
                                                                                                male</option>
                                                                                            <option value="female">
                                                                                                female</option>
                                                                                            <option value="other">
                                                                                                other</option>
                                                                                        <?php else: ?>
                                                                                            <option
                                                                                                value="<?php echo e($account->gender); ?>"
                                                                                                hidden>
                                                                                                <?php echo e($account->gender); ?>

                                                                                            </option>
                                                                                            <option value="male">
                                                                                                male</option>
                                                                                            <option value="female">
                                                                                                female</option>
                                                                                            <option value="other">
                                                                                                other</option>
                                                                                        <?php endif; ?>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                        </span>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <div>
                                                                    <div class="profile__info-update-title">
                                                                        Gmail:
                                                                    </div>

                                                                    <div onclick="enbEffModal()"
                                                                        class="inner__form-row inner__form-row--flex">
                                                                        <input autocomplete="off" type="text"
                                                                            class="profile__info-update--trans form__row"
                                                                            title="Gmail" placeholder=""
                                                                            name="username" class="phoneInput"
                                                                            required>
                                                                        <span class="form__row-label">
                                                                            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($account->id == session('id_user')): ?>
                                                                                    <?php if($account->email == ''): ?>
                                                                                        Add Gmail
                                                                                    <?php else: ?>
                                                                                        <?php echo e($account->email); ?>

                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div>
                                                                    <div class="profile__info-update-title">
                                                                        Date Of Birth:
                                                                    </div>

                                                                    <div onclick="enbEffModal()"
                                                                        class="inner__form-row inner__form-row--flex">
                                                                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($account->id == session('id_user')): ?>
                                                                                <input value="<?php echo e($account->dob); ?>"
                                                                                    autocomplete="off" type="date"
                                                                                    class="profile__info-update--trans form__row form__row--padd"
                                                                                    title="Date Of Birth"
                                                                                    placeholder="" name="dob"
                                                                                    class="phoneInput" required>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="profile__info-num profile__info-4"
                                                            class="formProfile" style="display: none;">
                                                            444
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="inner__btn">
                                                <div style="cursor: pointer" onclick="backModal()"
                                                    class="inner__btn-main inner__btn-back">
                                                    Back
                                                </div>
                                                <!--up-->
                                                <a href="<?php echo e(route('updateInfo')); ?>" ondblclick="showToast()"
                                                    onclick="validateInputsAndSubmit();" 
                                                    class="inner__btn-main inner__btn-signup">Update</a>
                                                <!--up-->
                                            </div>

                                        </div>

                                        
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- backModal() -->
                        <div onclick="offModal()" class="modal__overlay"></div>
                    </div>
                    <!-- end modal -->
                </div>
            </div>
        </div>

        <div class="hearder__nav">
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">Laptop</li>
                <div class="header__nav-list--sub">
                    <ul>
                        <li class="header__nav-list--sub-1">Laptop Acer</li>
                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Aspire 7</li>
                                <li>Nitro 5</li>
                                <li>Nitro 2023</li>
                                <li>Helios</li>
                                <li>Helios 2023</li>
                                <li>Triton</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li class="header__nav-list--sub-1">Laptop Asus</li>
                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Asus Office Laptop</li>
                                <li>TUF Series</li>
                                <li>TUF Gaming 2023</li>
                                <li>ROG Series</li>
                                <li>ROG Series 2023</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li class="header__nav-list--sub-1">Laptop Lenovo</li>
                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Lenovo Office - Graphics</li>
                                <li>Ideapad Gaming</li>
                                <li>Legion Gaming</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li class="header__nav-list--sub-1">Laptop MSI</li>
                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>MSI Office Laptop - Graphics</li>
                                <li>Alpha</li>
                                <li>Cyborg Series 2023</li>
                                <li>Katana Series 2023</li>
                                <li>GF Series</li>
                                <li>GL Series</li>
                                <li>GP Series</li>
                                <li>GE Series</li>
                                <li>GS Series</li>
                                <li>GT Series</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li class="header__nav-list--sub-1">Laptop Gigabyte</li>
                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>G5 Series</li>
                                <li>Aorus</li>
                                <li>Aero</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li class="header__nav-list--sub-1">Laptop HP</li>
                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Victus</li>
                                <li>Omen</li>
                                <li>Envy</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li class="header__nav-list--sub-1">Radiator Shelf</li>
                    </ul>
                    <ul>
                        <li class="header__nav-list--sub-1">Backpack - Handbag</li>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover" class="hearder__nav-list--hover">ProTech PC</li>
                <div class="header__nav-list--sub">
                    <ul>
                        <li>Custom Configuration</li>
                    </ul>
                    <ul>
                        <li>Mini PC</li>
                    </ul>
                    <ul>
                        <li>PC Gen 13</li>
                    </ul>
                    <ul>
                        <li>PC AMD</li>
                    </ul>
                    <ul>
                        <li>PC Gaming Gigabyte</li>
                    </ul>
                    <ul>
                        <li>PC Gaming MSi</li>
                    </ul>
                    <ul>
                        <li>PC Gaming</li>
                    </ul>
                    <ul>
                        <li>Office PC</li>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">Screen</li>

                <div class="header__nav-list--sub">
                    <ul>
                        <li>Screen By Brand</li>
                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Acer Monitor</li>
                                <li>Asus Monitor</li>
                                <li>Dell Monitor</li>
                                <li>Gigabyte Monitor</li>
                                <li>MSI Monitor</li>
                                <li>Philips Monitor</li>
                                <li>Sumsung Monitor</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Gaming Monitor</li>
                    </ul>
                    <ul>
                        <li>Graphics Screen</li>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">Accessory</li>

                <div class="header__nav-list--sub">
                    <ul>
                        <li>CPU</li>

                        <i class="fa-solid fa-chevron-right"></i>

                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>CPU AMD</li>
                                <li>CPU Intel</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Main Board</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Mainboard Gigabyte</li>
                                <li>Mainboard Asus</li>
                                <li>Mainboard MSI</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>VGA</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>VGA RTX 4070</li>
                                <li>VGA RTX 4070 Ti</li>
                                <li>VGA RTX 4080</li>
                                <li>VGA RTX 4090</li>
                                <li>VGA Gigabyte</li>
                                <li>VGA Asus</li>
                                <li>VGA MSI</li>
                                <li>VGA Intel</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>RAM</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>RAM Laptop</li>
                                <li>RAM PC</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>SSD</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>SSD 120GB - 128GB</li>
                                <li>SSD 250GB - 256GB</li>
                                <li>SSD 500GB - 512GB</li>
                                <li>SSD 1TB - 2TB</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>HDD</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>HDD Laptop</li>
                                <li>HDD PC</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Case PC</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Case 1st player</li>
                                <li>Case Antec</li>
                                <li>Case Asus</li>
                                <li>Case Cooler Master</li>
                                <li>Case Corsair</li>
                                <li>Case Deepcool</li>
                                <li>Case Gigabyte</li>
                                <li>Case MSi</li>
                                <li>Case Xigmatek</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Power PSU</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Power Antec</li>
                                <li>Power Asus</li>
                                <li>Power Cooler Master</li>
                                <li>Power Corsair</li>
                                <li>Power Deepcool</li>
                                <li>Case Gigabyte</li>
                                <li>Case MSi</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Fan Case</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Fan Cooler Master</li>
                                <li>Fan Deepcool</li>
                                <li>Fan MSI</li>
                                <li>Fan Xigmatek</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>CPU Heatsink</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Heatsink Cooler Master</li>
                                <li>Heatsink Corsair</li>
                                <li>Heatsink Deepcool</li>
                                <li>Heatsink Gigabyte</li>
                                <li>Heatsink Asus</li>
                                <li>Heatsink Noctua</li>
                                <li>Heatsink MSI</li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">Gaming Gear</li>
                <div class="header__nav-list--sub">
                    <ul>
                        <li>Keyboard</li>

                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>IKBC</li>
                                <li>Akko</li>
                                <li>Asus</li>
                                <li>HyperX</li>
                                <li>Logitech</li>
                                <li>Havit</li>
                                <li>HRapoo</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Mouse</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Mouse Asus</li>
                                <li>Mouse HyperX</li>
                                <li>Mouse Logitech</li>
                                <li>Mouse Razer</li>
                                <li>Mouse Havit</li>
                                <li>Mouse Rapoo</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Earphone</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Earphone Asus</li>
                                <li>Earphone HyperX</li>
                                <li>Earphone Logitech</li>
                                <li>Earphone Razer</li>
                                <li>Earphone Rapoo</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Mouse Pads</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Mouse Pads Asus</li>
                                <li>Mouse Pads HyperX</li>
                                <li>Mouse Pads Logitech</li>
                                <li>Mouse Pads Razer</li>
                                <li>Mouse Pads Havit</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Microphone</li>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="header__nav-list--sub-1-1">
                            <ul>
                                <li>Microphone HyperX</li>
                                <li>Microphone Razer</li>
                            </ul>
                        </div>
                    </ul>
                    <ul>
                        <li>Loudspeaker</li>
                    </ul>
                    <ul>
                        <li>Webcam</li>
                    </ul>
                    <ul>
                        <li>Handle</li>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">Table/Chair</li>
                <div class="header__nav-list--sub">
                    <ul>
                        <li>Chair Gaming/Ergonomic</li>
                    </ul>
                    <ul>
                        <li>Table Gaming</li>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">Apple</li>
                <div class="header__nav-list--sub">
                    <ul>
                        <li>By @DP</li>
                    </ul>
                    <ul>
                        <li>By @DP</li>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">Self-Configuration</li>
                <div class="header__nav-list--sub">
                    <ul>
                        <li>By @DP</li>
                    </ul>
                    <ul>
                        <li>By @DP</li>
                    </ul>
                </div>
            </ul>
            <ul class="hearder__nav-list">
                <li class="hearder__nav-list--hover">About Us</li>
                <div class="header__nav-list--sub">
                    <ul>
                        <li>By @DP</li>
                    </ul>
                    <ul>
                        <li>By @DP</li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>

    <?php echo $__env->yieldContent('contents'); ?>


    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer__main footer--margin">
                <div class=" footer__main-img">
                    <img src="<?php echo e(asset('images/design logo.png')); ?>" alt="">
                </div>
                <div class="footer__main-des">
                    Known as the official authorized retailer in Vietnam,
                    specializing in trading high-end Gaming Laptop products,
                    PC graphics, components - accessories, entertainment equipment
                    of many big brands such as Acer, Asus, etc. Apple, Dell, HP,
                    Lenovo, MSI, Gigabyte, Razer, HyperX, Logitech, Samsung...
                </div>
            </div>

            <div class="footer__info footer--margin">
                <div class="footer__info--pad footer__info--pad-a footer__info-top">
                    <h3>Infomation</h3>
                    <a href="#">Introduction</a>
                    <a href="#">Shop</a>
                    <a href="#">ProTech New</a>
                    <a href="#">Recruitment</a>
                    <a href="#">Payment methods</a>
                    <a href="#">Bill of lading lookup</a>
                </div><br>

                <div class="footer__info-bottom">
                    <h3>Work Time</h3>
                    <p>Monday - Saturday: 7:15 - 20:30</p>
                </div>

                <div class="footer__info--pad footer__info-media">
                    <a target="_blank" href="https://www.facebook.com/100010290584323"
                        class="footer__info--pad footer__info-media-a footer__info-media--fb">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <a target="_blank" href="https://phamdung2209.github.io/WebCuaDung2209"
                        class="footer__info-media-a footer__info-media--in">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a target="_blank" href="https://www.youtube.com/@dungpv6245"
                        class="footer__info-media-a footer__info-media--you">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>

            </div>

            <div class="footer__info--pad footer__info--pad-a footer__policy footer--margin">
                <h3>Policy</h3>
                <a href="#">Installment</a>
                <a href="#">Delivery</a>
                <a href="#">exchangeable</a>
                <a href="#">Guarantee</a>
                <a href="#">Information security</a><br>
                <div class="footer__info--pad footer__contact footer--margin">
                    <h3>Contact</h3>
                    <span>Hotline: </span>
                    <a href="tel:0787099745">078 709 9745</a> –
                    <a href="tel:0787099745">078 709 9745</a><br>
                    <span>Mail: </span>
                    <a href="mailto:phamdung.22092003@gmail.com">phamdung.22092003@gmail.com</a>
                </div>
            </div>



            <div class="footer__info--pad footer__map footer--margin">
                <h3>Store Address</h3>
                <div class="footer__map-address">
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>BTEC FPT Building, Trinh Van Bo Street, Nam Tu Liem District, Hanoi</span>
                    </div>

                    <div>
                        <a href="https://goo.gl/maps/qsnUm3LDEWWepuXm7" target="_blank"><img
                                src="<?php echo e(asset('images/map.png')); ?>" alt=""></a>
                        <a href="https://goo.gl/maps/qsnUm3LDEWWepuXm7" target="_blank" class="larger-map">View
                            larger
                            map</a>
                    </div>
                </div>
                <div class="footer__map-address">
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>BTEC FPT Building, Trinh Van Bo Street, Nam Tu Liem District, Hanoi</span>
                    </div>

                    <div>
                        <a href=""> <img src="<?php echo e(asset('images/map.png')); ?>" alt=""></a>
                        <a href="https://goo.gl/maps/qsnUm3LDEWWepuXm7" target="_blank" class="larger-map">View
                            larger
                            map</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div>
                <div></div>
                <span>Copyright © 2023 ProTech | All rights reserved | Certificate of business registration number:
                    22020003 issued by the Department of Planning and Investment of Hanoi City.</span>
            </div>
        </div>
    </footer>

    <div class="echbay-sms-messenger">
        <div class="phonering phonering-alo">
            <a target="_blank" href="tel:0787099745">
                <img src="<?php echo e(asset('images/whatapp.png')); ?>" alt="">

                <span class="phonering--hover">
                    Call Now
                </span>
            </a>
        </div>

        <div class="phonering phonering-alo-zalo">
            <a target="_blank" href="https://zalo.me/0787099745">
                <img src="<?php echo e(asset('images/zalo.png')); ?>" alt="">

                <span class="phonering--hover">
                    Message Now
                </span>
            </a>
        </div>

        <div class="phonering phonering-alo-messenger">
            <a target="_blank" href="https://www.facebook.com/messages/t/100010290584323">
                <img src="<?php echo e(asset('images/mess.png')); ?>" alt="">

                <span class="phonering--hover">
                    Message Now
                </span>
            </a>
        </div>
    </div>

    
    <!-- Thêm thư viện jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- HTML -->
    <div class="ontop">
        <a href="" class="scroll-to-top">
            <i class="fa-solid fa-angle-up"></i>
        </a>
    </div>

    <!-- JavaScript -->
    <script>
        $(document).ready(function() {
            // Bắt sự kiện click vào nút
            $('.scroll-to-top').click(function(event) {
                event.preventDefault();

                // Cuộn mượt lên đầu trang
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
        });
    </script>


    <!-- toast message -->
    <!--succesed-->
    <!--<div id="message" class="message message--sucessed">
        <div class="message__icon">
            <i class="fa-sharp fa-solid fa-circle-check"></i>
        </div>
        <div class="message__body">
            <div class="message__body--titlle">
                Succesed
            </div>
            <div class="message__body--content">
                Welcome to ProTech!
            </div>
        </div>
        <div onclick="closeToast()" class="message__close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    -->

    <?php if(session('username') && session('password')): ?>
        <div id="toast"></div>
        <?php if(session('showToastLoginSS')): ?>
            <script>
                var username = "<?php echo e(session('username')); ?>";

                toast({
                    title: "Success!",
                    message: "Welcome " + username + " to the world of ProTech!",
                    type: "success",
                    duration: 5000
                });
                notificationSound1.play();

                function showSuccessToast() {
                    toast({
                        title: "Success!",
                        message: "Welcome to the world of ProTech!",
                        type: "success",
                        duration: 5000
                    });
                    notificationSound1.play();
                }

                function showErrorToast() {
                    toast({
                        title: "Error!",
                        message: "An error has occurred, please contact the administrator.",
                        type: "error",
                        duration: 5000
                    });
                    notificationSound1.play();
                }
            </script>
        <?php endif; ?>

    <?php endif; ?>

    <div id="toast"></div>

    

    <script>
        function showSuccessToast() {
            toast({
                title: "Success!",
                message: "Welcome to the world of ProTech!",
                type: "success",
                duration: 5000
            });
            notificationSound1.play();
        }

        function showErrorToast() {
            toast({
                title: "Error!",
                message: "An error has occurred, please contact the administrator.",
                type: "error",
                duration: 5000
            });
            notificationSound1.play();
        }
    </script>

    
    <?php if(session('showToastSignup')): ?>
        <script>
            toast({
                title: "Success!",
                message: "You have successfully registered an account!",
                type: "success",
                duration: 5000
            });
            notificationSound1.play();
        </script>
    <?php endif; ?>

    <?php if(session('showToastSigninError')): ?>
        <script>
            toast({
                title: "Error!",
                message: "An error has occurred, please contact the administrator.",
                type: "error",
                duration: 5000
            });
            notificationSound1.play();
        </script>
    <?php endif; ?>

    <?php if(session('showToastAddCartSuccess')): ?>
        <script>
            toast({
                title: "Cart Updated!",
                message: "You have added a product to your cart.",
                type: "success",
                duration: 5000
            });
            notificationSound1.play();
        </script>
    <?php endif; ?>

    <?php if(session('showToastAddCartError')): ?>
        <script>
            toast({
                title: "Error!",
                message: "An error has occurred, please contact the administrator.",
                type: "error",
                duration: 5000
            });
            notificationSound1.play();
        </script>
    <?php endif; ?>

    <?php if(session('toastNotAssess')): ?>
        <script>
            toast({
                title: "Access is denied!",
                message: "You are NOT authorized to access the dashboard.",
                type: "error",
                duration: 5000
            });
            notificationSound1.play();
        </script>
    <?php endif; ?>

    <?php if(session('showToastSignupError')): ?>
        <script>
            toast({
                title: "Error!",
                message: "The account or password is invalid, please enter the account and password with at least 6 digits.",
                type: "error",
                duration: 5000
            });
            notificationSound1.play();
        </script>
    <?php endif; ?>


    <!--warning-->
    <!-- <div id="message" class="message message--warning">
        <div class="message__icon">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>
        <div class="message__body">
            <div class="message__body--titlle">
                Warning
            </div>
            <div class="message__body--content">
                I want to learn english but i don't know where to start!
            </div>
        </div>
        <div class="message__close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div> -->

    <!--error-->
    <!-- <div id="message" class="message message--error">
        <div class="message__icon">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <div class="message__body">
            <div class="message__body--titlle">
                Error
            </div>
            <div class="message__body--content">
                I want to learn english but i don't know where to start!
            </div>
        </div>
        <div class="message__close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div> -->
    <!-- end -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\group6\resources\views/layouts/master.blade.php ENDPATH**/ ?>