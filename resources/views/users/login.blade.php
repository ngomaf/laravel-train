
@include('partials.header')

            <p><a href="{{ url('/') }}">« voltar</a></p>

            <form class="login-form" action="" method="post">
                <h2>Login 🔒</h2>
                
                <input type="email" name="email" id="email" placeholder="E-mail" autofocus required><br>
                <input type="password" name="password" id="password" placeholder="Palavra pass" required><br>
                <div class="links">
                    <button type="submit" class="btn">Entrar</button>
                    <a href="{{ route('user.create') }}" class="link-gray">Criar conta</a>
                </div>
            </form>

@include('partials.footer')