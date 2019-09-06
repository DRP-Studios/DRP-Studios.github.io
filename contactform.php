<html>
    <body>
        <form action="send_form_email.php" method="post">
            <input type="text" name="contact_name" placeholder="Contact Name" maxlength="50">
            <br>
            <input type="text" name="email" placeholder="Email" maxlength="50">
            <br>
            <textarea name="subject"  maxlength="256" rows="1" placeholder="Subject"></textarea>
            <br>
            <textarea name="message"  maxlength="1000" rows="5" cols="50" placeholder="Message"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form> 

    </body>
</html>

