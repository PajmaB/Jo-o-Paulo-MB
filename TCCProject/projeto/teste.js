const myWidget = cloudinary.createUploadWidget(
    {
      cloudName: "bioclass",
      uploadPreset: "testando",
    },
    (error, result) => {
      if (!error && result && result.event === "success") {
        console.log("Done! Here is the image info: ", result.info);
        if(result.info.url){
          var urlParaEnviar = result.info.url;
          console.log(urlParaEnviar)

          document
          .getElementById("uploadedimage")
          .setAttribute("src", result.info.secure_url);
          document.getElementById("paraenviar").value = urlParaEnviar;
          
        }
      }
      
    }
  );
  
  document.getElementById("upload_widget").addEventListener(
    "click",
    function () {
      myWidget.open();
    },
    false
  );