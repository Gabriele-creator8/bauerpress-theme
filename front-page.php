<?php get_header (); ?>

<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bauer Zine — Home</title>
  <meta name="description" content="Fanzine degli studenti della Scuola Bauer: notizie, info e curiosità." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <header>
  <div class="container">
    <div class="topbar">
      <a class="mast" href="index.html" aria-label="Vai alla Home Bauer Zine">
        <span class="logo" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path d="M12 2l2.7 5.7L21 10l-4.6 4.5 1.1 6.5L12 18.8 6.5 21l1.1-6.5L3 10l6.3-2.3L12 2z"/>
          </svg>
        </span>
        <span class="title">
          <strong>BAUER ZINE</strong>
          <span>La fanzine degli studenti</span>
        </span>
      </a>

      <div class="issue" aria-label="Numero della fanzine">
        <span class="dot" aria-hidden="true"></span>
        Numero 01 · Gennaio 2026
      </div>
    </div>

    <nav aria-label="Menu">
      <div class="navlinks">
        <a class="active" href="index.html">Home</a>
      <a class="" href="notizie.html">Notizie</a>
      <a class="" href="info.html">Info</a>
      <a class="" href="curiosita.html">Curiosità</a>
      <a class="" href="archivio.html">Archivio</a>
      <a class="" href="redazione.html">Redazione</a>
      <a class="" href="contatti.html">Contatti</a>
      </div>
    </nav>
  </div>
</header>

<?php get_footer(); ?>

  <section class="hero" aria-label="Hero">
    <div class="container hero-grid">
      <div class="hero-card">
        <div class="pad">
          <h1 class="bighead">Notizie, info e curiosità… raccontate dagli studenti.</h1>
          <p class="lead">
            Benvenutə su <strong>Bauer Zine</strong>: una fanzine fatta di micro-storie, aggiornamenti utili e
            cose strane (ma vere) che succedono tra aule e corridoi.
          </p>
          <div class="sticker-row" aria-label="Sticker">
            <span class="sticker">🗞️ Notizie vere</span>
            <span class="sticker alt">🧭 Info utili</span>
            <span class="sticker pink">🧠 Curiosità</span>
          </div>
          <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap">
            <a class="btn" href="archivio.html">Sfoglia l’archivio →</a>
            <a class="btn" href="contatti.html">Invia una segnalazione →</a>
          </div>
        </div>
      </div>

      <aside class="hero-side">
        <div class="note">
          <h3>In questo numero</h3>
          <ul>
            <li>Nuovi club pomeridiani</li>
            <li>Intervista al preside</li>
            <li>Guida mensa &amp; snack</li>
            <li>Curiosità sulla scuola Bauer</li>
          </ul>
        </div>
        <div class="note">
          <h3>Mini-regole redazione</h3>
          <ul>
            <li>Testi brevi, chiari, divertenti</li>
            <li>Niente nomi di compagni senza permesso</li>
            <li>Foto: solo se autorizzate</li>
          </ul>
        </div>
      </aside>
    </div>
  </section>

  <main class="container">
    <h2 class="section-title">In evidenza</h2>
    <p class="muted" style="margin-top:0">Una selezione di articoli per partire subito.</p>
    <div class="grid" aria-label="Articoli in evidenza">
      <a class="card" href="articolo-1-orientamento.html" aria-label="Apri articolo: Nuovi club pomeridiani: come iscriversi (senza stress)">
  <div class="feature">
    <img src="assets/posts/eventi.svg" alt="Immagine articolo: Nuovi club pomeridiani: come iscriversi (senza stress)" />
    <div class="badge">Notizie</div>
    <div class="date">10/01/2026</div>
  </div>
  <div class="pad">
    <h3>Nuovi club pomeridiani: come iscriversi (senza stress)</h3>
    <p>Dal club di fotografia al laboratorio di podcast: ecco cosa parte questo mese e dove trovare i moduli.</p>
    <div class="meta">
      <span class="chip">✍️ Redazione</span>
      <span class="chip">📌 Lettura breve</span>
    </div>
    <div style="margin-top:12px">
      <span class="btn">Leggi →</span>
    </div>
  </div>
</a>
<a class="card" href="articolo-2-intervista-preside.html" aria-label="Apri articolo: Intervista al preside: “Più spazi per creatività e sport”">
  <div class="feature">
    <img src="assets/posts/intervista.svg" alt="Immagine articolo: Intervista al preside: “Più spazi per creatività e sport”" />
    <div class="badge">Notizie</div>
    <div class="date">06/01/2026</div>
  </div>
  <div class="pad">
    <h3>Intervista al preside: “Più spazi per creatività e sport”</h3>
    <p>Abbiamo fatto 7 domande rapide su progetti, regole e idee per migliorare la vita a scuola.</p>
    <div class="meta">
      <span class="chip">✍️ Giulia (3B)</span>
      <span class="chip">📌 Lettura breve</span>
    </div>
    <div style="margin-top:12px">
      <span class="btn">Leggi →</span>
    </div>
  </div>
