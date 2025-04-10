<?php include 'header.php'; ?>
<section class="contact">
    <h1>Contact Me</h1>
    <form action="submit_form.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Send Message</button>
    </form>
    
</section>

<!-- Inside your contact-us section -->
<div class="contact-us">
        <p>If you have any questions, feel free to reach out to me on WhatsApp!</p>
    
        <!-- OR: WhatsApp Icon Button with Font Awesome -->
        <a href="https://wa.me/923368272919" target="_blank" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
<?php include 'footer.php'; ?>
