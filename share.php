<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mb-4 ">
        <div class="d-flex gap-2 mt-3 share_btn d-flex justify-content-center wow animate__animated animate__fadeInUp">
          <!-- Facebook Share -->
          <a class="btn btn-primary" href="https://www.facebook.com/sharer/sharer.php?u=https://yourwebsite.com" target="_blank">
              <i class="fab fa-facebook-f"></i> Facebook
          </a>
        
          <!-- WhatsApp Share -->
          <a class="btn btn-success" href="https://api.whatsapp.com/send?text=Check%20this%20out!%20https://yourwebsite.com" target="_blank">
              <i class="fab fa-whatsapp"></i> WhatsApp
          </a>
        
          <!-- Twitter Share -->
          <a class="btn btn-info" href="https://twitter.com/intent/tweet?url=https://yourwebsite.com&text=Check%20this%20out!" target="_blank">
              <i class="fab fa-twitter"></i> Twitter
          </a>
        
          <!-- Gmail Share -->
          <a class="btn btn-danger" href="mailto:?subject=Check this out!&body=Here is something interesting: https://yourwebsite.com" target="_blank">
              <i class="fas fa-envelope"></i> Gmail
          </a>
          <a class="btn btn-primary" onclick="sharePage()">Other Options</a>
        </div>
    </div>
  
    <script>
    function sharePage() {
        if (navigator.share) {
            navigator.share({
                title: document.title,
                text: 'Check this out!',
                url: window.location.href
            })
            .then(() => console.log('Shared successfully'))
            .catch((error) => console.log('Error sharing:', error));
        } else {
            alert("Sharing not supported in this browser.");
        }
    }
    </script>
</body>
</html>
