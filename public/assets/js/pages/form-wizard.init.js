$(document).ready(function() {
    $("#basic-pills-wizard").bootstrapWizard({
        tabClass: "nav nav-pills nav-justified"
    });

    $("#progrss-wizard").bootstrapWizard({
        onTabShow: function (activeTab, navigation, currentIndex) {
            var progress = (currentIndex + 1) / navigation.find("li").length * 100;
            $("#progrss-wizard").find(".progress-bar").css({width: progress + "%"});
        }
    });
});

var triggerTabList = [].slice.call(document.querySelectorAll(".twitter-bs-wizard-nav .nav-link"));
triggerTabList.forEach(function(tab) {
    var tabTrigger = new bootstrap.Tab(tab);
    tab.addEventListener("click", function(event) {
        event.preventDefault();
        tabTrigger.show();
    });
});

