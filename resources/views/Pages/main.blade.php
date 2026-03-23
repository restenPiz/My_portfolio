<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mauro Peniel — Full Stack Developer</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
<style>
:root{--bg:#0a0a0f;--surface:#111118;--surface2:#16161f;--accent:#7c6af7;--accent2:#f7a46a;--text:#f0eff8;--muted:#7a7a9a;--border:rgba(255,255,255,0.07)}
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:'DM Sans',sans-serif;font-size:16px;line-height:1.7;overflow-x:hidden}
body::before{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");pointer-events:none;z-index:9999;opacity:.4}
::-webkit-scrollbar{width:4px}::-webkit-scrollbar-track{background:var(--bg)}::-webkit-scrollbar-thumb{background:var(--accent);border-radius:2px}

/* NAV */
nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:1.2rem 4rem;background:rgba(10,10,15,.88);backdrop-filter:blur(20px);border-bottom:1px solid var(--border)}
.nav-logo{font-family:'Syne',sans-serif;font-weight:800;font-size:1.3rem;color:var(--text);text-decoration:none;letter-spacing:-.02em}
.nav-logo span{color:var(--accent)}
.nav-right{display:flex;align-items:center;gap:1.5rem}
.nav-links{display:flex;gap:2rem;list-style:none}
.nav-links a{color:var(--muted);text-decoration:none;font-size:.88rem;font-weight:500;transition:color .2s;position:relative}
.nav-links a::after{content:'';position:absolute;bottom:-3px;left:0;width:0;height:1px;background:var(--accent);transition:width .3s}
.nav-links a:hover{color:var(--text)}
.nav-links a:hover::after{width:100%}
.lang-switcher{display:flex;background:rgba(255,255,255,.05);border:1px solid var(--border);border-radius:100px;padding:3px;gap:2px}
.lang-btn{background:none;border:none;color:var(--muted);font-size:.75rem;font-weight:700;letter-spacing:.05em;padding:.28rem .7rem;border-radius:100px;cursor:pointer;transition:all .2s;font-family:'DM Sans',sans-serif}
.lang-btn.active{background:var(--accent);color:#fff}
.lang-btn:hover:not(.active){color:var(--text)}
.nav-cta{background:var(--accent);color:#fff;padding:.5rem 1.25rem;border-radius:100px;font-weight:600;font-size:.82rem;text-decoration:none;transition:all .2s;white-space:nowrap}
.nav-cta:hover{opacity:.85;transform:translateY(-1px)}

/* HERO */
#hero{min-height:100vh;display:flex;align-items:center;padding:6rem 4rem 4rem;position:relative;overflow:hidden}
.hero-glow{position:absolute;width:650px;height:650px;border-radius:50%;background:radial-gradient(circle,rgba(124,106,247,.18) 0%,transparent 70%);top:-120px;right:-80px;pointer-events:none}
.hero-glow2{position:absolute;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(247,164,106,.12) 0%,transparent 70%);bottom:0;left:-50px;pointer-events:none}
.hero-grid{display:grid;grid-template-columns:1fr 390px;gap:4rem;align-items:center;max-width:1200px;margin:0 auto;width:100%;position:relative;z-index:1}
.hero-badge{display:inline-flex;align-items:center;gap:.5rem;background:rgba(124,106,247,.12);border:1px solid rgba(124,106,247,.3);border-radius:100px;padding:.38rem .95rem;font-size:.75rem;color:var(--accent);font-weight:700;letter-spacing:.06em;text-transform:uppercase;margin-bottom:1.5rem;animation:fadeUp .8s ease both}
.hero-badge::before{content:'';width:6px;height:6px;border-radius:50%;background:#4ade80;animation:blink 2s infinite}
@keyframes blink{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.4;transform:scale(1.4)}}
.hero-title{font-family:'Syne',sans-serif;font-size:clamp(3rem,6vw,5.5rem);font-weight:800;line-height:1.05;letter-spacing:-.03em;animation:fadeUp .8s .1s ease both}
.hero-title .line{display:block}
.hero-title .ac{color:var(--accent)}
.hero-title .stroke{-webkit-text-stroke:1.5px rgba(255,255,255,.22);color:transparent}
.hero-sub{font-size:1.05rem;color:var(--muted);margin-top:1.5rem;max-width:520px;animation:fadeUp .8s .2s ease both}
.hero-actions{display:flex;gap:1rem;margin-top:2.5rem;flex-wrap:wrap;animation:fadeUp .8s .3s ease both}
.btn-primary{background:var(--accent);color:#fff;padding:.8rem 1.75rem;border-radius:8px;text-decoration:none;font-weight:600;font-size:.9rem;transition:all .2s;display:inline-flex;align-items:center;gap:.5rem}
.btn-primary:hover{transform:translateY(-2px);box-shadow:0 12px 30px rgba(124,106,247,.35)}
.btn-ghost{border:1px solid var(--border);color:var(--muted);padding:.8rem 1.75rem;border-radius:8px;text-decoration:none;font-weight:500;font-size:.9rem;transition:all .2s;display:inline-flex;align-items:center;gap:.5rem}
.btn-ghost:hover{border-color:var(--accent);color:var(--text)}
.hero-stats{display:flex;gap:2.5rem;margin-top:3rem;animation:fadeUp .8s .4s ease both}
.stat-num{font-family:'Syne',sans-serif;font-size:2.2rem;font-weight:800;line-height:1}
.stat-num span{color:var(--accent)}
.stat-label{font-size:.73rem;color:var(--muted);letter-spacing:.06em;text-transform:uppercase;margin-top:.2rem}
.hero-card{background:var(--surface);border:1px solid var(--border);border-radius:22px;padding:2.1rem;position:relative;overflow:hidden;animation:fadeLeft .8s .2s ease both}
.hero-card::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(124,106,247,.07),transparent 60%);pointer-events:none}
.card-top{display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem}
.card-avatar{width:72px;height:72px;border-radius:50%;background:linear-gradient(135deg,var(--accent),var(--accent2));display:flex;align-items:center;justify-content:center;font-family:'Syne',sans-serif;font-size:1.6rem;font-weight:800;color:#fff;flex-shrink:0}
.card-name{font-family:'Syne',sans-serif;font-size:1.2rem;font-weight:700;margin-bottom:.15rem}
.card-role{color:var(--accent);font-size:.75rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase}
.card-info{display:flex;flex-direction:column;gap:.55rem;margin-bottom:1.25rem}
.info-row{display:flex;align-items:center;gap:.65rem;font-size:.83rem;color:var(--muted)}
.info-icon{width:28px;height:28px;border-radius:6px;background:rgba(124,106,247,.1);display:flex;align-items:center;justify-content:center;font-size:.75rem;flex-shrink:0}
.card-tags{display:flex;flex-wrap:wrap;gap:.38rem}
.tag{background:rgba(124,106,247,.1);border:1px solid rgba(124,106,247,.2);color:var(--accent);padding:.22rem .65rem;border-radius:100px;font-size:.72rem;font-weight:600}
.tag.o{background:rgba(247,164,106,.1);border-color:rgba(247,164,106,.2);color:var(--accent2)}

/* SECTIONS */
section{padding:5.5rem 4rem}
.section-inner{max-width:1200px;margin:0 auto}
.section-label{display:inline-block;font-size:.7rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--accent);margin-bottom:.7rem}
.section-title{font-family:'Syne',sans-serif;font-size:clamp(1.9rem,4vw,2.7rem);font-weight:800;letter-spacing:-.02em;line-height:1.1;margin-bottom:.7rem}
.section-title em{font-style:normal;color:var(--accent)}
.section-desc{color:var(--muted);font-size:.97rem;max-width:560px}
.divider{width:52px;height:3px;background:linear-gradient(90deg,var(--accent),var(--accent2));border-radius:2px;margin:.8rem 0 1.6rem}

