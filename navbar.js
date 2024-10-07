var roadmapListItem1 = document.getElementById("roadmapListItem1");
if (roadmapListItem1) {
roadmapListItem1.addEventListener("click", function (e) {
    window.location.href = "./roadmap.php";
});
}

var practiceListItem1 = document.getElementById("practiceListItem1");
if (practiceListItem1) {
practiceListItem1.addEventListener("click", function (e) {
    window.location.href = "practice.php";
});
}
var projectListItem1 = document.getElementById("projectListItem1");
      if (projectListItem1) {
        projectListItem1.addEventListener("click", function (e) {
          window.location.href = "project.php";
        });
      }
      var signin = document.getElementById("signin");
      if (signin) {
          signin.addEventListener("click", function (e) {
              e.preventDefault(); // Prevent the default action (if it's an anchor link)
              window.location.href = "signin.html"; // Redirect to signin.php in the same tab
          });
      }
      
var signup = document.getElementById("signup");
      if (signup) {
        signup.addEventListener("click", function (e) {
          window.location.href = "signup.html";
        });
      }
var lightLogo = document.getElementById("lightLogo");
if (lightLogo) {
lightLogo.addEventListener("click", function () {
    var anchor = document.querySelector("[data-scroll-to='hero']");
    if (anchor) {
    anchor.scrollIntoView({ block: "start", behavior: "smooth" });
    }
    window.location.href = "index.php";
});
}