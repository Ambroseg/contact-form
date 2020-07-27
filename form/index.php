<!DOCTYPE html>
<html>

    <head>
        <title> Contact Form</title>
        <link rel="stylesheet" href="form.css" type="text/css">
    </head>

    <body>
        <main>
            <div class="container">
                <form id="contact" action="" method="post">
                    <h2>Send Email</h2>
                    <fieldset>
                        <input placeholder="Your name" type="text" name="name" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Email Address" type="email" name="email" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Phone Number" name="phone" type="tel" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Subject" type="text" name="subject" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Type your Message Here...." name="message" type="text"
                            required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                </form>
            </div>


        </main>
    </body>

</html>