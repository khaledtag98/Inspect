$("document").ready(function () {
    $(".tab-slider--body").hide();
    $(".tab-slider--body:first").show();
});
let currntTab = "tab1";
$(".tab-slider--nav li").click(function () {
    let activeTab = $(this).attr("rel");
    if (currntTab != activeTab ) {
        $(".tab-slider--body").hide();
    }
     $("#" + activeTab).fadeIn();
    if (activeTab == "tab2") {
        $('.tab-slider--tabs').addClass('slide');
    } else {
        $('.tab-slider--tabs').removeClass('slide');
    }
    $(".tab-slider--nav li").removeClass("active");
    $(this).addClass("active");
    currntTab = activeTab;
});
function handleChange() {
    if(document.getElementById('isCompany').checked) {
        $('#company-form').removeClass('hidden');
    }else{
        $('#company-form').addClass('hidden');
    }

}
