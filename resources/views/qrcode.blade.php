<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code St Valentin</title>
  <style>
    .image-fond {
      position: relative;
      width: 20%; /* Ajustez la largeur selon vos besoins */
      height: auto;
    }

    .qr-code {
      position: absolute;
      top: 50%; /* Position verticale */
     right: 50%; /* Position horizontale */
      transform: translate(-50%, -50%); /* Centre l'image */
      z-index: 1; /* Place le code QR au premier plan */
    }
  </style>
</head>
<body>
  <h1>Scannez le QR Code pour afficher le message</h1>

  {{ $qrCodeImage }}

  <img src="{{ asset($regularImage) }}" class="image-fond">
</body>
</html>
