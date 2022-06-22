     <div class="container">
        <div class="col-6 mx-auto mt-0">
            <h4 class="text-center pb-4 mt-4">Login Now !</h4>
            <form class="card p-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                Don't have an account <?= $this->Html->link("Register Here", ['action' => 'register']) ?>
            </form>
            <br/>
            <a href="" class="btn btn-primary btn-lg">Login with facebook</a>
            <a href="" class="btn btn-danger btn-lg">Login with Google</a>
        </div>
     </div>





