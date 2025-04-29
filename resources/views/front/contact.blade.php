@extends('welcome')
@section('title','Uniblock | Desarrollo Software + Marketing Digital [2024]')

@section('meta_title', 'Agencia de Marketing Digital y Desarrollo Web - Uniblock')
@section('meta_description', 'Uniblock es una agencia de marketing digital y desarrollo web especializada en SEO, redes sociales y software a medida. ¡Impulsa tu negocio con estrategias digitales efectivas!')
@section('meta_keywords', 'agencia de marketing digital, desarrollo de software, SEO, posicionamiento web, SEM, redes sociales, software a medida, desarrollo web en Laravel, ecommerce, transformación digital, branding digital, inteligencia artificial, automatización empresarial, consultoría SEO, publicidad digital, UX/UI, link building, analítica web, copywriting')
@section('meta_image', asset('img/logo.png'))

@section('content')

   <!-- Breadcrumb Begin -->
   <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contáctanos</h2>
                    <div class="breadcrumb__links">
                        <a href="{{url('/')}}">Inicio</a>
                        <span>Contacto</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Sección de Widgets de Contacto Begin -->
<section class="contact-widget spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Dirección</h4>
                        {{-- <p>Los Angeles Gournadi, 1230 Bariasl</p> --}}
                        <p  style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;">Calle suapure quinta las delicias colinas de bello monte municipio Baruta Caracas, Venezuela</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-whatsapp"></i>
                    </div>





                    <div class="contact__widget__item__text" style="color: white;">
                        <h4 style="color: white; margin-bottom: 12px;">Contacto vía WhatsApp</h4>

                        <div class="phone-numbers" style="display: flex; flex-direction: column; gap: 10px;">
                            <a id="whatsappLink1"
                               href="#"
                               style="color: white; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                                <i class="fa fa-whatsapp" style="color: #25D366; font-size: 1.2em;"></i>
                                +58 412-0433205
                            </a>

                            <a id="whatsappLink2"
                               href="#"
                               style="color: white; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                                <i class="fa fa-whatsapp" style="color: #25D366; font-size: 1.2em;"></i>
                                +58 412-4352014
                            </a>
                        </div>
                    </div>

                    <script>
                    // Detección básica (ejemplo)
                    const userTime = new Date().toLocaleTimeString();
                    const userLang = navigator.language || navigator.userLanguage;
                    const isMobile = /Mobi|Android/i.test(navigator.userAgent);

                    // Mensaje con datos detectados
                    const baseMessage = `¡Gracias por contactarnos! 📩 Estamos revisando tu mensaje y te responderemos en breve. Horario de atención: Lunes a Viernes, 9am - 6pm. ¡Saludos! 🚀`;

                    // Configurar enlaces
                    document.getElementById('whatsappLink1').href =
                      `https://wa.me/584120433205?text=${encodeURIComponent(baseMessage + 'Ing. Renny')}`;

                    document.getElementById('whatsappLink2').href =
                      `https://wa.me/584124352014?text=${encodeURIComponent(baseMessage + ' Ing. Abrahan Pulido')}`;
                    </script>



                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4 style="color: white;">Email</h4>
                        <p>
                            <a href="mailto:info@uniblockweb.com"
                               target="_blank"
                               style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                                <i class="fa fa-envelope" style="font-size: 1.1em;"></i>
                                info@uniblockweb.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sección de Widgets de Contacto End -->

<!-- Sección de Llamado a la Acción Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6605.523576919703!2d-68.05500268130226!3d10.126252891199558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e80615252311007%3A0x16aaf450ce8f7058!2sParcelas%20del%20Socorro%20Local%20Evang%C3%A9lico!5e0!3m2!1ses!2sve!4v1569702592198!5m2!1ses!2sve"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.2459!2d-66.8815261!3d10.4829808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58c2ee82ac4d%3A0xe48b32319d8b5d2e!2sQta%20Las%20Delicias!5e0!3m2!1ses!2sve!4v1719012809256!5m2!1ses!2sve"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0;"
                            allowfullscreen="">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <h3>Ponte en contacto</h3>
                    {{-- <form action="#">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Sitio web">
                        <textarea placeholder="Mensaje"></textarea>
                        <button type="submit" class="site-btn">Enviar Mensaje</button>
                    </form> --}}


                    <form  class="form-contact contact_form"  action="{{ route('contact.submit') }}" method="POST" id="contactForm" novalidate="novalidate">
                        @csrf

                        <div>
                          <input name="name" id="name" type="text" onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Nombre y Apellido'" placeholder='Nombre y Apellido'>
                        </div>
                        <div >
                          <input name="email" id="email" type="email" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Correo Electronico'" placeholder='Correo Electronico'>
                        </div>
                        <div >
                          <input name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Objeto del mensaje'" placeholder='Objeto del mensaje'>
                        </div>
                        <div >
                          <textarea class="form-control w-100" name="message" id="message" cols="30" rows="7"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'"
                          placeholder='Mensaje'></textarea>
                          <input name="_token" id="_token" type="hidden" value="{{csrf_token()}}">
                        </div>
                        <div >
                            <div>
                             <!-- Widget de reCAPTCHA -->
                            <div class=" mb-4 g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                            @error('g-recaptcha-response')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>

                          <button type="submit" class="site-btn">Enviar Mensaje</button>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sección de Llamado a la Acción End -->

@endsection