</a>
<a class="card" href="articolo-3-mensa.html" aria-label="Apri articolo: Mensa: orari, prenotazioni e “kit emergenza” dello zaino">
  <div class="feature">
    <img src="assets/posts/mensa.svg" alt="Immagine articolo: Mensa: orari, prenotazioni e “kit emergenza” dello zaino" />
    <div class="badge">Info</div>
    <div class="date">03/01/2026</div>
  </div>
  <div class="pad">
    <h3>Mensa: orari, prenotazioni e “kit emergenza” dello zaino</h3>
    <p>Come funziona la mensa, cosa portare nei giorni lunghi e 5 snack smart approvati dalla fanzine.</p>
    <div class="meta">
      <span class="chip">✍️ Marco (2A)</span>
      <span class="chip">📌 Lettura breve</span>
    </div>
    <div style="margin-top:12px">
      <span class="btn">Leggi →</span>
    </div>
  </div>
</a>
<a class="card" href="articolo-4-corridoi.html" aria-label="Apri articolo: Cose che succedono nei corridoi (e nessuno ammette)">
  <div class="feature">
    <img src="assets/posts/corridorio.svg" alt="Immagine articolo: Cose che succedono nei corridoi (e nessuno ammette)" />
    <div class="badge">Curiosità</div>
    <div class="date">29/12/2025</div>
  </div>
  <div class="pad">
    <h3>Cose che succedono nei corridoi (e nessuno ammette)</h3>
    <p>Dalle corse per la campanella ai messaggi sui post-it: il lato “meme” della quotidianità.</p>
    <div class="meta">
      <span class="chip">✍️ Luca (4C)</span>
      <span class="chip">📌 Lettura breve</span>
    </div>
    <div style="margin-top:12px">
      <span class="btn">Leggi →</span>
    </div>
  </div>
</a>
<a class="card" href="articolo-5-curiosita-bauer.html" aria-label="Apri articolo: Perché si chiama Bauer? 5 curiosità sulla scuola">
  <div class="feature">
    <img src="assets/posts/curiosita.svg" alt="Immagine articolo: Perché si chiama Bauer? 5 curiosità sulla scuola" />
    <div class="badge">Curiosità</div>
    <div class="date">21/12/2025</div>
  </div>
  <div class="pad">
    <h3>Perché si chiama Bauer? 5 curiosità sulla scuola</h3>
    <p>Origini, simboli e piccole storie: cose da sapere per vincere qualsiasi quiz in classe.</p>
    <div class="meta">
      <span class="chip">✍️ Redazione</span>
      <span class="chip">📌 Lettura breve</span>
    </div>
    <div style="margin-top:12px">
      <span class="btn">Leggi →</span>
    </div>
  </div>
</a>
<a class="card" href="articolo-6-guide-lampo.html" aria-label="Apri articolo: Guide lampo: 8 trucchi per organizzarti meglio (in 10 minuti)">
  <div class="feature">
    <img src="assets/posts/tips.svg" alt="Immagine articolo: Guide lampo: 8 trucchi per organizzarti meglio (in 10 minuti)" />
    <div class="badge">Info</div>
    <div class="date">15/12/2025</div>
  </div>
  <div class="pad">
    <h3>Guide lampo: 8 trucchi per organizzarti meglio (in 10 minuti)</h3>
    <p>Mini checklist, metodo del timer e come non perdere i compiti: consigli super pratici.</p>
    <div class="meta">
      <span class="chip">✍️ Sara (1D)</span>
      <span class="chip">📌 Lettura breve</span>
    </div>
    <div style="margin-top:12px">
      <span class="btn">Leggi →</span>
    </div>
  </div>
</a>
    </div>
  </main>

  <footer>
  <div class="container">
    <div class="small">
      <strong>BAUER ZINE</strong> — progetto didattico (demo) ·
      <a href="mailto:redazione@bauer-scuola.it">redazione@bauer-scuola.it</a> ·
      Stampa “artigianale” &amp; idee fresche.
    </div>
    <div class="small" style="margin-top:8px">
      © 2026 Studenti Scuola Bauer — tutti i contenuti sono esempi per esercitazione.
    </div>
  </div>
</footer>
</body>
</html>