/* SKILLS */
#skills{background:var(--surface)}
.skills-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.15rem;margin-top:2.25rem}
.skill-group{background:var(--surface2);border:1px solid var(--border);border-radius:13px;padding:1.5rem;transition:all .3s}
.skill-group:hover{border-color:rgba(124,106,247,.3);transform:translateY(-3px);box-shadow:0 20px 40px rgba(0,0,0,.3)}
.skill-group-icon{font-size:1.3rem;margin-bottom:.6rem}
.skill-group-title{font-family:'Syne',sans-serif;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:.65rem}
.skill-pills{display:flex;flex-wrap:wrap;gap:.35rem}
.skill-pill{background:rgba(255,255,255,.05);border:1px solid var(--border);color:var(--text);padding:.25rem .6rem;border-radius:5px;font-size:.76rem;font-weight:500;transition:all .2s;cursor:default}
.skill-pill:hover{background:rgba(124,106,247,.15);border-color:rgba(124,106,247,.3);color:var(--accent)}

/* EXPERIENCE */
#experience{background:var(--bg)}
.timeline{position:relative;margin-top:2.25rem;padding-left:1.6rem}
.timeline::before{content:'';position:absolute;left:0;top:0;bottom:0;width:1px;background:linear-gradient(to bottom,var(--accent),transparent)}
.timeline-item{position:relative;padding-bottom:2.5rem;padding-left:2.1rem}
.timeline-dot{position:absolute;left:-6px;top:5px;width:12px;height:12px;border-radius:50%;background:var(--accent);border:2px solid var(--bg);box-shadow:0 0 0 4px rgba(124,106,247,.15)}
.timeline-header{display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;flex-wrap:wrap;margin-bottom:.45rem}
.timeline-role{font-family:'Syne',sans-serif;font-size:1.1rem;font-weight:700}
.timeline-period{background:rgba(124,106,247,.1);border:1px solid rgba(124,106,247,.2);color:var(--accent);padding:.18rem .75rem;border-radius:100px;font-size:.73rem;font-weight:700;white-space:nowrap}
.timeline-company{color:var(--accent2);font-size:.86rem;font-weight:600;margin-bottom:.7rem}
.timeline-list{list-style:none;display:flex;flex-direction:column;gap:.38rem}
.timeline-list li{display:flex;align-items:flex-start;gap:.6rem;color:var(--muted);font-size:.88rem}
.timeline-list li::before{content:'→';color:var(--accent);flex-shrink:0;margin-top:.06rem}

/* PROJECTS */
#projects{background:var(--surface)}
.projects-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.15rem;margin-top:2.25rem}
.project-card{background:var(--surface2);border:1px solid var(--border);border-radius:13px;padding:1.6rem;display:flex;flex-direction:column;gap:.85rem;transition:all .3s;position:relative;overflow:hidden}
.project-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--accent),var(--accent2));transform:scaleX(0);transform-origin:left;transition:transform .4s}
.project-card:hover{border-color:rgba(124,106,247,.25);transform:translateY(-4px);box-shadow:0 24px 48px rgba(0,0,0,.35)}
.project-card:hover::before{transform:scaleX(1)}
.project-icon{font-size:1.7rem;width:50px;height:50px;background:rgba(124,106,247,.1);border-radius:10px;display:flex;align-items:center;justify-content:center}
.project-name{font-family:'Syne',sans-serif;font-size:1rem;font-weight:700}
.project-desc{color:var(--muted);font-size:.83rem;flex:1;line-height:1.6}
.project-stack{display:flex;flex-wrap:wrap;gap:.32rem}
.stack-tag{background:rgba(255,255,255,.05);border:1px solid var(--border);color:var(--muted);padding:.2rem .55rem;border-radius:4px;font-size:.7rem;font-weight:500}
.project-links{display:flex;gap:.55rem;margin-top:.15rem}
.project-link{display:inline-flex;align-items:center;gap:.4rem;font-size:.78rem;font-weight:600;color:var(--accent);text-decoration:none;padding:.32rem .75rem;border:1px solid rgba(124,106,247,.25);border-radius:6px;transition:all .2s}
.project-link:hover{background:rgba(124,106,247,.12);border-color:var(--accent)}
.project-link.soon{color:var(--muted);border-color:var(--border);cursor:default;pointer-events:none}

