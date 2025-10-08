<?php
// Template: replace $species and $scientific variables when including or copying
$species = $species ?? 'Species name';
$scientific = $scientific ?? '';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($species); ?> - SIMANGRO</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <style>
  :root{--bg:#f0fdf4;--accent:#16a34a;--dark:#0f172a;--muted:#64748b;--white:#ffffff;--border:#d1fae5;--shadow:0 4px 16px rgba(22,163,74,0.1);--shadow-hover:0 8px 32px rgba(22,163,74,0.15)}
  body{font-family:'Plus Jakarta Sans',Segoe UI,Roboto,Arial,sans-serif;margin:0;padding:0;background:var(--bg);color:var(--dark);line-height:1.6}
  /* Header (copied from root index.php) */
  .header{display:flex;align-items:center;justify-content:space-between;padding:16px 24px;background:var(--white);box-shadow:var(--shadow);position:sticky;top:0;z-index:100;border-bottom:3px solid var(--accent)}
  .brand{display:flex;align-items:center;gap:16px}
  .logo{width:48px;height:48px;display:inline-block;border-radius:8px;overflow:hidden;box-shadow:0 2px 8px rgba(22,163,74,0.2)}
  .logo img{width:48px;height:48px;object-fit:contain;display:block}
  .sitename{font-weight:800;font-size:1.75rem;line-height:1;color:var(--accent);letter-spacing:-0.02em}
  .nav{display:flex;gap:8px;align-items:center}
  .nav a{color:var(--muted);text-decoration:none;font-weight:600;padding:12px 20px;border-radius:25px;transition:all .3s;font-size:0.95rem}
  .nav a:hover{color:var(--white);background:var(--accent);transform:translateY(-2px);box-shadow:var(--shadow)}
    .container{max-width:1000px;margin:24px auto;padding:18px}
      /* identification-gallery (3-card morphology container) - styles copied from Acanthus ebracteatus.php */
      .identification-gallery{margin:40px 0;text-align:center}
      .gallery-title{font-size:2.2rem;font-weight:600;color:#1e3a8a;margin-bottom:8px;display:inline-block}
      .gallery-subtitle{font-size:1rem;color:#6b7280;margin-bottom:18px;text-transform:uppercase;letter-spacing:0.1em;font-weight:500}
      .image-showcase{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-bottom:18px}
      .showcase-item{position:relative;border-radius:12px;overflow:hidden;aspect-ratio:4/3;transition:all .35s ease;box-shadow:0 8px 30px rgba(0,0,0,0.12);background:#fff}
      .showcase-item:hover{transform:translateY(-8px) scale(1.02);box-shadow:0 16px 50px rgba(0,0,0,0.18)}
      .showcase-item img{width:100%;height:100%;object-fit:cover;transition:transform .6s ease}
      .showcase-item:hover img{transform:scale(1.06)}
      .image-label{position:absolute;bottom:0;left:0;right:0;background:linear-gradient(transparent, rgba(0,0,0,0.7));padding:18px 12px;color:#fff;font-weight:600;font-size:1.05rem;text-align:center}
      .morph-placeholder{color:#475569;font-size:0.98rem}
      @media (max-width:880px){.image-showcase{grid-template-columns:1fr}.showcase-item{aspect-ratio:16/9}.showcase-item img{height:200px}}

      .showcase-item{position:relative;border-radius:12px;overflow:hidden;aspect-ratio:4/3;transition:all .35s ease;box-shadow:0 8px 30px rgba(0,0,0,0.12);background:#fff}
      .showcase-item:hover{transform:translateY(-8px) scale(1.02);box-shadow:0 16px 50px rgba(0,0,0,0.18)}
      .showcase-item img{width:100%;height:100%;object-fit:cover;transition:transform .6s ease}
      .showcase-item:hover img{transform:scale(1.06)}
      .image-label{position:absolute;bottom:0;left:0;right:0;background:linear-gradient(transparent, rgba(0,0,0,0.7));padding:18px 12px;color:#fff;font-weight:600;font-size:1.05rem;text-align:center}
      .morph-placeholder{color:#475569;font-size:0.98rem}
      @media (max-width:880px){.image-showcase{grid-template-columns:1fr}.showcase-item{aspect-ratio:16/9}.showcase-item img{height:200px}}
  /* three image containers side-by-side on wide screens, stack on small screens */
    /* slideshow styles */
    .slideshow{position:relative;margin-top:12px}
    .slide{display:none;background:#fff;border-radius:8px;overflow:hidden;border:1px solid #e6edf0}
    .slide.active{display:block}
  .slide .media-head{padding:12px 16px;margin:0;background:#f8fafc;border-bottom:1px solid #eef2f6;font-weight:700}
  /* placeholder body for slides when images are removed */
  .media-body{display:flex;align-items:center;justify-content:center;padding:28px;background:#ffffff;color:#475569;min-height:220px}
    .controls{position:absolute;top:50%;left:0;right:0;display:flex;justify-content:space-between;transform:translateY(-50%);pointer-events:none}
    .controls button{pointer-events:auto;background:rgba(0,0,0,0.45);border:none;color:#fff;padding:10px 14px;margin:0 8px;border-radius:6px;cursor:pointer}
    .dots{display:flex;gap:8px;justify-content:center;margin-top:8px}
    .dot{width:10px;height:10px;border-radius:50%;background:#cbd5e1;display:inline-block;cursor:pointer}
    .dot.active{background:#16a34a}
    @media (max-width:640px){.slide img{height:200px}}
    .content{margin-top:18px;background:#fff;padding:20px;border-radius:12px;border:1px solid #eef6f0}
    .site-footer{background:#ffffff;border-top:1px solid #e6f4ea;padding:18px 24px;display:flex;gap:12px;align-items:center;justify-content:center;color:#334155;font-size:0.95rem;flex-wrap:wrap;text-align:center}
    .site-footer .logo{width:36px;height:36px}
    .site-footer .logo img{width:36px;height:36px}
    .site-footer .org{display:block;font-weight:600}
    .site-footer .copyright{display:block;color:#64748b;font-size:0.9rem;margin-top:2px}
  </style>
</head>
<body>
  <header class="header">
    <div class="brand">
      <div class="logo" aria-hidden="true"><img src="../img/logo-KKP.png" alt="Logo KKP"/></div>
      <div class="sitename">SIMANGRO</div>
    </div>
    <nav class="nav"><a href="../index.php">Beranda</a><a href="index.php">Jenis Mangrove</a></nav>
  </header>

  <div class="container">
    <?php
    // determine candidate image filenames for daun, bunga, buah
    $base = preg_replace('/[^A-Za-z0-9 _-]/','', $species);
    $candidates = [
      'daun'=>["{$base}_daun.jpg","{$base}_leaf.jpg","{$base}_leaf.png"],
      'bunga'=>["{$base}_bunga.jpg","{$base}_flower.jpg","{$base}_flower.png"],
      'buah'=>["{$base}_buah.jpg","{$base}_fruit.jpg","{$base}_fruit.png"],
    ];

    function find_img($arr){
      foreach($arr as $f){ if(file_exists(__DIR__ . '/../img/' . $f)) return '../img/'.$f; }
      return null;
    }

    $img_daun = find_img($candidates['daun']);
    $img_bunga = find_img($candidates['bunga']);
    $img_buah = find_img($candidates['buah']);
    ?>

    <div class="morph-grid" aria-hidden="false">
      <div class="morph-card" role="group" aria-label="Daun">
        <div class="morph-head">Daun</div>
        <div class="morph-body">
          <?php if($img_daun): ?>
            <img src="<?php echo $img_daun; ?>" alt="Gambar daun <?php echo htmlspecialchars($species); ?>" onclick="(typeof openModal==='function')?openModal('<?php echo $img_daun; ?>','Daun <?php echo htmlspecialchars($species); ?>','') : null"/>
          <?php else: ?>
            <div class="morph-placeholder">Tidak ada gambar daun</div>
          <?php endif; ?>
        </div>
      </div>

      <div class="morph-card" role="group" aria-label="Bunga">
        <div class="morph-head">Bunga</div>
        <div class="morph-body">
          <?php if($img_bunga): ?>
            <img src="<?php echo $img_bunga; ?>" alt="Gambar bunga <?php echo htmlspecialchars($species); ?>" onclick="(typeof openModal==='function')?openModal('<?php echo $img_bunga; ?>','Bunga <?php echo htmlspecialchars($species); ?>','') : null"/>
          <?php else: ?>
            <div class="morph-placeholder">Tidak ada gambar bunga</div>
          <?php endif; ?>
        </div>
      </div>

      <div class="morph-card" role="group" aria-label="Buah">
        <div class="morph-head">Buah</div>
        <div class="morph-body">
          <?php if($img_buah): ?>
            <img src="<?php echo $img_buah; ?>" alt="Gambar buah <?php echo htmlspecialchars($species); ?>" onclick="(typeof openModal==='function')?openModal('<?php echo $img_buah; ?>','Buah <?php echo htmlspecialchars($species); ?>','') : null"/>
          <?php else: ?>
            <div class="morph-placeholder">Tidak ada gambar buah</div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <h1><?php echo htmlspecialchars($species); ?></h1>
    <?php if($scientific): ?><p class="scientific"><?php echo htmlspecialchars($scientific); ?></p><?php endif; ?>
    <div class="slideshow" aria-label="Galeri morfologi">
      <div class="slide active" data-type="Daun">
        <div class="media-head">Daun</div>
        <div class="media-body"><span class="placeholder">Gambar daun dihapus</span></div>
      </div>
      <div class="slide" data-type="Bunga">
        <div class="media-head">Bunga</div>
        <div class="media-body"><span class="placeholder">Gambar bunga dihapus</span></div>
      </div>
      <div class="slide" data-type="Buah">
        <div class="media-head">Buah</div>
        <div class="media-body"><span class="placeholder">Gambar buah dihapus</span></div>
      </div>

      <div class="controls">
        <button class="prev" aria-label="Gambar sebelumnya">❮</button>
        <button class="next" aria-label="Gambar selanjutnya">❯</button>
      </div>

      <div class="dots" role="tablist" aria-label="Navigasi gambar">
        <span class="dot active" data-index="0" role="tab" aria-selected="true" aria-label="Daun"></span>
        <span class="dot" data-index="1" role="tab" aria-selected="false" aria-label="Bunga"></span>
        <span class="dot" data-index="2" role="tab" aria-selected="false" aria-label="Buah"></span>
      </div>
    </div>

    <script>
      (function(){
        const slides = Array.from(document.querySelectorAll('.slide'));
        const dots = Array.from(document.querySelectorAll('.dot'));
        const prev = document.querySelector('.prev');
        const next = document.querySelector('.next');
        let idx = 0;
        let timer;
        const delay = 4000;

        function show(i){
          slides.forEach((s,si)=>s.classList.toggle('active', si===i));
          dots.forEach((d,di)=>{d.classList.toggle('active', di===i); d.setAttribute('aria-selected', di===i?'true':'false')});
          idx=i;
        }

        function nextSlide(){ show((idx+1)%slides.length); }
        function prevSlide(){ show((idx-1+slides.length)%slides.length); }

        next.addEventListener('click', ()=>{ nextSlide(); resetTimer(); });
        prev.addEventListener('click', ()=>{ prevSlide(); resetTimer(); });
        dots.forEach(d=>d.addEventListener('click', e=>{ show(Number(e.currentTarget.dataset.index)); resetTimer(); }));

        function resetTimer(){ clearInterval(timer); timer = setInterval(nextSlide, delay); }
        timer = setInterval(nextSlide, delay);

        document.querySelector('.slideshow').addEventListener('mouseenter', ()=>clearInterval(timer));
        document.querySelector('.slideshow').addEventListener('mouseleave', ()=>resetTimer());
        document.addEventListener('keydown', (e)=>{ if(e.key==='ArrowRight') { nextSlide(); resetTimer(); } if(e.key==='ArrowLeft'){ prevSlide(); resetTimer(); } });
      })();
    </script>

    <div class="content">
      <h2>Deskripsi singkat</h2>
      <p>Deskripsi untuk <?php echo htmlspecialchars($species); ?> — tambahkan informasi morfologi, habitat, dan catatan identifikasi di sini.</p>
    </div>
  </div>

  <!-- Shared lightbox modal (collects images from identification gallery and gallery-grid) -->
  <div id="simangro-lightbox" class="simangro-lightbox" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="lb-backdrop" data-action="close"></div>
    <div class="lb-panel" role="document">
      <button class="lb-close" aria-label="Tutup" data-action="close">✕</button>
      <div class="lb-media"><img id="lb-img" src="" alt=""/></div>
      <div class="lb-caption"><div id="lb-title"></div><div id="lb-meta"></div></div>
      <div class="lb-controls"><button id="lb-prev" aria-label="Sebelumnya">❮</button><button id="lb-next" aria-label="Selanjutnya">❯</button></div>
    </div>
  </div>

  <style>
  /* lightbox styles */
  .simangro-lightbox{display:none;position:fixed;inset:0;z-index:9999;align-items:center;justify-content:center}
  .simangro-lightbox[aria-hidden="false"]{display:flex}
  .simangro-lightbox .lb-backdrop{position:absolute;inset:0;background:rgba(2,6,23,0.6)}
  .simangro-lightbox .lb-panel{position:relative;z-index:2;max-width:920px;width:94%;background:var(--white,#fff);border-radius:12px;padding:12px;box-shadow:0 24px 80px rgba(2,6,23,0.5);display:flex;flex-direction:column;gap:10px}
  .simangro-lightbox .lb-media img{max-width:100%;height:auto;border-radius:8px;display:block;margin:0 auto}
  .simangro-lightbox .lb-close{position:absolute;top:8px;right:8px;background:transparent;border:none;font-size:18px;cursor:pointer}
  .simangro-lightbox .lb-caption{color:#334155;font-size:0.95rem}
  .simangro-lightbox .lb-controls{display:flex;justify-content:space-between}
  .simangro-lightbox .lb-controls button{background:rgba(0,0,0,0.6);color:#fff;border:none;padding:8px 12px;border-radius:8px;cursor:pointer}
  @media (max-width:600px){ .simangro-lightbox .lb-panel{padding:8px} .simangro-lightbox .lb-controls{gap:8px} }
  </style>

  <script>
  (function(){
    // Build a unified gallery from identification gallery and gallery-grid
    const items = [];
    // identification gallery images
    document.querySelectorAll('.image-showcase .showcase-item img').forEach(img=>{
      items.push({src: img.getAttribute('src'), title: img.getAttribute('alt')||'', meta: ''});
    });
    // gallery-grid items (if present)
    document.querySelectorAll('.gallery-grid .gallery-item').forEach(el=>{
      const img = el.querySelector('img');
      const titleEl = el.querySelector('.gallery-item-title');
      const descEl = el.querySelector('.gallery-item-desc');
      if(img){ items.push({src: img.getAttribute('src'), title: titleEl?titleEl.textContent.trim():img.getAttribute('alt')||'', meta: descEl?descEl.textContent.trim():''}); }
    });

    const modal = document.getElementById('simangro-lightbox');
    const lbImg = document.getElementById('lb-img');
    const lbTitle = document.getElementById('lb-title');
    const lbMeta = document.getElementById('lb-meta');
    const btnPrev = document.getElementById('lb-prev');
    const btnNext = document.getElementById('lb-next');
    let idx = -1;

    function show(i){ if(items.length===0) return; idx=(i+items.length)%items.length; const it=items[idx]; lbImg.src = it.src; lbImg.alt = it.title||''; lbTitle.textContent = it.title||''; lbMeta.textContent = it.meta||''; modal.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; }
    function close(){ modal.setAttribute('aria-hidden','true'); document.body.style.overflow=''; lbImg.src=''; lbTitle.textContent=''; lbMeta.textContent=''; }
    function prev(){ show(idx-1); }
    function next(){ show(idx+1); }

    // expose openModal for existing inline calls
    window.openModal = function(src, title, meta){
      // Try to find index by src
      const found = items.findIndex(it=>it.src===src || it.src===location.pathname.replace(/[^\/]*$/,'')+src);
      if(found>=0) return show(found);
      // otherwise temporarily add and show
      items.push({src:title||src, title:title||'', meta:meta||''}); show(items.length-1);
    };

    // Wire clicks on showcase & gallery to open modal by index
    document.addEventListener('click', function(e){
      const img = e.target.closest && e.target.closest('.showcase-item img, .gallery-item img');
      if(!img) return;
      e.preventDefault();
      const src = img.getAttribute('src');
      const i = items.findIndex(it=>it.src===src);
      if(i>=0) show(i);
    });

    // controls
    if(btnPrev) btnPrev.addEventListener('click', prev);
    if(btnNext) btnNext.addEventListener('click', next);
    modal.addEventListener('click', function(e){ if(e.target && e.target.dataset && e.target.dataset.action==='close') close(); });
    document.addEventListener('keydown', function(e){ if(modal.getAttribute('aria-hidden')==='false'){ if(e.key==='Escape') close(); if(e.key==='ArrowLeft') prev(); if(e.key==='ArrowRight') next(); } });

    // touch swipe
    let startX=0, endX=0;
    modal.addEventListener('touchstart', (e)=>{ startX = e.touches[0].clientX; });
    modal.addEventListener('touchend', (e)=>{ endX = e.changedTouches[0].clientX; if(startX-endX>40) next(); if(endX-startX>40) prev(); });
  })();
  </script>

  <footer class="site-footer" aria-label="Footer organisasi">
    <div class="logo" aria-hidden="true"><img src="../img/logo-KKP.png" alt="Logo KKP"/></div>
    <div class="copy">
      <span class="org">Kementerian Kelautan dan Perikanan</span>
      <span class="copyright">© Copyright 2025, Kementerian Kelautan dan Perikanan Republik Indonesia</span>
    </div>
  </footer>
</body>
</html>
