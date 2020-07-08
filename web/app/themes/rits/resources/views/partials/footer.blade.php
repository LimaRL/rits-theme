<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="contact">
        <div class="email">
          <span><img src="@asset('images/email.svg')"></span>
          <h4>Alguma <br>Dúvida?</h4>
        </div>
        <div class="phone">
          <span><img src="@asset('images/phone.svg')"></span>
          <h4>Ligamos <br>pra você</h4>
        </div>
        <div class="whatsapp">
          <span><img src="@asset('images/whatsapp.svg')"></span>
          <h4>Fale pelo <br>WhatsApp</h4>
        </div>
      </div>

      <div class="footer-info">
        <div class="footer-info-col footer-left">
          @if (has_custom_logo())
            <h2>
              {{ the_custom_logo() }}
            </h2>
          @else
            <h2>
              <a class="brand" href="{{ home_url('/') }}" alt="{{ get_bloginfo('name', 'display') }}" >
                {{ get_bloginfo('name', 'display') }}
              </a>
            </h2>
          @endif

          <p>Copyright © @php echo date("Y"); @endphp - Rits Tecnologia. Todos os direitos reservados. Política de Privacidade</p>
        </div>
        <div class="footer-info-col footer-right">
          <ul class="social-network">
            <li class="social-icon"><a href="#"><img class="icon" src="@asset('images/facebook.svg')"></a></li>
            <li class="social-icon"><a href="#"><img class="icon" src="@asset('images/twitter.svg')"></a></li>
            <li class="social-icon"><a href="#"><img class="icon" src="@asset('images/instagram.svg')"></a></li>
            <li class="social-icon"><a href="#"><img class="icon" src="@asset('images/linkedin.svg')"></a></li>
            <li class="social-icon"><a href="#"><img class="icon" src="@asset('images/youtube.svg')"></a></li>
          </ul>
          <p>Rits</p>
        </div>
      </div>
    </div>
  </div>

  <div class="whatsapp-float">
    <a href="#">
      <span>
        <img class="icon" src="@asset('images/whatsapp-green.svg')">
      </span>
    </a>
  </div>
</footer>
