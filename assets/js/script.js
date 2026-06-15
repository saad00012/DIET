/* --- HTML Component Loader --- */
async function loadComponent(placeholderId, url) {
  try {
    const response = await fetch(url);
    if (!response.ok) throw new Error(`Failed to load ${url}`);
    document.getElementById(placeholderId).innerHTML = await response.text();
  } catch (error) {
    console.error("Error loading component:", error);
  }
}

// Load header and footer dynamically
document.addEventListener("DOMContentLoaded", () => {
  if(document.getElementById('header-placeholder')) loadComponent('header-placeholder', '/includes/header.html');
  if(document.getElementById('footer-placeholder')) loadComponent('footer-placeholder', '/includes/footer.html');
});

/* --- 1. Mobile Navigation Toggle --- */
// Using event delegation since header is loaded dynamically
document.body.addEventListener('click', (e) => {
  const mobileNav = document.getElementById('mobile-nav');
  if (!mobileNav) return;

  if (e.target.closest('#hamburger')) {
    mobileNav.classList.add('open');
    document.body.style.overflow = 'hidden';
  } else if (e.target.closest('#mn-close')) {
    mobileNav.classList.remove('open');
    document.body.style.overflow = '';
  } else if (e.target.closest('#mobile-nav a')) {
    mobileNav.classList.remove('open');
    document.body.style.overflow = '';
  }
});

/* --- 2. Navbar & Scroll-to-Top Behavior --- */
// Add glassmorphism background to navbar when scrolled down
window.addEventListener('scroll', () => {
  const navbar = document.getElementById('navbar');
  const scrollTopBtn = document.getElementById('scrolltop');
  
  if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 60);
  if (scrollTopBtn) scrollTopBtn.classList.toggle('show', window.scrollY > 400);
});

/* --- 3. Scroll Reveal Animations --- */
// Uses IntersectionObserver to trigger CSS transitions when elements enter the viewport
const revealObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('up');
      revealObserver.unobserve(entry.target); // Only animate once per element
    }
  });
}, { threshold: 0.08 });

document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
  revealObserver.observe(el);
});

/* --- 4. Number Counter Animation --- */
// Animates numbers counting up from 0 to their target data attribute value
function animateCounter(element, target) {
  let currentVal = 0; 
  const step = target / 70; // Defines animation speed and smoothness
  
  const timer = setInterval(() => {
    currentVal += step;
    if (currentVal >= target) { 
      element.textContent = target.toLocaleString(); 
      clearInterval(timer); 
    } else { 
      element.textContent = Math.floor(currentVal).toLocaleString(); 
    }
  }, 16); // ~60fps rendering
}

const counterObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    // Check if the element is visible and hasn't been counted yet
    if (entry.isIntersecting && !entry.target.dataset.counted) {
      entry.target.dataset.counted = '1';
      animateCounter(entry.target, parseInt(entry.target.dataset.target));
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('[data-target]').forEach(el => {
  counterObserver.observe(el);
});

/* --- 5. Department Tab Switching --- */
// Handles toggling between different academic programs in the Bento Grid
function switchDept(btn, targetId) {
  // Reset all tabs and panels
  document.querySelectorAll('.dept-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.dept-panel').forEach(p => p.classList.remove('active'));
  
  // Set the clicked tab and corresponding panel to active
  btn.classList.add('active');
  document.getElementById('dept-' + targetId).classList.add('active');
}

/* --- 6. Active Section Highlighting (Side Navigation) --- */
// Updates the side navigation dots based on the user's current scroll position
const contentSections = document.querySelectorAll('section[id], footer[id]');
const sideNavDots = document.querySelectorAll('#side-nav a');

const sectionObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const sectionId = entry.target.id;
      sideNavDots.forEach(dot => {
        dot.classList.toggle('active', dot.dataset.s === sectionId);
      });
    }
  });
}, { threshold: 0.3, rootMargin: '-60px 0px -55% 0px' });

contentSections.forEach(section => sectionObserver.observe(section));

/* --- 7. Smooth Scrolling for Anchor Links --- */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', event => {
    const targetElement = document.querySelector(anchor.getAttribute('href'));
    if (targetElement) { 
      event.preventDefault(); 
      targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' }); 
    }
  });
});

/* --- 8. Dynamic Campus Grid Rows --- */
// Adjusts grid layout heights for the campus image gallery based on screen size
function fixCampusGrid() {
  const grid = document.querySelector('.campus-grid');
  if (!grid) return;
  if (window.innerWidth > 600) {
    grid.style.gridTemplateRows = '300px 280px';
  } else {
    grid.style.gridTemplateRows = 'auto';
  }
}
fixCampusGrid();
window.addEventListener('resize', fixCampusGrid);

