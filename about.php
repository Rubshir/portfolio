<?php
    include('templats/header.php');
	include('includes/dbConnection.php');
  ?>
 <style>
 .page-section   {
 	   animation: slideUp 1s ease-in-out forwards;
 }
 </style>
   	 <!-- About -->
<section class="page-section bg-primary" id="about">
    <div class="skill px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-white mt-0">About Me</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4" align="justify">
                    Hey there! I'm a full-stack web developer who loves building clean, functional, and user-friendly websites. From crafting sleek front-end designs to making sure everything runs smoothly on the back end, I enjoy turning ideas into reality with code. I'm always exploring new technologies and finding better ways to solve problems. Whether it's a small project or a complex web app, I'm all about creating great digital experiences. Let's build something awesome together.
                </p>
                <a class="btn btn-light btn-xl" href="#portfolio">View My Work</a>
            </div>
        </div>
    </div>
</section> 
 
<style>
  * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Container Styling */
    .about {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        width: 100%;
        padding: 60px 10%;
        background: #f8f9fa; /* Light background for contrast */
    }

    .column {
        width: 45%; /* Maintains spacing */
        min-width: 300px;
    }

    .skill {
        margin-bottom: 25px;
    }

    .skill-name {
        font-weight: bold;
        font-size: 1.1rem;
        margin-bottom: 5px;
        color: #333;
        display: flex;
        justify-content: space-between;
    }

    /* Progress Bar Styling */
    .progress-bar {
        width: 100%;
        background: #ddd;
        border-radius: 10px;
        overflow: hidden;
        height: 22px;
        box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    /* Animated Progress Fill */
    .progress {
        height: 100%;
        background: linear-gradient(90deg, #ff8c00, #ff5700); /* Modern gradient */
        text-align: right;
        line-height: 22px;
        color: white;
        padding-right: 8px;
        transition: width 1s ease-in-out, background 0.5s ease-in-out;
        font-size: 0.9rem;
        font-weight: bold;
    }

    /* Hover Effect for Interactive Feel */
    .progress:hover {
        background: linear-gradient(90deg, #ff5700, #ff8c00);
    }

    /* Responsive Design for Smaller Screens */
    @media (max-width: 768px) {
        .about {
            flex-direction: column;
            align-items: center;
        }

        .column {
            width: 90%;
        }
    }
</style>



<section class="page-section" id="portfolio">
    <div class="skill-fluid p-0">
        <h2 class="text-center mt-0">SKILLS</h2>
        <hr class="divider" />
        <div class="about">
 
            <!-- Left Column -->
            <div class="column">
                <div class="skill">
                    <div class="skill-name">HTML <span class="percent">100%</span></div>
                    <div class="progress-bar"><div class="progress" data-width="100%"></div></div>
                </div>
                <div class="skill">
                    <div class="skill-name">CSS <span class="percent">90%</span></div>
                    <div class="progress-bar"><div class="progress" data-width="90%"></div></div>
                </div>
                <div class="skill">
                    <div class="skill-name">JavaScript <span class="percent">75%</span></div>
                    <div class="progress-bar"><div class="progress" data-width="75%"></div></div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="column">
                <div class="skill">
                    <div class="skill-name">PHP <span class="percent">80%</span></div>
                    <div class="progress-bar"><div class="progress" data-width="80%"></div></div>
                </div>
                <div class="skill">
                    <div class="skill-name">BOOSTRAP <span class="percent">90%</span></div>
                    <div class="progress-bar"><div class="progress" data-width="90%"></div></div>
                </div>
                <div class="skill">
                    <div class="skill-name">MY SQL <span class="percent">55%</span></div>
                    <div class="progress-bar"><div class="progress" data-width="55%"></div></div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const progressBars = document.querySelectorAll(".progress");

        const animateProgress = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const width = bar.getAttribute("data-width");
                    bar.style.width = width; // Apply width animation
                    bar.classList.add("animate"); // Add class to ensure transition
                    observer.unobserve(bar); // Stop observing once animated
                }
            });
        };

        const observerOptions = {
            root: null, // Viewport-based observation
            threshold: 0.4 // Triggers animation when 40% is visible
        };

        const observer = new IntersectionObserver(animateProgress, observerOptions);

        progressBars.forEach(bar => {
            bar.style.width = "0"; // Ensure initial width is 0
            observer.observe(bar);
        });
    });
</script>



      <?php
    include('templats/footer.php');
?>