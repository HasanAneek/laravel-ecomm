<x-layout>
    <section class="container">
        <div class="row">
            <div class="col-md-6" style="margin-left: 300px">
                <form method="POST" action="login"  class="form">
                    @csrf
                    <div style="margin-top: 15px">
                        <label for="email">Email</label>
                        <input type="text"  class="form-control" name="email" >
                    </div>
                    <div style="margin-top: 15px">
                        <label for="password">Password</label>
                        <input type="password" class="form-control"   name="password" >
                    </div>
                    <div style="margin-top: 15px">
                        <input type="submit" class="btn btn-primary"  value="Log In">
                    </div>
                    <div style="margin-top: 15px">
                        <a style="text-decoration: none"  href="#">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>