/* --- 9. Toast Notifications for Form Submissions --- */
document.addEventListener("DOMContentLoaded", () => {
  const urlParams = new URLSearchParams(window.location.search);
  const status = urlParams.get('status');
  const toast = document.getElementById('toast-notification');
  
  if (status && toast) {
    if (status === 'error') {
      toast.classList.add('error');
      toast.querySelector('h4').textContent = 'Error!';
      toast.querySelector('p').textContent = 'There was a problem submitting your form. Please try again.';
      toast.querySelector('.toast-icon').innerHTML = '<i class="fas fa-exclamation-circle"></i>';
    }
    
    // Show toast after a slight delay for better UX
    setTimeout(() => { toast.classList.add('show'); }, 300);

    // Hide toast after 5 seconds
    setTimeout(() => { toast.classList.remove('show'); }, 5300);

    // Clean up the URL without reloading the page
    if (window.history.replaceState) {
      const cleanUrl = window.location.pathname;
      window.history.replaceState({}, document.title, cleanUrl);
    }
  }
});

/* --- 10. Department Program Modal Logic --- */
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll('.dept-card');
  const modal = document.getElementById('dept-modal');
  if (!modal) return;
  
  const closeBtn = modal.querySelector('.dept-modal-close');
  const overlay = modal.querySelector('.dept-modal-overlay');
  
  const mHero = modal.querySelector('.dept-modal-hero');
  const mIcon = modal.querySelector('.dept-modal-icon i');
  const mTitle = modal.querySelector('.dept-modal-title');
  const mDesc = modal.querySelector('.dept-modal-desc');
  const mSeats = modal.querySelector('#dm-seats');
  const mFees = modal.querySelector('#dm-fees');
  const mLink = modal.querySelector('#dm-link');

  cards.forEach(card => {
    card.addEventListener('click', (e) => {
      e.preventDefault(); // Prevent direct anchor jump to allow the modal to display
      
      mHero.style.backgroundImage = card.style.getPropertyValue('--bg-img') || 'none';
      mIcon.className = card.getAttribute('data-icon');
      mTitle.innerHTML = card.getAttribute('data-title');
      mDesc.innerHTML = card.getAttribute('data-desc');
      mSeats.innerHTML = card.getAttribute('data-seats') || 'N/A';
      mFees.innerHTML = card.getAttribute('data-fees') || 'N/A';
      mLink.href = card.getAttribute('data-link');

      modal.classList.add('show');
      document.body.style.overflow = 'hidden';
    });
  });

  const closeModal = () => { modal.classList.remove('show'); document.body.style.overflow = ''; };
  closeBtn.addEventListener('click', closeModal);
  overlay.addEventListener('click', closeModal);
});

/* --- 11. Global Search Functionality --- */
// Index of searchable site content
const searchIndex = [
  { title: "Home Page", url: "/index.html", desc: "Main landing page of DIET Satara.", keywords: "home main index front", icon: "fas fa-home" },
  { title: "About DIET", url: "/about-dnyanshree.html", desc: "Learn about our vision, mission, and core values.", keywords: "about vision mission history institute", icon: "fas fa-university" },
  { title: "About RWMCT", url: "/about-rwmct.html", desc: "Raosaheb Wangde Master Charitable Trust.", keywords: "trust rwmct background", icon: "fas fa-landmark" },
  { title: "Computer Science & Engineering", url: "/cse.html", desc: "B.Tech Degree in CSE. Red Hat, AWS, AI & ML.", keywords: "cse computer science software btech degree", icon: "fas fa-laptop-code" },
  { title: "Civil & Environmental Engineering", url: "/civil.html", desc: "B.Tech in Civil Engineering.", keywords: "civil construction building environment btech", icon: "fas fa-hard-hat" },
  { title: "Electrical & Computer Engineering", url: "/electrical.html", desc: "B.Tech in Electrical Engineering.", keywords: "electrical power systems btech", icon: "fas fa-bolt" },
  { title: "Electronics & Telecom Engineering", url: "/etc.html", desc: "B.Tech in E&TC Engineering.", keywords: "etc electronics telecom communication btech", icon: "fas fa-broadcast-tower" },
  { title: "Mechanical & Mechatronics", url: "/mech.html", desc: "B.Tech in Mechanical Engineering.", keywords: "mechanical machines robotics btech", icon: "fas fa-cogs" },
  { title: "Applied Sciences", url: "/gsh.html", desc: "First-year foundation sciences and engineering.", keywords: "applied science first year math physics", icon: "fas fa-atom" },
  { title: "Diploma — Computer Science", url: "/diploma-cse.html", desc: "Polytechnic in Computer Engineering.", keywords: "diploma polytechnic computer cse", icon: "fas fa-code" },
  { title: "Diploma — Electronics & Telecom", url: "/diploma-etc.html", desc: "Polytechnic in E&TC.", keywords: "diploma polytechnic electronics etc", icon: "fas fa-microchip" },
  { title: "Admission Process", url: "/admission_process.html", desc: "How to apply, eligibility, and enrollment details.", keywords: "admission apply join enroll fee", icon: "fas fa-user-plus" },
  { title: "Placements", url: "/placement.html", desc: "Placement records, statistics, and top recruiters.", keywords: "placement jobs career recruiters salary package", icon: "fas fa-briefcase" },
  { title: "Infrastructure", url: "/infra.html", desc: "Explore our modern campus, library, and labs.", keywords: "infrastructure campus tour labs hostel facilities", icon: "fas fa-building" },
  { title: "Grievance Form", url: "/grievance.html", desc: "Submit a formal grievance or complaint.", keywords: "grievance complaint help support form", icon: "fas fa-comment-dots" },
  { title: "Contact Us", url: "/contact.html", desc: "Get in touch with the administration.", keywords: "contact email phone location map address", icon: "fas fa-envelope" },
  { title: "Student Innovations", url: "/index.html#innovation", desc: "Explore student projects and DIIC.", keywords: "innovation projects startup diic", icon: "fas fa-lightbulb" },
  { title: "News & Announcements", url: "/index.html#news", desc: "Latest events and circulars.", keywords: "news events updates notice circular", icon: "fas fa-newspaper" },
  { title: "Chairman's Message", url: "/chairperson-desk.html", desc: "Message from Hon. Dnyaneshwar B. Wangde.", keywords: "chairman leader principal message", icon: "fas fa-user-tie" },
  { title: "Faculty Login", url: "https://dnyanshree.edupluscampus.com/", desc: "Eduplus campus portal for faculty.", keywords: "faculty login staff portal", icon: "fas fa-chalkboard-teacher" },
  { title: "Student Login", url: "http://mydnyanshree.edupluscampus.com/", desc: "Eduplus campus portal for students.", keywords: "student login erp portal", icon: "fas fa-user-graduate" }
];

