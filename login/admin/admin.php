<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../admin/css/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .container-fluid {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .content {
      flex: 1;
      overflow: auto;
      padding-bottom: 60px;
      /* Height of the footer */
    }

    .iframe-container {
      position: relative;
      width: 100%;
      flex: 1;
      overflow: hidden;
    }

    .iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      padding: 10px;
      background-color: darkgrey;
    }
  </style>
</head>

<body>
  <div class="container-fluid px-4">
    <div class="content">
      <h1 class="mt-4"> Dashboard <span> <i class="fa-solid fa-cross"></i> </span></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> Tampilan Website Gereja GBI GOD'S GRACE </li>
      </ol>
      <div class="iframe-container">
        <iframe id="iframe" src="https://projectwebsitegereja.my.id/"></iframe>
      </div>
    </div>
  </div>
  <footer class="py-4 bg-dark mt-auto">
    <div class="container-fluid px-1">
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">
          <small>
            &copy; <script>
              document.write(new Date().getFullYear());
            </script> GOD'S GRACE
          </small>
        </div>
        <div>
          <a target="_blank" class="socialfooter" href="https://www.facebook.com/church.grace.940" title="Facebook GBI">
            <img draggable="false" src="../img/Logo/facebook.png" width="30" height="30" alt="FB">
          </a>
          <a target="_blank" class="socialfooter" href="https://www.instagram.com/gbigodsgrace" title="Instagram GBI">
            <img draggable="false" src="../img/Logo/instagram.png" width="30" height="30" alt="IG">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script>
    function adjustIframeHeight() {
      const iframe = document.getElementById('iframe');
      const contentHeight = document.querySelector('.content').offsetHeight;
      const footerHeight = document.querySelector('footer').offsetHeight;
      const containerHeight = window.innerHeight - footerHeight - document.querySelector('.content').offsetTop;
      iframe.style.height = (containerHeight > contentHeight ? contentHeight : containerHeight) + 'px';
    }

    window.addEventListener('resize', adjustIframeHeight);
    window.addEventListener('load', adjustIframeHeight);
  </script>
</body>

</html>
