document
  .getElementById("refresh_captcha")
  .addEventListener("click", function () {
    const captchaImage = document.getElementById("captcha_image");
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "refresh_captcha.php?" + new Date().getTime(), true);
    xhr.responseType = "blob";
    xhr.onload = function () {
      if (xhr.status === 200) {
        const blob = new Blob([xhr.response], {
          type: "image/jpeg",
        });
        const url = URL.createObjectURL(blob);
        captchaImage.src = url;
      }
    };
    xhr.send();
  });
