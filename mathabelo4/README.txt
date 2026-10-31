MATHABELO ABATTOIRS - PHP WEBSITE
=================================

Files:
- index.php                 Main website (PHP + HTML)
- assets/css/style.css      Responsive styling
- assets/js/main.js         Mobile navigation behaviour
- assets/images/            Local image asset directory
- download-assets.php      One-time original image downloader

CHANGES MADE
- Pork processing starting price changed to P250.
- Cold transport service and its listing have been removed.
- Site rebuilt without React/Vercel dependencies.
- Navigation, WhatsApp enquiry links, phone, email and map links retained.

INSTALLATION
1. Upload the complete folder contents to a PHP-enabled hosting account (PHP 7.4+ recommended).
2. Set the website document root to this folder, or place its contents in public_html.
3. Open the website in a browser.
4. To download the original source photographs into assets/images, run https://your-domain.example/download-assets.php once on a host that permits outbound HTTPS requests.
5. Delete download-assets.php after the download has completed.

IMAGE NOTE
The execution environment used to package this project could not directly fetch binary image files from the source host. The assets/images directory therefore contains local SVG image wrappers that point to the original hosted photographs. The included downloader retrieves the original PNG/JPEG assets on your PHP host. Until downloaded, the wrappers need an internet connection to show the photographs.

CONTACT DETAILS IN THE ORIGINAL SITE
Call: +267 739 88689
WhatsApp: +267 787 27961
Email: limitlessfood28@gmail.com
Location: Lobatse (BMC), Botswana
Hours: Monday-Saturday, 07:00-17:00
