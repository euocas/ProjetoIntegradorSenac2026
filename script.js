 // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Login submit feedback
  document.querySelector('.btn-login').addEventListener('click', function() {
    const email = document.querySelector('input[type=email]').value;
    const pass  = document.querySelector('input[type=password]').value;
    if (!email || !pass) {
      this.style.background = '#a33';
      this.textContent = 'Preencha todos os campos';
      setTimeout(() => {
        this.style.background = '';
        this.textContent = 'Entrar no Portal';
      }, 1800);
    } else {
      this.style.background = '#2a7a4a';
      this.textContent = 'Autenticando...';
    }
  });