    const nextBtnFirst = document.querySelector(".firstNext");
    const prevBtnSec = document.querySelector(".prev-1");
    const nextBtnSec = document.querySelector(".next-1");
    const prevBtnThird = document.querySelector(".prev-2");
    const submitBtn = document.querySelector("..next-2");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    const pages = document.querySelectorAll(".page");
    let current = 0;
    
    function showPage(index) {
        pages.forEach((page, pageIndex) => {
            if (pageIndex === index) {
                page.style.display = "block";
            } else {
                page.style.display = "none";
            }
        });
    }
    
    function updateProgress(step) {
        bullet.forEach((item, index) => {
            if (index < step) {
                item.classList.add("active");
                progressCheck[index].classList.add("active");
                progressText[index].classList.add("active");
            } else {
                item.classList.remove("active");
                progressCheck[index].classList.remove("active");
                progressText[index].classList.remove("active");
            }
        });
    }
    function validateFields() {
        const currentPageFields = pages[current].querySelectorAll("input[type='text'], input[type='email'], input[type='password'], input[type='file'], select,textarea");
        for (let i = 0; i < currentPageFields.length; i++) {
            if (!currentPageFields[i].value) {
                alert("Please fill in all fields.");
                return false;
            }
        }
    
        if (current === 0) {
            const passwordField = pages[current].querySelector("#pass");
            const confirmPasswordField = pages[current].querySelector("#repass");
            if (passwordField.value.length < 7 || confirmPasswordField.value.length < 7) {
                alert("Password must be at least 7 characters long.");
                return false;
            }
    
            if (passwordField.value !== confirmPasswordField.value) {
                alert("Passwords do not match.");
                return false;
            }
        }
        
        
        return true;
    }
    
    nextBtnFirst.addEventListener("click", function(event) {
        event.preventDefault();
        if (validateFields()) {

            current = 1;
            showPage(current);
            updateProgress(current);
        }
    });
    
    nextBtnSec.addEventListener("click", function(event) {
        event.preventDefault();
        if (validateFields()) {
        current = 2;
        showPage(current);
        updateProgress(current);
        }
    });
    
    submitBtn.addEventListener("click", function(event) {
        event.preventDefault();
        if (validateFields()) {
            alert("Your Form Successfully Signed up");
            // Navigate to auth.php
            window.location.href = "auth.php";
        }
    });

    prevBtnSec.addEventListener("click", function(event) {
        event.preventDefault();
        current = 0;
        showPage(current);
        updateProgress(current);
    });
    
    prevBtnThird.addEventListener("click", function(event) {
        event.preventDefault();
        current = 1;
        showPage(current);
        updateProgress(current);
    });
    
    

    window.onload = () => {
      // (A) GET ALL IMAGES
      let all = document.getElementsByClassName("zoomE");
     
      // (B) CLICK TO GO FULLSCREEN
      if (all.length>0) { for (let i of all) {
        i.onclick = () => {
          // (B1) EXIT FULLSCREEN
          if (document.fullscreenElement != null || document.webkitFullscreenElement != null) {
            if (document.exitFullscreen) { document.exitFullscreen(); }
            else { document.webkitCancelFullScreen(); }
          }
     
          // (B2) ENTER FULLSCREEN
          else {
            if (i.requestFullscreen) { i.requestFullscreen(); }
            else { i.webkitRequestFullScreen(); }
          }
        };
      }}
    };