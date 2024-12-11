<?php include 'includes/header.php';?>
<main id="contact">
        <h2 id="page-id">Contact Us</h2>
        <div class="contact-container">

        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include '../includes/contact_include.php'; #site keys & code here
    
        $toAddress = "andrea.enriquezmar1@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Myriam Enriquez"; //place your client's name here
        $website = "Ke Botana";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>



 <!-- Aside Contact Information -->
            <aside>
                <h3>Contact Us</h3>
                <p>Email: kebotanaaguascalientes@gmail.com</p>
                <h4>— OR —</h4>
                <p>Phone: (123) 456 7890</p>
            </aside>
        </div>
    </main>

<?php include 'includes/footer.php';?>