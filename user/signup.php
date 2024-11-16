    
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('signupModal')">&times;</span>
        <h2>Create an Account</h2>
        <form action="registerProcess.php" method="post">
            <input type="text" name="inputFullname" placeholder="Full Name" required>
            <input type="text" name="inputAddress" placeholder="Address" required>
            <input type="number" name="inputPhoneNumber" placeholder="Phone Number" required>
            <input type="text" name="inputPostalCode" placeholder="Postal Code" required>
            <input type="text" name="inputLocation" placeholder="Location" required>
            <input type="email" name="inputEmail" placeholder="Email" required>
            <input type="password" name="inputPassword" placeholder="Password" required>
            <input type="password" name="inputCpassword" placeholder="Confirm Password" required>
            <button type="submit" name="sign-up-button">Sign Up</button>
        </form>
    </div>