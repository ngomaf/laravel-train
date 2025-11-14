
@include('partials.header')

            <p><a href="{{ route('user.login') }}">« voltar</a></p>

            <form action="{{ route('user.store') }}" method="post">
                <h2>Criar conta</h2>
                @csrf
                
                <input type="text" name="name" id="name" placeholder="Nome completo*" autofocus required><br>
                <input type="email" name="email" id="name" placeholder="E-mail*" required><br>
                <input type="password" name="password" id="password" placeholder="Palavra pass*" required><br>
                <div class="links">
                    <button type="submit" class="btn">Enviar</button>
                </div>
            </form>            

@include('partials.footer')