<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Form</title>
</head>
<body>
    <h1>Inscription Form</h1>
    <form action="/view_controller_result" method="POST">
        
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br>

        <label for="zip">ZIP:</label>
        <input type="text" id="zip" name="zip" required><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br>

        <label for="position_title">Position Title:</label>
        <input type="text" id="position_title" name="position_title" required><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br>

        <label for="application_date">Application Date:</label>
        <input type="date" id="application_date" name="application_date" required><br>

        <label for="university">University:</label>
        <input type="text" id="university" name="university" required><br>

        <label for="major">Major:</label>
        <input type="text" id="major" name="major" required><br>

        <label for="graduation_year">Graduation Year:</label>
        <input type="text" id="graduation_year" name="graduation_year" required><br>

        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" required><br>

        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" required><br>

        <label for="employment_start_date">Employment Start Date:</label>
        <input type="date" id="employment_start_date" name="employment_start_date" required><br>

        <label for="employment_end_date">Employment End Date:</label>
        <input type="date" id="employment_end_date" name="employment_end_date" required><br>

        <label for="responsibilities">Responsibilities:</label>
        <textarea id="responsibilities" name="responsibilities" rows="4" required></textarea><br>

        <label for="skills">Skills:</label>
        <textarea id="skills" name="skills" rows="4" required></textarea><br>

        <label for="certification">Certification:</label>
        <input type="text" id="certification" name="certification" required><br>

        <label for="job_source">Job Source:</label>
        <input type="text" id="job_source" name="job_source" required><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>