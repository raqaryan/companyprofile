<!-- Contact-->
<section class="page-section" id="contact">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Contact Us</h2>
      <h3 class="section-subheading text-muted">Silakan isi form di bawah.</h3>
    </div>

    @if(session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

   <form id="contactForm" action="{{ route('frontend.contact.store') }}" method="POST">
      @csrf
      <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
          <div class="form-group">
            <input name="name" class="form-control" type="text" placeholder="Your Name *" required>
            <div class="invalid-feedback">Nama wajib diisi.</div>
          </div>
          <div class="form-group">
            <input name="email" class="form-control" type="email" placeholder="Your Email *" required>
            <div class="invalid-feedback">Email tidak valid atau kosong.</div>
          </div>
          <div class="form-group mb-md-0">
            <input name="phone" class="form-control" type="tel" placeholder="Your Phone *" required>
            <div class="invalid-feedback">No HP wajib diisi.</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-group-textarea mb-md-0">
            <textarea name="message" class="form-control" placeholder="Your Message *" required></textarea>
            <div class="invalid-feedback">Pesan wajib diisi.</div>
          </div>
        </div>
      </div>

      <div class="text-center">
        <button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
      </div>
    </form>
  </div>
</section>

<!-- VALIDASI JS -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function (event) {
      const inputs = form.querySelectorAll('input, textarea');
      let valid = true;

      // Reset semua error
      inputs.forEach(input => input.classList.remove('is-invalid'));

      // Validasi Nama
      const nama = form.querySelector('[name="name"]');
      if (!nama.value.trim()) {
        nama.classList.add('is-invalid');
        valid = false;
      }

      // Validasi Email
      const email = form.querySelector('[name="email"]');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
        email.classList.add('is-invalid');
        valid = false;
      }

      // Validasi No HP
      const noHp = form.querySelector('[name="phone"]');
      if (!noHp.value.trim()) {
        noHp.classList.add('is-invalid');
        valid = false;
      }

      // Validasi Pesan
      const pesan = form.querySelector('[name="message"]');
      if (!pesan.value.trim()) {
        pesan.classList.add('is-invalid');
        valid = false;
      }

      if (!valid) {
        event.preventDefault(); 
      }
    });
  });
</script>
