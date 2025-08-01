<?php
include('header.php');
?>   
</head>
<body>
    <div class="content mb-5">
        <h1 class="titles mt-5 text-center">DONATE HERE</h1>
        <div class="container pt-5 form-container">
            <div class="row justify-content-center g-4 wow animate__animated animate__fadeInUp">
                <!-- Donation Section -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card p-4 shadow-sm">
                        <h3 class="text-center  mb-3">DONATE TO SUPPORT</h3>
                        <div class="container mt-5">

        <form id="donationForm">
            <div class="mb-3">
                <label for="donorName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="donorName" placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label for="donorEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="donorEmail" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="upiId" class="form-label">UPI ID</label>
                <input type="text" class="form-control" id="upiId" value="aj@upi" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label mb-3">Select Amount</label>
                <div class="d-flex gap-2 flex-wrap">
                    <button type="button" class="btn btn-outline-primary amount-btn" data-amount="1">₹1</button>
                    <button type="button" class="btn btn-outline-primary amount-btn" data-amount="500">₹500</button>
                    <button type="button" class="btn btn-outline-primary amount-btn" data-amount="1000">₹1000</button>
                </div>
            </div>

            <div class="mb-3">
                <label for="customAmount" class="form-label mb-3">Or Enter Custom Amount</label>
                <input type="number" class="form-control mb-3" id="customAmount" placeholder="Enter amount">
            </div>

            <button type="submit" class="btn btn-success w-100 mt-3">Proceed to Pay</button>
        </form>
    </div>

                    </div>
                </div>
                <!-- Enquiry Section -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card p-4 shadow-sm">
                        <h3 class="text-center  mb-3">ONLINE ENQUIRY</h3>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" placeholder="Enter your country">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" placeholder="Enter your message" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Predefined amount button click event
            $(".amount-btn").click(function () {
                let amount = $(this).data("amount");
                $("#customAmount").val(amount);
            });

            // Donation form submission
            $("#donationForm").submit(function (event) {
                event.preventDefault();
                let name = $("#donorName").val();
                let email = $("#donorEmail").val();
                let upiId = $("#upiId").val();
                let amount = $("#customAmount").val();

                if (!amount || amount <= 0) {
                    alert("Please enter a valid donation amount.");
                    return;
                }

                // Redirect to UPI Payment
                let upiLink = `upi://pay?pa=${upiId}&pn=${name}&mc=&tid=&tr=&tn=Donation&am=${amount}&cu=INR`;
                window.location.href = upiLink;
            });
        });
    </script>

<script src="script.js"></script>
<?php
include('share.php');
include('footer.php');
?>