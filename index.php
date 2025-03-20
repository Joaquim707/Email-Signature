<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <style>
        .Logo{
            height: 60px;
            width: 70px;
            border-radius: 50%;
            padding: ;
        }
        footer{
            background: black;
            width: 80%;
            margin-left: auto;
            color: white;
            border-top-left-radius: 20px;
        }
    </style>
</head>
<body class="bg-dark" style="font-family:playfair;">
<nav class="navbar navbar-expand-lg rounded-bottom" style="background:black;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="Logo" src="data:image/png;base64,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" alt="Company-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="ms-auto">
                <button class="btn btn-primary" onclick="toggleTemplateSection(1)">Gmail</button>
                <button class="btn btn-primary" onclick="toggleTemplateSection(2)">Outlook</button>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="row w-100 justify-content-center">
        <!-- Left Side: Form -->
        <div class="col-lg-5 col-md-5 col-sm-12 bg-light rounded" style="box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);">
            <h2>Email Signature Generator</h2>
            <form>
                <input type="text" id="name" class="form-control mb-2" placeholder="Full Name" oninput="updateSignature()">
                <input type="text" id="title" class="form-control mb-2" placeholder="Job Title" oninput="updateSignature()">
                <input type="text" id="company" class="form-control mb-2" placeholder="Company Name" oninput="updateSignature()">
                <input type="text" id="phone" class="form-control mb-2" placeholder="Phone Number" oninput="updateSignature()">
                <input type="text" id="mobile" class="form-control mb-2" placeholder="Mobile Number" oninput="updateSignature()">
                <input type="email" id="email" class="form-control mb-2" placeholder="Email Address" oninput="updateSignature()">
                <input type="text" id="website" class="form-control mb-2" placeholder="Website URL" oninput="updateSignature()">
                <input type="text" id="address" class="form-control mb-2" placeholder="Company Address" oninput="updateSignature()">

                <label for="file-input" class="upload-box">
                    <span class="upload-icon">➕</span>
                    <span class="upload-text">Upload Photo or Logo</span>
                    <span class="upload-note">Image should be at least 100×100px</span>
                </label>
                <input type="file" id="file-input" class="form-control mb-2" accept="image/*" onchange="uploadImage(event)">
                <!-- <div class="image-preview" id="image-preview"></div> -->
                <!-- <p id="error-message" class="error-message"></p> -->

                <input type="text" id="facebook" class="form-control mb-2" placeholder="Facebook URL" oninput="updateSignature()">
                <input type="text" id="twitter" class="form-control mb-2" placeholder="Twitter URL" oninput="updateSignature()">
                <input type="text" id="linkedin" class="form-control mb-2" placeholder="LinkedIn URL" oninput="updateSignature()">
                <input type="text" id="instagram" class="form-control mb-2" placeholder="Instagram URL" oninput="updateSignature()">
            </form>
        </div>

        <!-- Right Side: Template and Preview -->
        <div class="col-lg-5 col-md-5 col-sm-12 d-flex flex-column justify-content-center my-auto">
            
            <div id="templates-section-1" class="templates-section">
                <h2 style="color:White; text-align:center;font-family:playfair;">Gmail</h2>
                <div class="carousel">
                    <button class="prev btn btn-light" onclick="moveSlide(-1)">&#10094;</button>
                    <div class="templates-container">
                        <div class="template" onclick="selectTemplate(1)">
                            <img src="Images/template1.png" alt="Template 1">
                        </div>
                        <div class="template" onclick="selectTemplate(2)">
                            <img src="Images/template1.png" alt="Template 2">
                        </div>
                        <div class="template" onclick="selectTemplate(3)">
                            <img src="Images/template1.png" alt="Template 3">
                        </div>
                    </div>
                    <button class="next btn btn-light ml-3" onclick="moveSlide(1)">&#10095;</button>
                </div>
            </div>

            <!-- Second Template Section (Initially Hidden) -->
            <div id="templates-section-2" class="templates-section d-none">
                <h2 style="color:White; text-align:center;font-family:playfair;">Outlook</h2>
                <div class="carousel"><h2 style="color:White; text-align:center;font-family:playfair;">Gmail</h2>
                    <button class="prev btn btn-light" onclick="moveSlide(-1)">&#10094;</button>
                    <div class="templates-container">
                        <div class="template" onclick="selectTemplate(3)">
                            <img src="Images/template1.png" alt="Template 4">
                        </div>
                        <div class="template" onclick="selectTemplate(2)">
                            <img src="Images/template1.png" alt="Template 5">
                        </div>
                        <div class="template" onclick="selectTemplate(1)">
                            <img src="Images/template1.png" alt="Template 6">
                        </div>
                    </div>
                    <button class="next btn btn-light ml-3" onclick="moveSlide(1)">&#10095;</button>
                </div>
            </div>

            
            <div class="signature-preview" id="signature-preview">
                <!-- Signature Preview will be generated here -->
            </div>
        </div>
    </div>
</div>


