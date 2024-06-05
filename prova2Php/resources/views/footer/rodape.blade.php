<footer class="footer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div class="footer-logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="60px">
        </div>
        <div class="footer-links">
            <div class="footer-col">
                <h4>Sobre Nós</h4>
                <ul>
                    <li><a href="{{ route('site.sobreNos') }}">Quem Somos</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Produtos</h4>
                <ul>
                    <li><a href="{{ route('site.produtos') }}">Donuts</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suporte</h4>
                <ul>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-social">
            <h4>Redes sociais</h4>
            <div class="social-links">
                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
            </div>
    
        </div>
    </div>
</footer>
