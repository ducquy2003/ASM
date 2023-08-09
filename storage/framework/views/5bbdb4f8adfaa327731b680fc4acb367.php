<?php $__env->startSection('contents'); ?>
    <!-- main -->
    <main>
        <div class="main main__carts">
            <?php
                $productCount = 0;
                $totalPrice0 = 0;
                $totalPrice1 = 0;
                $countPro = 0;
            ?>
            <?php if(!session('username') && !session('password')): ?>
                
                <div class="cart__null">
                    <div class="cart__null-notify">
                        <i style="    
                        color: #1e85be;
                        margin-right: 15px;
                        font-size: 1.6rem;
                        font-weight: bold;"
                            class="fa-brands fa-opencart"></i>
                        There are no products in the cart.
                    </div>

                    <a href="/" class="cart__null-btnBack title__product-laptop-link">
                        Back to the store
                    </a>
                </div>
            <?php else: ?>
                
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
                                                    // $totalPrice1 += $product->cost * $cart_pro->quantity;
                                                    $countPro += $cart_pro->quantity;
                                                ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php if($productCount === 0): ?>
                    
                    <div class="cart__null">
                        <div class="cart__null-notify">
                            <i style="    
                            color: #1e85be;
                            margin-right: 15px;
                            font-size: 1.6rem;
                            font-weight: bold;"
                                class="fa-brands fa-opencart"></i>
                            There are no products in the cart.
                        </div>

                        <a href="/" class="cart__null-btnBack title__product-laptop-link">
                            Back to the store
                        </a>
                    </div>
                <?php else: ?>
                    <div class="main__cart main__cart-product">
                        <table class="cart-product__coupon">
                            <thead>
                                <tr>
                                    <th id="cart-product__coupon--color"></th>
                                    <th id="cart-product__coupon--color"></th>
                                    <th id="cart-product__coupon--color">Product</th>
                                    <th id="cart-product__coupon--color">Cost</th>
                                    <th id="cart-product__coupon--color">Quantity</th>
                                    <th id="cart-product__coupon--color">Into Money</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- info coupon -->

                                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $cart_pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($account->id == $cart->id_user): ?>
                                                    <?php if($cart->id == $cart_pro->id_cart && $product->id == $cart_pro->id_product): ?>
                                                        <?php if($account->cart && $cart->cart_pro && $product->cart_pro): ?>
                                                            <?php if(session('id') == $cart->id_user): ?>
                                                                <?php
                                                                    $totalPrice1 += $product->cost * $cart_pro->quantity;
                                                                    $countPro += $cart_pro->quantity;
                                                                ?>

                                                                <tr>
                                                                    <td id="cart-product__coupon--color">
                                                                        <a style="color: #b8b8b8; font-size: 2rem;" href="<?php echo e(route('removeProductFromCart', ['id' => $product->id])); ?>" class="fa-regular fa-circle-xmark"></a>
                                                                    </td>
                                                                    <td id="cart-product__coupon--color">
                                                                        <img class="cart-product__coupon-img"
                                                                            src="<?php echo e(asset('images/' . $product -> image)); ?>" alt="">
                                                                    </td>
                                                                    <td id="cart-product__coupon--color">
                                                                        <a href="details/<?php echo e($product->id); ?>/<?php echo e(str_replace('/', '-', $product->name)); ?>"
                                                                            class="cart__ịnner-title cart__ịnner-title--color">
                                                                            <?php echo e($product->name); ?>

                                                                        </a>
                                                                        <a class="cart__ịnner-title cart__ịnner-title--color"
                                                                            href="details/<?php echo e($product->id); ?>/<?php echo e(str_replace('/', '-', $product->name)); ?>"
                                                                            style="display: block;
                                                                font-size: 0.7em;
                                                                font-style: italic;
                                                                font-weight: 700;">
                                                                            Edit Options
                                                                        </a>

                                                                        <div class="cart__ịnner-promotion">
                                                                            <div>
                                                                                Promotional Package:
                                                                                &nbsp;
                                                                            </div>

                                                                            <div class="cart__ịnner-promotion--select">
                                                                                abc
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td id="cart-product__coupon--color"
                                                                        class="price-product__cost">
                                                                        <?php echo e(number_format($product->cost, 0, ',', ',')); ?>

                                                                        <u>đ</u>
                                                                    </td>
                                                                    <td id="cart-product__coupon--color">
                                                                        <input type="number"
                                                                            value="<?php echo e($cart_pro->quantity); ?>"
                                                                            title="Quantity" min="1">
                                                                    </td>
                                                                    <td id="cart-product__coupon--color"
                                                                        class="price-product__cost">
                                                                        
                                                                        <?php
                                                                            $totalPrice0 += $product->cost * $cart_pro->quantity;
                                                                        ?>
                                                                        <?php echo e(number_format($totalPrice0, 0, ',', ',')); ?>

                                                                        <u>đ</u>
                                                                    </td>
                                                                    <?php
                                                                        $totalPrice0 = 0;
                                                                    ?>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- end -->


                                <!-- btn update -->
                                <tr>
                                    <td colspan="6">
                                        <a href="" class="cart-product__btnUpdate">
                                            Cart Update
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="main__cart main__cart-totals">
                        <div class="cart-product__coupon">
                            <div class="cart-product__coupon-title">Cart Totals</div>
                        </div>

                        <div style="margin-top: 40px; padding: 0 20px;">
                            <div style=" display: flex; justify-content: space-between; align-items: center;">
                                <div
                                    style="color: #4f4f4f;
                    font-size: 1.4rem;
                    font-weight: bold;">
                                    Cost</div>
                                <div
                                    style="color: #4f4f4f;
                    font-size: 1.4rem;
                    font-weight: bold;">
                                    <?php echo e(number_format($totalPrice1, 0, ',', ',')); ?>

                                    <u> ₫</u>
                                </div>
                            </div>

                            <div
                                style=" display: flex; justify-content: space-between; align-items: center; margin: 30px 0;">
                                <div
                                    style="color: #4f4f4f;
                    font-size: 1.4rem;
                    font-weight: bold;">
                                    Totals</div>
                                <div
                                    style="color: #4f4f4f;
                    font-size: 1.4rem;
                    font-weight: bold;">
                                    <?php echo e(number_format($totalPrice1, 0, ',', ',')); ?>

                                    <u>đ</u>
                                </div>
                            </div>

                            <a onclick="updating()" class="title__product-laptop-link"
                                style="font-size: 1.4rem;
                font-weight: 500;
                display: flex;
                justify-content: center;
                align-items: center;
                background: #F50912;
                color: #fff;
                cursor: pointer;
                padding: 12px 0;">Make
                                Payment</a>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\group6\resources\views/pages/cart.blade.php ENDPATH**/ ?>