<footer class="text-center py-3 mt-3 float-right">
  <div class="container">
    <p class="mb-2">Follow us on</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="#" class="text-light fs-4"><i class="fab fa-facebook"></i></a>
      <a href="#" class="text-light fs-4"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-light fs-4"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-light fs-4"><i class="fab fa-linkedin"></i></a>
    </div>
    <p class="mt-2 mb-0">&copy; 2025 Abaci Software. All rights reserved.</p>
  </div>
</footer>

<script>
    let uploadedImageSrc = "https://www.corporatephotographerslondon.com/wp-content/uploads/2023/02/LinkedIn_Profile_Photo.jpg"; 
    document.getElementById("file-input").addEventListener("change", uploadImage);

    async function uploadImage(event) {
        let file = event.target.files[0];
        let errorMessage = document.querySelector("#error-message");

        if (file) {
            uploadedImageSrc = "https://i.gifer.com/ZKZg.gif"; 
           
            compressImage(file, async function(compressedBlob) {
                let formData = new FormData();
                formData.append("image", compressedBlob, "compressed.jpg");

                let response = await fetch("https://api.imgbb.com/1/upload?key=8a01ec923aab1a46ee38252a81ef8b9d", {
                    method: "POST",
                    body: formData
                });

                let result = await response.json();
                if (result.data.image && result.data.image.url) {
                    uploadedImageSrc = result.data.image.url;
                    updateImage();
                    document.getElementById("image-preview").src = uploadedImageSrc;
                } else {
                    errorMessage.textContent = "Image upload failed!";
                }
            });
        }
    }

    function toggleTemplateSection(sectionNumber) {
    let section1 = document.getElementById("templates-section-1");
    let section2 = document.getElementById("templates-section-2");

    if (sectionNumber === 1) {
        section1.classList.remove("d-none"); // Show section 1
        section2.classList.add("d-none"); // Hide section 2
    } else {
        section1.classList.add("d-none"); // Hide section 1
        section2.classList.remove("d-none"); // Show section 2
    }
}



    function compressImage(file, callback) {
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(event) {
            let img = new Image();
            img.src = event.target.result;
            img.onload = function() {
                let canvas = document.createElement("canvas");
                let ctx = canvas.getContext("2d");

                let maxWidth = 400; // Max width
                let maxHeight = 400; // Max height
                let width = img.width;
                let height = img.height;

                // 🔥 Maintain Aspect Ratio
                if (width > height) {
                    if (width > maxWidth) {
                        height = height * (maxWidth / width);
                        width = maxWidth;
                    }
                } else {
                    if (height > maxHeight) {
                        width = width * (maxHeight / height);
                        height = maxHeight;
                    }
                }

                canvas.width = width;
                canvas.height = height;
                ctx.drawImage(img, 0, 0, width, height);
                
                canvas.toBlob(callback, "image/jpeg", 0.85);
            };
        };
    }


    function updateImage() {
        let imgElement = document.querySelector("#signature-preview img");

        if (imgElement) {
            imgElement.src = `${uploadedImageSrc}?t=${new Date().getTime()}`; 
        }
    }

    function updateSignature() {
        document.querySelectorAll(".preview-name").forEach(function(element) {
            element.innerText = document.getElementById("name").value || "John Doe";
        });
        document.querySelectorAll(".preview-title").forEach(function(element) {
            element.innerText = document.getElementById("title").value || "Sales & Marketing Director";
        });
        document.querySelectorAll(".preview-company").forEach(function(element) {
            element.innerText = document.getElementById("company").value || "Your Company";
        });
        document.querySelectorAll(".preview-phone").forEach(function(element) {
            element.innerText = document.getElementById("phone").value ? "📞 " + document.getElementById("phone").value : "(800) 555-0299";
        });
        document.querySelectorAll(".preview-mobile").forEach(function(element) {
            element.innerText = document.getElementById("mobile").value ? "📱 " + document.getElementById("mobile").value : "(800) 555-0199";
        });

        let email = document.getElementById("email").value;
        document.querySelectorAll(".preview-email").forEach(function(element) {
            element.innerText = email || "john.doe@example.com";
            element.href = "mailto:" + email;
        });

        let website = document.getElementById("website").value;
        document.querySelectorAll(".preview-website").forEach(function(element) {
            element.innerText = website || "www.your-website.com";
            element.href = website.startsWith("http") ? website : "https://" + website;
        });

        document.querySelectorAll(".preview-address").forEach(function(element) {
            element.innerText = document.getElementById("address").value ? "📍 " + document.getElementById("address").value : "My Company, Street, City, Zip Code, Country";
        });

        let fb = document.getElementById("facebook").value;
        let tw = document.getElementById("twitter").value;
        let ln = document.getElementById("linkedin").value;
        let ig = document.getElementById("instagram").value;

        document.querySelectorAll(".preview-facebook").forEach(function(element) {
            element.href = fb ? fb : "#";
        });
        document.querySelectorAll(".preview-twitter").forEach(function(element) {
            element.href = tw ? tw : "#";
        });
        document.querySelectorAll(".preview-linkedin").forEach(function(element) {
            element.href = ln ? ln : "#";
        });
        document.querySelectorAll(".preview-instagram").forEach(function(element) {
            element.href = ig ? ig : "#";
        });
    }


    function copySignature() {
        let signature = document.querySelector(".signature-card");

        let signatureDiv = document.querySelector(".signature-card").cloneNode(true);
        
        let range = document.createRange();
        range.selectNode(signature);
        window.getSelection().removeAllRanges(); 
        window.getSelection().addRange(range);

        let copyButton = signature.querySelector(".copy-button");
        // if (copyButton) {
        //     copyButton.remove();
        // }
        try {
            document.execCommand("copy"); 
            alert("Signature copied successfully! Paste it into your email.");
        } catch (err) {
            console.error("Failed to copy", err);
        }

        window.getSelection().removeAllRanges(); 
    }

    function selectTemplate(templateNumber) {
        let signatureContent = document.getElementById("signature-preview");

        let templateHTML = "";

        if (templateNumber === 1) {
        templateHTML = `
            <h3 class="preview">Signature Preview</h3> 
            <div class="signature-card">
                <div class="profile-pic">
                    <img class="preview-image" src="${uploadedImageSrc}" alt="Your Logo">
                </div>
                <div class="content">
                    <p class="name preview-name">John Doe</p>
                    <p class="title preview-title">Sales & Marketing Director</p>
                    <p class="contact preview-company">Your Company</p>
                    <p class="contact preview-phone">📞 (800) 555-0299</p>
                    <p class="contact preview-mobile">📱 (800) 555-0199</p>
                    <p class="contact">✉️ <a class="preview-email" href="#">john.doe@example.com</a></p>
                    <p class="contact">🌍 <a class="preview-website" href="#">www.your-website.com</a></p>
                    <p class="contact preview-address">📍 My Company, Street, City, Zip Code, Country</p>
                    <div class="social-icons">
                        <a class="preview-facebook" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook"></a>
                        <a class="preview-twitter" href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/X_logo.jpg" alt="Twitter"></a>
                        <a class="preview-linkedin" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145807.png" alt="LinkedIn"></a>
                        <a class="preview-instagram" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"></a>
                    </div>
                </div>
            </div>
            <button class="copy-button btn btn-primary" onclick="copySignature()">Copy</button>
            `;
        }
        else if (templateNumber === 2) {
            templateHTML = `
                <h3 class="preview">Signature Preview</h3> 
            <div class="signature-card">
                <div class="profile-pic">
                    <img class="preview-image" src="${uploadedImageSrc}" alt="Your Logo">
                </div>
                <div class="content">
                <div class="social-icons">
                        <a class="preview-facebook" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook"></a>
                        <a class="preview-twitter" href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/X_logo.jpg" alt="Twitter"></a>
                        <a class="preview-linkedin" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145807.png" alt="LinkedIn"></a>
                        <a class="preview-instagram" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"></a>
                    </div>
                    <p class="name preview-name">John Doe</p>
                    <p class="title preview-title">Sales & Marketing Director</p>
                    <p class="contact preview-company">Your Company</p>
                    <p class="contact preview-phone">📞 (800) 555-0299</p>
                    <p class="contact preview-mobile">📱 (800) 555-0199</p>
                    <p class="contact">✉️ <a class="preview-email" href="#">john.doe@example.com</a></p>
                    <p class="contact">🌍 <a class="preview-website" href="#">www.your-website.com</a></p>
                    <p class="contact preview-address">📍 My Company, Street, City, Zip Code, Country</p>
                    
                </div>
            </div>
            <button class="copy-button btn btn-primary" onclick="copySignature()">Copy</button>
            `;
        } else if (templateNumber === 3) {
            templateHTML = `
                <h3 class="preview">Signature Preview</h3> 
                <div class="signature-card">
                    <div class="content">
                        <p class="name preview-name">John Doe</p>
                        <p class="title preview-title">Sales & Marketing Director</p>
                        <p class="contact preview-company">Your Company</p>
                        <p class="contact preview-phone">📞 (800) 555-0299</p>
                        <p class="contact preview-mobile">📱 (800) 555-0199</p>
                        <p class="contact">✉️ <a class="preview-email" href="#">john.doe@example.com</a></p>
                        <p class="contact">🌍 <a class="preview-website" href="#">www.your-website.com</a></p>
                        <p class="contact preview-address">📍 My Company, Street, City, Zip Code, Country</p>
                        <div class="social-icons">
                            <a class="preview-facebook" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook"></a>
                            <a class="preview-twitter" href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/X_logo.jpg" alt="Twitter"></a>
                            <a class="preview-linkedin" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145807.png" alt="LinkedIn"></a>
                            <a class="preview-instagram" href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"></a>
                        </div>
                    </div>
                    <div class="profile-pic">
                        <img class="preview-image" src="${uploadedImageSrc}" alt="Your Logo">
                    </div>
                </div>
                <button class="copy-button btn btn-primary" onclick="copySignature()">Copy</button>
            `;
        }

        signatureContent.innerHTML = templateHTML;

        updateSignature(); 
    }
    document.addEventListener("DOMContentLoaded", function () {
        selectTemplate(1); 
    });


    function moveSlide(direction) {
        let container = document.querySelector('.templates-container');
        container.scrollLeft += direction * 160; 
    }
</script>


</body>
</html>
