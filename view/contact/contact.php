<?php $title = 'Contact' ?>

<?php $heading = 'Et si on discutait ?'; ?>
<?php $subheading = 'Prenons contact !'; ?>

<?php $background = 'background-image: url(public/img/mail.png)'; ?>

<?php ob_start(); ?>

<div class="container" id="contact">
	<div class="row">

        <div class="col-lg-6 col-md-8 mx-auto my-5">
            
            <div class="mb-5">
                <p>Envoyez-moi un mail en replissant le fomulaire ci-desosus, <br> je vous réponderais dès que possible !</p>
            </div>
            
            <div class="contact-form">                
                <form action="">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="form-control rounded-0">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="text" name="email" id="email" class="form-control rounded-0">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="5" class="form-control rounded-0"></textarea>
                    </div>

                    <input type="submit" name="contactSubmit" id="contactSubmit" value="Envoyer" class="btn btn-red rounded-0">
                </form>
            </div>
        </div>
	</div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template/main.php'); ?>