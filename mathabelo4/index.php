<?php
$services = [
 ['number'=>'01','tag'=>'Most requested','name'=>'Cattle slaughtering','description'=>'Careful handling, halal processing and dependable turnaround for cattle.','price'=>'P600','image'=>'assets/images/cattle-processing.svg','alt'=>'Cattle in a clean livestock handling facility'],
 ['number'=>'02','tag'=>'Flexible service','name'=>'Goat & sheep processing','description'=>'Professional processing for smaller livestock, prepared to your requirements.','price'=>'P250','image'=>'assets/images/goat-sheep-processing.svg','alt'=>'Goats and sheep in a livestock pen'],
 ['number'=>'03','tag'=>'Order ahead','name'=>'Pork processing','description'=>'Clean, consistent processing for pork orders and commercial requirements.','price'=>'P250','image'=>'assets/images/pork-processing.svg','alt'=>'Pig in a livestock holding pen'],
 ['number'=>'04','tag'=>'Sold per kg','name'=>'Dog food','description'=>"Quality dog food sold by the kilogram. Contact us for today's price and availability.",'price'=>'Price on request','image'=>'assets/images/dog-food.svg','alt'=>'Dog food products with a dog'],
];
$phone = '+267 739 88689';
$whatsapp = '26778727961';
$email = 'limitlessfood28@gmail.com';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#123b2d">
  <meta name="description" content="Professional slaughtering and processing services in Lobatse, Botswana. Quality at every step.">
  <title>MATHABELO Abattoirs | Lobatse, Botswana</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header" id="top">
 <a class="brand" href="#top" aria-label="Mathabelo Abattoirs home"><span class="brand-mark">M</span><span class="brand-copy"><strong>MATHABELO</strong><small>ABATTOIRS · LOBATSE</small></span></a>
 <button class="menu-toggle" aria-label="Open navigation" aria-expanded="false"><span></span><span></span></button>
 <nav class="main-nav" aria-label="Main navigation"><a href="#services">Services</a><a href="#why-us">Why Mathabelo</a><a href="#contact">Contact</a><a class="nav-cta" href="https://wa.me/<?= htmlspecialchars($whatsapp) ?>?text=Hello%20Mathabelo%20Abattoirs%2C%20I%27d%20like%20to%20make%20an%20enquiry." target="_blank" rel="noopener">Make an enquiry <span>↗</span></a></nav>
</header>
<main>
<section class="hero">
 <div class="hero-image" role="img" aria-label="Cattle at a clean livestock facility"></div><div class="hero-shade"></div>
 <div class="hero-content"><div class="eyebrow light"><span></span> LOBATSE, BOTSWANA</div><h1>Careful hands.<br><em>Trusted meat.</em></h1><p>Professional slaughtering and processing services for families, farmers and businesses — with quality at every step.</p><div class="hero-actions"><a class="button button-light" href="#services">View our services <span>↓</span></a><a class="text-link light-link" href="#contact">Get in touch <span>↗</span></a></div></div>
 <div class="hero-note"><span class="note-line"></span><span>QUALITY IN EVERY STEP</span></div>
