
        </main>
    </div> 
    @if (session('success'))
        <div class="msg-body">
            <div>
                <span class="close">&#10006;</span>
                <div class="msg success">
                    <h3><span>✔️</span>Sucesso</h3>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="msg-body">
            <div>
                <span class="close">&#10006;</span>
                <div class="msg error">
                    <h3><span>&#10006;</span>Erro</h3>
                    <p>{{ session('error') }}</p>
                </div>
            </div>
            
        </div><!-- /.msg-body -->
    @endif
</body>
</html>
