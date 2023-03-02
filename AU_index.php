<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air University Kamra</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+JwRjggRNkxNj4pKSXrjW9R2I3I7U2N" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-cqnjKQzQc0VX9LZ4I/fjCkTCr5BhDp47jKBB+ew1aHxCxu9zgR9dLQoHfLs3MqG+CccgxOe2l+7Bd33v/3z9pw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="AU_Style.CSS">
</head>
<body>

<div class="top-bar">
    <div class="container" style="display: flex; justify-content: center; align-items: center;">
        <img src="https://upload.wikimedia.org/wikipedia/en/6/61/Air_University_Pakistan_Insignia.png" alt="Air University Kamra Logo" width="60" height="60" class="d-inline-block align-top" style="margin-right: 10px;">
        <span style="font-size: 30px; color: #015C9A;">Air University Kamra</span>
    </div>
</div>

<div class="container">
    <div class="form-container">
     
    <h2>Student Information Form</h2>
    <form action="AU_Database.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first-name"><i class="fas fa-user"></i> First Name</label>
                <input type="text" class="form-control" id="first-name" name="first-name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="last-name"><i class="fas fa-user"></i> Last Name</label>
                <input type="text" class="form-control" id="last-name" name="last-name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="birthdate"><i class="fas fa-calendar"></i> Birthdate</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <div class="form-group col-md-6">
                <label for="address-line-1"><i class="fas fa-map-marker-alt"></i> Address Line 1</label>
                <input type="text" class="form-control" id="address-line-1" name="address-line-1" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address-line-2"><i class="fas fa-map-marker-alt"></i> Address Line 2</label>
                <input type="text" class="form-control" id="address-line-2" name="address-line-2">
</div>
<div class="form-group col-md-6">
<label for="city"><i class="fas fa-city"></i> City</label>
<input type="text" class="form-control" id="city" name="city" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="state-province"><i class="fas fa-map-marker-alt"></i> State/Province</label>
<input type="text" class="form-control" id="state-province" name="state-province" required>
</div>
<div class="form-group col-md-6">
<label for="zip-postal"><i class="fas fa-map-marker-alt"></i> Zip/Postal Code</label>
<input type="text" class="form-control" id="zip-postal" name="zip-postal" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="country"><i class="fas fa-globe"></i> Country</label>
<input type="text" class="form-control" id="country" name="country" required>
</div>
</div>
</fieldset>
<fieldset>
    <legend>Degree Information</legend>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="degree-name"><i class="fas fa-graduation-cap"></i> Degree Name</label>
            <input type="text" class="form-control" id="degree-name" name="degree-name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="degree-type"><i class="fas fa-graduation-cap"></i> Degree Type</label>
            <input type="text" class="form-control" id="degree-type" name="degree-type" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="credits-required"><i class="fas fa-money-bill-wave"></i> Credits Required</label>
            <input type="number" class="form-control" id="credits-required" name="credits-required" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="course-list"><i class="fas fa-list"></i> Course List</label>
            <textarea class="form-control" id="course-list" name="course-list" rows="5"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="prerequisites"><i class="fas fa-clipboard"></i> Prerequisites</label>
            <textarea class="form-control" id="prerequisites" name="prerequisites" rows="5"></textarea>
        </div>
    </div>
</fieldset>

<button type="submit" class="btn-primary"  name="submit">Submit</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
    $(document).ready(function() {
        // Submit form data using AJAX
        $('#student-form').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: 'AU_Database.php',
                type: 'post',
                data: $(this).serialize(),
                success: function(response) {
                    // Show success message and clear form
                    $('#success-message').html(response);
                    $('#student-form')[0].reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Show error message
                    $('#error-message').html('Error: ' + textStatus + ' - ' + errorThrown);
                }
            });
        });
    });
</script>
</body>
</html>