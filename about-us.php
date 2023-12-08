<?php 
$pageTitle = "About Us";
include('includes/header.php'); 
?>


<div class="banner1">
    <div class="container text-center">
        <h4 class="banner-heading">About Us</h4>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>About <?= webSetting('title') ?? 'Us'; ?></h4>
                <div class="underline"></div>
                <p>
                At Rent A Car, we take pride in providing a seamless and reliable car rental experience tailored to meet the diverse needs of our valued customers. With a commitment to excellence, we offer a comprehensive fleet of well-maintained vehicles, ranging from compact cars to spacious SUVs, ensuring that you find the perfect vehicle for your journey. Our user-friendly online platform simplifies the reservation process, allowing you to effortlessly book a car at your convenience. Committed to transparency, we provide clear rental rates and terms, ensuring that our customers have a full understanding of the costs involved. At Rent A Car, we prioritize customer satisfaction, offering top-notch customer support and a straightforward pickup and return process. Whether you're a frequent traveler or need a temporary solution, trust us to deliver a reliable and efficient car rental service.

                </p>
                <p>
                
               <h4>Terms And conditions</h4>
1. Rental Agreement:<br>
The rental agreement is a legal contract between the customer and the car rental company. By accepting the terms and conditions, the customer agrees to abide by the terms outlined in the agreement.<br>

2. Eligibility:<br>
Only individuals meeting the minimum age requirement and possessing a valid driver's license are eligible to rent a car. Additional conditions may apply, such as a clean driving record.<br>

3. Booking and Reservation:<br>
Customers are required to provide accurate and complete information during the booking process. Any changes or cancellations must be made within the specified time frame, and fees may apply.<br>

4. Rental Period:<br>
The rental period begins and ends as specified in the agreement. Any extension or early return must be communicated to the rental company in advance.<br>

5. Rental Rates and Fees:<br>
The customer agrees to pay the specified rental rate, taxes, and any additional fees outlined in the agreement. Fees may include fuel charges, late return fees, and cleaning fees.<br>    
            
            </p>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>