/* TESTIMONIALS */
#testimonials{background:var(--bg)}
.testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.15rem;margin-top:2.25rem}
.testi-card{background:var(--surface);border:1px solid var(--border);border-radius:13px;padding:1.6rem;display:flex;flex-direction:column;gap:.85rem;transition:all .3s}
.testi-card:hover{border-color:rgba(124,106,247,.2);transform:translateY(-2px)}
.stars{color:#f59e0b;font-size:.82rem;letter-spacing:.1em}
.testi-quote{color:var(--muted);font-size:.88rem;line-height:1.7;flex:1;font-style:italic;position:relative;padding-left:1.1rem}
.testi-quote::before{content:'"';position:absolute;left:0;top:-.2rem;font-size:1.8rem;color:var(--accent);font-style:normal;line-height:1}
.testi-author{display:flex;align-items:center;gap:.8rem}
.testi-avatar{width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,var(--accent),var(--accent2));display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;color:#fff;flex-shrink:0}
.testi-name{font-family:'Syne',sans-serif;font-weight:700;font-size:.9rem}
.testi-role{color:var(--muted);font-size:.75rem}
.testi-note{margin-top:1.75rem;text-align:center;background:rgba(124,106,247,.06);border:1px dashed rgba(124,106,247,.22);border-radius:9px;padding:.85rem 1.25rem;color:var(--muted);font-size:.82rem}

/* EDUCATION */
#education{background:var(--surface)}
.edu-grid{display:grid;grid-template-columns:1fr 1fr;gap:2rem;margin-top:2.25rem;align-items:start}
.edu-card{background:var(--surface2);border:1px solid var(--border);border-radius:13px;padding:1.6rem;transition:all .3s}
.edu-card:hover{border-color:rgba(124,106,247,.25);transform:translateY(-2px)}
.edu-year{background:rgba(247,164,106,.1);border:1px solid rgba(247,164,106,.2);color:var(--accent2);padding:.2rem .75rem;border-radius:100px;font-size:.73rem;font-weight:700;display:inline-block;margin-bottom:.8rem}
.edu-degree{font-family:'Syne',sans-serif;font-size:1.02rem;font-weight:700;margin-bottom:.32rem}
.edu-school{color:var(--accent);font-size:.86rem;font-weight:600}
.edu-location{color:var(--muted);font-size:.8rem;margin-top:.22rem}
.certs-grid{display:flex;flex-direction:column;gap:.55rem}
.cert-item{background:var(--surface2);border:1px solid var(--border);padding:.6rem .95rem;border-radius:8px;font-size:.83rem;color:var(--muted);display:flex;align-items:center;gap:.55rem;transition:all .2s}
.cert-item:hover{border-color:rgba(124,106,247,.3);color:var(--text)}
.lang-flags{display:flex;flex-wrap:wrap;gap:.65rem;margin-top:1rem}
.lang-flag-item{background:var(--surface2);border:1px solid var(--border);padding:.55rem .95rem;border-radius:8px;font-size:.83rem;color:var(--muted);display:flex;align-items:center;gap:.45rem}

/* CONTACT */
#contact{background:var(--bg)}
.contact-wrapper{display:grid;grid-template-columns:1fr 1fr;gap:4rem;margin-top:2.25rem;align-items:center}
.contact-item{display:flex;align-items:center;gap:1rem;padding:1.05rem;background:var(--surface);border:1px solid var(--border);border-radius:10px;margin-bottom:.75rem;text-decoration:none;color:var(--text);transition:all .2s}
.contact-item:hover{border-color:rgba(124,106,247,.3);transform:translateX(4px)}
.contact-item-icon{width:40px;height:40px;background:rgba(124,106,247,.12);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0}
.contact-item-label{font-size:.68rem;color:var(--muted);text-transform:uppercase;letter-spacing:.08em;font-weight:700}
.contact-item-value{font-size:.88rem;font-weight:500;margin-top:.08rem}
.contact-cta{text-align:center}
.cta-emoji{font-size:3.2rem;margin-bottom:.5rem}
.cta-title{font-family:'Syne',sans-serif;font-size:1.8rem;font-weight:800;letter-spacing:-.02em;margin-bottom:.65rem;margin-top:.75rem}
.cta-title em{font-style:normal;color:var(--accent)}
.cta-desc{color:var(--muted);margin-bottom:1.5rem;font-size:.93rem}
.cv-btn{display:inline-flex;align-items:center;gap:.55rem;background:rgba(247,164,106,.1);border:1px solid rgba(247,164,106,.3);color:var(--accent2);padding:.65rem 1.4rem;border-radius:8px;text-decoration:none;font-weight:600;font-size:.85rem;transition:all .2s;margin-top:.7rem}
.cv-btn:hover{background:rgba(247,164,106,.18);transform:translateY(-1px)}

/* FOOTER */
footer{background:var(--surface);border-top:1px solid var(--border);padding:1.8rem 4rem;display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:.83rem;flex-wrap:wrap;gap:1rem}
footer span{color:var(--accent)}
.footer-links{display:flex;gap:1.4rem}
.footer-links a{color:var(--muted);text-decoration:none;transition:color .2s}
.footer-links a:hover{color:var(--accent)}

/* ANIMATIONS */
@keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeLeft{from{opacity:0;transform:translateX(24px)}to{opacity:1;transform:translateX(0)}}
.reveal{opacity:0;transform:translateY(20px);transition:opacity .6s ease,transform .6s ease}
.reveal.visible{opacity:1;transform:translateY(0)}

/* RESPONSIVE */
@media(max-width:1100px){
  nav{padding:1.1rem 2rem}section{padding:5rem 2rem}
  .hero-grid{grid-template-columns:1fr}.hero-card{display:none}
  #hero{padding:7rem 2rem 4rem}
  .skills-grid{grid-template-columns:repeat(2,1fr)}
  .projects-grid{grid-template-columns:1fr 1fr}
  .testi-grid{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .nav-links{display:none}
  .skills-grid,.projects-grid,.testi-grid,.edu-grid,.contact-wrapper{grid-template-columns:1fr}
  .hero-stats{gap:1.5rem}footer{flex-direction:column;text-align:center}
}
/* PARTICLES CANVAS */
#particles{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  z-index:0;
}

/* HERO GRID FIX */
.hero-grid{
  position:relative;
  z-index:2;
}

/* FOTO */
.hero-image{
  /* display:flex; */
  justify-content:center;
  align-items:center;
}

.image-wrapper{
  position:relative;
  border-radius:20px;
  padding:10px;
  background:linear-gradient(135deg, var(--accent), var(--accent2));
  animation:float 6s ease-in-out infinite;
}

/* GLOW */
.image-wrapper::before{
  content:'';
  position:absolute;
  inset:-10px;
  border-radius:25px;
  background:radial-gradient(circle, rgba(124,106,247,.5), transparent 70%);
  filter:blur(25px);
  z-index:-1;
  animation:pulseGlow 4s ease-in-out infinite;
}

.hero-image img{
  width:100%;
  max-width:500%;
  border-radius:15px;
  display:block;
}

/* FLOATING ANIMATION */
@keyframes float{
  0%{transform:translateY(0px)}
  50%{transform:translateY(-15px)}
  100%{transform:translateY(0px)}
}

/* GLOW ANIMATION */
@keyframes pulseGlow{
  0%,100%{opacity:.6}
  50%{opacity:1}
}

/* RESPONSIVO */
@media(max-width:1100px){
  .hero-grid{
    grid-template-columns:1fr;
  }

  .hero-image{
    order:-1;
    margin-bottom:2rem;
  }
}
</style>
<script>
    const canvas = document.getElementById("particles");
    const ctx = canvas.getContext("2d");

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    let particles = [];

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2;
            this.speedX = Math.random() * 0.5 - 0.25;
            this.speedY = Math.random() * 0.5 - 0.25;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x > canvas.width) this.x = 0;
            if (this.x < 0) this.x = canvas.width;
            if (this.y > canvas.height) this.y = 0;
            if (this.y < 0) this.y = canvas.height;
        }

        draw() {
            ctx.fillStyle = "rgba(124,106,247,0.7)";
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function init() {
        particles = [];
        for (let i = 0; i < 120; i++) {
            particles.push(new Particle());
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        particles.forEach(p => {
            p.update();
            p.draw();
        });

        requestAnimationFrame(animate);
    }

    init();
    animate();

    window.addEventListener("resize", () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        init();
    });
</script>
</head>
<body>

<nav>
  <a href="#hero" class="nav-logo">M<span>.</span>Peniel</a>
  <ul class="nav-links">
    <li><a href="#skills"      data-i18n="nav.skills">Skills</a></li>
    <li><a href="#experience"  data-i18n="nav.exp">Experiência</a></li>
    <li><a href="#projects"    data-i18n="nav.projects">Projetos</a></li>
    <li><a href="#testimonials"data-i18n="nav.testi">Testemunhos</a></li>
    <li><a href="#education"   data-i18n="nav.edu">Formação</a></li>
  </ul>
  <div class="nav-right">
    <div class="lang-switcher">
      <button class="lang-btn active" onclick="setLang('pt')">PT</button>
      <button class="lang-btn"        onclick="setLang('en')">EN</button>
    </div>
    <a href="#contact" class="nav-cta" data-i18n="nav.cta">Contactar</a>
  </div>
</nav>

<!-- HERO -->
<section id="hero">
    <canvas id="particles"></canvas>

    <div class="hero-glow"></div>
    <div class="hero-glow2"></div>

    <div class="hero-grid">

        <!-- TEXTO -->
        <div>
            <div class="hero-badge">Disponível para projetos</div>

            <h1 class="hero-title">
                <span class="line ac">Mauro</span>
                <span class="line">Peniel</span>
                <span class="line stroke">Developer</span>
            </h1>

            <p class="hero-sub">
                Full Stack Developer com 4+ anos de experiência a construir soluções web e mobile modernas, rápidas e
                escaláveis.
            </p>

            <div class="hero-actions">
                <a href="#projects" class="btn-primary">Ver Projetos →</a>
                <a href="Mauro_Peniel_CV.pdf" download class="btn-ghost">⬇ Download CV</a>
            </div>

            <div class="hero-stats">
                <div>
                    <div class="stat-num">10<span>+</span></div>
                    <div class="stat-label">Apps</div>
                </div>
                <div>
                    <div class="stat-num">4<span>+</span></div>
                    <div class="stat-label">Anos</div>
                </div>
                <div>
                    <div class="stat-num">6<span>+</span></div>
                    <div class="stat-label">Tech</div>
                </div>
            </div>
        </div>

        <!-- FOTO ANIMADA -->
        <div class="hero-image">
            <div class="image-wrapper">
                <img src="assets/images/mauro_peniel-back.png" alt="Mauro Peniel">
            </div>
        </div>

    </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="section-inner">
    <span class="section-label" data-i18n="skills.label">Competências</span>
    <h2 class="section-title" data-i18n="skills.title">Stack <em>Técnico</em></h2>
    <div class="divider"></div>
    <p class="section-desc" data-i18n="skills.desc">Tecnologias que uso para construir soluções robustas, escaláveis e centradas no utilizador.</p>
    <div class="skills-grid">
      <div class="skill-group reveal"><div class="skill-group-icon">🎨</div><div class="skill-group-title">Frontend</div><div class="skill-pills"><span class="skill-pill">JavaScript</span><span class="skill-pill">TypeScript</span><span class="skill-pill">React.js</span><span class="skill-pill">Next.js</span><span class="skill-pill">HTML5/CSS3</span><span class="skill-pill">Tailwind CSS</span><span class="skill-pill">Bootstrap</span></div></div>
      <div class="skill-group reveal"><div class="skill-group-icon">⚙️</div><div class="skill-group-title">Backend</div><div class="skill-pills"><span class="skill-pill">Node.js</span><span class="skill-pill">PHP</span><span class="skill-pill">Laravel</span><span class="skill-pill">C# / ASP.NET</span><span class="skill-pill">Python</span><span class="skill-pill">RESTful APIs</span></div></div>
      <div class="skill-group reveal"><div class="skill-group-icon">📱</div><div class="skill-group-title" data-i18n="skills.mobile">Mobile & Base de Dados</div><div class="skill-pills"><span class="skill-pill">Flutter</span><span class="skill-pill">React Native</span><span class="skill-pill">Firebase</span><span class="skill-pill">MySQL</span><span class="skill-pill">PostgreSQL</span><span class="skill-pill">SQL Server</span><span class="skill-pill">MongoDB</span></div></div>
      <div class="skill-group reveal"><div class="skill-group-icon">🛠️</div><div class="skill-group-title" data-i18n="skills.tools">Ferramentas</div><div class="skill-pills"><span class="skill-pill">Git / GitHub</span><span class="skill-pill">Docker</span><span class="skill-pill">AWS</span><span class="skill-pill">Jira</span><span class="skill-pill">Figma</span><span class="skill-pill">Power BI</span><span class="skill-pill">DHIS2</span></div></div>
    </div>
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experience">
  <div class="section-inner">
    <span class="section-label" data-i18n="exp.label">Percurso</span>
    <h2 class="section-title" data-i18n="exp.title">Experiência <em>Profissional</em></h2>
    <div class="divider"></div>
    <div class="timeline">
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-header"><div class="timeline-role" data-i18n="exp.r1">Desenvolvedor Full Stack</div><div class="timeline-period">2024 — 2025</div></div>
        <div class="timeline-company">Kubatsirana Ajuda-Mútua · Chimoio, Moçambique</div>
        <ul class="timeline-list">
          <li data-i18n="exp.r1b1">Desenvolvimento e monitoramento do sistema DHIS2, garantindo integridade e segurança dos dados</li>
          <li data-i18n="exp.r1b2">Desenvolvimento de APIs e integração de sistemas para otimização de processos</li>
          <li data-i18n="exp.r1b3">Suporte técnico avançado e resolução de problemas de software</li>
          <li data-i18n="exp.r1b4">Gestão de backups, segurança da informação e infraestrutura tecnológica</li>
        </ul>
      </div>
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-header"><div class="timeline-role" data-i18n="exp.r2">Engenheiro de Dados</div><div class="timeline-period">2023 — 2024</div></div>
        <div class="timeline-company">Kubatsirana Ajuda-Mútua · Chimoio, Moçambique</div>
        <ul class="timeline-list">
          <li data-i18n="exp.r2b1">Desenvolvimento de soluções para gestão de dados de beneficiários HIV/SIDA</li>
          <li data-i18n="exp.r2b2">Análise e processamento de dados com Python e Power BI</li>
          <li data-i18n="exp.r2b3">Monitoramento e avaliação de indicadores de desempenho</li>
          <li data-i18n="exp.r2b4">Automação de processos e fluxos organizacionais</li>
        </ul>
      </div>
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-header"><div class="timeline-role" data-i18n="exp.r3">Desenvolvedor Full Stack</div><div class="timeline-period">2021 — 2023</div></div>
        <div class="timeline-company">EliteTec Lda · Beira, Moçambique</div>
        <ul class="timeline-list">
          <li data-i18n="exp.r3b1">Desenvolvimento de sistemas de gestão, integração e formação para utilizadores finais</li>
          <li data-i18n="exp.r3b2">Desenvolvimento de aplicações móveis com Flutter e integração Firebase</li>
          <li data-i18n="exp.r3b3">Design e implementação de APIs RESTful e integração de serviços de terceiros</li>
          <li data-i18n="exp.r3b4">Gestão de bases de dados (SQL Server, MySQL, PostgreSQL)</li>
        </ul>
      </div>
      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-header"><div class="timeline-role" data-i18n="exp.r4">Técnico de Informática</div><div class="timeline-period">2019 — 2021</div></div>
        <div class="timeline-company">Emilio Prestação de Multisserviços · Chimoio, Moçambique</div>
        <ul class="timeline-list">
          <li data-i18n="exp.r4b1">Manutenção e configuração de sistemas e redes</li>
          <li data-i18n="exp.r4b2">Suporte técnico e resolução de problemas de hardware/software</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="section-inner">
    <span class="section-label" data-i18n="proj.label">Portfólio</span>
    <h2 class="section-title" data-i18n="proj.title">Projetos em <em>Destaque</em></h2>
    <div class="divider"></div>
    <div class="projects-grid">
      <div class="project-card reveal">
        <div class="project-icon">💊</div><div class="project-name">SaudeClick</div>
        <div class="project-desc" data-i18n="proj.p1">Plataforma móvel para compra de medicamentos em Moçambique com atualizações em tempo real e integração de pagamentos.</div>
        <div class="project-stack"><span class="stack-tag">Flutter</span><span class="stack-tag">Firebase</span><span class="stack-tag">Laravel</span><span class="stack-tag">React.js</span></div>
        <div class="project-links"><a href="https://github.com/restenPiz/SaudeClick" target="_blank" class="project-link">🐙 GitHub</a></div>
      </div>
      <div class="project-card reveal">
        <div class="project-icon">🌾</div><div class="project-name">AgriConnect</div>
        <div class="project-desc" data-i18n="proj.p2">App móvel para melhorar a procura e venda de produtos agrícolas e criação de cooperativas em Moçambique.</div>
        <div class="project-stack"><span class="stack-tag">Flutter</span><span class="stack-tag">Firebase</span><span class="stack-tag">Laravel</span><span class="stack-tag">React.js</span></div>
        <div class="project-links"><a href="https://github.com/restenPiz/AgriConnect-API" target="_blank" class="project-link">🐙 GitHub</a></div>
      </div>
      <div class="project-card reveal">
        <div class="project-icon">🎓</div><div class="project-name">EducaAqui</div>
        <div class="project-desc" data-i18n="proj.p3">Sistema completo de gestão escolar com integração de pagamentos móveis (M-Pesa, eMola) e APIs para gestão académica e financeira.</div>
        <div class="project-stack"><span class="stack-tag">Laravel</span><span class="stack-tag">React.js</span><span class="stack-tag">MySQL</span><span class="stack-tag">M-Pesa API</span></div>
        <div class="project-links"><a href="https://github.com/restenPiz/school-laravel" target="_blank" class="project-link">🐙 GitHub</a></div>
      </div>
      <div class="project-card reveal">
        <div class="project-icon">🚚</div><div class="project-name">TRUCK App</div>
        <div class="project-desc" data-i18n="proj.p4">Aplicação para gestão de frotas de camiões com interface moderna que elimina processos manuais e melhora a eficiência operacional.</div>
        <div class="project-stack"><span class="stack-tag">Flutter</span><span class="stack-tag">Firebase</span><span class="stack-tag">REST APIs</span></div>
        <div class="project-links"><a href="https://github.com/restenPiz/Event_app/tree/main/event_app" target="_blank" class="project-link">🐙 GitHub</a></div>
      </div>
      <div class="project-card reveal">
        <div class="project-icon">🤖</div><div class="project-name" data-i18n="proj.p5n">Reconhecimento Facial</div>
        <div class="project-desc" data-i18n="proj.p5">Sistema de inteligência artificial para reconhecimento facial com análise de dados e visualizações em Power BI.</div>
        <div class="project-stack"><span class="stack-tag">Python</span><span class="stack-tag">OpenCV</span><span class="stack-tag">Power BI</span></div>
        <div class="project-links"><a href="https://github.com/restenPiz/Face_recognition-Python" target="_blank" class="project-link">🐙 GitHub</a></div>
      </div>
      <div class="project-card reveal">
        <div class="project-icon">📄</div><div class="project-name">EliteDoc</div>
        <div class="project-desc" data-i18n="proj.p6">Sistema de gestão documental com capacidades avançadas de pesquisa, arquitetura modular e controlo de versões.</div>
        <div class="project-stack"><span class="stack-tag">Laravel</span><span class="stack-tag">React.js</span><span class="stack-tag">Tailwind CSS</span></div>
        <div class="project-links"><a class="project-link soon" data-i18n="proj.soon">🔒 Em breve</a></div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="section-inner">
    <span class="section-label" data-i18n="testi.label">Testemunhos</span>
    <h2 class="section-title" data-i18n="testi.title">O que dizem os <em>Clientes</em></h2>
    <div class="divider"></div>
    <div class="testi-grid">
      <div class="testi-card reveal">
        <div class="stars">★★★★★</div>
        <div class="testi-quote" data-i18n="testi.q1">O Mauro entregou um sistema de gestão de qualidade excepcional, dentro do prazo e com atenção aos detalhes que superou as nossas expectativas. Altamente recomendado!</div>
        <div class="testi-author"><div class="testi-avatar">JM</div><div><div class="testi-name">João Machava</div><div class="testi-role" data-i18n="testi.r1">Diretor, EliteTec Lda</div></div></div>
      </div>
      <div class="testi-card reveal">
        <div class="stars">★★★★★</div>
        <div class="testi-quote" data-i18n="testi.q2">Trabalhar com o Mauro foi uma experiência excelente. A aplicação SaudeClick transformou completamente a forma como os nossos clientes acedem a medicamentos.</div>
        <div class="testi-author"><div class="testi-avatar">SC</div><div><div class="testi-name">Sara Cossa</div><div class="testi-role" data-i18n="testi.r2">CEO, SaudeClick</div></div></div>
      </div>
      <div class="testi-card reveal">
        <div class="stars">★★★★★</div>
        <div class="testi-quote" data-i18n="testi.q3">A solução de dados implementada pelo Mauro melhorou significativamente a nossa capacidade de monitorar indicadores de saúde. Profissional e dedicado.</div>
        <div class="testi-author"><div class="testi-avatar">PA</div><div><div class="testi-name">Pedro Abreu</div><div class="testi-role" data-i18n="testi.r3">Coordenador, Kubatsirana</div></div></div>
      </div>
    </div>
    <div class="testi-note" data-i18n="testi.note">💡 Estes são testemunhos placeholder — substitui pelos reais quando tiveres, basta enviar-me os textos!</div>
  </div>
</section>

<!-- EDUCATION -->
<section id="education">
  <div class="section-inner">
    <span class="section-label" data-i18n="edu.label">Formação</span>
    <h2 class="section-title" data-i18n="edu.title">Educação & <em>Certificações</em></h2>
    <div class="divider"></div>
    <div class="edu-grid">
      <div>
        <div class="edu-card reveal">
          <span class="edu-year">2024</span>
          <div class="edu-degree" data-i18n="edu.deg">Licenciatura em Tecnologia de Informação</div>
          <div class="edu-school">Universidade Católica de Moçambique</div>
          <div class="edu-location">📍 Beira, Moçambique</div>
        </div>
        <div style="margin-top:1.4rem">
          <p style="color:var(--muted);font-size:.72rem;text-transform:uppercase;letter-spacing:.1em;font-weight:700;margin-bottom:.65rem" data-i18n="edu.lang">Idiomas</p>
          <div class="lang-flags">
            <div class="lang-flag-item">🇲🇿 <span data-i18n="edu.pt">Português — Nativo</span></div>
            <div class="lang-flag-item">🇬🇧 <span data-i18n="edu.en">Inglês — Intermediário</span></div>
          </div>
        </div>
      </div>
      <div>
        <p style="color:var(--muted);font-size:.72rem;text-transform:uppercase;letter-spacing:.1em;font-weight:700;margin-bottom:.65rem" data-i18n="edu.certs">Certificações</p>
        <div class="certs-grid">
          <div class="cert-item">🏆 Python Essentials — OpenEDG</div>
          <div class="cert-item">🏆 JavaScript Essentials — Cisco</div>
          <div class="cert-item">🏆 Data Science — Cisco</div>
          <div class="cert-item">🏆 Data Analytics — Cisco</div>
          <div class="cert-item">🏆 Cybersecurity — Cisco</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-inner">
    <div class="contact-wrapper">
      <div>
        <span class="section-label" data-i18n="contact.label">Contacto</span>
        <h2 class="section-title" data-i18n="contact.title">Vamos <em>Trabalhar</em> Juntos</h2>
        <div class="divider"></div>
        <p class="section-desc" style="margin-bottom:1.5rem" data-i18n="contact.desc">Tem um projeto em mente? Estou disponível para freelance e oportunidades full-time.</p>
        <a href="mailto:mauropeniel7@gmail.com" class="contact-item"><div class="contact-item-icon">✉️</div><div><div class="contact-item-label">Email</div><div class="contact-item-value">mauropeniel7@gmail.com</div></div></a>
        <a href="tel:+258867336817" class="contact-item"><div class="contact-item-icon">📱</div><div><div class="contact-item-label" data-i18n="contact.phone">Telefone</div><div class="contact-item-value">+258 867 336 817</div></div></a>
        <a href="https://github.com/restenPiz" target="_blank" class="contact-item"><div class="contact-item-icon">🐙</div><div><div class="contact-item-label">GitHub</div><div class="contact-item-value">github.com/restenPiz</div></div></a>
        <a href="https://linkedin.com/in/mauro-peniel" target="_blank" class="contact-item"><div class="contact-item-icon">💼</div><div><div class="contact-item-label">LinkedIn</div><div class="contact-item-value">linkedin.com/in/mauro-peniel</div></div></a>
      </div>
      <div class="contact-cta">
        <div class="cta-emoji">🚀</div>
        <div class="cta-title" data-i18n="contact.ctatitle">Tem um projeto<br><em>em mente?</em></div>
        <p class="cta-desc" data-i18n="contact.ctadesc">Estou sempre aberto a discutir novas ideias, projetos e oportunidades de colaboração.</p>
        <a href="mailto:mauropeniel7@gmail.com" class="btn-primary" data-i18n="contact.email">Enviar Email →</a>
        <br>
        <a href="Mauro_Peniel_CV.pdf" download class="cv-btn">⬇ <span data-i18n="contact.cv">Download CV em PDF</span></a>
      </div>
    </div>
  </div>
</section>

<footer>
  <p data-i18n="footer.c">Desenhado & Desenvolvido por <span>Mauro Peniel</span> · Beira, Moçambique · 2025</p>
  <div class="footer-links">
    <a href="https://github.com/restenPiz" target="_blank">GitHub</a>
    <a href="https://linkedin.com/in/mauro-peniel" target="_blank">LinkedIn</a>
    <a href="mailto:mauropeniel7@gmail.com">Email</a>
  </div>
</footer>

<script>
const T={
  pt:{
    'nav.skills':'Skills','nav.exp':'Experiência','nav.projects':'Projetos','nav.testi':'Testemunhos','nav.edu':'Formação','nav.cta':'Contactar',
    'hero.badge':'Disponível para projetos','hero.sub':'Full Stack Developer com 4+ anos de experiência a construir soluções web e mobile de ponta a ponta — do conceito ao deploy.','hero.btn1':'Ver Projetos →','hero.cvbtn':'Download CV','hero.s1':'Apps em Produção','hero.s2':'Anos de Exp.','hero.s3':'Tecnologias Core',
    'skills.label':'Competências','skills.title':'Stack <em>Técnico</em>','skills.desc':'Tecnologias que uso para construir soluções robustas, escaláveis e centradas no utilizador.','skills.mobile':'Mobile & Base de Dados','skills.tools':'Ferramentas',
    'exp.label':'Percurso','exp.title':'Experiência <em>Profissional</em>','exp.r1':'Desenvolvedor Full Stack','exp.r1b1':'Desenvolvimento e monitoramento do sistema DHIS2, garantindo integridade e segurança dos dados','exp.r1b2':'Desenvolvimento de APIs e integração de sistemas para otimização de processos','exp.r1b3':'Suporte técnico avançado e resolução de problemas de software','exp.r1b4':'Gestão de backups, segurança da informação e infraestrutura tecnológica','exp.r2':'Engenheiro de Dados','exp.r2b1':'Desenvolvimento de soluções para gestão de dados de beneficiários HIV/SIDA','exp.r2b2':'Análise e processamento de dados com Python e Power BI','exp.r2b3':'Monitoramento e avaliação de indicadores de desempenho','exp.r2b4':'Automação de processos e fluxos organizacionais','exp.r3':'Desenvolvedor Full Stack','exp.r3b1':'Desenvolvimento de sistemas de gestão, integração e formação para utilizadores finais','exp.r3b2':'Desenvolvimento de aplicações móveis com Flutter e integração Firebase','exp.r3b3':'Design e implementação de APIs RESTful e integração de serviços de terceiros','exp.r3b4':'Gestão de bases de dados (SQL Server, MySQL, PostgreSQL)','exp.r4':'Técnico de Informática','exp.r4b1':'Manutenção e configuração de sistemas e redes','exp.r4b2':'Suporte técnico e resolução de problemas de hardware/software',
    'proj.label':'Portfólio','proj.title':'Projetos em <em>Destaque</em>','proj.p1':'Plataforma móvel para compra de medicamentos em Moçambique com atualizações em tempo real e integração de pagamentos.','proj.p2':'App móvel para melhorar a procura e venda de produtos agrícolas e criação de cooperativas em Moçambique.','proj.p3':'Sistema completo de gestão escolar com integração de pagamentos móveis (M-Pesa, eMola) e APIs para gestão académica e financeira.','proj.p4':'Aplicação para gestão de frotas de camiões com interface moderna que elimina processos manuais e melhora a eficiência operacional.','proj.p5n':'Reconhecimento Facial','proj.p5':'Sistema de inteligência artificial para reconhecimento facial com análise de dados e visualizações em Power BI.','proj.p6':'Sistema de gestão documental com capacidades avançadas de pesquisa, arquitetura modular e controlo de versões.','proj.soon':'🔒 Em breve',
    'testi.label':'Testemunhos','testi.title':'O que dizem os <em>Clientes</em>','testi.q1':'O Mauro entregou um sistema de gestão de qualidade excepcional, dentro do prazo e com atenção aos detalhes que superou as nossas expectativas. Altamente recomendado!','testi.r1':'Diretor, EliteTec Lda','testi.q2':'Trabalhar com o Mauro foi uma experiência excelente. A aplicação SaudeClick transformou completamente a forma como os nossos clientes acedem a medicamentos.','testi.r2':'CEO, SaudeClick','testi.q3':'A solução de dados implementada pelo Mauro melhorou significativamente a nossa capacidade de monitorar indicadores de saúde. Profissional e dedicado.','testi.r3':'Coordenador, Kubatsirana','testi.note':'💡 Estes são testemunhos placeholder — substitui pelos reais quando tiveres, basta enviar-me os textos!',
    'edu.label':'Formação','edu.title':'Educação & <em>Certificações</em>','edu.deg':'Licenciatura em Tecnologia de Informação','edu.lang':'Idiomas','edu.pt':'Português — Nativo','edu.en':'Inglês — Intermediário','edu.certs':'Certificações',
    'contact.label':'Contacto','contact.title':'Vamos <em>Trabalhar</em> Juntos','contact.desc':'Tem um projeto em mente? Estou disponível para freelance e oportunidades full-time.','contact.phone':'Telefone','contact.ctatitle':'Tem um projeto<br><em>em mente?</em>','contact.ctadesc':'Estou sempre aberto a discutir novas ideias, projetos e oportunidades de colaboração.','contact.email':'Enviar Email →','contact.cv':'Download CV em PDF',
    'footer.c':'Desenhado & Desenvolvido por <span>Mauro Peniel</span> · Beira, Moçambique · 2025'
  },
  en:{
    'nav.skills':'Skills','nav.exp':'Experience','nav.projects':'Projects','nav.testi':'Testimonials','nav.edu':'Education','nav.cta':'Contact Me',
    'hero.badge':'Available for projects','hero.sub':'Full Stack Developer with 4+ years of experience building end-to-end web and mobile solutions — from concept to deployment.','hero.btn1':'View Projects →','hero.cvbtn':'Download CV','hero.s1':'Apps in Production','hero.s2':'Years of Exp.','hero.s3':'Core Technologies',
    'skills.label':'Skills','skills.title':'Technical <em>Stack</em>','skills.desc':'Technologies I use to build robust, scalable, and user-centric solutions.','skills.mobile':'Mobile & Databases','skills.tools':'Tools',
    'exp.label':'Journey','exp.title':'Professional <em>Experience</em>','exp.r1':'Full Stack Developer','exp.r1b1':'Development and monitoring of the DHIS2 system, ensuring data integrity and security','exp.r1b2':'API development and system integration for process optimization','exp.r1b3':'Advanced technical support and software troubleshooting','exp.r1b4':'Backup management, information security and technology infrastructure','exp.r2':'Data Engineer','exp.r2b1':'Development of data management solutions for HIV/AIDS beneficiaries','exp.r2b2':'Data analysis and processing using Python and Power BI','exp.r2b3':'Monitoring and evaluation of performance indicators','exp.r2b4':'Process automation and organizational workflows','exp.r3':'Full Stack Developer','exp.r3b1':'Development of management systems, integration and end-user training','exp.r3b2':'Mobile app development with Flutter and Firebase integration','exp.r3b3':'Design and implementation of RESTful APIs and third-party service integration','exp.r3b4':'Database management (SQL Server, MySQL, PostgreSQL)','exp.r4':'IT Technician','exp.r4b1':'Maintenance and configuration of systems and networks','exp.r4b2':'Technical support and hardware/software troubleshooting',
    'proj.label':'Portfolio','proj.title':'Featured <em>Projects</em>','proj.p1':'Mobile platform for purchasing medicines in Mozambique with real-time updates and payment integration.','proj.p2':'Mobile app to improve agricultural product sales and the creation of cooperatives in Mozambique.','proj.p3':'Complete school management system with mobile payment integration (M-Pesa, eMola) and APIs for academic and financial management.','proj.p4':'Fleet management app for trucks with a modern interface that eliminates manual processes and improves operational efficiency.','proj.p5n':'Facial Recognition AI','proj.p5':'Artificial intelligence system for facial recognition with data analysis and Power BI visualizations.','proj.p6':'Document management system with advanced search, modular architecture and version control.','proj.soon':'🔒 Coming soon',
    'testi.label':'Testimonials','testi.title':'What <em>Clients</em> Say','testi.q1':'Mauro delivered an exceptional management system on time and with attention to detail that exceeded our expectations. Highly recommended!','testi.r1':'Director, EliteTec Lda','testi.q2':'Working with Mauro was an excellent experience. The SaudeClick app completely transformed how our clients access medicines.','testi.r2':'CEO, SaudeClick','testi.q3':'The data solution implemented by Mauro significantly improved our ability to monitor health indicators. Professional and dedicated.','testi.r3':'Coordinator, Kubatsirana','testi.note':'💡 These are placeholder testimonials — replace with real ones when available!',
    'edu.label':'Education','edu.title':'Education & <em>Certifications</em>','edu.deg':'Bachelor in Information Technology','edu.lang':'Languages','edu.pt':'Portuguese — Native','edu.en':'English — Intermediate','edu.certs':'Certifications',
    'contact.label':'Contact','contact.title':'Let\'s <em>Work</em> Together','contact.desc':'Have a project in mind? I\'m available for freelance and full-time opportunities.','contact.phone':'Phone','contact.ctatitle':'Have a project<br><em>in mind?</em>','contact.ctadesc':'I\'m always open to discussing new ideas, projects and collaboration opportunities.','contact.email':'Send Email →','contact.cv':'Download CV PDF',
    'footer.c':'Designed & Developed by <span>Mauro Peniel</span> · Beira, Mozambique · 2025'
  }
};

function setLang(lang){
  document.querySelectorAll('.lang-btn').forEach(b=>b.classList.toggle('active',b.textContent===lang.toUpperCase()));
  document.querySelectorAll('[data-i18n]').forEach(el=>{
    const k=el.getAttribute('data-i18n');
    if(T[lang][k]!==undefined) el.innerHTML=T[lang][k];
  });
  document.documentElement.lang=lang;
}

// Scroll reveal
const obs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('visible')});
},{threshold:.08});
document.querySelectorAll('.reveal').forEach(el=>obs.observe(el));

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const t=document.querySelector(a.getAttribute('href'));
    if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth'})}
  });
});
</script>
</body>
</html>
