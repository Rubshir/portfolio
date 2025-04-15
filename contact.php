<?php
    include('templats/header.php');
	include('includes/dbconnection.php');
	
	
	 $succMsg = "";
    $errorMsg = "";
	
	if(isset($_REQUEST['submit'])) {
	
	 
	 
	$name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $message = $_REQUEST['message'];
	
	$sql = " INSERT INTO contact (name , email , address , message) VALUES ('".$name."','". $email."','".$address."','".$message."')";
	
	$query = mysqli_query($conn,$sql);
	
	if($query){
	    $succMsg = 'Your message has been successfully sent. Thank you!';
	}
	else
	{
		   $errorMsg = 'Your message has not been successfully sent. Thank you!';
        }
		
    }		
	
?>
<!-- Full-Page Contact Section -->
<section class="page-section bg-primary" id="about">
    <div class="skill px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-white mt-0">Contect Me</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4" align="justify">
                    Have a project in mind? Let's bring your ideas to life! Whether you need a stunning website, a dynamic web application, or a custom solution tailored to your needs, I'm here to help. As a full-stack web developer, I specialize in creating high-quality, user-friendly, and scalable solutions. Reach out today, and let's build something amazing together.
                </p>
             </div>
        </div>
    </div>
</section> 

<section class="page-section" id="contact" data-aos="fade-up" data-aos-duration="1500">
    <div class="contact1">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
            <h2 class="mt-0" style="color:black;">Let's Get In Touch!</h2>
            <p class="mb-5" style="color:black">Ready to start your next project with me? Send a message and I'll get back to you as soon as possible!</p>
        </div>

        <div class="contact-contact1">
            <div class="contact-info" data-aos="fade-right" data-aos-duration="1200">
                <div class="info-item">
                    <i class='fas fa-phone-alt' style='font-size:36px'></i>
                    <span>Call Us</span>
                    <p>+91 8988194697</p>
                </div>
                <div class="info-item">
                    <i class='fas fa-map-marker-alt' style='font-size:36px'></i>
                    <span>Location</span>
                    <p>WARD NO-16, KAZI KAZI PARA, CHENGAIL, Uluberia, West Bengal 711308</p>
                </div>
                <div class="info-item">
                    <i class='far fa-clock' style='font-size:36px'></i>
                    <span>Business Hours</span>
                    <p>24/7</p>
                </div>
            </div>

            <div class="contact-form" data-aos="fade-left" data-aos-duration="1200">
                <form method="post">
				  <span style="color:#000000"><?php echo $succMsg ?></span>

                    <div class="form-group">
                        <input type="text" name="name" placeholder="Enter your Name" required>
                        <input type="email" name="email" placeholder="Enter a valid email address" required>
                    </div>
                    <input type="text" name="address" placeholder="Enter your Address">
                    <textarea name="message" placeholder="Enter your Message" required></textarea>
                    <button class="contact--button" type="submit" name="submit" data-aos="flip-up" data-aos-duration="1000">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Google Map -->
    <div class="map-contact1" data-aos="fade-up" data-aos-duration="1500">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.36001849347!2d88.12191097435064!3d22.49067173596989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0287ecd4f35417%3A0x505f9af284026b83!2sFFRH%20SHOP!5e0!3m2!1sen!2sin!4v1744699735909!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<style>
.page-section   {
 	   animation: slideUp 1s ease-in-out forwards;
 }

#contact {
    position: relative;
    width: 100%;
    min-height: 150vh; /* Increased height */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 80px 0; /* Increased padding */
    animation: slideUp 1s ease-in-out forwards;
    overflow: hidden;
}

.contact1 {
    width: 80%;
    max-width: 1200px;
    text-align: center;
    padding: 50px 20px; /* Added padding */
}

.contact-contact1 {
    display: flex;
    flex-wrap: wrap;
    gap: 50px; /* Increased spacing */
    color: white;
    width: 100%;
    justify-content: center;
}

.contact-info {
    flex: 1;
    text-align: left;
}

.info-item {
    margin: 25px 0; /* Increased spacing */
    font-size: 20px; /* Increased font size */
	color:black;
}

.info-item i {
    margin-right: 15px;
    color: #f4623a;
    font-size: 42px; /* Increased icon size */
}

.contact-form {
    flex: 1;
}

form {
    display: flex;
    flex-direction: column;
}

.form-group {
    display: flex;
    gap: 15px; /* Increased spacing */
}

input, textarea {
    width: 100%;
    padding: 15px; /* Increased padding */
    margin: 15px 0; /* Increased spacing */
    border: 1px solid #ccc;
    border-radius: 8px; /* Slightly rounded corners */
    font-size: 18px; /* Increased font size */
}

textarea {
    height: 150px; /* Increased text area size */
}

.contact--button {
    background: var(--bs-orange);
    border: none;
    padding: 14px;
    color: #FFFFFF;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 8px;
    transition: 0.3s;
    width: 50%; /* Increased button size */
    margin: auto;
}

.contact--button:hover {
    background: orange;
    box-shadow: 2px 2px 15px rgba(255, 165, 0, 0.7);
    color: #000000;
}

.map-contact1 {
    width: 100%;
    height: 500px; /* Increased map size */
    margin-top: 50px; /* Added more spacing */
}

.map-contact1 iframe {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 10px;
}

@media (max-width: 768px) {
    .page-section {
        min-height: 250vh; /* Increased height for mobile */
    }
    
    .contact-contact1 {
        flex-direction: column;
    }

    .form-group {
        flex-direction: column;
    }

    .contact--button {
        width: 100%; /* Full width button on mobile */
    }
}

</style>


		
        
      <?php
    include('templats/footer.php');
?>