</section>
<section class="trust-strip"><div class="trust-item"><span class="trust-icon">✳</span><div><strong>Certified standards</strong><small>Hygiene-first processes and trusted halal service.</small></div></div><div class="trust-item"><span class="trust-icon">✓</span><div><strong>Quality you can trust</strong><small>Consistent care from intake to collection.</small></div></div><div class="trust-item"><span class="trust-icon">⌖</span><div><strong>Local and dependable</strong><small>Proudly serving Lobatse and surrounding areas.</small></div></div></section>
<section class="services section-pad" id="services"><div class="section-top"><div><div class="eyebrow"><span></span> WHAT WE OFFER</div><h2>Straightforward pricing.<br><em>Serious standards.</em></h2></div><p class="section-intro">Tell us what you need and we'll help you plan the right service for your livestock and timeline.</p></div>
 <div class="service-grid">
 <?php foreach($services as $service): ?>
 <article class="service-card"><div class="service-photo"><img src="<?= htmlspecialchars($service['image']) ?>" alt="<?= htmlspecialchars($service['alt']) ?>" loading="lazy"><span class="service-number"><?= $service['number'] ?></span></div><div class="service-info"><div class="service-tag"><?= htmlspecialchars($service['tag']) ?></div><h3><?= htmlspecialchars($service['name']) ?></h3><p><?= htmlspecialchars($service['description']) ?></p><div class="service-bottom"><div><small>STARTING PRICE</small><strong><?= htmlspecialchars($service['price']) ?></strong></div><a href="https://wa.me/<?= htmlspecialchars($whatsapp) ?>?text=Hello%20Mathabelo%20Abattoirs%2C%20I%27m%20enquiring%20about%20<?= rawurlencode($service['name']) ?>." target="_blank" rel="noopener" aria-label="Enquire about <?= htmlspecialchars($service['name']) ?>">Enquire <span>↗</span></a></div></div></article>
 <?php endforeach; ?>
 </div><p class="pricing-note">Prices are starting estimates. Final pricing depends on animal type, quantity and requested services.</p>
</section>
<section class="why-section section-pad" id="why-us"><div class="why-heading"><div class="eyebrow light"><span></span> WHY MATHABELO</div><h2>Built on trust,<br><em>not shortcuts.</em></h2><p>We believe good service starts with respect — for the customer, the animal and the process.</p></div><div class="why-points"><article><span>01</span><div><h3>Clean, considered work</h3><p>We keep the process clear, respectful and reliable for every customer.</p></div></article><article><span>02</span><div><h3>Helpful from first call</h3><p>Our team is ready to guide you through the service and help plan your order.</p></div></article><article><span>03</span><div><h3>Local and dependable</h3><p>Based in Lobatse, we're here to serve local families, farmers and businesses.</p></div></article></div></section>
<section class="contact-section section-pad" id="contact"><div class="contact-heading"><div class="eyebrow"><span></span> CONTACT US</div><h2>Let's plan<br><em>your order.</em></h2><p>Call, email or message us on WhatsApp. We'll help you choose the right service.</p><a class="button button-green" href="https://wa.me/<?= htmlspecialchars($whatsapp) ?>?text=Hello%20Mathabelo%20Abattoirs%2C%20I%27d%20like%20to%20make%20an%20enquiry." target="_blank" rel="noopener">Chat on WhatsApp <span>↗</span></a></div>
 <div class="contact-details"><h3>Talk to our team</h3><a class="contact-row" href="tel:+26773988689"><span class="contact-label">CALL US</span><strong><?= htmlspecialchars($phone) ?></strong><span>↗</span></a><a class="contact-row" href="https://wa.me/<?= htmlspecialchars($whatsapp) ?>" target="_blank" rel="noopener"><span class="contact-label">WHATSAPP</span><strong>+267 787 27961</strong><span>↗</span></a><a class="contact-row" href="mailto:<?= htmlspecialchars($email) ?>"><span class="contact-label">EMAIL</span><strong><?= htmlspecialchars($email) ?></strong><span>↗</span></a><div class="contact-row static"><span class="contact-label">FIND US</span><strong>Lobatse (BMC), Botswana</strong></div><div class="hours"><span class="contact-label">BUSINESS HOURS</span><strong>Monday – Saturday · 07:00–17:00</strong></div><a class="map-link" href="https://www.google.com/maps/search/?api=1&query=Mathabelo+Abattoirs+Lobatse+Botswana" target="_blank" rel="noopener">View location on Google Maps <span>↗</span></a></div>
</section>
</main>
<footer class="site-footer"><a class="footer-brand" href="#top"><span class="brand-mark">M</span><span><strong>MATHABELO ABATTOIRS</strong><small>PROFESSIONAL SLAUGHTERING SERVICES · LOBATSE</small></span></a><span class="copyright">© <?= date('Y') ?> Mathabelo Abattoirs. All rights reserved.</span><a href="#top" class="back-top">BACK TO TOP ↑</a></footer>
<script src="assets/js/main.js"></script>
</body></html>
