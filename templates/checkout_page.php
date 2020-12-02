<?php include('includes/header.php');?>


<!-- Main-boxed-Content Starts Here -->
<div class="checkout-main-boxed-content">

<!-- Login to the returning customer starts here -->
<div class="main-checkout-alert login">
    RETURNING CUSTOMER? <a href="#"><strong>CLICK HERE TO LOGIN</strong></a>
</div>
<!-- Login to the returning customer ends here -->

<!-- apply coupon alert starts here -->
<div class="main-checkout-alert use-coupon">
    HAVE A COUPON? <a href="#"> <strong>CLICK HERE TO ENTER YOUR CODE</strong></a>
</div>
<!-- apply coupon alert ends here -->

<div class="main-checkout-content">
    <div class="user-details">
        <div class="heading">
            <strong>BILLING DETAILS</strong>
        </div>
        <div class="body">
            <form>
                <div class="user-name">
                    <div class="first-name">
                        <label for="fName">First Name</label><br>
                        <input type="text" name="fName" required>
                    </div>    
                    <div class="last-name">
                        <label for="lName">Last Name</label><br>
                        <input type="text" name="lName" required>
                    </div>
                </div>

                <label for="companyName">Company Name</label><br>
                <input type="text" name="companyName" required><br>
                <label for="countryName">Country</label><br>
                <select name="countryName" required><br>
                    <option value="Nepal">Nepal</option>
                </select><br>
                <label for="deliveryAddress" >Delivery Address</label><br>
                <input type="text" name="deliveryAddress" required><br>
                <label for="cityName">Town/City</label><br>
                <input type="text" name="cityName" required><br>
                <label for="phoneNumber">Phone Number</label><br>
                <input type="number" name="phoneNumber" required><br>
                <label for="userEmail">Email</label><br>
                <input type="email" name="userEmail">

                <div class="additional-notes">
                    <h4>Additional Information</h4>
                    <label for="orderNotes">Order notes (optional)</label><br>
                    <textarea name="orderNotes" cols="60" rows="10" placeholder="Notes about the order, e.g. special notes for the delivery"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="order-details">
        <div class="heading">
            <strong>YOUR ORDER</strong>
        </div>
        <div class="body">
            <table>
                <tr class="checkout-table-heading">
                    <th>PRODUCT</th>
                    <th>SUBTOTAL</th>
                </tr>
                <tr>
                    <td>
                        <div class="porduct-name">
                            Armor Twist x<span>1</span>
                        </div>
                    </td>
                    <td>
                        <div class="product-price">
                            Rs.47.34
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="porduct-name">
                            Armor Twist x<span>1</span>
                        </div>
                    </td>
                    <td>
                        <div class="product-price">
                            Rs.47.34
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="checkout-subtotal">
                            Subtotal
                    </td>
                    <td>
                        <div class="product-price">
                            Rs.47.34
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="checkout-total">
                            Total
                    </td>
                    <td>
                        <div class="product-price">
                            <strong>Rs.47.34</strong>
                        </div>
                    </td>
                </tr>
                <!-- Payment Options starts here -->
                <tr class="payment-option cash-on-delivery">
                    <form>
                        <td>
                            <input type="radio" checked>
                            <h3>Cash On Delivery</h3>
                        </td>
                    </form>
                </tr>
                <tr class="payment-option-description">
                    <td>
                        Pay with cash upon delivery.
                    </td>
                </tr>

                <!-- Payment Options ends here -->
            </table>
            <div class="checkout-privacy-policy-texts">
                Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <strong><a href="#">privacy policy</a> </strong>.
            </div>
            <button>PLACE ORDER</button>
        </div>
    </div>
</div>
</div>

<!-- Main-boxed-Content Ends Here -->

<?php include('includes/right_sidebar.php');?>

<?php include('includes/footer.php');?>