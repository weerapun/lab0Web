CRUMINA.IsotopeSort=function(){$(".sorting-container").each(function(){var i=$(this),t=i.data("layout").length?i.data("layout"):"masonry";i.isotope({itemSelector:".sorting-item",layoutMode:t,percentPosition:!0}),i.imagesLoaded().progress(function(){i.isotope("layout")}),i.siblings(".sorting-menu").find("li").on("click",function(){if($(this).hasClass("active"))return!1;$(this).parent().find(".active").removeClass("active"),$(this).addClass("active");var t=$(this).data("filter");return void 0!==t?(i.isotope({filter:t}),!1):void 0})})},$(document).ready(function(){CRUMINA.IsotopeSort()});