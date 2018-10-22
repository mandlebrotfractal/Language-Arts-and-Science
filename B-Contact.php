
<?php  include('contact-form.php');?>
<section class="contactfront" id="contactfront">

    <div class="contactdfrontback" id=contactfrontback">
        <?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>
        <p class="contactfronttext">We're a reliable translation company that you can count on.</p>
        <form class="contactform" id="contactform" action="<?php the_permalink(); ?>" method="post">
            <p class="title contacttitle">Contact Us</p>
            <input class="in" for="firstname" placeholder="First" pattern="[a-zA-Z ]+" oninvalid="setCustomValidity('Please enter only alphabetical characters.')"
    onchange="try{setCustomValidity('')}catch(e){}" value=""> 
            <input class="in" for="lastname" placeholder="Last" pattern="[a-zA-Z ]+" oninvalid="setCustomValidity('Please enter only alphabetical characters.')"
    onchange="try{setCustomValidity('')}catch(e){}" value="">
            <input class="in" for="email" placeholder="Email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="setCustomValidity('Please enter valid email.')"
    onchange="try{setCustomValidity('')}catch(e){}">
            <input class="in" for="question" placeholder="Question" value="">
            <input class="btn contactsubmit" type="submit" name="submit" value="Submit">
    </div>

