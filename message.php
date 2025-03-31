<?php include 'includes/header.php'; ?>
<main>
    <section id="top">
        <h3>Messages</h3>
        <p>If you would like to just say hello</p>
    </section>
    <section id="messages">
         <article>
           <div class="left-content">
             <h5>Sophie E.</h5>
             <p>Hey Emma, look forward to seeing you at bunch later in the week</p>
           </div>
           <div class="right-content">
             <p>2/2/2015</p>
           </div>
         </article>
         <article>
           <div class="left-content">
             <h5>Evan C.</h5>
             <p>Emma! good luck in all your endeavors. I love all the work you do, you are so accomplished.</p>
           </div>
           <div class="right-content">
             <p>6/3/2025</p>
           </div>
         </article>
         <article>
           <div class="left-content">
             <h5>Tristan G.</h5>
             <p>Great site Emma</p>
           </div>
           <div class="right-content">
             <p>12/3/2025</p>
           </div>
         </article>
    </section>
    <section>
        <h3>Add Messages</h3>
        <form method="post">
            <input type="text" name="name" class="name" placeholder="Your name">
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <input type="submit" value="SEND">
            <input type="text" name="spam-checker" class="spam-checker" placeholder="2 * 2 =">
        </form>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
