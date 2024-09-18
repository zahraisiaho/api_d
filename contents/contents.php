<?php
class contents{
    public function form(){
?>
<div class="container d-flex flex-column align-items-center justify-content-center text-center">
    <div class="col-4 bg-secondary p-5 rounded">
        <h2 class="text-white">User Registration</h2>
        <form method="post" action="">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required>
                <label for="username"><i class="fas fa-user"></i> Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                <label for="email"><i class="fas fa-envelope"></i> Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                <label for="password"><i class="fas fa-lock"></i> Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" name="confirm_password" required>
                <label for="confirmPassword"><i class="fas fa-lock"></i> Confirm Password</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-user-plus"></i> Register</button>
            </div>
        </form>
    </div>
</div>
        <?php
    }
}