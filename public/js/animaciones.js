let semi_alto = $(window).height() - $(window).height() / 2.6; function animacionScroll() { let semi_scroll = $(window).scrollTop() + semi_alto; let objets_no_visibles = document.querySelectorAll(".no-visible"); objets_no_visibles.forEach((obj) => { if (semi_scroll > $(obj).offset().top) { $(obj).removeClass("no-visible"); $(obj).addClass("animandose"); setTimeout(() => { $(".animandose *").css("transition-delay", "0s"); $(obj).removeClass("animandose"); }, 2000); } }); } animacionScroll(); $(window).scroll(function () { animacionScroll(); }); function menu() { $(".menu-mobile").toggleClass("d-none"); } $(".menu-mobile a").click(function () { menu(); }); function modal(id_modal) { $("#" + id_modal).toggleClass("d-none"); } $(".modal").click(function () { if (!$(".modal-content").is(":hover")) { $(".modal:hover").toggleClass("d-none"); } });