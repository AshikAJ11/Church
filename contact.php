<?php 
include('header.php');
?>
<style>
    /* Scoped styles for the donation page */
    .donation-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 150px;
    }

    .donation-container h1 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
       
    }

    .donation-container p {
        text-align: center;
        margin-bottom: 30px;
        color: #555;
    }

    .donation-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        color: #2c3e50;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="number"],
    .form-group select {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    .amount-options {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .amount-btn {
        padding: 10px 20px;
        background: #ecf0f1;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .amount-btn:hover,
    .amount-btn.active {
        background: #3498db;
        color: #fff;
        border-color: #3498db;
    }

    .donation-form button[type="submit"] {
        padding: 12px;
        background: #2ecc71;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .donation-form button[type="submit"]:hover {
        background: #27ae60;
    }

    .error {
        color: red;
        font-size: 14px;
        display: none;
    }

    @media (max-width: 600px) {
        .donation-container {
            margin: 20px;
            padding: 15px;
        }

        .amount-btn {
            flex: 1;
        }
    }
</style>

<div class="donation-container">
    <h1>Support Our Cause</h1>
    <p>Your generous donation helps us make a difference. Every little bit counts—thank you for your support!</p>

    <form class="donation-form" id="donationForm" onsubmit="return validateForm(event)">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <span class="error" id="nameError">Please enter your full name.</span>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <span class="error" id="emailError">Please enter a valid email address.</span>
        </div>

        <div class="form-group">
            <label>Donation Amount</label>
            <div class="amount-options">
                <button type="button" class="amount-btn" data-amount="10">$10</button>
                <button type="button" class="amount-btn" data-amount="25">$25</button>
                <button type="button" class="amount-btn" data-amount="50">$50</button>
                <button type="button" class="amount-btn" data-amount="100">$100</button>
            </div>
            <input type="number" id="amount" name="amount" placeholder="Or enter custom amount" min="1" required>
            <span class="error" id="amountError">Please enter a valid amount.</span>
        </div>

        <div class="form-group">
            <label for="payment">Payment Method</label>
            <select id="payment" name="payment" required>
                <option value="">Select an option</option>
                <option value="credit">Credit/Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank">Bank Transfer</option>
            </select>
            <span class="error" id="paymentError">Please select a payment method.</span>
        </div>

        <button type="submit">Donate Now</button>
    </form>
</div>

<script>
    // Handle amount button clicks
    const amountButtons = document.querySelectorAll('.amount-btn');
    const amountInput = document.getElementById('amount');

    amountButtons.forEach(button => {
        button.addEventListener('click', () => {
            amountButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            amountInput.value = button.getAttribute('data-amount');
        });
    });

    // Form validation
    function validateForm(event) {
        event.preventDefault();
        let isValid = true;

        // Reset error messages
        document.querySelectorAll('.error').forEach(error => error.style.display = 'none');

        // Name validation
        const name = document.getElementById('name').value.trim();
        if (!name) {
            document.getElementById('nameError').style.display = 'block';
            isValid = false;
        }

        // Email validation
        const email = document.getElementById('email').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById('emailError').style.display = 'block';
            isValid = false;
        }

        // Amount validation
        const amount = document.getElementById('amount').value;
        if (!amount || amount <= 0) {
            document.getElementById('amountError').style.display = 'block';
            isValid = false;
        }

        // Payment method validation
        const payment = document.getElementById('payment').value;
        if (!payment) {
            document.getElementById('paymentError').style.display = 'block';
            isValid = false;
        }

        if (isValid) {
            alert('Thank you for your donation!');
            document.getElementById('donationForm').reset();
            amountButtons.forEach(btn => btn.classList.remove('active'));
        }

        return isValid;
    }
</script>


<?php 
include('footer.php');
?>
