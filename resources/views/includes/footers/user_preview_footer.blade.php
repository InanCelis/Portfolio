<footer id="contact" class="container-fluid first-bg  pt-5  pb-5 h-auto text-muted"  style="margin-top:-5px">
    <div class="container" data-aos="zoom-in-up">
        <h1 class="mb-5 main-text-color text-center font-weight-bolder">Contact Me</h1>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4 class="third-text-color mb-2">Contact Info</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.707939520336!2d121.44597041449683!3d14.443987684768583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397f1e22a2de2eb%3A0xc81ceec28a4955b2!2sBrgy.%20Bulihan%20Famy%2C%20Laguna!5e0!3m2!1sen!2sph!4v1596293942003!5m2!1sen!2sph"  class="w-100 h-50" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="third-text-color py-3">
                    <p class="text-lg text-muted"><i class="fas fa-map-marker-alt main-text-color mr-3"></i> Lilian st. Brgy. Bulihan Famy, Laguna</p>
                    <p class="text-lg"><i class="fa fa-envelope main-text-color mr-3"></i> <a class="text-muted" href="mailto:celisinan@gmail.com">celisinan@gmail.com</a></p>
                    <p class="text-lg text-muted"><i style="transform: rotate(100deg)" class="fas fa-phone  main-text-color mr-3"></i> +639268421554<br> </p>
                    <p class="text-lg"><i class="fas fa-globe-asia main-text-color mr-3"></i> <a class="text-muted" href="/">this.website.com</a></p>
                </div>
            </div>
            <div class="col-md-7 ">
            <form id="sendmessage"  class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Your Message</label>
                            <textarea class="form-control" id="message" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Valid message is required, say something to Inan.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn main-bg btn-lg btn-block font-weight-bold third-text-color" type="submit">Send Message</button>
            </form>
        </div>
        </div>
        
        <div class="mt-3 mb-3">
            <h3 class="text-center">Social Media</h3>
            <div class="row justify-content-center">
                <a href="https://www.facebook.com/INAN.454/" target="_blank">
                    <i class="fabs fab fa-facebook-f m-1 shadow"></i>
                </a>
                <a href="https://www.instagram.com/inan0_4/" target="_blank">
                    <i class="fabs fab fa-instagram  m-1 shadow"></i>
                </a>
            </div>
            
        </div>
        <div class=" col-md-8 offset-md-2 text-center">
            <p class="pr-3 third-text-color"> <a href="mailto:celisinan@gmail.com">celisinan@gmail.com</a> </p> 
            <b> &copy; {{date('Y')}} Inan Celis. All Rights Reserved.</b>
        </div>
        <div class="logo-name col-md-8 offset-md-2 text-center " >
                <a class="main-text-color " href="/">Inan</a>
        </div>
    </div>
</footer>