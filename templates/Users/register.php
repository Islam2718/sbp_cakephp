<div class="container">
    <div class="col-6 mx-auto mt-5 mb-5 p-4 card">
        <!-- <form action="/users/register" method="post"> -->
            <?php //FORM START.. 
                echo $this->Form->create(null, [
                    'url' => '/users/register/',
                    'type' => 'post'
                ]);
            ?> 
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control"">
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Password</label>
                <input type="password" name="confirm_password" class="form-control"">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            Already have an account? <?= $this->Html->link("Login Here", ['action' => 'login']) ?>
        </form>
    </div>
</div>