document.addEventListener("DOMContentLoaded", () => {
  // Setup Modal Open/Close on body (safeguard for dynamically loaded components)
  document.body.addEventListener('click', (e) => {
    const searchBtn = e.target.closest('#nav-search-btn');
    const searchClose = e.target.closest('#search-close');
    const searchOverlay = e.target.closest('.search-modal-overlay');
    const searchModal = document.getElementById('search-modal');
    const searchInput = document.getElementById('search-input');
    
    if (searchBtn && searchModal) {
      searchModal.classList.add('show');
      setTimeout(() => searchInput && searchInput.focus(), 100);
      document.body.style.overflow = 'hidden';
    }
    
    if ((searchClose || searchOverlay) && searchModal) {
      searchModal.classList.remove('show');
      document.body.style.overflow = '';
    }
  });

  // Filter & Render logic
  document.body.addEventListener('input', (e) => {
    if (e.target.id === 'search-input') {
      const query = e.target.value.toLowerCase();
      const container = document.getElementById('search-results');
      
      if (!query.trim()) { container.innerHTML = '<div class="sr-empty">Start typing to search DIET Satara...</div>'; return; }
      
      const filtered = searchIndex.filter(item => item.title.toLowerCase().includes(query) || item.desc.toLowerCase().includes(query) || item.keywords.toLowerCase().includes(query));
      
      if (filtered.length === 0) { container.innerHTML = `<div class="sr-empty"><i class="fas fa-search" style="font-size:2rem;margin-bottom:1rem;color:rgba(255,255,255,0.2);display:block;"></i>No results found for "${e.target.value}"</div>`; return; }
      
      container.innerHTML = filtered.map(item => `<a href="${item.url}" class="sr-item" onclick="document.getElementById('search-modal').classList.remove('show'); document.body.style.overflow='';"><div class="sr-icon"><i class="${item.icon}"></i></div><div class="sr-text"><h4>${item.title}</h4><p>${item.desc}</p></div></a>`).join('');
    }
  });
});

/* --- 12. Page Transition Blur-Fade Effect --- */
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      const target = this.getAttribute('target');
      
      // Ignore anchors, empty links, javascript:, external tabs, tel:, and mailto:
      if (!href || href.startsWith('#') || href.startsWith('javascript:') || target === '_blank' || href.startsWith('tel:') || href.startsWith('mailto:')) return;
      
      // Only apply transition for same-origin links to avoid breaking external routing
      try {
        const url = new URL(href, window.location.origin);
        if (url.origin === window.location.origin) {
          e.preventDefault();
          document.body.classList.add('page-transitioning');
          
          // Navigate after the exit animation completes (matches 0.4s CSS duration)
          setTimeout(() => { window.location.href = href; }, 400); 
        }
      } catch (err) {
        // Ignore invalid URLs
      }
    });
  });
});

// Ensure page resets correctly if accessed via 'Back/Forward' cache (bfcache)
window.addEventListener('pageshow', (event) => {
  if (event.persisted) {
    document.body.classList.remove('page-transitioning');
  }
});

/* --- 13. Google reCAPTCHA v3 Integration --- */
document.addEventListener("DOMContentLoaded", () => {
  const forms = document.querySelectorAll('.enquiry-form-capture');
  forms.forEach(form => {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      // Wait for grecaptcha to be ready before firing
      if (typeof grecaptcha !== 'undefined') {
        grecaptcha.ready(function() {
          grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: 'submit'}).then(function(token) {
            const tokenInput = form.querySelector('.recaptcha_token');
            if (tokenInput) tokenInput.value = token;
            form.submit();
          });
        });
      } else {
        form.submit(); // Safe Fallback if reCAPTCHA fails to load
      }
    });
  });
});