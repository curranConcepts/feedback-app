<?php include 'partials/header.php'; ?>

<?php
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

//Form submit
if (isset($_POST['submit'])) {

    //Validate name
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //Validate email
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    //Validate body
    if (empty($_POST['body'])) {
        $bodyErr = 'Feedback is required';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
        //Add to database
        $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

        if (mysqli_query($db, $sql)) {
            //Success
            header('Location: feedback.php');
        } else {
            //Error
            echo 'Error:' . mysqli_error($db);
        }
    }
}
?>

<div class="text">
    <div class="circular-icon">
        <img src="img/headshot.jpeg" alt="Circular Icon">
    </div>
    <h3>Software Engineer | Missoula, MT</h3>
    <p>Results-driven software engineer with a keen ability to translate complex
        concepts into practical solutions. Proficient in a range of programming languages
        and technologies, with a deep commitment to continuous learning.</p>
    <div class="feedback-section">
        <div class="card">
            <div class="card-title">
                <h3>Leave Feedback</h3>
                <hr />
            </div>
            <div class="card-content">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="translucent-form">
                    <div class="invalid-feedback">
                        <?php echo $nameErr; ?>
                    </div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder=" Enter your name">
                    <div class="invalid-feedback">
                        <?php echo $emailErr; ?>
                    </div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder=" Enter your email">
                    <div class="invalid-feedback">
                        <?php echo $bodyErr; ?>
                    </div>
                    <label for="body" class="form-label"></label>
                    <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" name="body" placeholder=" Enter your feedback" rows="4"></textarea>
                    <div class="mb-3">
                        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>