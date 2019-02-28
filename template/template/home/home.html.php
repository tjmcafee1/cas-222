<!DOCTYPE html>

<!--
File Name: index.html.php
Date: 01/20/2019
Programmer: Tyler McAfee
-->

<html lang="en">
    
<head>
    <title>Ace in the Hole Multisport Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/ace.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php include 'includes/header.inc.html.php'; ?>
    <?php include 'includes/nav.inc.html.php'; ?>

        <section id="section1">
            <p>Image</p>
        </section>

        <section id="section2">
            <h3>Heading 2 (h2)</h3>
            <a href="home.html.php">Back to Top</a>

            <h1>Sign Up! (Athlete and Volunteer)</h1>

            <form method="post" action="form_processor.php">

                <label for="athletevolun">Athlete or Volunteer?</label>
                <select size="1" name="athletevolun" id="athletevolun">
                    <option value=""></option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                </select>
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" id="fname" >

                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname" id="lname" >

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" >

                    <label for="econtactname">Emergency Contact:</label>
                    <input type="text" name="econtactname" id="econtactname" >

                    <label for="econtactphone">Emergency Contact Phone:</label>
                    <input type="tel" name="econtactphone" id="econtactphone" >

                    <label for="gender">Gender:</label>
                    <input type="text" name="gender" id="gender" >

                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" min="1" max="120" >

                    <label for="event">Event:</label>
                    <select size="1" name="event" id="event">
                        <option>Saturday</option>
                        <option value="longcourse">Long Course - $240</option>
                        <option value="olympic">Olympic - $110</option>
                        <option value="10k">10K - $50</option>
                        <option value="halfmarathon">Half Marathon - $75</option>
                    </select>
                    <label for="event2">Event:</label>
                    <select size="1" name="event2" id="event2">
                        <option>Sunday</option>
                        <option value="sprint">Sprint - $90</option>
                        <option value="tryatri">Try-a-Tri - $65</option>
                    </select>
                    <input type="hidden" name="honeypot" id="honeypot" value="" alt="if you fill this out, info will not write to the db"/>

                    <label for="comments">Accommodations?</label>
                    <textarea name="comments" id="comments" rows="2" cols="20"></textarea>
                    <input id="mysubmit" type="submit" value="Submit">
            </form>
        </section>


        <section id="section3">
            <h2>Contact Us</h2>

            <form method="post" action="form_processor_contact.php">

                <label for="athletevolunteer">Athlete, Volunteer, or Interested Party?</label>
                <select size="1" name="athletevolunteer" id="athletevolunteer">
                    <option value=""></option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="interestedparty">Interested Party</option>
                </select>

                <label for="name">Name:</label>
                <input type="text" name="name" id="name" >

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" >

                <label for="quescom">Questions/Comments?</label>
                <textarea name="quescom" id="quescom" rows="2" cols="20"></textarea>

                <input id="mysubmit" type="submit" value="Submit">

            </form>

            <ul>
                <li>List Item (li)</li>
                <li>List Item (li)</li>
                <li>List Item (li)</li>
                <li>List Item (li)</li>
            </ul>
            <a href="home.html.php">Back to Top</a>
        </section>

    <?php include 'includes/footer.inc.html.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/script.js"></script>
</body>
    
    
</html>
