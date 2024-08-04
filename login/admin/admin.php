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
    }

    .container-fluid {
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    .content {
      flex: 1;
      overflow: auto;
    }

    .iframe-container {
      position: relative;
      width: 100%;
      overflow: hidden;
      padding-top: 56.25%;
      /* 16:9 Aspect Ratio */
    }

    .iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 71%;
      border: 0;
    }

    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      padding: 10px;
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
        <iframe src="https://projectwebsitegereja.my.id/"></iframe>
      </div>
    </div>
  </div>
</body>

</html>