<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="fa-sharp fa-solid fa-location-dot"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="fa-solid fa-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="fa-solid fa-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15126.728332494671!2d105.6484877455928!3d18.58836627029117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1683343945265!5m2!1sen!2s" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{route('store.contact')}}" method="post" role="form">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="contact_name" class="form-control" id="contact_name">
                    @error('contact_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="contact_email" id="contact_email">
                    @error('contact_email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Your Phone</label>
                    <input type="text" class="form-control" name="contact_phone" id="contact_phone">
                    @error('contact_phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="contact_message" rows="10"></textarea>
                    @error('contact_message')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
</section>
