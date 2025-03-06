
document.querySelectorAll('header nav ul li a').forEach(anchor => {
  anchor.onclick = function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    target.scrollIntoView({
      behavior: 'smooth',
      block: 'start',
    });
  };
});


const hero = document.querySelector('.hero');
document.addEventListener('scroll', function () {
  const scrollY = document.documentElement.scrollTop || document.body.scrollTop;
  hero.style.opacity = scrollY > 50 ? 1 - scrollY / 500 : 1;

 
  const sections = document.querySelectorAll('.about-me-section, .projects-section, .references-section');
  const windowHeight = document.documentElement.clientHeight || document.body.clientHeight;
  sections.forEach(section => {
    if (scrollY + windowHeight > section.offsetTop + 100) {
      section.classList.add('visible');
    }
  });
});


const aboutSection = document.querySelector('#about');
new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      aboutSection.classList.add('visible');
    }
  });
}, { threshold: 1 }).observe(aboutSection);


document.querySelectorAll('.project-item').forEach(item => {
  item.onmouseenter = () => (item.style.animation = 'greenSoak 1.5s ease-in-out forwards');
  item.onmouseleave = () => (item.style.animation = '');
});


document.querySelectorAll('.projects-grid img').forEach(image => {
  image.onclick = function () {
    const caseStudyUrl = this.getAttribute('data-case-study');
    if (caseStudyUrl) {
      location.href = caseStudyUrl;
    }
  };
});

// GSAP animations
gsap.registerPlugin(ScrollTrigger);

// Scroll-based SVG rotation
gsap.to("#rotating-svg", {
  rotation: 360, 
  ease: "linear", 
  scrollTrigger: {
    trigger: "#rotating-svg", 
    start: "top bottom", 
    end: "bottom top", 
    scrub: 1, 
  },
});


gsap.to(".footer-logo img", {
  rotate: 360,
  duration: 5,
  repeat: -1,
  ease: "linear",
  scrollTrigger: {
    trigger: "footer",
    start: "top bottom",
    end: "bottom top",
    scrub: 1,
  },
});

gsap.timeline({
  scrollTrigger: {
    trigger: "#software",
    start: "top 80%",
    end: "bottom 20%",
    scrub: 1,
  },
})
  .from("#software h2", { opacity: 0, y: -50, duration: 1 })
  .from(".software-item", {
    opacity: 0,
    y: 50,
    stagger: 0.3,
    duration: 1,
    ease: "power2.out",
  });

gsap.from(".about-content", {
  scrollTrigger: {
    trigger: ".about-content",
    start: "top 80%",
    end: "top 30%",
    scrub: true,
  },
  opacity: 0,
  y: 50,
  duration: 1,
});

gsap.from(".projects-grid", {
  scrollTrigger: {
    trigger: ".projects-section",
    start: "top 80%",
    end: "top 30%",
    scrub: true,
  },
  opacity: 0,
  y: 50,
  duration: 1,
});

gsap.registerPlugin(ScrollTrigger);

gsap.to("#progress-bar", {
    width: "100%",
    ease: "none",
    scrollTrigger: {
        trigger: "body",
        start: "top top",
        end: "bottom bottom",
        scrub: 0.5
    }
});
const cursor = document.querySelector(".custom-cursor");

if (cursor) {
    document.addEventListener("mousemove", (e) => {
        requestAnimationFrame(() => {
            cursor.style.top = `${e.clientY}px`;
            cursor.style.left = `${e.clientX}px`;
        });
    });

    document.addEventListener("mousedown", () => {
        cursor.style.transform = "scale(1.5)"; 
    });

    document.addEventListener("mouseup", () => {
        cursor.style.transform = "scale(1)";
    });
}

const themeToggleBtn = document.getElementById("theme-toggle");
const body = document.body;

// Check if the button exists before adding event listeners
if (themeToggleBtn) {
    // Apply saved theme preference
    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark-mode");
        themeToggleBtn.textContent = "☀️ Light Mode";
    }

    // Toggle theme on button click
    themeToggleBtn.addEventListener("click", () => {
        body.classList.toggle("dark-mode");

        if (body.classList.contains("dark-mode")) {
            localStorage.setItem("theme", "dark");
            themeToggleBtn.textContent = "☀️ Light Mode";
        } else {
            localStorage.setItem("theme", "light");
            themeToggleBtn.textContent = "🌙 Dark Mode";
        }
    });
}
