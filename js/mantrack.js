function toggleColorScheme() 
{
        const body = document.body;
            body.classList.toggle('light-mode');
            body.classList.toggle('dark-mode');
    
            // Toggle logo image source
            const logo = document.getElementById('logo');
            if (!body.classList.contains('dark-mode')) 
            {
                console.log('light')
                logo.src = '../assets/blogo.png'; // Change to dark mode logo
                document.getElementById('toggle').src = '../assets/moon.png'; // Change toggle image to moon
            } 
            else 
            {
                console.log('dark')
                logo.src = '../assets/logo.png'; // Change back to light mode logo
                document.getElementById('toggle').src = '../assets/sun.png'; // Change toggle image to sun
            }
}

// Member Management Functionality
document.getElementById('register-member').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get member details from the form
    const name = document.getElementById('member-name').value;
    const email = document.getElementById('member-email').value;
    const phone = document.getElementById('member-phone').value;

    // Create a new member profile
    const memberProfile = document.createElement('div');
    memberProfile.classList.add('member-profile');
    memberProfile.innerHTML = `
        <p>Name: ${name}</p>
        <p>Email: ${email}</p>
        <p>Phone: ${phone}</p>
        <button class="update-member">Update</button>
        <button class="cancel-membership">Cancel Membership</button>
    `;

    // Append the new member profile to the member list
    document.getElementById('member-list').appendChild(memberProfile);

    // Clear the form fields
    document.getElementById('member-name').value = '';
    document.getElementById('member-email').value = '';
    document.getElementById('member-phone').value = '';
});

// Attendance Tracking Functionality
document.getElementById('record-attendance').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get member ID from the form
    const memberId = document.getElementById('member-id').value;

    // Record the attendance for the member with the given ID
    const attendanceRecord = document.createElement('div');
    attendanceRecord.classList.add('attendance-record');
    attendanceRecord.innerHTML = `
        <p>Member ID: ${memberId}</p>
        <p>Attendance Recorded</p>
    `;

    // Append the attendance record to the attendance report
    document.getElementById('attendance-report').appendChild(attendanceRecord);

    // Clear the member ID field
    document.getElementById('member-id').value = '';
});
