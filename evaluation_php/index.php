<?php

session_start();

include 'header.php';

if (empty($_SESSION['contact'])) {
    $_SESSION['contact'] = [];
}

if (!empty($_POST['contactList'])) {
    $contactInfo = [
        "contactLastName" => $_POST['contactLastName'],
        "contactFirstName" => $_POST['contactFirstName'],
        "contactMobilePhone" => $_POST['contactMobilePhone'],
        "contactEmail" => $_POST['contactEmail']
    ];
    array_push($_SESSION['contact'], $contactInfo);
}

?>

    <div class="middle">
        <div class="contactCreation">
            <h1>New Contact</h1>
            <label for="contactFirstName">First Name</label>
            <input type="text" name="contactName">

            <label for="contactLastName">Last Name</label>
            <input type="text" name="contactLastName">

            <label for="contactMobilePhone">Mobile Phone</label>
            <input type="text" name="contactMobilePhone">

            <label for="contactEmail">Email</label>
            <input type="email" name="contactEmail">

            <input type="submit" id="createContact" value="Create Contact"/>
        </div>
        <div class="contacts">
            <h1>Contact List</h1>
            <?php
            if (!empty($_SESSION['contact']) && count($_SESSION['contact'])) : ?>
            <div class="contact">
                <?php foreach ($_SESSION['contact'] as $key => $text) : ?>
                    <h1><?php echo $text['contactLastName'] ?></h1>
                    <h2><?php echo $text['contactFirstName'] ?></h2>
                    <p><?php echo $text['contactMobilePhone'] ?></p>
                    <p><?php echo $text['contactEmail'] ?></p>
                <?php endforeach;
                endif; ?>
                <button>Send Email</button>
            </div>
        </div>
    </div>

<?php

include 'footer.php';

?>