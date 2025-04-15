<h2>Add New Employee</h2>

<form method="POST" action="/employee/store">
    <label>Employee Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Gender:</label><br>
    <select name="gender" required>
        <option value="">--Select--</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>

    <label>Marital Status:</label><br>
    <select name="marital_status" required>
        <option value="">--Select--</option>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
    </select><br><br>

    <label>Phone No:</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Address:</label><br>
    <textarea name="address" required></textarea><br><br>

    <label>Date of Birth:</label><br>
    <input type="date" name="dob" required><br><br>

    <label>Nationality:</label><br>
    <input type="text" name="nationality" required><br><br>

    <label>Hire Date:</label><br>
    <input type="date" name="hire_date" required><br><br>

    <label>Department:</label><br>
    <input type="text" name="department" required><br><br>

    <button type="submit">Add Employee</button>
</form>
