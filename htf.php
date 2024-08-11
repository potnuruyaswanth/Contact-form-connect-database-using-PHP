<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssf.css">
</head>
<body>
    <div class="heading">
        <h1>Contact Form</h1>
        <h5>Please fill all the texts in the fields</h5>
    </div>
    <form class="form" method="post" action="connect.php">
        <div class="input-name">
            <label>Your Name:</label>
            <input type="text" placeholder="Your Full Name" required autocapitalize="off" id="name" name="name">
        </div>
        <div class="input-email">
            <label>Your Email:</label>
            <input type="email" placeholder="Valid Email Address" required autocapitalize="off" id="email" name="email">
        </div>
        <div class="input-number">
            <label>Your Phone Number:</label>
            <input type="tel" placeholder="Phone Number" required autocapitalize="off" id="phonenumber" name="phonenumber">
        </div>
        <div class="input-message">
            <label>Message:</label>
            <textarea placeholder="Your Message to us" cols="65" rows="4" id="message" name="message"></textarea>
        </div>
        <div class="input-subject">
            <label>Subject:</label>
            <select required id="subject" name="subject">
                <option value="Student">Student</option>
                <option value="Job">Job</option>
            </select>
        </div>
        <div class="designation">
            <label>Job Designation:</label>
            <input type="text" placeholder="Designation" autocapitalize="off" id="job" name="job">
        </div>
        <div class="submit-button">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>