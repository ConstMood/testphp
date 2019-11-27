<?php

include 'header.php';
session_start();

if(empty($_SESSION['message'])) {
    $_SESSION['message'] = [];
}

if (!empty($_POST['feedbackMessage'])) {
    $m = [
        "message" => $_POST['feedbackMessage'],
        "date" => strftime("%Y-%m-%d %H:%M")
    ];
    array_push($_SESSION['message'], $m);
}
?>
<?php
if (!empty($_SESSION['message']) && count($_SESSION['message'])) : ?>
    <ul id="message">
        <?php foreach ($_SESSION['message'] as $key => $text) : ?>
            <li class="card">
                <div class="card-body"><?php echo $text['message']; ?></div>
                <div class="card-footer"><?php echo $text['date']; ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php
endif
?>
            <form method="POST" action="feedback.php">
                <label for="feedbackMessage">Message: </label>
                <textarea id="feedbackMessage" name="feedbackMessage" rows="5" cols="33"></textarea>
                <input type="submit" id="feedbackMessageButton" value="envoyer"/>
                <i class="fas fa-external-link-square-alt"></i></input>
            </form>

    <?php

    include 'footer.php';

    ?>