<div class="wrap">
    <!-- nous utilisons la fonction get_admin_page_title() pour récupérer le titre de la page admin que l'on a défini lors de l'enregistrement -->
    <h1><?= get_admin_page_title(); ?>: </h1>

    <!-- Ici nous ajoutons une partie d'html afin qui prendra en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->
    <?php view('partials/notice'); ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="postbox">
                <div class="inside">
                    <div>
                        <strong>E-mail: </strong> <?= $mail->email; ?>
                    </div>
                    <div>
                        <strong>Nom: </strong> <?= $mail->lastname; ?>
                    </div>
                    <div>
                        <strong>Prénom: </strong> <?= $mail->firstname; ?>
                    </div>
                    <div>
                        <strong>Message: </strong> <br> <?= $mail->content; ?>
                    </div>
                </div>
            </div>
            <a href="<?php menu_page_url('mail-client'); ?>" class="button button-primary">retour</a>
            <!-- Link qui va nous rediriger sur une autre page ou dans l'url il y aura "&action=edit&id=x via la function render() dans SendMail.php on va lancer la function edit de MailController.php-->
            <a href="<?php menu_page_url('mail-client'); ?>&action=edit&id=<?= $mail->id; ?>" class="button bg-warning text-white">editer</a>
             <!-- On rajoute ici un formulaire qui ne contient qu'un bouton ainsi qu'un input mais caché (hidden). on le cache car ce n'est pas nécessaire de le voir par contre on va avoir besoin de ce qu'il contient -->
            <form class="form-inline d-inline-block" action="<?php get_site_url(); ?>?action=mail-delete" method="post">
            <!-- On met un input hidden avec comme valeur l'id du mail en question. on fait ça pour ensuite récupérer l'id via $_POST['et le NAME qui est ici "id" '] on récupérera sa valeur dans les prochains commits pour l'instant on à uniquement un petit formulaire qui contient l'id du mail et qui nous met une action=delete dans notre url -->
                <input type="hidden" name="id" value="<?= $mail->id; ?>">
                <button type="submit" class="button">supprimer</button>
            </form>
        </div>
    </div>
</div> 