  
<!-- Footer-->
<footer class="bg-light py-5 bg-primary">
    <div class="container px-4 px-lg-5">
        <!-- Navigation Links -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-dark">Quick Links</h5>
               <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php" style="color:#000000;"  id="home-link">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						 <!-- Dropdown Menu -->
                         <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/signin.php">Admin</a></li>
                    </ul>
            </div>

            <!-- Address & Contact -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-dark">Contact Us</h5>
                <p class="text-muted mb-1"><strong>Address:</strong>WARD NO-16, KAZI KAZI PARA, CHENGAIL, Uluberia, West Bengal 711308</p>
                <p class="text-muted mb-1"><strong>Phone:</strong> +91 8988194697</p>
                <p class="text-muted mb-1"><strong>Email:</strong> shekhmubashir1119@gmail.com</p>
            </div>

            <!-- Google Map -->
            <div class="col-lg-4 col-md-12">
                <h5 class="text-dark">Find Us</h5>
                <div style="border-radius: 10px; overflow: hidden;">
                     <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.36001849347!2d88.12191097435064!3d22.49067173596989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0287ecd4f35417%3A0x505f9af284026b83!2sFFRH%20SHOP!5e0!3m2!1sen!2sin!4v1744699735909!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            width="100%" 
            height="100" 
            style="border:0; min-height: 200px;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
                </div>
            </div>
        </div>

            <!-- Subscribe Section -->
            <div class="col-lg-3 col-md-12">
                <h5 class="text-dark">Subscribe For Projects</h5>
                <form action="#" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter email" required>
                        <button class="btn btn-subscribe" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Copyright & Credits -->
        <div class="text-center text-muted mt-4">
            <div>Copyright &copy; 2025 - Shekh Mubashir</div>
            <div>Distributed By <a href="#" class="text-dark">MIT</a></div>
        </div>
    </div>
</footer>


<style>
/* Footer General Styling */
footer {
    padding: 50px 0;
    background-color: #f8f9fa !important; /* Light background */
    color: #212529 !important; /* Dark text for contrast */
}

/* Footer Headings */
footer h5 {
    color: #000 !important; /* Strong black for clarity */
    font-weight: 700;
    margin-bottom: 15px;
    text-transform: uppercase;
}

/* Footer Links */
footer .nav-link {
    color: #212529 !important; /* Dark gray for contrast */
    transition: color 0.3s ease-in-out;
    font-size: 16px;
}

footer .nav-link:hover {
    color: #f4623a !important; /* Blue on hover */
}

/* Contact Details */
footer p {
    color: #333 !important; /* Slightly dark gray for readability */
    font-size: 15px;
    margin-bottom: 8px;
}

/* Subscribe Button */
footer .btn-subscribe {
    background-color: #f4623a !important; /* Deep blue */
    color: #fff !important; /* White text */
    font-weight: 600;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
    padding: 8px 12px;
    border: none;
}

footer .btn-subscribe:hover {
    background-color: orange !important; /* Darker blue on hover */
}

/* Map Styling */
.map-container {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

/* Copyright Section */
footer .text-muted {
    color: #212529 !important; /* Dark text */
    font-size: 14px;
}

footer a.text-dark {
    color: #f4623a !important;
    text-decoration: none;
    font-weight: 600;
}

footer a.text-dark:hover {
    color: orange !important;
    text-decoration: underline;
}

</style>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		
		<!-- my-->
		<script src="js/slider.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
           AOS.init();
        </script>

    </body>
</html>
