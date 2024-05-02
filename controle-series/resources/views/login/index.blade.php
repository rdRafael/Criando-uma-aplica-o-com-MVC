<x-layout title="Login" class="mt-2">
    <form method="post" >
        @csrf
        <div class="form-group mt-1">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary mt-2">
            Entrar
        </button>
    </form>
</x-layout>